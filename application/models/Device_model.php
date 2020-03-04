<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Borrow_model extends CI_Model {

	public function addBorrow(){
		$data = array(
			'id_std'=> $this->input->post('id_std'),
			'name_std'=> $this->input->post('name_std'),
			'dept_std'=> $this->input->post('dept_std'),
			'tell_std'=> $this->input->post('tell_std'),
			'id_device'=> $this->input->post('id_device'),
			'name_device' => $this->input->post('name_device'),
			'date_borrow'=> $this->input->post('date_borrow'),
			'dateline_return'=> $this->input->post('dateline_return'),
		);
		$query = $this->db->insert('borrow',$data);
		if ($query){
			echo redirect('borrow','refresh');
		}else{
			echo 'add false';
		}
	}
	public function editBorrow(){
		$data = array(
			'id_std'=> $this->input->post('id_std'),
			'name_std'=> $this->input->post('name_std'),
			'dept_std'=> $this->input->post('dept_std'),
			'tell_std'=> $this->input->post('tell_std'),
			'id_device'=> $this->input->post('id_device'),
			'name_device' => $this->input->post('name_device'),
			'date_borrow'=> $this->input->post('date_borrow'),
			'dateline_return'=> $this->input->post('dateline_return'),
			'date_return'=> $this->input->post('date_return'),
		);
		$this->db->where('id',$this->input->post('id'));
		$query = $this->db->update('borrow',$data);
		if ($query){
			echo 'edit ok';
		}else{
			echo 'add false';
		}
	}
	public function deleteBorrow($id){

		$query = $this->db->delete('borrow',array('id'=>$id));

	}
	public function showdata(){

		$query = $this->db->get('borrow');
		return $query->result();

	}

	public function read($id){
		$this->db->select('*');
		$this->db->from('borrow');
		$array = array('id' => $id);
		$this->db->where($array);
		$query =$this->db->get();
		if($query->num_rows() >0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}


}
