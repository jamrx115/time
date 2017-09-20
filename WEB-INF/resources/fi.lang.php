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

$i18n_language = 'Suomi';
$i18n_months = array('Tammikuu', 'Helmikuu', 'Maaliskuu', 'Huhtikuu', 'Toukokuu', 'Kesakuu', 'Heinakuu', 'Elokuu', 'Syyskuu', 'Lokakuu', 'Marraskuu', 'Joulukuu');
$i18n_weekdays = array('Sunnuntai', 'Maanantai', 'Tiistai', 'Keskiviikko', 'Torstai', 'Perjantai', 'Lauantai');
$i18n_weekdays_short = array('su', 'ma', 'ti', 'ke', 'to', 'pe', 'la');
// format mm/dd
$i18n_holidays = array('01/01', '01/06', '05/01', '06/24', '12/06', '12/25', '12/26');

$i18n_key_words = array(

// Menus - short selection strings that are displayed on the top of application web pages.
// Example: https://timetracker.anuko.com (black menu on top).
'menu.login' => 'Kirjaudu',
'menu.logout' => 'Kirjaudu ulos',
'menu.forum' => 'Keskustelupalsta',
'menu.help' => 'Apua',
'menu.create_team' => 'Luo tiimi',
'menu.profile' => 'Profiili',
'menu.time' => 'Tunnit',
// TODO: translate the following string.
// 'menu.expenses' => 'Expenses',
'menu.reports' => 'Raportit',
'menu.charts' => 'Kaaviot',
'menu.projects' => 'Projektit',
'menu.tasks' => 'Tehtävät',
'menu.users' => 'Käyttäjät',
'menu.teams' => 'Tiimit',
'menu.export' => 'Vie',
'menu.clients' => 'Asiakkaat',
'menu.options' => 'Optiot',

// Footer - strings on the bottom of most pages.
'footer.mobile_phones' => 'Time Tracker on saatavana myös mobiililaitteille.',
// 'Credits' is a bit difficult to translate, the exact literal term might be 'Ansiot' or 'Antaa tunnustus' but that's not widely used in this meaning.
// The term that is used is something like 'We are thanking' ('Kiitämme') but that does not sound good, either. So I just let it be as it was for time being as everybody (?) understands the meaning anyway.
'footer.credits' => 'Credits',
'footer.license' => 'Lisenssi',

// Error messages.
// TODO: translate the following string.
// 'error.access_denied' => 'Access denied.',
'error.sys' => 'Järjestelmävirhe.',
'error.db' => 'Tietokantavirhe.',
'error.field' => 'Virheellinen "{0}" tieto.',
'error.empty' => 'Kenttä "{0}" on tyhjä.',
'error.not_equal' => 'Kentät "{0}" ja "{1}" eivät ole samat.',
// TODO: translate error.interval.
// 'error.interval' => 'Field "{0}" must be greater than "{1}".',
'error.project' => 'Valitse projekti.',
'error.task' => 'Valitse tehtävä.',
'error.client' => 'Valitse asiakas.',
// TODO: translate the following string.
// 'error.report' => 'Select report.',
'error.auth' => 'Virheellinen käyttäjänimi tai salasana.',
'error.user_exists' => 'Tämä käyttäjänimi on jo olemassa.',
'error.project_exists' => 'Tämän niminen projekti on jo olemassa.',
'error.task_exists' => 'Tämän niminen tehtävä on jo olemassa.',
'error.client_exists' => 'Tämän niminen asiakas on jo olemassa.',
'error.invoice_exists' => 'Tällä numerolla oleva lasku on jo olemassa.',
'error.no_invoiceable_items' => 'Ei laskutettavia syötteitä.',
'error.no_login' => 'Tuntematon käyttäjänimi.',
'error.no_teams' => 'Tietokanta on tyhjä. Kirjaudu ylläpitäjänä ja luo uusi tiimi.',
'error.upload' => 'Virhe tiedoston lataus.',
'error.period_locked' => 'Toimintoa ei voi suorittaa. Liian vanhojen tietueiden päivitys tai luonti ei onnistu. Tiimin esimies asettaa "Lukitusväli päivinä" arvon "Profiili"-sivulla. Arvolla 0 lukitusta ei tehdä. <br><br>Keskeneräiset tietueet (kestona 0 tai määrittelemätön) voidaan poistaa.',
'error.mail_send' => 'Virhe postinlähetyksessä.',
'error.no_email' => 'Käyttäjätunnukseen ei ole liitetty sähköpostiosoitetta.',
'error.uncompleted_exists' => 'Kesken oleva syötetieto on jo olemassa. Sulje tai poista se.',
'error.goto_uncompleted' => 'Siirry kesken olevaan syötteeseen.',
// TODO: translate the following strings.
// 'error.overlap' => 'Time interval overlaps with existing records.',
// 'error.future_date' => 'Date is in future.',

// Labels for buttons.
'button.login' => 'Kirjaudu',
'button.now' => 'Nyt',
'button.save' => 'Tallenna',
// TODO: translate the following string.
// 'button.copy' => 'Copy',
'button.cancel' => 'Keskeytä',
'button.submit' => 'Lähetä',
'button.add_user' => 'Lisää käyttäjä',
'button.add_project' => 'Lisää projekti',
'button.add_task' => 'Lisää tehtävä',
'button.add_client' => 'Lisää asiakas',
'button.add_invoice' => 'Lisää lasku',
'button.add_option' => 'Lisää optio',
'button.add' => 'Lisää',
'button.generate' => 'Luo',
'button.reset_password' => 'Nollaa salasana',
'button.send' => 'Lähetä',
'button.send_by_email' => 'Lähetä sähköpostilla',
'button.create_team' => 'Luo tiimi',
'button.export' => 'Vie tiimi',
'button.import' => 'Tuo tiimi',
'button.close' => 'Sulje',
// TODO: translate the following string. 
// 'button.stop' => 'Stop',

// Labels for controls on forms. Labels in this section are used on multiple forms.
'label.team_name' => 'Tiimin nimi',
'label.address' => 'Osoite',
'label.currency' => 'Valuutta',
'label.manager_name' => 'Esimies',
'label.manager_login' => 'Esimiehen käyttäjätunnus',
'label.person_name' => 'Nimi',
'label.thing_name' => 'Nimi',
'label.login' => 'Käyttäjätunnus',
'label.password' => 'Salasana',
'label.confirm_password' => 'Vahvista salasana',
'label.email' => 'Sähköposti',
'label.date' => 'Päiväys',
'label.start_date' => 'Aloituspäivä',
'label.end_date' => 'Päättymispäivä',
'label.user' => 'Käyttäjä',
'label.users' => 'Käyttäjät',
'label.client' => 'Asiakas',
'label.clients' => 'Asiakkaat',
'label.option' => 'Optio',
'label.invoice' => 'Lasku',
'label.project' => 'Projekti',
'label.projects' => 'Projektit',
'label.task' => 'Tehtävä',
'label.tasks' => 'Tehtävät',
'label.description' => 'Kuvaus',
'label.start' => 'Aloitus',
'label.finish' => 'Lopetus',
'label.duration' => 'Kesto',
'label.note' => 'Huom',
// TODO: translate label.item
// 'label.item' => 'Item',
'label.cost' => 'Hinta',
'label.week_total' => 'Viikko yhteensä',
// TODO: translate the following string.
// 'label.day_total' => 'Day total',
'label.today' => 'Tänään',
'label.total_hours' => 'Tunnit yhteensä',
'label.total_cost' => 'Hinta yhteensä',
'label.view' => 'Näytä',
'label.edit' => 'Muokkaa',
'label.delete' => 'Poista',
'label.configure' => 'Aseta',
'label.select_all' => 'Valitse kaikki',
'label.select_none' => 'Poista kaikki valinnat',
'label.id' => 'ID',
'label.language' => 'Kieli',
// TODO: translate the following string.
// 'label.decimal_mark' => 'Decimal mark',
'label.lock_interval' => 'Lukitusväli päivinä',
'label.date_format' => 'Päiväyksen muoto',
'label.time_format' => 'Kellonajan muoto',
'label.week_start' => 'Viikon 1. päivä',
'label.comment' => 'Kommentti',
'label.status' => 'Tila',
'label.tax' => 'Vero',
'label.subtotal' => 'Välisumma',
'label.total' => 'Yhteensä',
'label.client_name' => 'Asiakkaan nimi',
'label.client_address' => 'Asiakkaan osoite',
'label.or' => 'tai',
'label.error' => 'Virhe',
'label.ldap_hint' => 'Syötä <b>Windows-käyttäjätunnuksesi</b> ja <b>salasanasi</b> ao. kenttiin.',
'label.required_fields' => '* - pakolliset kentät',
'label.on_behalf' => 'puolesta',
'label.role_manager' => '(esimies)',
'label.role_comanager' => '(apu-esimies)',
'label.role_admin' => '(ylläpitäjä)',
// Labels for plugins (extensions to Time Tracker that provide additional features).
'label.custom_fields' => 'Omat kentät',
'label.type' => 'Tyyppi',
'label.type_dropdown' => 'pudotusvalikko',
'label.type_text' => 'teksti',
'label.required' => 'Pakollinen',
'label.fav_report' => 'Raporttipohja',
// TODO: translate the following strings.
// 'label.cron_schedule' => 'Cron schedule',
// 'label.what_is_it' => 'What is it?',

// Form titles.
'title.login' => 'Kirjautuminen',
'title.teams' => 'Tiimit',
'title.create_team' => 'Tiimin luonti',
// TODO: translate the following string.
// 'title.edit_team' => 'Editing Team',
'title.delete_team' => 'Tiimin poisto',
'title.reset_password' => 'Salasanan nollaus',
'title.change_password' => 'Salasanan vaihto',
'title.time' => 'Tuntien kirjaus',
'title.edit_time_record' => 'Tuntikirjausten muokkaus',
'title.delete_time_record' => 'Tuntikirjausten poisto',
// TODO: translate the following strings.
// 'title.expenses' => 'Expenses',
// 'title.edit_expense' => 'Editing Expense Item',
// 'title.delete_expense' => 'Deleting Expense Item',
'title.reports' => 'Raportit',
'title.report' => 'Raportti',
'title.send_report' => 'Raportin lähetys',
'title.invoice' => 'Lasku',
'title.send_invoice' => 'Laskun lähetys',
'title.charts' => 'Kaaviot',
'title.projects' => 'Projektit',
'title.add_project' => 'Projektin lisäys',
'title.edit_project' => 'Projektin muokkaus',
'title.delete_project' => 'Projektin poisto',
'title.tasks' => 'Tehtävät',
'title.add_task' => 'Tehtävän lisäys',
'title.edit_task' => 'Tehtävän muokkaus',
'title.delete_task' => 'Tehtävän poisto',
'title.users' => 'Käyttäjät',
'title.add_user' => 'Käyttäjän lisäys',
'title.edit_user' => 'Käyttäjän muokkaus',
'title.delete_user' => 'Käyttäjän poisto',
'title.clients' => 'Asiakkaat',
'title.add_client' => 'Asiakkaan lisäys',
'title.edit_client' => 'Asiakkaan muokkaus',
'title.delete_client' => 'Asiakkaan poisto',
'title.invoices' => 'Laskut',
'title.add_invoice' => 'Laskun lisäys',
'title.view_invoice' => 'Laskun tarkastelu',
'title.delete_invoice' => 'Laskun poisto',
// TODO: translate the following strings.
// 'title.notifications' => 'Notifications',
// 'title.add_notification' => 'Adding Notification',
// 'title.edit_notification' => 'Editing Notification',
// 'title.delete_notification' => 'Deleting Notification',
'title.export' => 'Tiimitietojen vienti',
'title.import' => 'Tiimitietojen tunti',
'title.options' => 'Optiot',
'title.profile' => 'Profiili',
'title.cf_custom_fields' => 'Omat kentät',
'title.cf_add_custom_field' => 'Oman kentän lisäys',
'title.cf_edit_custom_field' => 'Oman kentän muokkaus',
'title.cf_delete_custom_field' => 'Oman kentän poisto',
'title.cf_dropdown_options' => 'Pudotusvalikon vaihtoehdot',
'title.cf_add_dropdown_option' => 'Vaihtoehdon lisäys',
'title.cf_edit_dropdown_option' => 'Vaihtoehdon muokkaus',
'title.cf_delete_dropdown_option' => 'Vaihtoehdon poisto',

// Section for common strings inside combo boxes on forms. Strings shared between forms shall be placed here.
// Strings that are used in a single form must go to the specific form section.
'dropdown.all' => '--- kaikki ---',
'dropdown.no' => '--- ei ---',
'dropdown.this_day' => 'tämä päivä',
'dropdown.this_week' => 'tämä viikko',
'dropdown.last_week' => 'viime viikko',
'dropdown.this_month' => 'tämä kuu',
'dropdown.last_month' => 'viime kuu',
'dropdown.this_year' => 'tämä vuosi',
'dropdown.all_time' => 'kaikki tunnit',
'dropdown.projects' => 'projektit',
'dropdown.tasks' => 'tehtävät',
// TODO: translate the following string.
// 'dropdown.clients' => 'clients',
'dropdown.select' => '--- valitse ---',
// TODO: traslate the following string.
// 'dropdown.select_invoice' => '--- select invoice ---',
'dropdown.status_active' => 'aktiivinen',
'dropdown.status_inactive' => 'inaktiivinen',

// Below is a section for strings that are used on individual forms. When a string is used only on one form it should be placed here.
// One exception is for closely related forms such as "Time" and "Editing Time Record" with similar controls. In such cases
// a string can be defined on the main form and used on related forms. The reasoning for this is to make translation effort easier.
// Strings that are used on multiple unrelated forms should be placed in shared sections such as label.<stringname>, etc.

// Login form. See example at https://timetracker.anuko.com/login.php.
'form.login.forgot_password' => 'Salasana hukassa?',
'form.login.about' =>'Anuko <a href="http://www.anuko.com/lp/tt_2.htm" target="_blank">Time Tracker</a> on yksinkertainen ja helppokäyttöinen vapaan koodin tuntiseurantaohjelmisto.',

// Resetting Password form. See example at https://timetracker.anuko.com/password_reset.php.
'form.reset_password.message' => 'Salasanan nollauspyyntöviesti lähetetty.',
'form.reset_password.email_subject' => 'Anuko Time Tracker -salasanan nollauspyyntö',
'form.reset_password.email_body' => "Hyvä käyttäjä,\n\nJoku, mahdollisesti sinä itse, on pyytänyt nollaamaan Anuko Time Tracker -ohjelman salasanasi. Jos haluat nollata salasanasi, käy sivulla \n\n%s\n\nAnuko Time Tracker on yksinkertainen ja helppokäyttöinen vapaan koodin tuntiseurantaohjelmisto. Lisätietoja sivulla http://www.anuko.com.\n\n",

// Changing Password form. See example at https://timetracker.anuko.com/password_change.php?ref=1.
'form.change_password.tip' => 'Syötä uusi salasana ja osoita Tallenna.',

// Time form. See example at https://timetracker.anuko.com/time.php.
'form.time.duration_format' => '(hh:mm tai 0.0h)',
'form.time.billable' => 'Laskutettava',
'form.time.uncompleted' => 'Keskeneräinen',

// Editing Time Record form. See example at https://timetracker.anuko.com/time_edit.php (get there by editing an uncompleted time record).
'form.time_edit.uncompleted' => 'Vain aloitusaika tallennettiin tietueeseen. Kyseessä ei ole virhe.',

// Reports form. See example at https://timetracker.anuko.com/reports.php
'form.reports.save_as_favorite' => 'Tallenna raporttipohjaksi',
'form.reports.confirm_delete' => 'Haluatko varmasti poistaa tämän raporttipohjan?',
'form.reports.include_records' => 'Sisällytä tietueet',
'form.reports.include_billable' => 'laskutettavat',
'form.reports.include_not_billable' => 'ei-laskutettavat',
// TODO: translate the following strings.
// 'form.reports.include_invoiced' => 'invoiced',
// 'form.reports.include_not_invoiced' => 'not invoiced',
'form.reports.select_period' => 'Valitse ajanjakso',
'form.reports.set_period' => 'tai aseta päivät',
'form.reports.show_fields' => 'Näytä kentät',
// TODO: translate the following strings.
// 'form.reports.group_by' => 'Group by',
// 'form.reports.group_by_no' => '--- no grouping ---',
'form.reports.group_by_date' => 'päivä',
'form.reports.group_by_user' => 'käyttäjä',
// TODO: translate the following string. 
// 'form.reports.group_by_client' => 'client',
'form.reports.group_by_project' => 'projekti',
'form.reports.group_by_task' => 'tehtävä',
'form.reports.totals_only' => 'Vain yhteissummat',

// Report form. See example at https://timetracker.anuko.com/report.php
// (after generating a report at https://timetracker.anuko.com/reports.php).
'form.report.export' => 'Vie',

// Invoice form. See example at https://timetracker.anuko.com/invoice.php
// (you can get to this form after generating a report).
'form.invoice.number' => 'Laskun numero',
'form.invoice.person' => 'Henkilö',

// Charts form. See example at https://timetracker.anuko.com/charts.php
'form.charts.interval' => 'Ajalta',
'form.charts.chart' => 'Kaavio',

// Projects form. See example at https://timetracker.anuko.com/projects.php
'form.projects.active_projects' => 'Aktiiviset projektit',
'form.projects.inactive_projects' => 'Ei-aktiiviset projektit',

// Tasks form. See example at https://timetracker.anuko.com/tasks.php
'form.tasks.active_tasks' => 'Aktiiviset tehtävät',
'form.tasks.inactive_tasks' => 'Ei-aktiiviset tehtävät',

// Users form. See example at https://timetracker.anuko.com/users.php
'form.users.active_users' => 'Aktiiviset käyttäjät',
'form.users.inactive_users' => 'Ei-aktiiviset käyttäjät',
'form.users.role' => 'Rooli',
'form.users.manager' => 'Esimies',
'form.users.comanager' => 'Apuesimies',
'form.users.rate' => 'Taksa',
'form.users.default_rate' => 'Oletustuntitaksa',

// Clients form. See example at https://timetracker.anuko.com/clients.php
'form.clients.active_clients' => 'Aktiiviset asiakkaat',
'form.clients.inactive_clients' => 'Ei-aktiiviset asiakkaat',

// Strings for Exporting Team Data form. See example at https://timetracker.anuko.com/export.php
'form.export.hint' => 'Voit viedä tiimin tiedot xml-tiedostoksi, mikä voi helpottaa tietojen siirtoa omalle palvelimelle.',
'form.export.compression' => 'Pakkaus',
'form.export.compression_none' => 'ei pakata',
'form.export.compression_bzip' => 'bzip',

// Strings for Importing Team Data form. See example at https://timetracker.anuko.com/imort.php (login as admin first).
'form.import.hint' => 'Tuo tiimitiedot xml-tiedostosta.',
'form.import.file' => 'Valitse tiedosto',
'form.import.success' => 'Tietojen tuonti onnistui.',

// Teams form. See example at https://timetracker.anuko.com/admin_teams.php (login as admin first).
'form.teams.hint' =>  'Luo uusi tiimi luomalla ensin tiimin esimiehen käyttäjätili.<br>Tiimin tiedot voi myös tuoda toiselta Anuko Time Tracker -palvelimelta xml-muodossa (käyttäjänimien oltava uusia).',

// Profile form. See example at https://timetracker.anuko.com/profile_edit.php.
'form.profile.12_hours' => '12-tuntinen',
'form.profile.24_hours' => '24-tuntinen',
// TODO: translate the following strings.
// 'form.profile.tracking_mode' => 'Tracking mode',
// 'form.profile.mode_time' => 'time',
// 'form.profile.mode_projects' => 'projects',
// 'form.profile.mode_projects_and_tasks' => 'projects and tasks',
// 'form.profile.record_type' => 'Record type',
// 'form.profile.type_all' => 'all',
// 'form.profile.type_start_finish' => 'start and finish',
// 'form.profile.type_duration' => 'duration',
'form.profile.plugins' => 'Lisäosat',

// Mail form. See example at https://timetracker.anuko.com/report_send.php when emailing a report.
'form.mail.from' => 'Lähettäjä',
'form.mail.to' => 'Vastaanottaja',
'form.mail.cc' => 'Kopio',
'form.mail.subject' => 'Aihe',
'form.mail.report_subject' => 'Time Tracker -raportti',
'form.mail.footer' => 'Anuko Time Tracker on yksinkertainen ja helppokäyttöinen vapaan koodin tuntiseurantaohjelmisto. Lisätietoja sivulla <a href="http://www.anuko.com">www.anuko.com</a>.',
'form.mail.report_sent' => 'Raportti lähetetty.',
'form.mail.invoice_sent' => 'Lasku lähetetty.',
);
?>
