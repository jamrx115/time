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

import('form.DefaultCellRenderer');

class CRCellRenderer extends DefaultCellRenderer {
	
	function toRender(&$table, $value, $row, $column, $selected=false ) {
		$html = "<td";
		$html .= ($this->mWidth!='' ? " width=\"$this->mWidth\"" : "");
		$html .= "><input type=\"radio\" name=\"".$table->getName()."\" id=\"id".$table->getName()."$row\" value=\"".$value."\"></td>\n";
		return $html;
	}
}
?>