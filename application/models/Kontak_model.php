<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function getkontak()
	{
		return $this->db->get('kontaks')->result();
	}
	public function addkontak($data)
	{
		$this->db->insert('kontaks',$data);
	}
	public function delkontak($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('kontaks');
	}
	public function ambilkontak($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('kontaks')->result();
	}
	public function suntingkontak($data)
	{
		$this->db->where('id', $data['id']);
		$baru = array(
			'nama'=>$data['nama'],
			'email'=>$data['email'],
			'nohp'=>$data['nohp']
		);
		$this->db->update('kontaks', $baru);
	}
}
