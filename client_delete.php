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
import('form.Form');
import('ttClientHelper');

// Access check.
if (!ttAccessCheck(right_manage_team)) {
  header('Location: access_denied.php');
  exit();
}

$id = (int)$request->getParameter('id');
$client = ttClientHelper::getClient($id);

$client_to_delete = $client['name'];
	
$form = new Form('clientDeleteForm');
$form->addInput(array('type'=>'hidden','name'=>'id','value'=>$id));
$form->addInput(array('type'=>'submit','name'=>'btn_delete','value'=>$i18n->getKey('label.delete')));
$form->addInput(array('type'=>'submit','name'=>'btn_cancel','value'=>$i18n->getKey('button.cancel')));

if ($request->getMethod() == 'POST') {
  if(ttClientHelper::getClient($id)) {
    if ($request->getParameter('btn_delete')) {
      if (ttClientHelper::delete($id)) {
        header('Location: clients.php');
        exit();
      } else
        $errors->add($i18n->getKey('error.db'));
    }
  } else 
      $errors->add($i18n->getKey('error.db'));

  if ($request->getParameter('btn_cancel')) {
  	header('Location: clients.php');
  	exit();
  }
} // post

$smarty->assign('client_to_delete', $client_to_delete);
$smarty->assign('forms', array($form->getName()=>$form->toArray()));
$smarty->assign('title', $i18n->getKey('title.delete_client'));
$smarty->assign('content_page_name', 'client_delete.tpl');
$smarty->display('index.tpl');
?>