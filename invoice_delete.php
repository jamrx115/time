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
import('ttInvoiceHelper');

// Access check.
if (!ttAccessCheck(right_manage_team)) {
  header('Location: access_denied.php');
  exit();
}

$cl_invoice_id = (int)$request->getParameter('id');
$invoice = ttInvoiceHelper::getInvoice($cl_invoice_id);
$invoice_to_delete = $invoice['name'];

$form = new Form('invoiceDeleteForm');
$form->addInput(array('type'=>'hidden','name'=>'id','value'=>$cl_invoice_id));
$form->addInput(array('type'=>'submit','name'=>'btn_delete','value'=>$i18n->getKey('label.delete')));
$form->addInput(array('type'=>'submit','name'=>'btn_cancel','value'=>$i18n->getKey('button.cancel')));

if ($request->getMethod() == 'POST') {
  if ($request->getParameter('btn_delete')) {
	if(ttInvoiceHelper::getInvoice($cl_invoice_id)) {
      if (ttInvoiceHelper::delete($cl_invoice_id)) {
        header('Location: invoices.php');
        exit();
      } else
        $errors->add($i18n->getKey('error.db'));
    } else
      $errors->add($i18n->getKey('error.db'));
  } else if ($request->getParameter('btn_cancel')) {
  	header('Location: invoices.php');
  	exit();
  }
} // post

$smarty->assign('invoice_to_delete', $invoice_to_delete);
$smarty->assign('forms', array($form->getName()=>$form->toArray()));
$smarty->assign('onload', 'onLoad="document.invoiceDeleteForm.btn_cancel.focus()"');
$smarty->assign('title', $i18n->getKey('title.delete_invoice'));
$smarty->assign('content_page_name', 'invoice_delete.tpl');
$smarty->display('index.tpl');
?>