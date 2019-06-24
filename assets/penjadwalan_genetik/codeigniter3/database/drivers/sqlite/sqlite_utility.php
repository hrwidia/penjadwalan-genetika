<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CI_DB_sqlite_utility extends CI_DB_utility {
	function _list_databases(){
		if ($this->db_debug){return $this->db->display_error('db_unsuported_feature');}
		return array();
	}
	function _optimize_table($table){return FALSE;}
	function _repair_table($table){return FALSE;}
	function _backup($params = array()){return $this->db->display_error('db_unsuported_feature');}
}