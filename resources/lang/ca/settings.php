<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Configuració',
    'settings_save' => 'Desa la configuració',
    'settings_save_success' => 'S\'ha desat la configuració',
    'system_version' => 'System Version',
    'categories' => 'Categories',

    // App Settings
    'app_customization' => 'Personalització',
    'app_features_security' => 'Funcionalitats i seguretat',
    'app_name' => 'Nom de l\'aplicació',
    'app_name_desc' => 'Aquest nom es mostra a la capçalera i en tots els correus electrònics enviats pel sistema.',
    'app_name_header' => 'Mostra el nom a la capçalera',
    'app_public_access' => 'Accés públic',
    'app_public_access_desc' => 'Si activeu aquesta opció, es permetrà que els visitants que no hagin iniciat la sessió accedeixin al contingut de la vostra instància del BookStack.',
    'app_public_access_desc_guest' => 'Podeu controlar l\'accés dels visitants públics amb l\'usuari "Convidat".',
    'app_public_access_toggle' => 'Permet l\'accés públic',
    'app_public_viewing' => 'Voleu permetre la visualització pública?',
    'app_secure_images' => 'Pujades d\'imatges amb més seguretat',
    'app_secure_images_toggle' => 'Activa les pujades d\'imatges amb més seguretat',
    'app_secure_images_desc' => 'Per motius de rendiment, totes les imatges són públiques. Aquesta opció afegeix una cadena aleatòria i difícil d\'endevinar al davant dels URL d\'imatges. Assegureu-vos que els índexs de directoris no estiguin activats per a evitar-hi l\'accés de manera fàcil.',
    'app_default_editor' => 'Default Page Editor',
    'app_default_editor_desc' => 'Select which editor will be used by default when editing new pages. This can be overridden at a page level where permissions allow.',
    'app_custom_html' => 'Contingut personalitzat a la capçalera HTML',
    'app_custom_html_desc' => 'Aquí podeu afegir contingut que s\'inserirà a la part final de la secció <head> de cada pàgina. És útil per a sobreescriure estils o afegir-hi codi d\'analítiques.',
    'app_custom_html_disabled_notice' => 'El contingut personalitzat a la capçalera HTML es desactiva en aquesta pàgina de la configuració per a assegurar que qualsevol canvi que trenqui el web es pugui desfer.',
    'app_logo' => 'Logo de l\'aplicació',
    'app_logo_desc' => 'Aquesta imatge hauria de tenir 43 px d\'alçada. <br>Les imatges grosses es reduiran.',
    'app_primary_color' => 'Color primari de l\'aplicació',
    'app_primary_color_desc' => 'Defineix el color primari de l\'aplicació, incloent-hi la part superior, els botons i els enllaços.',
    'app_homepage' => 'Pàgina d\'inici de l\'aplicació',
    'app_homepage_desc' => 'Seleccioneu la visualització que es mostrarà a la pàgina d\'inici en lloc de la visualització per defecte. Els permisos de pàgines s\'ignoraran per a les pàgines seleccionades.',
    'app_homepage_select' => 'Selecciona una pàgina',
    'app_footer_links' => 'Enllaços al peu de pàgina',
    'app_footer_links_desc' => 'Afegiu enllaços que es mostraran al peu de pàgina del lloc. Es mostraran a la part inferior de la majoria de pàgines, incloent-hi les que no requereixen iniciar la sessió. Podeu utilitzar l\'etiqueta "trans::<clau>" per a fer servir traduccions definides pel sistema. Per exemple, si feu servir "trans::common.privacy_policy", es mostrarà el text traduït "Política de privadesa", i amb "trans::common.terms_of_service" es mostrarà el text traduït "Condicions del servei".',
    'app_footer_links_label' => 'Etiqueta de l\'enllaç',
    'app_footer_links_url' => 'URL de l\'enllaç',
    'app_footer_links_add' => 'Afegeix un enllaç al peu de pàgina',
    'app_disable_comments' => 'Desactiva els comentaris',
    'app_disable_comments_toggle' => 'Desactiva els comentaris',
    'app_disable_comments_desc' => 'Desactiva els comentaris a totes les pàgines de l\'aplicació. <br> Els comentaris existents no es mostraran.',

    // Color settings
    'content_colors' => 'Colors del contingut',
    'content_colors_desc' => 'Defineix els colors de tots els elements de la jerarquia d\'organització de pàgines. És recomanable triar colors amb una brillantor semblant als colors per defecte per a mantenir-ne la llegibilitat.',
    'bookshelf_color' => 'Color dels prestatges',
    'book_color' => 'Color dels llibres',
    'chapter_color' => 'Color dels capítols',
    'page_color' => 'Color de les pàgines',
    'page_draft_color' => 'Color dels esborranys de pàgines',

    // Registration Settings
    'reg_settings' => 'Registre',
    'reg_enable' => 'Activa el registre d\'usuaris',
    'reg_enable_toggle' => 'Activa el registre d\'usuaris',
    'reg_enable_desc' => 'Si els registres estan activats, els usuaris podran registrar-se ells mateixos com a usuaris de l\'aplicació. Un cop registrats, se\'ls assigna un únic rol d\'usuari per defecte.',
    'reg_default_role' => 'Rol d\'usuari per defecte en registrar-se',
    'reg_enable_external_warning' => 'L\'opció anterior s\'ignora quan hi ha activada l\'autenticació SAML o LDAP externa. Els comptes d\'usuari de membres inexistents es creada automàticament si l\'autenticació contra el sistema extern és satisfactòria.',
    'reg_email_confirmation' => 'Confirmació de correu electrònic',
    'reg_email_confirmation_toggle' => 'Requereix la confirmació per correu electrònic',
    'reg_confirm_email_desc' => 'Si s\'utilitza la restricció de dominis, serà obligatòria la confirmació per correu electrònic, i s\'ignorarà aquesta opció.',
    'reg_confirm_restrict_domain' => 'Restricció de dominis',
    'reg_confirm_restrict_domain_desc' => 'Introduïu una llista separada per comes de dominis de correu electrònic als quals voleu restringir els registres. S\'enviarà un correu electrònic als usuaris perquè confirmin la seva adreça abans de permetre\'ls interactuar amb l\'aplicació. <br> Tingueu en compte que els usuaris podran canviar les seves adreces electròniques després de registrar-se correctament.',
    'reg_confirm_restrict_domain_placeholder' => 'No hi ha cap restricció',

    // Maintenance settings
    'maint' => 'Manteniment',
    'maint_image_cleanup' => 'Neteja les imatges',
    'maint_image_cleanup_desc' => 'Escaneja el contingut de les pàgines i les revisions per a comprovar quines imatges i diagrames estan en ús actualment i quines imatges són redundants. Assegureu-vos de crear una còpia de seguretat completa de la base de dades i de les imatges abans d\'executar això.',
    'maint_delete_images_only_in_revisions' => 'Suprimeix també les imatges que només existeixin en revisions antigues de pàgines',
    'maint_image_cleanup_run' => 'Executa la neteja',
    'maint_image_cleanup_warning' => 'S\'han trobat :count imatges potencialment no utilitzades. Segur que voleu suprimir aquestes imatges?',
    'maint_image_cleanup_success' => 'S\'han trobat i suprimit :count imatges potencialment no utilitzades!',
    'maint_image_cleanup_nothing_found' => 'No s\'ha trobat cap imatge no utilitzada, i no s\'ha suprimit res!',
    'maint_send_test_email' => 'Envia un correu electrònic de prova',
    'maint_send_test_email_desc' => 'Envia un correu electrònic de prova a l\'adreça electrònica que hàgiu especificat al perfil.',
    'maint_send_test_email_run' => 'Envia el correu electrònic de prova',
    'maint_send_test_email_success' => 'S\'ha enviat el correu electrònic a :address',
    'maint_send_test_email_mail_subject' => 'Correu electrònic de prova',
    'maint_send_test_email_mail_greeting' => 'El lliurament de correus electrònics sembla que funciona!',
    'maint_send_test_email_mail_text' => 'Enhorabona! Com que heu rebut aquesta notificació per correu electrònic, la vostra configuració del correu electrònic sembla que està ben configurada.',
    'maint_recycle_bin_desc' => 'Els prestatges, llibres, capítols i pàgines eliminats s\'envien a la paperera de reciclatge perquè es puguin restaurar o suprimir de manera permanent. Pot ser que els elements més antics de la paperera de reciclatge se suprimeixin automàticament després d\'un temps, depenent de la configuració del sistema.',
    'maint_recycle_bin_open' => 'Obre la paperera de reciclatge',
    'maint_regen_references' => 'Regenerate References',
    'maint_regen_references_desc' => 'This action will rebuild the cross-item reference index within the database. This is usually handled automatically but this action can be useful to index old content or content added via unofficial methods.',
    'maint_regen_references_success' => 'Reference index has been regenerated!',
    'maint_timeout_command_note' => 'Note: This action can take time to run, which can lead to timeout issues in some web environments. As an alternative, this action be performed using a terminal command.',

    // Recycle Bin
    'recycle_bin' => 'Paperera de reciclatge',
    'recycle_bin_desc' => 'Aquí podeu restaurar els elements que hàgiu suprimit o triar suprimir-los del sistema de manera permanent. Aquesta llista no té cap filtre, al contrari que altres llistes d\'activitat similars en què es tenen en compte els filtres de permisos.',
    'recycle_bin_deleted_item' => 'Element suprimit',
    'recycle_bin_deleted_parent' => 'Parent',
    'recycle_bin_deleted_by' => 'Suprimit per',
    'recycle_bin_deleted_at' => 'Moment de la supressió',
    'recycle_bin_permanently_delete' => 'Suprimeix permanentment',
    'recycle_bin_restore' => 'Restaura',
    'recycle_bin_contents_empty' => 'La paperera de reciclatge és buida',
    'recycle_bin_empty' => 'Buida la paperera de reciclatge',
    'recycle_bin_empty_confirm' => 'Se suprimiran de manera permanent tots els elements de la paperera de reciclatge, incloent-hi el contingut dins de cada element. Segur que voleu buidar la paperera de reciclatge?',
    'recycle_bin_destroy_confirm' => 'Aquesta acció suprimirà del sistema de manera permanent aquest element, juntament amb tots els elements fills que es llisten a sota, i no podreu restaurar aquest contingut. Segur que voleu suprimir de manera permanent aquest element?',
    'recycle_bin_destroy_list' => 'Elements que es destruiran',
    'recycle_bin_restore_list' => 'Elements que es restauraran',
    'recycle_bin_restore_confirm' => 'Aquesta acció restaurarà l\'element suprimit, incloent-hi tots els elements fills, a la seva ubicació original. Si la ubicació original ha estat suprimida, i ara és a la paperera de reciclatge, caldrà que també en restaureu l\'element pare.',
    'recycle_bin_restore_deleted_parent' => 'El pare d\'aquest element també ha estat suprimit. L\'element es mantindrà suprimit fins que el pare també es restauri.',
    'recycle_bin_restore_parent' => 'Restore Parent',
    'recycle_bin_destroy_notification' => 'S\'han suprimit :count elements en total de la paperera de reciclatge.',
    'recycle_bin_restore_notification' => 'S\'han restaurat :count elements en total de la paperera de reciclatge.',

    // Audit Log
    'audit' => 'Registre d\'auditoria',
    'audit_desc' => 'Aquest registre d\'auditoria mostra una llista d\'activitats registrades al sistema. Aquesta llista no té cap filtre, al contrari que altres llistes d\'activitat similars en què es tenen en compte els filtres de permisos.',
    'audit_event_filter' => 'Filtre d\'esdeveniments',
    'audit_event_filter_no_filter' => 'Sense filtre',
    'audit_deleted_item' => 'Element suprimit',
    'audit_deleted_item_name' => 'Nom: :name',
    'audit_table_user' => 'Usuari',
    'audit_table_event' => 'Esdeveniment',
    'audit_table_related' => 'Element relacionat o detall',
    'audit_table_ip' => 'IP Address',
    'audit_table_date' => 'Data de l\'activitat',
    'audit_date_from' => 'Rang de dates a partir de',
    'audit_date_to' => 'Rang de rates fins a',

    // Role Settings
    'roles' => 'Rols',
    'role_user_roles' => 'Rols d\'usuari',
    'role_create' => 'Crea un rol nou',
    'role_create_success' => 'Rol creat correctament',
    'role_delete' => 'Suprimeix el rol',
    'role_delete_confirm' => 'Se suprimirà el rol amb el nom \':roleName\'.',
    'role_delete_users_assigned' => 'Aquest rol té :userCount usuaris assignats. Si voleu migrar els usuaris d\'aquest rol, seleccioneu un rol nou a continuació.',
    'role_delete_no_migration' => "No migris els usuaris",
    'role_delete_sure' => 'Segur que voleu suprimir aquest rol?',
    'role_delete_success' => 'Rol suprimit correctament',
    'role_edit' => 'Edita el rol',
    'role_details' => 'Detalls del rol',
    'role_name' => 'Nom del rol',
    'role_desc' => 'Descripció curta del rol',
    'role_mfa_enforced' => 'Requires Multi-Factor Authentication',
    'role_external_auth_id' => 'Identificadors d\'autenticació externa',
    'role_system' => 'Permisos del sistema',
    'role_manage_users' => 'Gestiona usuaris',
    'role_manage_roles' => 'Gestiona rols i permisos de rols',
    'role_manage_entity_permissions' => 'Gestiona els permisos de tots els llibres, capítols i pàgines',
    'role_manage_own_entity_permissions' => 'Gestiona els permisos dels llibres, capítols i pàgines propis',
    'role_manage_page_templates' => 'Gestiona les plantilles de pàgines',
    'role_access_api' => 'Accedeix a l\'API del sistema',
    'role_manage_settings' => 'Gestiona la configuració de l\'aplicació',
    'role_export_content' => 'Export content',
    'role_editor_change' => 'Change page editor',
    'role_asset' => 'Permisos de recursos',
    'roles_system_warning' => 'Tingueu en compte que l\'accés a qualsevol dels tres permisos de dalt pot permetre que un usuari alteri els seus propis permisos o els privilegis d\'altres usuaris del sistema. Assigneu rols amb aquests permisos només a usuaris de confiança.',
    'role_asset_desc' => 'Aquests permisos controlen l\'accés per defecte als recursos del sistema. Els permisos de llibres, capítols i pàgines tindran més importància que aquests permisos.',
    'role_asset_admins' => 'Els administradors tenen accés automàticament a tot el contingut, però aquestes opcions poden mostrar o amagar opcions de la interfície d\'usuari.',
    'role_asset_image_view_note' => 'This relates to visibility within the image manager. Actual access of uploaded image files will be dependant upon system image storage option.',
    'role_all' => 'Tot',
    'role_own' => 'Propi',
    'role_controlled_by_asset' => 'Controlat pel recurs en què es pugen',
    'role_save' => 'Desa el rol',
    'role_update_success' => 'Rol actualitzat correctament',
    'role_users' => 'Usuaris amb aquest rol',
    'role_users_none' => 'Ara mateix no hi ha cap usuari assignat a aquest rol',

    // Users
    'users' => 'Usuaris',
    'user_profile' => 'Perfil de l\'usuari',
    'users_add_new' => 'Afegeix un usuari nou',
    'users_search' => 'Cerca usuaris',
    'users_latest_activity' => 'Darrera activitat',
    'users_details' => 'Detalls de l\'usuari',
    'users_details_desc' => 'Definiu un nom públic i una adreça electrònica per a aquest usuari. L\'adreça electrònica es farà servir per a iniciar la sessió a l\'aplicació.',
    'users_details_desc_no_email' => 'Definiu un nom públic per a aquest usuari perquè els altres el puguin reconèixer.',
    'users_role' => 'Rols de l\'usuari',
    'users_role_desc' => 'Seleccioneu a quins rols s\'assignarà l\'usuari. Si un usuari s\'assigna a múltiples rols, els permisos dels rols s\'acumularan i l\'usuari rebrà tots els permisos dels rols assignats.',
    'users_password' => 'Contrasenya de l\'usuari',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 8 characters long.',
    'users_send_invite_text' => 'Podeu elegir enviar un correu d\'invitació a aquest usuari, la qual cosa li permetrà definir la seva contrasenya, o podeu definir-li una contrasenya vós.',
    'users_send_invite_option' => 'Envia un correu d\'invitació a l\'usuari',
    'users_external_auth_id' => 'Identificador d\'autenticació extern',
    'users_external_auth_id_desc' => 'Aquest és l\'identificador que s\'utilitza per a enllaçar aquest usuari en comunicar amb el sistema d\'autenticació extern.',
    'users_password_warning' => 'Ompliu-ho només si voleu canviar la vostra contrasenya.',
    'users_system_public' => 'Aquest usuari representa qualsevol usuari convidat que visita la vostra instància. No es pot fer servir per a iniciar la sessió però s\'assigna automàticament.',
    'users_delete' => 'Suprimeix l\'usuari',
    'users_delete_named' => 'Suprimeix l\'usuari :userName',
    'users_delete_warning' => 'Se suprimirà completament del sistema l\'usuari amb el nom \':userName\'.',
    'users_delete_confirm' => 'Segur que voleu suprimir aquest usuari?',
    'users_migrate_ownership' => 'Migra l\'autoria',
    'users_migrate_ownership_desc' => 'Seleccioneu un usuari si voleu que un altre usuari esdevingui el propietari de tots els elements que ara són propietat d\'aquest usuari.',
    'users_none_selected' => 'No hi ha cap usuari seleccionat',
    'users_edit' => 'Edita l\'usuari',
    'users_edit_profile' => 'Edita el perfil',
    'users_avatar' => 'Avatar de l\'usuari',
    'users_avatar_desc' => 'Seleccioneu una imatge que representi aquest usuari. Hauria de ser un quadrat d\'aproximadament 256 px.',
    'users_preferred_language' => 'Llengua preferida',
    'users_preferred_language_desc' => 'Aquesta opció canviarà la llengua utilitzada a la interfície d\'usuari de l\'aplicació. No afectarà el contingut creat pels usuaris.',
    'users_social_accounts' => 'Comptes socials',
    'users_social_accounts_info' => 'Aquí podeu connectar altres comptes per a un inici de sessió més ràpid i còmode. Si desconnecteu un compte aquí, no en revoqueu l\'accés d\'autorització donat amb anterioritat. Revoqueu-hi l\'accés a la configuració del perfil del compte social que hàgiu connectat.',
    'users_social_connect' => 'Connecta un compte',
    'users_social_disconnect' => 'Desconnecta el compte',
    'users_social_connected' => 'El compte de :socialAccount s\'ha associat correctament al vostre perfil.',
    'users_social_disconnected' => 'El compte de :socialAccount s\'ha desassociat correctament del vostre perfil.',
    'users_api_tokens' => 'Testimonis d\'API',
    'users_api_tokens_none' => 'No s\'ha creat cap testimoni d\'API per a aquest usuari',
    'users_api_tokens_create' => 'Crea un testimoni',
    'users_api_tokens_expires' => 'Caducitat',
    'users_api_tokens_docs' => 'Documentació de l\'API',
    'users_mfa' => 'Multi-Factor Authentication',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'Crea un testimoni d\'API',
    'user_api_token_name' => 'Nom',
    'user_api_token_name_desc' => 'Poseu un nom llegible al vostre testimoni com a recordatori futur del propòsit al qual el voleu destinar.',
    'user_api_token_expiry' => 'Data de caducitat',
    'user_api_token_expiry_desc' => 'Definiu una data en què aquest testimoni caducarà. Després d\'aquesta data, les peticions fetes amb aquest testimoni deixaran de funcionar. Si deixeu aquest camp en blanc, es definirà una caducitat d\'aquí a 100 anys..',
    'user_api_token_create_secret_message' => 'Just després de crear aquest testimoni, es generaran i es mostraran un "Identificador del testimoni" i un "Secret del testimoni". El secret només es mostrarà una única vegada, assegureu-vos de copiar-lo a un lloc segur abans de continuar.',
    'user_api_token_create_success' => 'Testimoni d\'API creat correctament',
    'user_api_token_update_success' => 'Testimoni d\'API actualitzat correctament',
    'user_api_token' => 'Testimoni d\'API',
    'user_api_token_id' => 'Identificador del testimoni',
    'user_api_token_id_desc' => 'Aquest identificador és generat pel sistema per a aquest testimoni i no és editable, caldrà que el proporcioneu a les peticions a l\'API.',
    'user_api_token_secret' => 'Secret del testimoni',
    'user_api_token_secret_desc' => 'Aquest secret és generat pel sistema per a aquest testimoni, caldrà que el proporcioneu a les peticions a l\'API. Només es mostrarà aquesta única vegada, assegureu-vos de copiar-lo a un lloc segur.',
    'user_api_token_created' => 'Testimoni creat :timeAgo',
    'user_api_token_updated' => 'Testimoni actualitzat :timeAgo',
    'user_api_token_delete' => 'Suprimeix el testimoni',
    'user_api_token_delete_warning' => 'Se suprimirà completament del sistema aquest testimoni d\'API amb el nom \':tokenName\'.',
    'user_api_token_delete_confirm' => 'Segur que voleu suprimir aquest testimoni d\'API?',
    'user_api_token_delete_success' => 'Testimoni d\'API suprimit correctament',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_create' => 'Create New Webhook',
    'webhooks_none_created' => 'No webhooks have yet been created.',
    'webhooks_edit' => 'Edit Webhook',
    'webhooks_save' => 'Save Webhook',
    'webhooks_details' => 'Webhook Details',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook Events',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'All system events',
    'webhooks_name' => 'Webhook Name',
    'webhooks_timeout' => 'Webhook Request Timeout (Seconds)',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Active',
    'webhook_events_table_header' => 'Events',
    'webhooks_delete' => 'Delete Webhook',
    'webhooks_delete_warning' => 'This will fully delete this webhook, with the name \':webhookName\', from the system.',
    'webhooks_delete_confirm' => 'Are you sure you want to delete this webhook?',
    'webhooks_format_example' => 'Webhook Format Example',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',
    'webhooks_status' => 'Webhook Status',
    'webhooks_last_called' => 'Last Called:',
    'webhooks_last_errored' => 'Last Errored:',
    'webhooks_last_error_message' => 'Last Error Message:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
