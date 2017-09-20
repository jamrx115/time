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

class ActionErrors {
    var $errors = array();
    
    function ActionErrors() {
    }
    
    function isEmpty() {
        return (count($this->errors)>0 ? false : true );
    }
    
    function add($message, $arg0 = '', $arg1 = '') {
    	$patterns = array ("/\{0\}/","/\{1\}/");
		$replace = array ($arg0, $arg1);
		$message = preg_replace ($patterns, $replace, $message);
        $this->errors[]["message"] = $message;
    }    
    
    function addAll($arr) {
    	if (is_array($arr)) {
    		foreach ($arr as $k=>$v) {
    			$this->errors[$k] = $v;
    		}
    	}
    }
    
    function get($key) {
        return $this->errors["$key"]["message"];
    }
    
    function dump() {
        print_r($this->errors);
    }
    
    function getErrors() {
        return $this->errors;
    }
}
?>