<?php

namespace Tests\Entity;

use BookStack\Activity\ActivityType;
use BookStack\Activity\Models\Comment;
use BookStack\Entities\Models\Page;
use Tests\TestCase;

class CommentTest extends TestCase
{
    public function test_add_comment()
    {
        $this->asAdmin();
        $page = $this->entities->page();

        $comment = Comment::factory()->make(['parent_id' => 2]);
        $resp = $this->postJson("/comment/$page->id", $comment->getAttributes());

        $resp->assertStatus(200);
        $resp->assertSee($comment->text);

        $pageResp = $this->get($page->getUrl());
        $pageResp->assertSee($comment->text);

        $this->assertDatabaseHas('comments', [
            'local_id'    => 1,
            'entity_id'   => $page->id,
            'entity_type' => Page::newModelInstance()->getMorphClass(),
            'text'        => $comment->text,
            'parent_id'   => 2,
        ]);

        $this->assertActivityExists(ActivityType::COMMENT_CREATE);
    }

    public function test_comment_edit()
    {
        $this->asAdmin();
        $page = $this->entities->page();

        $comment = Comment::factory()->make();
        $this->postJson("/comment/$page->id", $comment->getAttributes());

        $comment = $page->comments()->first();
        $newText = 'updated text content';
        $resp = $this->putJson("/comment/$comment->id", [
            'text' => $newText,
        ]);

        $resp->assertStatus(200);
        $resp->assertSee($newText);
        $resp->assertDontSee($comment->text);

        $this->assertDatabaseHas('comments', [
            'text'      => $newText,
            'entity_id' => $page->id,
        ]);

        $this->assertActivityExists(ActivityType::COMMENT_UPDATE);
    }

    public function test_comment_delete()
    {
        $this->asAdmin();
        $page = $this->entities->page();

        $comment = Comment::factory()->make();
        $this->postJson("/comment/$page->id", $comment->getAttributes());

        $comment = $page->comments()->first();

        $resp = $this->delete("/comment/$comment->id");
        $resp->assertStatus(200);

        $this->assertDatabaseMissing('comments', [
            'id' => $comment->id,
        ]);

        $this->assertActivityExists(ActivityType::COMMENT_DELETE);
    }

    public function test_comments_converts_markdown_input_to_html()
    {
        $page = $this->entities->page();
        $this->asAdmin()->postJson("/comment/$page->id", [
            'text' => '# My Title',
        ]);

        $this->assertDatabaseHas('comments', [
            'entity_id'   => $page->id,
            'entity_type' => $page->getMorphClass(),
            'text'        => '# My Title',
            'html'        => "<h1>My Title</h1>\n",
        ]);

        $pageView = $this->get($page->getUrl());
        $pageView->assertSee('<h1>My Title</h1>', false);
    }

    public function test_html_cannot_be_injected_via_comment_content()
    {
        $this->asAdmin();
        $page = $this->entities->page();

        $script = '<script>const a = "script";</script>\n\n# sometextinthecomment';
        $this->postJson("/comment/$page->id", [
            'text' => $script,
        ]);

        $pageView = $this->get($page->getUrl());
        $pageView->assertDontSee($script, false);
        $pageView->assertSee('sometextinthecomment');

        $comment = $page->comments()->first();
        $this->putJson("/comment/$comment->id", [
            'text' => $script . 'updated',
        ]);

        $pageView = $this->get($page->getUrl());
        $pageView->assertDontSee($script, false);
        $pageView->assertSee('sometextinthecommentupdated');
    }

    public function test_reply_comments_are_nested()
    {
        $this->asAdmin();
        $page = $this->entities->page();

        $this->postJson("/comment/$page->id", ['text' => 'My new comment']);
        $this->postJson("/comment/$page->id", ['text' => 'My new comment']);

        $respHtml = $this->withHtml($this->get($page->getUrl()));
        $respHtml->assertElementCount('.comment-branch', 3);
        $respHtml->assertElementNotExists('.comment-branch .comment-branch');

        $comment = $page->comments()->first();
        $resp = $this->postJson("/comment/$page->id", ['text' => 'My nested comment', 'parent_id' => $comment->local_id]);
        $resp->assertStatus(200);

        $respHtml = $this->withHtml($this->get($page->getUrl()));
        $respHtml->assertElementCount('.comment-branch', 4);
        $respHtml->assertElementContains('.comment-branch .comment-branch', 'My nested comment');
    }

    public function test_comments_are_visible_in_the_page_editor()
    {
        $page = $this->entities->page();

        $this->asAdmin()->postJson("/comment/$page->id", ['text' => 'My great comment to see in the editor']);

        $respHtml = $this->withHtml($this->get($page->getUrl('/edit')));
        $respHtml->assertElementContains('.comment-box .content', 'My great comment to see in the editor');
    }

    public function test_comment_creator_name_truncated()
    {
        [$longNamedUser] = $this->users->newUserWithRole(['name' => 'Wolfeschlegelsteinhausenbergerdorff'], ['comment-create-all', 'page-view-all']);
        $page = $this->entities->page();

        $comment = Comment::factory()->make();
        $this->actingAs($longNamedUser)->postJson("/comment/$page->id", $comment->getAttributes());

        $pageResp = $this->asAdmin()->get($page->getUrl());
        $pageResp->assertSee('Wolfeschlegels…');
    }
}
