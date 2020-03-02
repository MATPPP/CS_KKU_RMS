<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	function getUsers($postData){

		$response = array();

		if(isset($postData['search']) ){
			// Select record
			$this->db->select('*');
			$this->db->where("id_std like '%".$postData['search']."%' ");
			$records = $this->db->get('users')->result();
			foreach($records as $row ){
				$response[] = array("value"=>$row->fname_std,"label"=>$row->id_std);
			}
		}
		return $response;
	}

}
