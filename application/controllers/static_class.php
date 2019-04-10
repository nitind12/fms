<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class static_class extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('fleximodel', 'frm');
		$data['flexiblehead'] = $this->frm->flexiblehead_submit();
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/masterside');
		$this->load->view('Dashboard/index_static_class');
		$this->load->view('templates/footer');
	}
	function getflexiblehead(){
		$this->load->model('fleximodel', 'stm');
		$data['flexi'] = $this->stm->flexiblehead_submit();
		echo json_encode($data);
	}
	function insert_record(){
		$data = $this->stm->flexiblehead_submit();

		$this->session->set_flashdata('msg_', $data['msg']);

		redirect('static_class');
	}
}
