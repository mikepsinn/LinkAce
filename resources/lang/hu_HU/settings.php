<?php
return [
    'settings' => 'Beállítások',
    'user_settings' => 'Felhasználói beállítások',
    'account_settings' => 'Fiókbeállítások',
    'app_settings' => 'Alkalmazásbeállítások',
    'system_settings' => 'Rendszerbeállítások',
    'guest_settings' => 'Vendégekre vonatkozó beállítások',

    'language' => 'Nyelv',
    'timezone' => 'Időzóna',
    'date_format' => 'Dátumformátum',
    'time_format' => 'Időformátum',
    'listitem_count' => 'Elemek száma a listákban',

    'links_new_tab' => 'Külső hivatkozások megnyitása új lapon',

    'markdown_for_text' => 'Markdown engedélyezése a leírásokhoz és jegyzetekhez',

    'privacy' => 'Adatvédelem',
    'links_private_default' => 'Privát hivatkozások alapértelmezés szerint',
    'links_private_default_help' => 'Ennek engedélyezése alapértelmezés szerint minden új hivatkozást priváttá tesz',
    'notes_private_default' => 'Privát jegyzetek alapértelmezés szerint',
    'notes_private_default_help' => 'Ennek engedélyezése alapértelmezés szerint minden új jegyzetet priváttá tesz',
    'tags_private_default' => 'Privát címkék alapértelmezés szerint',
    'tags_private_default_help' => 'Ennek engedélyezése alapértelmezés szerint minden új címkét priváttá tesz',
    'lists_private_default' => 'Privát listák alapértelmezés szerint',
    'lists_private_default_help' => 'Ennek engedélyezése alapértelmezés szerint minden új listát priváttá tesz',

    'archive_backups' => 'Wayback Machine biztonsági mentések',
    'archive_backups_help' => 'Ha ez engedélyezve van, LinkAce jelzi a <a href="https://archive.org/">Wayback Machine</a>-nek, hogy készítsen biztonsági másolatot a hivatkozásairól. A Wayback Machine-t az Internet Archive, egy nonprofit szervezet működteti. Kérjük, vegye fontolóra, hogy <a href="https://archive.org/donate/">adományozzon az Internet Archive-nak</a>.',
    'archive_backups_enabled' => 'Biztonsági mentések engedélyezése',
    'archive_backups_enabled_help' => 'Ha ez engedélyezve van, a nem privát hivatkozásokat az Internet Archive menti.',
    'archive_private_backups_enabled' => 'Biztonsági mentések engedélyezése a privát hivatkozásokhoz',
    'archive_private_backups_enabled_help' => 'Ha engedélyezve van, a privát hivatkozások is lesznek mentve. A biztonsági mentéseket engedélyezni kell.',

    'display_mode' => 'Hivatkozások megjelenítése:',
    'display_mode_list_detailed' => 'lista sok részlettel',
    'display_mode_list_simple' => 'lista kevés részlettel',
    'display_mode_cards' => 'kártyák kevesebb részlettel',

    'sharing' => 'Hivatkozás megosztása',
    'sharing_help' => 'Engedélyezzen minden olyan szolgáltatást, amelyet meg szeretne jeleníteni a hivatkozásokhoz, hogy könnyen, egyetlen kattintással megoszthassa azokat.',
    'sharing_toggle' => 'Minden váltása ki/be',

    'darkmode' => 'Sötét mód',
    'darkmode_help' => 'A készülék beállításaitól függően választhat, hogy állandóan vagy automatikusan kapcsolja be. (<small><a href="https://caniuse.com/#search=prefers-color-scheme">Itt</a>ellenőrizheti, hogy böngészője támogatja-e az automatikus felismerést</small>)',
    'darkmode_disabled' => 'Letiltva',
    'darkmode_auto' => 'Automatikusan',
    'darkmode_permanent' => 'Állandó',

    'save_settings' => 'Beállítások mentése',
    'settings_saved' => 'A beállítások frissítése sikerült!',

    'bookmarklet' => 'Kisalkalmazás könyvjelző',
    'bookmarklet_button' => 'Húzza ezt a könyvjelzők közé, vagy kattintson rá a jobb gombbal, és mentse el könyvjelzőként',
    'bookmarklet_help' => 'Adja hozzá ezt a kisalkalmazás könyvjelzőt a böngészőjéhez, hogy gyorsan hozzáadhassa az Ön által látogatott webhelyek hivatkozásait anélkül, hogy manuálisan meg kellene nyitnia LinkAce-t.',

    'change_password' => 'Jelszó módosítása',
    'old_password' => 'Régi jelszó',
    'new_password' => 'Új jelszó',
    'new_password2' => 'Új jelszó ismét',
    'password_updated' => 'A jelszó sikeresen módosítva lett!',
    'old_password_invalid' => 'A régi jelszó nem érvényes!',

    'two_factor_auth' => 'Kétfaktoros hitelesítés',
    'two_factor_enable' => 'Kétfaktoros hitelesítés engedélyezése',
    'two_factor_disable' => 'Kétfaktoros hitelesítés letiltása',
    'two_factor_setup_app' => 'A kétfaktoros hitelesítés engedélyezve van. Kérjük, konfigurálja most hitelesítési eszközét az alábbi QR-kód beolvasásával.',
    'two_factor_setup_url' => 'Nem működik a QR-kód? Ezt az URL-t közvetlenül is használhatja.',
    'two_factor_recovery_codes' => 'Tárolja ezeket a helyreállítási kódokat egy biztonságos jelszókezelőben. Ezek segítségével helyreállíthatja a fiókjához való hozzáférést, ha a kétfaktoros hitelesítési eszköz elveszik.',
    'two_factor_recovery_codes_view' => 'Helyreállítási kódok megjelenítése',
    'two_factor_regenerate_recovery_codes' => 'Új helyreállítási kódok generálása',

    'api_token' => 'API-jogkivonat',
    'api_token_generate' => 'Azonosító létrehozása',
    'api_token_generate_confirm' => 'Tényleg új azonosítót szeretne létrehozni?',
    'api_token_help' => 'Az API-jogkivonat használható a LinkAce eléréséhez más alkalmazásokból vagy szkriptekből.',
    'api_token_generate_info' => 'Figyelmeztetés: Ha már rendelkezik API-jogkivonattal, egy új generálása megszakítja az összes meglévő integrációt!',
    'api_token_generate_failure' => 'Nem sikerült új API-jogkivonat generálni. Kérjük, ellenőrizze a böngészőkonzolt és az alkalmazásnaplókat további információkért.',

    'sys_page_title' => 'Oldalcím',
    'sys_guest_access' => 'Vendéghozzáférés engedélyezése',
    'sys_guest_access_help' => 'Ha ez engedélyezve van, a vendég láthatja az összes olyan hivatkozást, amely nem privát.',

    'cron_token' => 'CRON-jogkivonat',
    'cron_token_generate' => 'Azonosító létrehozása',
    'cron_token_generate_confirm' => 'Tényleg új azonosítót szeretne létrehozni?',
    'cron_token_help' => 'A CRON-jogkivonatra a CRON-szolgáltatás futtatásához van szükség, amely ellenőrzi a halott hivatkozásokat vagy a folyamatban lévő biztonsági mentéseket.',
    'cron_token_url' => 'Irányítsa a CRON-ját a következő URL-re: <span class="cron-token-url">:route</span>',
    'cron_token_generate_info' => 'Figyelmeztetés: Ha már rendelkezik CRON-jogkivonattal, egy új generálása megszakítja az összes meglévő CRON-feladatot!',
    'cron_token_generate_failure' => 'Nem sikerült új CRON-jogkivonat generálni. Kérjük, ellenőrizze a böngészőkonzolt és az alkalmazásnaplókat további információkért.',
    'cron_token_auth_failure' => 'A megadott CRON-jogkivonat érvénytelen',
    'cron_execute_successful' => 'CRON sikeresen végrehajtva',

    'update_check' => 'Frissítés ellenőrzése',
    'update_check_running' => 'Frissítések keresése folyamatban...',
    'update_check_version_found' => 'Frissítés találva. #VERSION# verzió érhető el.',
    'update_check_success' => 'Nincs frissítés.',
    'update_check_failed' => 'Nem sikerült ellenőrizni a frissítéseket.',

    'guest_settings_info' => 'A következő beállítások a webhelyét látogató vendégekre vonatkoznak, ha a vendéghozzáférés engedélyezve van.',
];
