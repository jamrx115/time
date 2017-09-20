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

require_once('initialize.php');
import('ttImportHelper');
import('form.Form');

// Access check.
if (!ttAccessCheck(right_administer_site)) {
  header('Location: access_denied.php');
  exit();
}

$form = new Form('importForm');
$form->addInput(array('type'=>'upload','name'=>'xmlfile','value'=>'browse','maxsize'=>16777216)); // 16 MB file upload limit.
// Note: for the above limit to work make sure to set upload_max_filesize and post_max_size in php.ini to at least 16M. 
$form->addInput(array('type'=>'submit','name'=>'btn_submit','value'=>$i18n->getKey('button.import')));

if ($request->getMethod() == 'POST') {

  $import = new ttImportHelper($errors);
  $import->importXml();
  if ($errors->isEmpty())
    $messages->add($i18n->getKey('form.import.success'));
}

$smarty->assign('forms', array($form->getName()=>$form->toArray()) );
$smarty->assign('title', $i18n->getKey('title.import'));
$smarty->assign('content_page_name', 'import.tpl');
$smarty->display('index.tpl');
?>