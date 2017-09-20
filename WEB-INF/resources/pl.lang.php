<?php
// +----------------------------------------------------------------------+
// | Anuko Time Tracker
// +----------------------------------------------------------------------+
// | Copyright (c) Anuko International Ltd. (http://www.anuko.com)
// +----------------------------------------------------------------------+
// | LIBERAL FREEWARE LICENSE: This source code document may be used
// | by anyone for any purpose, and freely redistributed alone or in
// | combination with other software, provided that the license is obeyed.
// |
// | There are only two ways to violate the license:
// |
// | 1. To redistribute this code in source form, with the copyright
// |    notice or license removed or altered. (Distributing in compiled
// |    forms without embedded copyright notices is permitted).
// |
// | 2. To redistribute modified versions of this code in *any* form
// |    that bears insufficient indications that the modifications are
// |    not the work of the original author(s).
// |
// | This license applies to this document only, not any other software
// | that it may be combined with.
// |
// +----------------------------------------------------------------------+
// | Contributors:
// | http://www.anuko.com/time_tracker/credits.htm
// +----------------------------------------------------------------------+

// Note: escape apostrophes with THREE backslashes, like here:  choisir l\\\'option 
// Other characters (such as double-quotes in http links, etc.) do not have to be escaped.

$i18n_language = 'Polski';
$i18n_months = array('styczeń', 'luty', 'marzec', 'kwiecień', 'maj', 'czerwiec', 'lipiec', 'sierpień', 'wrzesień', 'październik', 'listopad', 'grudzień');
$i18n_weekdays = array('niedziela', 'poniedziałek', 'wtorek', 'środa', 'czwartek', 'piątek', 'sobota');
$i18n_weekdays_short = array('nd', 'pon', 'wt', 'śr', 'czw', 'pt', 'sob');
// format mm/dd
$i18n_holidays = array('01/01', '04/12', '04/13', '05/01', '05/03', '05/31', '06/11', '08/15', '11/01', '11/11', '12/25', '12/26');

$i18n_key_words = array(

// menu entries
'menu.login' => 'login',
'menu.logout' => 'logout',
'menu.feedback' => 'informacja zwrotna',
'menu.help' => 'pomoc',
// Note to translators: menu.create_team a more accurate translation.
'menu.create_team' => 'utwórz nowe konto zarządzające',
'menu.edit_profile' => 'edytuj profil',
'menu.my_time' => 'mój czas',
'menu.reports' => 'raporty',
// Note to translators: menu.charts needs to be translated.
// 'menu.charts' => 'charts',
'menu.projects' => 'projekty',
'menu.activities' => 'zadania',
'menu.people' => 'osoby',
'menu.teams' => 'zespoły',
'menu.export' => 'eksport',
'menu.clients' => 'klienci',
'menu.options' => 'opcje',
'menu.admin' => 'admin',

// error strings
'error.db' => 'błąd bazy danych',
'error.field' => 'niepoprawne dane: "{0}"',
'error.empty' => 'pole "{0}" jest puste',
'error.not_equal' => 'pole "{0}" nie jest takie jak pole "{1}"',
'error.interval' => 'niepoprawny przedział',
'error.project' => 'wybierz projekt',
'error.activity' => 'wybierz zadanie',
'error.auth' => 'niepoprawny login lub hasło',
// Note to translators: this string needs to be translated.
// 'error.user_exists' => 'user with this login already exists',
'error.project_exists' => 'istnieje już porjket o takiej nazwie',
'error.activity_exists' => 'zadanie o takiej nazwie już istnieje',
// TODO: translate error.client_exists.
// 'error.client_exists' => 'client with this name already exists',
// Note to translators: this string needs to be properly translated (e-mail replaced with login).
// 'error.no_login' => 'nie ma użytkownika o takim adresie e-mail',
'error.upload' => 'błąd podczas wgrywania pliku',
// Note to translators: the strings below are missing and must be added and translated 
// 'error.period_locked' => 'can\\\'t complete the operation. records older than a certain number of days cannot be created or modified. team manager defines this in the "Lock interval in days" value on the "Profile" page. set it to 0 to remove locking. <br><br>uncompleted records (with 0 or empty duration) can be deleted.',
// 'error.mail_send' => 'error sending mail',
// 'error.no_email' => 'no email associated with this login',
// 'error.uncompleted_exists' => 'uncompleted entry already exists. close or delete it.',
// 'error.goto_uncompleted' => 'go to uncompleted entry.',

// labels for various buttons
'button.login' => 'login',
'button.now' => 'teraz',
// 'button.set' => 'ustaw',
'button.save' => 'zapisz',
'button.delete' => 'usuń',
'button.cancel' => 'anuluj',
'button.submit' => 'potwierdź',
'button.add_user' => 'dodaj użytkownika',
'button.add_project' => 'dodaj projekt',
'button.add_activity' => 'dodaj zadanie',
'button.add_client' => 'dodaj klienta',
'button.add' => 'dodaj',
'button.generate' => 'generuj',
// Note to translators: button.reset_password needs an improved translation.
'button.reset_password' => 'dalej',
'button.send' => 'wyślij',
'button.send_by_email' => 'wyślij e-mail',
'button.save_as_new' => 'zapisz jako nowy',
'button.create_team' => 'utwórz zespół',
'button.export' => 'exportuj zespół',
'button.import' => 'importuj zespół',
'button.apply' => 'zastosuj',

// labels for controls on various forms
// TODO: translate label.team_name
// 'label.team_name' => 'team name',
'label.currency' => 'waluta',
// TODO: translate label.manager_name and label.manager_login.
// 'label.manager_name' => 'manager name',
// 'label.manager_login' => 'manager login',
'label.password' => 'hasło',
'label.confirm_password' => 'potwierdź hasło',
// 'label.email' => 'email',
'label.total' => 'suma',

"form.filter.project" => 'projekt',
"form.filter.filter" => 'ulubiony raport',
"form.filter.filter_new" => 'zapisz jako ulubiony',
// Note to translators: the string below is missing and must be added and translated 
// "form.filter.filter_confirm_delete" => 'are you sure you want to delete this favorite report?',

// login form attributes
"form.login.title" => 'login',
"form.login.login" => 'login',

// password reminder form attributes
"form.fpass.title" => 'zmień hasło',
"form.fpass.login" => 'login',
"form.fpass.send_pass_str" => 'prośba o zmianę hasła została wysłana',
"form.fpass.send_pass_subj" => 'AnukoTime Tracker: prośba o zmianę hasła',
// Note to translators: the ending of this string below needs to be translated.
"form.fpass.send_pass_body" => "Drogi Użytkowniku,\n\nKtoś, prawdopodbnie ty, poprosił o zmianę hasła w aplikacji Anuko Time Tracker. Proszę kliknąć na poniższy link, jeżeli chesz zmienić hasło.\n\n%s\n\nAnuko Time Tracker is a simple, easy to use, open source time tracking system. Visit http://www.anuko.com for more information.\n\n",
"form.fpass.reset_comment" => "aby zmienić hasło proszę je wpisać i nacisnąć guzik zapisz",

// administrator form
"form.admin.title" => 'administrator',
"form.admin.duty_text" => 'utwórz nowy zespół przez utworzenie nowego konta kierownika zespołu.<br>możesz również zaimportować dane zespółu z pliku xml utworzonego na innym serwerze anuko time tracker\\\'a (adresy e-mail nie mogą się powtarzać z już istniejącymi).',

"form.admin.change_pass" => 'zmień hasło konta administratora',
"form.admin.profile.title" => 'zespoły',
// Note to translators: the string below must be translated
// "form.admin.profile.noprofiles" => 'your database is empty. login as admin and create a new team.',
"form.admin.profile.comment" => 'usuń zespół',
"form.admin.profile.th.id" => 'id',
"form.admin.profile.th.name" => 'nazwa',
"form.admin.profile.th.edit" => 'edytuj',
"form.admin.profile.th.del" => 'usuń',
"form.admin.profile.th.active" => 'aktywny',
"form.admin.lock.period" => 'zamknij przedział w dniach',
"form.admin.options" => 'opcje',
// Note to translators: the strings below are missing and must be added and translated 
// "form.admin.lang_default" => 'site default language',
// "form.admin.custom_date_format" => "date format",
// "form.admin.custom_time_format" => "time format",
// "form.admin.start_week" => "first day of week",

// my time form attributes
"form.mytime.title" => 'mój czas',
"form.mytime.edit_title" => 'edytuję zapis czasu',
"form.mytime.del_str" => 'kasuję zapis czasu',
"form.mytime.time_form" => ' (hh:mm)',
"form.mytime.date" => 'data',
"form.mytime.project" => 'projekt',
"form.mytime.activity" => 'zadanie',
"form.mytime.start" => 'start',
"form.mytime.finish" => 'koniec',
"form.mytime.duration" => 'czas trwania',
"form.mytime.note" => 'notatka',
"form.mytime.behalf" => 'dzienna praca dla',
"form.mytime.daily" => 'dzienna praca',
"form.mytime.total" => 'całkowita ilość godzin: ',
"form.mytime.th.project" => 'projekt',
"form.mytime.th.activity" => 'zadanie',
"form.mytime.th.start" => 'start',
"form.mytime.th.finish" => 'koniec',
"form.mytime.th.duration" => 'czas trwania',
"form.mytime.th.note" => 'notatka',
"form.mytime.th.edit" => 'edytuj',
"form.mytime.th.delete" => 'usuń',
"form.mytime.del_yes" => 'udane usunięcie zapisu czasu',
"form.mytime.no_finished_rec" => 'ten rekord został zapisany tylk z czasem rozpoczęcia. to nie jest błąd. wyloguj się jeśli potrzebujesz.',
"form.mytime.billable" => 'płatne przez klienta',
"form.mytime.warn_tozero_rec" => 'ten zapis czasu musi być usunięty ponieważ ten okres raportowania został zamknięty',
// Note to translators: the string below is missing and must be added and translated 
// "form.mytime.uncompleted" => 'uncompleted',

// profile form attributes
// Note to translators: we need a more accurate translation of form.profile.create_title
"form.profile.create_title" => 'utwórz nowe konto zarządcze',
"form.profile.edit_title" => 'edytuj profil',
"form.profile.name" => 'nazwa',
"form.profile.login" => 'login',

// Note to translators: the strings below are missing and must be added and translated 
// "form.profile.showchart" => 'show pie charts',
// "form.profile.lang" => 'language',
// "form.profile.custom_date_format" => "date format",
// "form.profile.custom_time_format" => "time format",
// "form.profile.default_format" => "(default)",
// "form.profile.start_week" => "first day of week",

// people form attributes
"form.people.ppl_str" => 'osoba',
"form.people.createu_str" => 'utwórz nowego użytkownika',
"form.people.edit_str" => 'edytuj użytkownika',
"form.people.del_str" => 'usuń użytkownika',
"form.people.th.name" => 'nazwa',
"form.people.th.login" => 'login',
"form.people.th.role" => 'rola',
"form.people.th.edit" => 'edytuj',
"form.people.th.del" => 'kasuj',
"form.people.th.status" => 'status',
"form.people.th.project" => 'projekt',
"form.people.th.rate" => 'stawka',
"form.people.manager" => 'manadżer',
"form.people.comanager" => 'co-manadżer',
"form.people.empl" => 'użytkownik',
"form.people.name" => 'nazwa',
"form.people.login" => 'login',

"form.people.rate" => 'domyślna stawka godzinowa',
"form.people.comanager" => 'co-manadżer',
"form.people.projects" => 'projekty',

// projects form attributes
"form.project.proj_title" => 'projekty',
"form.project.edit_str" => 'edytuj projekt',
"form.project.add_str" => 'dodaj nowy projekt',
"form.project.del_str" => 'usuń projekt',
"form.project.th.name" => 'nazwa',
"form.project.th.edit" => 'edytuj',
"form.project.th.del" => 'kasuj',
"form.project.name" => 'nazwa',

// activities form attributes
"form.activity.act_title" => 'zadania',
"form.activity.add_title" => 'dodaj nowe zadanie',
"form.activity.edit_str" => 'edytuj zadanie',
"form.activity.del_str" => 'usuń zadanie',
"form.activity.name" => 'nazwa',
"form.activity.project" => 'projekt',
"form.activity.th.name" => 'nazwa',
"form.activity.th.project" => 'projekt',
"form.activity.th.edit" => 'edytuj',
"form.activity.th.del" => 'kasuj',

// report attributes
"form.report.title" => 'raporty',
"form.report.from" => 'początek okresu',
"form.report.to" => 'koniec okresu',
"form.report.groupby_user" => 'użytkownik',
"form.report.groupby_project" => 'projekt',
"form.report.groupby_activity" => 'zadanie',
"form.report.duration" => 'czas trwania',
"form.report.start" => 'start',
"form.report.activity" => 'zadanie',
"form.report.show_idle" => 'pokaż okres bezczynny',
"form.report.finish" => 'koniec',
"form.report.note" => 'notatka',
"form.report.project" => 'projekt',
"form.report.totals_only" => 'tylko sumy',
"form.report.total" => 'suma godzin',
"form.report.th.empllist" => 'użytkownik',
"form.report.th.date" => 'data',
"form.report.th.project" => 'projekt',
"form.report.th.activity" => 'zadanie',
"form.report.th.start" => 'start',
"form.report.th.finish" => 'koniec',
"form.report.th.duration" => 'czas trwania',
"form.report.th.note" => 'notatka',

// mail form attributes
"form.mail.from" => 'od',
"form.mail.to" => 'do',
"form.mail.cc" => 'dw',
"form.mail.subject" => 'temat',
"form.mail.comment" => 'komentarz',
"form.mail.above" => 'wyślij e-mail z tym raportem ',
// Note to translators: this string needs to be translated.
// "form.mail.footer_str" => 'Anuko Time Tracker is a simple, easy to use, open source<br>time tracking system. Visit <a href="http://www.anuko.com">www.anuko.com</a> for more information.',
"form.mail.sending_str" => '<b>wiadomość wysłana</b>',

// invoice attributes
"form.invoice.title" => 'faktura',
"form.invoice.caption" => 'faktura',
"form.invoice.above" => 'dodatkowa informacja dla faktury',
"form.invoice.select_cust" => 'wybierz klienta',
"form.invoice.fillform" => 'wypełnił pola',
"form.invoice.date" => 'data',
"form.invoice.number" => 'numer faktury',
"form.invoice.tax" => 'podatek',
"form.invoice.daily_subtotals" => 'sumy dzienne',
"form.invoice.yourcoo" => 'twoja nazwa<br> i adres',
"form.invoice.custcoo" => 'nazwa klienta<br> i adres',
"form.invoice.comment" => 'komentarz ',
"form.invoice.th.username" => 'osoba',
"form.invoice.th.time" => 'godzin',
"form.invoice.th.rate" => 'stawka',
"form.invoice.th.summ" => 'kwota',
"form.invoice.subtotal" => 'suma częściowa',
"form.invoice.customer" => 'klient',
"form.invoice.mailinv_above" => 'wyślij e-mailem fakturę',
"form.invoice.sending_str" => '<b>faktura wysłana</b>',

"form.migration.zip" => 'kompresja',
"form.migration.file" => 'wybierz plik',
"form.migration.import.title" => 'import danych',
"form.migration.import.success" => 'import zakończony poprawnie',
"form.migration.import.text" => 'import danych zespołu z pliku xml',
"form.migration.export.title" => 'eksport danych',
"form.migration.export.success" => 'eksport zakończony poprawnie',
"form.migration.export.text" => 'możesz wyeksportować wszystkie dane zespołu do pliku xml. funkcja przydatna jeśli migrujesz dane na własny serwer.',
// Note to translators: the strings below are missing and must be added and translated 
// "form.migration.compression.none" => 'none',
// "form.migration.compression.gzip" => 'gzip',
// "form.migration.compression.bzip" => 'bzip',

"form.client.title" => 'klienci',
"form.client.add_title" => 'dodaj klienta',
"form.client.edit_title" => 'edytuj klienta',
"form.client.del_title" => 'usuń klienta',
"form.client.th.name" => 'nazwa',
"form.client.th.edit" => 'edytuj',
"form.client.th.del" => 'usuń',
"form.client.name" => 'nazwa',
"form.client.tax" => 'podatek',
"form.client.daily_subtotals" => 'dzienne sumy',
"form.client.yourcoo" => 'twoja nazwa<br> i adres na fakturze',
"form.client.custcoo" => 'adres',
"form.client.comment" => 'komentarz ',

// miscellaneous strings
"forward.forgot_password" => 'zapomniałeś hasło?',
"forward.edit" => 'edytuj',
"forward.delete" => 'usuń',
"forward.tocsvfile" => 'eksport danych do pliku .csv',
"forward.toxmlfile" => 'eksport danych do pliku .xml',
"forward.geninvoice" => 'generuj fakturę',
"forward.change" => 'edytuj klientów',

// strings inside contols on forms
"controls.select.project" => '--- wybierz projekt ---',
"controls.select.activity" => '--- wybierz zadanie ---',
"controls.select.client" => '--- wybierz klienta ---',
"controls.project_bind" => '--- wszystkie ---',
"controls.all" => '--- wszystko ---',
"controls.notbind" => '--- nie ---',
"controls.per_tm" => 'ten miesiąc',
"controls.per_lm" => 'ostatni miesiąc',
"controls.per_tw" => 'ten tydzień',
"controls.per_lw" => 'ostatni tydzień',
"controls.per_td" => 'dzisiaj',
"controls.per_at" => 'od początku świata',
// Note to translators: the string below is missing and must be added and translated 
// "controls.per_ty" => 'this year',
"controls.sel_period" => '--- select okres czasowy ---',
"controls.sel_groupby" => '--- bez grupowania ---',
"controls.inc_billable" => 'płatne przez klienta',
"controls.inc_nbillable" => 'bezpłatne dla klienta',
// Note to translators: the string below is missing and must be added and translated 
// "controls.default" => '--- default ---',

// labels
"label.chart.title1" => 'zadania dla klienta',
// Note to translators: the string below is missing and must be added and translated 
// "label.chart.title2" => 'projects for user',
"label.chart.period" => 'wykres dla okresu',

"label.pinfo" => '%s, %s',
"label.pinfo2" => '%s',
"label.pbehalf_info" => '%s %s <b>w imieniu %s</b>',
"label.pminfo" => ' (manadżer)',
"label.pcminfo" => ' (co-manadżer)',
"label.painfo" => ' (administrator)',
"label.time_noentry" => 'brak wpisu',
"label.today" => 'dzisiaj',
"label.req_fields" => '* wymagane pola',
"label.sel_project" => 'wybierz projekt',
"label.sel_activity" => 'wybierz zadanie',
"label.sel_tp" => 'wybierz okres czasu',
"label.set_tp" => 'lub ustaw daty',
"label.fields" => 'pokaż pola',
"label.group_title" => 'grupuj po',
"label.include_title" => 'zawieraj zapisy',
"label.inv_str" => 'faktura',
"label.set_empl" => 'wybierz użytkowników',
"label.sel_all" => 'wybierz wszystko',
"label.sel_none" => 'odznacz wszystko',
"label.or" => 'lub',
"label.disable" => 'deaktywuj',
"label.enable" => 'aktywuj',
"label.filter" => 'filtr',
"label.timeweek" => 'tygodniowa suma',
// Note to translators: the strings below are missing and must be added and translated
// "label.hrs" => 'hrs',
// "label.errors" => 'errors',
// "label.ldap_hint" => 'Type your <b>Windows login</b> and <b>password</b> in the fields below.',
// "label.calendar_today" => 'today',
// "label.calendar_close" => 'close',

// login hello text
// "login.hello.text" => "Anuko Time Tracker is a simple, easy to use, open source time tracking system.",
);
?>