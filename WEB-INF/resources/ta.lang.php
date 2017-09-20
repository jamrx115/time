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

$i18n_language = 'தமிழ்';
$i18n_months = array('ஜனவரி', 'பிப்ரவரி', 'மார்ச்', 'ஏப்ரல்', 'மே', 'ஜுன்', 'ஜூலை', 'ஆகஸ்ட்', 'செப்டம்பர்', 'அக்டோபர்', 'நவம்பர்', 'டிசம்பர்');
$i18n_weekdays = array('ஞாயிறு', 'திங்கள்', 'செவ்வாய்', 'புதன்', 'வியாழன்', 'வெள்ளி', 'சனி');
// Note to translators: the string below must be translated.
// $i18n_weekdays_short = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
// format mm/dd
$i18n_holidays = array('01/26', '04/01', '04/30', '08/15', '10/02');

$i18n_key_words = array(

// menu entries
'menu.login' => 'உள் நுழை',
'menu.logout' => 'வெளியேறு',
'menu.feedback' => 'கருத்து',
'menu.help' => 'உதவி',
// Note to translators: menu.create_team needs a more accurate translation.
'menu.create_team' => 'மேளாலர் கணக்கை உருவாக்கு',
// 'menu.edit_profile' => 'edit profile',
'menu.my_time' => 'என்னுடைய நேரம்',
'menu.reports' => 'அறிக்கைகள்',
// Note to translators: menu.charts needs to be translated.
// 'menu.charts' => 'charts',
'menu.projects' => 'திட்டப்பணிகள்',
'menu.activities' => 'செயல்பாடுகள்',
'menu.people' => 'மக்கள்',
'menu.teams' => 'குழுக்கள்',
// Note to translators: the strings below must be properly translated 
// 'menu.export' => 'export',
// 'menu.clients' => 'clients',
// 'menu.options' => 'options',
'menu.admin' => 'நிர்வகி',

// error strings
'error.db' => 'தரவுதள பிழை',
'error.field' => 'தரவு "{0}" பிழை',

'errors.wrong' => 'தரவு "{0}" பிழை',
// Note to translators: the strings below must be translated
// 'error.empty' => 'field "{0}" is empty',
// 'error.not_equal' => 'field "{0}" is not equal to field "{1}"',
// 'error.interval' => 'incorrect interval',
'error.project' => 'திட்டப்பணியை தேர்வு செய்',
'error.activity' => 'செயல்பாட்டை தேர்வு செய்',
'error.auth' => 'தவறான கடவுச்சொல்',
// Note to translators: error.user_exists needs a more accurate translation (email is replaced with login now).
// 'error.user_exists' => 'இந்த மின்னஞ்சலுடைய பயனர் முன்னதாகவே இருக்கிறார்',
'error.project_exists' => 'இந்த பெயரையுடைய திட்டப்பணி முன்னதாகவே இருக்கிறது',
'error.activity_exists' => 'இந்த பெயரையுடைய செயல்பாடு முன்னதாகவே இருக்கிறது',
// TODO: translate error.client_exists.
// 'error.client_exists' => 'client with this name already exists',
// Note to translators: this string needs to be properly translated (e-mail replaced with login).
// 'error.no_login' => 'இந்த மின்னஞ்சலுடைய பயனர் இல்லை',
'error.upload' => 'கோப்பு மேலேற்றுதல் பிழை',
// Note to translators: the strings below must be translated
// 'error.period_locked' => 'can\\\'t complete the operation. records older than a certain number of days cannot be created or modified. team manager defines this in the "Lock interval in days" value on the "Profile" page. set it to 0 to remove locking. <br><br>uncompleted records (with 0 or empty duration) can be deleted.',
// 'error.mail_send' => 'error sending mail',
// 'error.no_email' => 'no email associated with this login',
// 'error.uncompleted_exists' => 'uncompleted entry already exists. close or delete it.',
// 'error.goto_uncompleted' => 'go to uncompleted entry.',

// labels for various buttons
'button.login' => 'உள்நுழை',
'button.now' => 'தற்போது',
// 'button.set' => 'set',
'button.save' => 'சேமி',
'button.delete' => 'அழி',
'button.cancel' => 'தடு',
'button.submit' => 'சமர்ப்பி',
// TODO: improve translation of all button.add... strings.
'button.add_user' => 'புதிய பயனரை சேர்',
'button.add_project' => 'புதிய திட்டப்பணியை சேர்',
'button.add_activity' => 'புதிய செயல்பாட்டை சேர்',
// Note to translators: 'button.add_client' => 'add client', // the string must be translated
'button.add' => 'சேர்',
'button.generate' => 'உருவாக்கு',
// Note to translators: button.reset_password needs to be translated.
// 'button.reset_password' => 'reset password',
'button.send' => 'அனுப்பு',
'button.send_by_email' => 'மின்னஞ்சலாக அனுப்பு',
'button.save_as_new' => 'புதியதாக சேமி',
// TODO: improve translation of button.create_team
'button.create_team' => 'புதிய குழுவை சேர்',
// Note to translators: the strings below must be translated
// 'button.export' => 'export team',
// 'button.import' => 'import team',
'button.apply' => 'வின்னப்பி',

// labels for controls on various forms
// TODO: translate label.team_name and the strings below.
// 'label.team_name' => 'team name',
// 'label.currency' => 'currency',
// 'label.manager_name' => 'manager name',
// 'label.manager_login' => 'manager login',
'label.password' => 'கடவுச்சொல்',
'label.confirm_password' => 'கடவுச்சொல்லை உறுதிசெய்',
// 'label.email' => 'email',

"form.filter.project" => 'திட்டப்பணி',
"form.filter.filter" => 'பிடித்தமானதின் அறிக்கை',
"form.filter.filter_new" => 'பிடித்தமானதாக சேமி',
// Note to translators: the string below is missing and must be added and translated
// "form.filter.filter_confirm_delete" => 'are you sure you want to delete this favorite report?',

// login form attributes
"form.login.title" => 'உள் நுழை',
"form.login.login" => 'மின்னஞ்சல்',

// password reminder form attributes
"form.fpass.title" => 'கடவுச்சொல்லை திருத்து',
"form.fpass.login" => 'மின்னஞ்சல்',
"form.fpass.send_pass_str" => 'கடவுச்சொல்லை திருத்தும் விண்ணப்பம் அனுப்பப்பட்டது',
// Note to translators: the strings below must be translated
// "form.fpass.send_pass_subj" => 'Anuko Time Tracker password reset request',
// "form.fpass.send_pass_body" => "Dear User,\n\nSomeone, possibly you, requested your Anuko Time Tracker password reset. Please visit this link if you want to reset your password.\n\n%s\n\nAnuko Time Tracker is a simple, easy to use, open source time tracking system. Visit http://www.anuko.com for more information.\n\n",
// "form.fpass.reset_comment" => "to reset your password please type it in and click on save",

// administrator form
"form.admin.title" => 'நிர்வாகி',
// Note to translators: the string below must be translated
// "form.admin.duty_text" => 'create a new team by creating a new team manager account.<br>you can also import team data from an xml file from another Anuko Time Tracker server (no e-mail collisions are allowed).',

// Note to translators: the string below must be translated
// "form.admin.change_pass" => 'change password of administrator account',
"form.admin.profile.title" => 'குழுக்கள்',
// Note to translators: the string below must be translated
// "form.admin.profile.noprofiles" => 'your database is empty. login as admin and create a new team.',
"form.admin.profile.comment" => 'குழுவை நீக்கு',
// Note to translators: the string below must be translated
// "form.admin.profile.th.id" => 'id',
"form.admin.profile.th.name" => 'பெயர்',
"form.admin.profile.th.edit" => 'திருத்து',
"form.admin.profile.th.del" => 'நீக்கு',
// Note to translators: the strings below must be translated
// "form.admin.profile.th.active" => 'active',
// "form.admin.lock.period" => 'lock interval in days',
// "form.admin.options" => 'options',
// "form.admin.lang_default" => 'site default language',
// "form.admin.custom_date_format" => "date format",
// "form.admin.custom_time_format" => "time format",
// "form.admin.start_week" => "first day of week",

// my time form attributes
"form.mytime.title" => 'என்னுடைய நேரம்',
// Note to translators: the strings below must be translated
// "form.mytime.edit_title" => 'editing time record',
// "form.mytime.del_str" => 'deleting time record',
// "form.mytime.time_form" => ' (hh:mm)',
"form.mytime.date" => 'தேதி',
"form.mytime.project" => 'திட்டப்பணி',
"form.mytime.activity" => 'செயல்பாடு',
"form.mytime.start" => 'ஆரம்பம்',
"form.mytime.finish" => 'முடிவு',
"form.mytime.duration" => 'அவகாசம்',
// Note to translators: the strings below must be translated
// "form.mytime.note" => 'note',
// "form.mytime.behalf" => 'daily work for',
// "form.mytime.daily" => 'daily work',
// "form.mytime.total" => 'hours total: ',
// "form.mytime.th.project" => 'project',
// "form.mytime.th.activity" => 'activity',
// "form.mytime.th.start" => 'start',
// "form.mytime.th.finish" => 'finish',
// "form.mytime.th.duration" => 'duration',
// "form.mytime.th.note" => 'note',
// "form.mytime.th.edit" => 'edit',
// "form.mytime.th.delete" => 'delete',
// "form.mytime.del_yes" => 'time record deleted successfully',
// "form.mytime.no_finished_rec" => 'this record was saved with only start time. it is not an error. logout if you need to.',
// "form.mytime.billable" => 'billable',
// "form.mytime.warn_tozero_rec" => 'this time record must be deleted because this time period is locked',
// "form.mytime.uncompleted" => 'uncompleted',

// Note to translators: from here up to the end all the strings must be translated
// profile form attributes
"form.profile.create_title" => 'creating team',
"form.profile.edit_title" => 'editing profile',
"form.profile.name" => 'name',
"form.profile.login" => 'login',

"form.profile.showchart" => 'show pie charts',
"form.profile.lang" => 'language',
"form.profile.custom_date_format" => "date format",
"form.profile.custom_time_format" => "time format",
"form.profile.default_format" => "(default)",
"form.profile.start_week" => "first day of week",

// people form attributes
"form.people.ppl_str" => 'people',
"form.people.createu_str" => 'creating new user',
"form.people.edit_str" => 'editing user',
"form.people.del_str" => 'deleting user',
"form.people.th.name" => 'name',
"form.people.th.login" => 'login',
"form.people.th.role" => 'role',
"form.people.th.edit" => 'edit',
"form.people.th.del" => 'delete',
"form.people.th.status" => 'status',
"form.people.th.project" => 'project',
"form.people.th.rate" => 'rate',
"form.people.manager" => 'manager',
"form.people.comanager" => 'comanager',
"form.people.empl" => 'user',
"form.people.name" => 'name',
"form.people.login" => 'login',

"form.people.rate" => 'default hourly rate',
"form.people.comanager" => 'co-manager',
"form.people.projects" => 'projects',

// projects form attributes
"form.project.proj_title" => 'projects',
"form.project.edit_str" => 'editing project',
"form.project.add_str" => 'adding new project',
"form.project.del_str" => 'deleting project',
"form.project.th.name" => 'name',
"form.project.th.edit" => 'edit',
"form.project.th.del" => 'delete',
"form.project.name" => 'name',

// activities form attributes
"form.activity.act_title" => 'activities',
"form.activity.add_title" => 'adding new activity',
"form.activity.edit_str" => 'editing activity',
"form.activity.del_str" => 'deleting activity',
"form.activity.name" => 'name',
"form.activity.project" => 'project',
"form.activity.th.name" => 'name',
"form.activity.th.project" => 'project',
"form.activity.th.edit" => 'edit',
"form.activity.th.del" => 'delete',

// report attributes
"form.report.title" => 'reports',
"form.report.from" => 'start date',
"form.report.to" => 'end date',
"form.report.groupby_user" => 'user',
"form.report.groupby_project" => 'project',
"form.report.groupby_activity" => 'activity',
"form.report.duration" => 'duration',
"form.report.start" => 'start',
"form.report.activity" => 'activity',
"form.report.show_idle" => 'show idle',
"form.report.finish" => 'finish',
"form.report.note" => 'note',
"form.report.project" => 'project',
"form.report.totals_only" => 'totals only',
"form.report.total" => 'hours total',
"form.report.th.empllist" => 'user',
"form.report.th.date" => 'date',
"form.report.th.project" => 'project',
"form.report.th.activity" => 'activity',
"form.report.th.start" => 'start',
"form.report.th.finish" => 'finish',
"form.report.th.duration" => 'duration',
"form.report.th.note" => 'note',

// mail form attributes
"form.mail.from" => 'from',
"form.mail.to" => 'to',
"form.mail.cc" => 'cc',
"form.mail.subject" => 'subject',
"form.mail.comment" => 'comment',
"form.mail.above" => 'send this report by e-mail',
"form.mail.footer_str" => 'Anuko Time Tracker is a simple, easy to use, open source<br>time tracking system. Visit <a href="http://www.anuko.com">www.anuko.com</a> for more information.',
"form.mail.sending_str" => '<b>message sent</b>',

// invoice attributes
"form.invoice.title" => 'invoice',
"form.invoice.caption" => 'invoice',
"form.invoice.above" => 'additional information for invoice',
"form.invoice.select_cust" => 'select client',
"form.invoice.fillform" => 'fill the fields',
"form.invoice.date" => 'date',
"form.invoice.number" => 'invoice number',
"form.invoice.tax" => 'tax',
"form.invoice.daily_subtotals" => 'daily subtotals',
"form.invoice.yourcoo" => 'your name<br> and address',
"form.invoice.custcoo" => 'client name<br> and address',
"form.invoice.comment" => 'comment ',
"form.invoice.th.username" => 'person',
"form.invoice.th.time" => 'hours',
"form.invoice.th.rate" => 'rate',
"form.invoice.th.summ" => 'amount',
"form.invoice.subtotal" => 'subtotal',
"form.invoice.customer" => 'client',
"form.invoice.mailinv_above" => 'send this invoice by e-mail',
"form.invoice.sending_str" => '<b>invoice sent</b>',

"form.migration.zip" => 'compression',
"form.migration.file" => 'select file',
"form.migration.import.title" => 'import data',
"form.migration.import.success" => 'import completed successfully',
"form.migration.import.text" => 'import team data from an xml file',
"form.migration.export.title" => 'export data',
"form.migration.export.success" => 'export completed successfully',
"form.migration.export.text" => 'you can export all team data into an xml file. this could be useful if you are migrating data to your own server.',
"form.migration.compression.none" => 'none',
"form.migration.compression.gzip" => 'gzip',
"form.migration.compression.bzip" => 'bzip',

"form.client.title" => 'clients',
"form.client.add_title" => 'add client',
"form.client.edit_title" => 'edit client',
"form.client.del_title" => 'delete client',
"form.client.th.name" => 'name',
"form.client.th.edit" => 'edit',
"form.client.th.del" => 'delete',
"form.client.name" => 'name',
"form.client.tax" => 'tax',
"form.client.daily_subtotals" => 'daily subtotals',
"form.client.yourcoo" => 'your name<br> and address in invoice',
"form.client.custcoo" => 'address',
"form.client.comment" => 'comment ',

// miscellaneous strings
"forward.forgot_password" => 'forgot password?',
"forward.edit" => 'edit',
"forward.delete" => 'delete',
"forward.tocsvfile" => 'export data to .csv file',
"forward.toxmlfile" => 'export data to .xml file',
"forward.geninvoice" => 'generate invoice',
"forward.change" => 'configure clients',

// strings inside contols on forms
"controls.select.project" => '--- select project ---',
"controls.select.activity" => '--- select activity ---',
"controls.select.client" => '--- select client ---',
"controls.project_bind" => '--- all ---',
"controls.all" => '--- all ---',
"controls.notbind" => '--- no ---',
"controls.per_tm" => 'this month',
"controls.per_lm" => 'last month',
"controls.per_tw" => 'this week',
"controls.per_lw" => 'last week',
"controls.per_td" => 'this day',
"controls.per_at" => 'all time',
"controls.per_ty" => 'this year',
"controls.sel_period" => '--- select time period ---',
"controls.sel_groupby" => '--- no grouping ---',
"controls.inc_billable" => 'billable',
"controls.inc_nbillable" => 'not billable',
"controls.default" => '--- default ---',

// labels
"label.chart.title1" => 'activities for user',
"label.chart.title2" => 'projects for user',
"label.chart.period" => 'chart for period',

"label.pinfo" => '%s, %s',
"label.pinfo2" => '%s',
"label.pbehalf_info" => '%s %s <b>on behalf of %s</b>',
"label.pminfo" => ' (manager)',
"label.pcminfo" => ' (co-manager)',
"label.painfo" => ' (administrator)',
"label.time_noentry" => 'no entry',
"label.today" => 'today',
"label.req_fields" => '* required fields',
"label.sel_project" => 'select project',
"label.sel_activity" => 'select activity',
"label.sel_tp" => 'select time period',
"label.set_tp" => 'or set dates',
"label.fields" => 'show fields',
"label.group_title" => 'group by',
"label.include_title" => 'include records',
"label.inv_str" => 'invoice',
"label.set_empl" => 'select users',
"label.sel_all" => 'select all',
"label.sel_none" => 'deselect all',
"label.or" => 'or',
"label.disable" => 'disable',
"label.enable" => 'enable',
"label.filter" => 'filter',
"label.timeweek" => 'weekly total',
"label.hrs" => 'hrs',
"label.errors" => 'errors',
"label.ldap_hint" => 'Type your <b>Windows login</b> and <b>password</b> in the fields below.',
"label.calendar_today" => 'today',
"label.calendar_close" => 'close',

// login hello text
"login.hello.text" => "Anuko Time Tracker is a simple, easy to use, open source time tracking system.",
);
?>