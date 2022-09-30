<div class="setting-list">

    <div class="grid half">
        <div>
            <label class="setting-list-label">{{ trans('settings.role_details') }}</label>
        </div>
        <div>
            <div class="form-group">
                <label for="display_name">{{ trans('settings.role_name') }}</label>
                @include('form.text', ['name' => 'display_name', 'model' => $role])
            </div>
            <div class="form-group">
                <label for="description">{{ trans('settings.role_desc') }}</label>
                @include('form.text', ['name' => 'description', 'model' => $role])
            </div>
            <div class="form-group">
                @include('form.checkbox', ['name' => 'mfa_enforced', 'label' => trans('settings.role_mfa_enforced'), 'model' => $role ])
            </div>

            @if(in_array(config('auth.method'), ['ldap', 'saml2', 'oidc']))
                <div class="form-group">
                    <label for="name">{{ trans('settings.role_external_auth_id') }}</label>
                    @include('form.text', ['name' => 'external_auth_id', 'model' => $role])
                </div>
            @endif
        </div>
    </div>

    <div permissions-table>
        <label class="setting-list-label">{{ trans('settings.role_system') }}</label>
        <a href="#" permissions-table-toggle-all class="text-small text-primary">{{ trans('common.toggle_all') }}</a>

        <div class="toggle-switch-list grid half mt-m">
            <div>
                <div>@include('settings.roles.parts.checkbox', ['permission' => 'restrictions-manage-all', 'label' => trans('settings.role_manage_entity_permissions')])</div>
                <div>@include('settings.roles.parts.checkbox', ['permission' => 'restrictions-manage-own', 'label' => trans('settings.role_manage_own_entity_permissions')])</div>
                <div>@include('settings.roles.parts.checkbox', ['permission' => 'templates-manage', 'label' => trans('settings.role_manage_page_templates')])</div>
                <div>@include('settings.roles.parts.checkbox', ['permission' => 'access-api', 'label' => trans('settings.role_access_api')])</div>
                <div>@include('settings.roles.parts.checkbox', ['permission' => 'content-export', 'label' => trans('settings.role_export_content')])</div>
                <div>@include('settings.roles.parts.checkbox', ['permission' => 'editor-change', 'label' => trans('settings.role_editor_change')])</div>
            </div>
            <div>
                <div>@include('settings.roles.parts.checkbox', ['permission' => 'settings-manage', 'label' => trans('settings.role_manage_settings')])</div>
                <div>@include('settings.roles.parts.checkbox', ['permission' => 'users-manage', 'label' => trans('settings.role_manage_users')])</div>
                <div>@include('settings.roles.parts.checkbox', ['permission' => 'user-roles-manage', 'label' => trans('settings.role_manage_roles')])</div>
                <p class="text-warn text-small mt-s mb-none">{{ trans('settings.roles_system_warning') }}</p>
            </div>
        </div>
    </div>

    <div>
        <label class="setting-list-label">{{ trans('settings.role_asset') }}</label>
        <p>{{ trans('settings.role_asset_desc') }}</p>

        @if (isset($role) && $role->system_name === 'admin')
            <p class="text-warn">{{ trans('settings.role_asset_admins') }}</p>
        @endif

        <table permissions-table class="table toggle-switch-list compact permissions-table">
            <tr>
                <th width="20%">
                    <a href="#" permissions-table-toggle-all class="text-small text-primary">{{ trans('common.toggle_all') }}</a>
                </th>
                <th width="20%" permissions-table-toggle-all-in-column>{{ trans('common.create') }}</th>
                <th width="20%" permissions-table-toggle-all-in-column>{{ trans('common.view') }}</th>
                <th width="20%" permissions-table-toggle-all-in-column>{{ trans('common.edit') }}</th>
                <th width="20%" permissions-table-toggle-all-in-column>{{ trans('common.delete') }}</th>
            </tr>
            <tr>
                <td>
                    <div>{{ trans('entities.shelves') }}</div>
                    <a href="#" permissions-table-toggle-all-in-row class="text-small text-primary">{{ trans('common.toggle_all') }}</a>
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'bookshelf-create-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'bookshelf-view-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'bookshelf-view-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'bookshelf-update-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'bookshelf-update-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'bookshelf-delete-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'bookshelf-delete-all', 'label' => trans('settings.role_all')])
                </td>
            </tr>
            <tr>
                <td>
                    <div>{{ trans('entities.books') }}</div>
                    <a href="#" permissions-table-toggle-all-in-row class="text-small text-primary">{{ trans('common.toggle_all') }}</a>
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'book-create-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'book-view-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'book-view-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'book-update-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'book-update-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'book-delete-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'book-delete-all', 'label' => trans('settings.role_all')])
                </td>
            </tr>
            <tr>
                <td>
                    <div>{{ trans('entities.chapters') }}</div>
                    <a href="#" permissions-table-toggle-all-in-row class="text-small text-primary">{{ trans('common.toggle_all') }}</a>
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'chapter-create-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'chapter-create-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'chapter-view-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'chapter-view-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'chapter-update-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'chapter-update-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'chapter-delete-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'chapter-delete-all', 'label' => trans('settings.role_all')])
                </td>
            </tr>
            <tr>
                <td>
                    <div>{{ trans('entities.pages') }}</div>
                    <a href="#" permissions-table-toggle-all-in-row class="text-small text-primary">{{ trans('common.toggle_all') }}</a>
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'page-create-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'page-create-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'page-view-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'page-view-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'page-update-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'page-update-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'page-delete-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'page-delete-all', 'label' => trans('settings.role_all')])
                </td>
            </tr>
            <tr>
                <td>
                    <div>{{ trans('entities.images') }}</div>
                    <a href="#" permissions-table-toggle-all-in-row class="text-small text-primary">{{ trans('common.toggle_all') }}</a>
                </td>
                <td>@include('settings.roles.parts.checkbox', ['permission' => 'image-create-all', 'label' => ''])</td>
                <td style="line-height:1.2;"><small class="faded">{{ trans('settings.role_controlled_by_asset') }}<sup>1</sup></small></td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'image-update-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'image-update-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'image-delete-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'image-delete-all', 'label' => trans('settings.role_all')])
                </td>
            </tr>
            <tr>
                <td>
                    <div>{{ trans('entities.attachments') }}</div>
                    <a href="#" permissions-table-toggle-all-in-row class="text-small text-primary">{{ trans('common.toggle_all') }}</a>
                </td>
                <td>@include('settings.roles.parts.checkbox', ['permission' => 'attachment-create-all', 'label' => ''])</td>
                <td style="line-height:1.2;"><small class="faded">{{ trans('settings.role_controlled_by_asset') }}</small></td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'attachment-update-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'attachment-update-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'attachment-delete-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'attachment-delete-all', 'label' => trans('settings.role_all')])
                </td>
            </tr>
            <tr>
                <td>
                    <div>{{ trans('entities.comments') }}</div>
                    <a href="#" permissions-table-toggle-all-in-row class="text-small text-primary">{{ trans('common.toggle_all') }}</a>
                </td>
                <td>@include('settings.roles.parts.checkbox', ['permission' => 'comment-create-all', 'label' => ''])</td>
                <td style="line-height:1.2;"><small class="faded">{{ trans('settings.role_controlled_by_asset') }}</small></td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'comment-update-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'comment-update-all', 'label' => trans('settings.role_all')])
                </td>
                <td>
                    @include('settings.roles.parts.checkbox', ['permission' => 'comment-delete-own', 'label' => trans('settings.role_own')])
                    <br>
                    @include('settings.roles.parts.checkbox', ['permission' => 'comment-delete-all', 'label' => trans('settings.role_all')])
                </td>
            </tr>
        </table>

        <div>
            <p class="text-muted text-small px-m">
                <sup>1</sup> {{ trans('settings.role_asset_image_view_note') }}
            </p>
        </div>
    </div>
</div>