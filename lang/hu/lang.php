<?php

return [
    'auth' => [
        'title' => 'Adminisztrációs oldal',
    ],
    'field' => [
        'invalid_type' => 'A használt mezőtípus érvénytelen :type.',
        'options_method_not_exists' => 'A(z) :model modellosztálynak egy :method() metódus visszaadandó beállításait kell definiálnia a(z) ":field" űrlapmező számára.',
    ],
    'widget' => [
        'not_registered' => "Egy ':name' widgetosztálynév regisztrálása nem történt meg",
        'not_bound' => "Egy ':name' osztálynevű widget kötése nem történt meg a vezérlővel",
    ],
    'page' => [
        'untitled' => "Névtelen",
        'access_denied' => [
            'label' => "Hozzáférés megtagadva",
            'help' => "Ön nem rendelkezik a szükséges engedélyekkel ennek a lapnak a megtekintéséhez.",
            'cms_link' => "Vissza a kiszolgáló oldalra",
        ],
    ],
    'partial' => [
        'not_found' => "A(z) ':name' rézlap nem található.",
    ],
    'account' => [
        'sign_out' => 'Kijelentkezés',
        'login' => 'Belép',
        'reset' => 'Alaphelyzet',
        'restore' => 'Visszaállítás',
        'login_placeholder' => 'bejelentkezési név',
        'password_placeholder' => 'jelszó',
        'forgot_password' => "Elfelejtette a jelszavát?",
        'enter_email' => "Adja meg az e-mail címét",
        'enter_login' => "Adja meg a felhasználónevét",
        'email_placeholder' => "e-mail cím",
        'enter_new_password' => "Adjon meg egy új jelszót",
        'password_reset' => "Új jelszó kiadása",
        'restore_success' => "A jelszó visszaállítási utasításokat tartalmazó e-mail elküldésre került az e-mail címére.",
        'restore_error' => "Nem található felhasználó a ':login' értékű bejelentkezési névvel",
        'reset_success' => "A jelszó átállítása sikerült. Most már bejelentkezhet.",
        'reset_error' => "A megadott jelszó átállítási adatok érvénytelenek. Próbálja újra!",
        'reset_fail' => "Nem állítható vissza a jelszava!",
        'apply' => 'Alkalmaz',
        'cancel' => 'Mégse',
        'delete' => 'Törlés',
        'ok' => 'OK',
    ],
    'dashboard' => [
        'menu_label' => 'Irányítópult',
        'widget_label' => 'Widget',
        'widget_width' => 'Szélesség',
        'full_width' => 'teljes szélesség',
        'add_widget' => 'Widget hozzáadása',
        'widget_inspector_title' => 'Widgetkonfiguráció',
        'widget_inspector_description' => 'A jelentés widget konfigurálása',
        'widget_columns_label' => 'Szélesség :columns',
        'widget_columns_description' => 'A widget szélessége, egy 1 és 10 közti szám.',
        'widget_columns_error' => 'Adja meg a widget szélességét egy 1 és 10 közti számként.',
        'columns' => '{1} oszlop|[2,Inf] oszlop',
        'widget_new_row_label' => 'Új sor kényszerítése',
        'widget_new_row_description' => 'A widget új sorba helyezése.',
        'widget_title_label' => 'Widget címe',
        'widget_title_error' => 'A widget címének megadása kötelező.',
        'status' => [
            'widget_title_default' => 'Rendszer állapota',
            'online' => 'online',
            'update_available' => '{0} frissítés érhető el!|{1} frissítés érhető el!|[2,Inf] frissítés érhető el!',
        ]
    ],
    'user' => [
        'name' => 'Webhelygazda',
        'menu_label' => 'Webhelygazdák',
        'menu_description' => 'A kiszolgáló oldali webhelygazda felhasználók, csoportok és engedélyek kezelése.',
        'list_title' => 'Webhelygazdák kezelése',
        'new' => 'Új webhelygazda',
        'login' => "Bejelentkezési név",
        'first_name' => "Utónév",
        'last_name' => "Vezetéknév",
        'full_name' => "Teljes név",
        'email' => "E-mail cím",
        'groups' => "Csoportok",
        'groups_comment' => "Adja meg, hogy ez a felhasználó melyik csoportokba tartozik.",
        'avatar' => "Avatar",
        'password' => "Jelszó",
        'password_confirmation' => "Jelszó megerősítése",
        'superuser' => "Felügyelő",
        'superuser_comment' => "Jelölje be ezt a jelölőnégyzetet ezen személy összes területhez való hozzáférésének engedélyezéséhez.",
        'send_invite' => 'Meghívó küldése e-mailben',
        'send_invite_comment' => 'Ennek a jelölőnégyzetnek a használatával küldhető meghívó e-mailben',
        'delete_confirm' => 'Valóban törölni akarja ezt a webhelygazdát?',
        'return' => 'Vissza a webhelygazdák listájához',
        'allow' => 'Engedélyezés',
        'inherit' => 'Öröklés',
        'deny' => 'Tiltás',
        'group' => [
            'name' => 'Csoport',
            'name_field' => 'Név',
            'menu_label' => 'Csoportok',
            'list_title' => 'Csoportok kezelése',
            'new' => 'Új webhelygazda csoport',
            'delete_confirm' => 'Valóban törölni akarja ezt a webhelygazda csoportot?',
            'return' => 'Vissza a csoportlistához',
        ],
        'preferences' => [
            'not_authenticated' => 'Nincs olyan hitelesített felhasználó, aki számára betölthetők vagy menthetők a beállítások.'
        ]
    ],
    'list' => [
        'default_title' => 'Lista',
        'search_prompt' => 'Keresés...',
        'no_records' => 'Ebben a nézetben nincsenek rekordok.',
        'missing_model' => 'Nincs modell definiálva a(z) :class osztályban használt listaviselkedéshez.',
        'missing_column' => 'Nincsenek oszlopdefiníciók a(z) :columns oszlopok számára.',
        'missing_columns' => 'A(z) :class osztályban használt listának nincsenek definiált listaoszlopai.',
        'missing_definition' => "A listaviselkedés nem tartalmaz oszlopot a(z) ':field' mező számára.",
        'behavior_not_ready' => 'Nem történt meg a listaviselkedés inicializálása, ellenőrizze, hogy meghívta-e a(z) makeLists() függvényt a vezérlőben.',
        'invalid_column_datetime' => "A(z) ':column' oszlopérték nem DateTime objektum, hiányzik egy \$dates hivatkozás a Modellben?",
        'pagination' => 'Megjelenített rekordok: :from-:to / :total',
        'prev_page' => 'Előző lap',
        'next_page' => 'Következő lap',
        'loading' => 'Betöltés...',
        'setup_title' => 'Lista beállítása',
        'setup_help' => 'Jelölőnégyzetek használatával válassza ki azokat az oszlopokat, melyeket látni akar a listában. Az oszlopok pozícióját felfelé vagy lefelé húzással módosíthatja.',
        'records_per_page' => 'Rekordok laponként',
        'records_per_page_help' => 'Válassza ki a rekordok laponként megjelenítendő számát. Vegye figyelembe, hogy az egy lapon nagyszámú rekord csökkentheti a teljesítményt.'
    ],
    'fileupload' => [
        'attachment' => 'Csatolmány',
        'help' => 'Adja meg a csatolmány címét és leírását.',
        'title_label' => 'Cím',
        'description_label' => 'Leírás'
    ],
    'form' => [
        'create_title' => "Új :name",
        'update_title' => ":name szerkesztése",
        'preview_title' => ":name villámnézete",
        'create_success' => 'A(z) :name létrehozása sikerült',
        'update_success' => 'A(z) :name módosítása sikerült',
        'delete_success' => 'A(z) :name törlése sikerült',
        'missing_id' => "Nincs megadva az űrlaprekord azonosítója.",
        'missing_model' => 'A(z) :class osztályban használt űrlapviselkedésnek nincs definiált modellje.',
        'missing_definition' => "Az űrlapviselkedés nem tartalmaz mezőt a(z) ':field' mezőhöz.",
        'not_found' => 'A(z) :id azonosítójú űrlaprekord nem található.',
        'action_confirm' => "Biztos benne?",
        'create' => 'Létrehozás',
        'create_and_close' => 'Létrehozás és bezárás',
        'creating' => 'Létrehozás...',
        'creating_name' => 'A(z) :name létrehozása...',
        'save' => 'Mentés',
        'save_and_close' => 'Mentés és bezárás',
        'saving' => 'Mentés...',
        'saving_name' => 'A(z) :name mentése...',
        'delete' => 'Törlés',
        'deleting' => 'Törlés...',
        'deleting_name' => 'A(z) :name törlése...',
        'undefined_tab' => 'Egyebek',
        'field_off' => 'Ki',
        'field_on' => 'Be',
        'add' => 'Hozzáadás',
        'apply' => 'Alkalmaz',
        'cancel' => 'Mégse',
        'close' => 'Bezárás',
        'confirm' => 'Megerősítés',
        'reload' => 'Újratöltés',
        'ok' => 'OK',
        'or' => 'vagy',
        'confirm_tab_close' => 'Valóban be akarja zárni a fület? El fognak veszni a nem mentett módosítások.',
        'behavior_not_ready' => 'Nem történt meg az űrlapviselkedés inicializálása, ellenőrizze, hogy meghívta-e az initForm() függvényt a vezérlőben.',
        'preview_no_files_message' => 'A fájlok nincsenek feltöltve',
        'select' => 'Válasszon',
        'select_all' => 'mind',
        'select_none' => 'egyik sem',
        'select_placeholder' => 'válasszon',
        'insert_row' => 'Sor beszúrása',
        'delete_row' => 'Sor törlése',
        'concurrency_file_changed_title' => "A fájl megváltozott",
        'concurrency_file_changed_description' => "Az Ön által szerkesztett fájlt egy máik felhasználó módosította a lemezen. Vagy újratöltheti a fájlt, és elveszti a változtatásait, vagy felülbírálja a lemezen lévő fájlt.",
    ],
    'relation' => [
        'missing_definition' => "A relációviselkedés nem tartalmazza a(z) ':field' mező definícióját.",
        'missing_model' => "A(z) :class osztályban használt relációviselkedésnek nincs definiált modellje.",
        'invalid_action_single' => "Ez a művelet nem hajtható végre egyetlen kapcsolaton.",
        'invalid_action_multi' => "Ez a művelet nem hajtható végre több kapcsolaton.",
        'help' => "Kattintson egy elemre a hozzáadásához",
        'related_data' => "Kapcsolódó :name adatok",
        'add' => "Hozzáadás",
        'add_selected' => "Kijelöltek hozzáadása",
        'add_a_new' => "Új :name hozzáadása",
        'cancel' => "Mégse",
        'add_name' => ":name hozzáadása",
        'create' => "Létrehozás",
        'create_name' => ":name létrehozása",
        'update' => "Frissítés",
        'update_name' => "A(z) :name frissítése",
        'remove' => "Eltávolítás",
        'remove_name' => "A(z) :name eltávolítása",
        'delete' => "Törlés",
        'delete_name' => "A(z) :name törlése",
        'delete_confirm' => "Biztos benne?",
    ],
    'model' => [
        'name' => "Modell",
        'not_found' => "Nem található :id azonosítójú ':class' modell",
        'missing_id' => "Nincs azonosító megadva a modellrekord kereséséhez.",
        'missing_relation' => "A(z) ':class' modell nem tartalmaz definíciót a(z) ':relation' reláció számára.",
        'invalid_class' => "A(z) :class osztályban használt :model modell nem érvényes, örökölnie kell a \Model osztályt.",
        'mass_assignment_failed' => "A tömeges hozzárendelés a(z) ':attribute' modellattribútumhoz nem sikerült.",
    ],
    'warnings' => [
        'tips' => 'Rendszerkonfigurációs tippek',
        'tips_description' => 'Vannak olyan problémák, melyekre a rendszer megfelelő konfigurálása érdekében oda kell figyelnie.',
        'permissions'  => 'A(z) :name nevű könyvtár vagy alkönyvtárai a PHP számára nem írhatóak. Adjon megfelelő engedélyeket a webkiszolgálónak erre a könyvtárra.',
        'extension' => 'A(z) :name PHP-kiterjesztés nincs telepítve. Telepítse ezt a függvénytárat, és aktiválja a kiterjesztést.'
    ],
    'editor' => [
        'menu_label' => 'Kódszerkesztő beállításai',
        'menu_description' => 'A kódszerkesztő beállításainak, úgymint a betűméret és a színséma testreszabása.',
        'font_size' => 'Betűméret',
        'tab_size' => 'Tabulátor mérete',
        'use_hard_tabs' => 'Behúzás tabulátorokkal',
        'code_folding' => 'Kód összecsukása',
        'word_wrap' => 'Tördelés',
        'highlight_active_line' => 'Aktív sor kiemelése',
        'show_invisibles' => 'Láthatatlan karakterek megjelenítése',
        'show_gutter' => 'Margó megjelenítése',
        'theme' => 'Színséma',
    ],
    'tooltips' => [
        'preview_website' => 'A webhely megtekintése'
    ],
    'mysettings' => [
        'menu_label' => 'Beállításaim',
        'menu_description' => 'A felügyeleti fiókkal kapcsolatos beállítások',
    ],
    'myaccount' => [
        'menu_label' => 'Fiókom',
        'menu_description' => 'A fiókadatok, úgymint név, e-mail cím és jelszó frissítése.',
        'menu_keywords' => 'biztonságos bejelentkezés'
    ],
    'branding' => [
        'menu_label' => 'Kiszolgáló oldal testreszabása',
        'menu_description' => 'Az adminisztrációs oldal testreszabása, úgymint név, színek és embléma.',
    ],
    'backend_preferences' => [
        'menu_label' => 'Kiszolgáló oldal beállításai',
        'menu_description' => 'A saját fiókbeállítások, például a kívánt nyelv kezelése.',
        'locale' => 'Nyelv',
        'locale_comment' => 'Válassza ki a kívánt területi beállítást a nyelvhasználathoz.',
    ],
    'access_log' => [
        'hint' => 'Ez a napló a webhelygazdák sikeres bejelentkezési kísérleteinek listáját mutatja. A rekordokat :days napig őrzi meg a rendszer.',
        'menu_label' => 'Hozzáférési napló',
        'menu_description' => 'A kiszolgáló oldali felhasználók sikeres bejelentkezési listájának megtekintése.',
        'created_at' => 'Dátum és idő',
        'login' => 'Bejelentkezési név',
        'ip_address' => 'IP-cím',
        'first_name' => 'Utónév',
        'last_name' => 'Vezetéknév',
        'email' => 'E-mail cím',
    ],
    'filter' => [
      'all' => 'mind'
    ]
];
