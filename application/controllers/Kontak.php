<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	public function index()
	{
		$this->load->view('main');
	}
	public function getkontak()
	{
		print_r(json_encode($this->Kontak_model->getkontak()));
	}
	public function addkontak()
	{
		$this->Kontak_model->addkontak(json_decode($this->input->raw_input_stream, true));
	}
	public function delkontak()
	{
		$this->Kontak_model->delkontak($this->input->raw_input_stream);
	}
	public function ambilkontak($id)
	{
		print_r(json_encode($this->Kontak_model->ambilkontak($id)));
	}
	public function suntingkontak()
	{
		$this->Kontak_model->suntingkontak(json_decode($this->input->raw_input_stream, true));
	}
}
