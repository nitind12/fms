<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentregi extends CI_Controller {

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
		$this->load->model('my_model', 'mm');
		$data['students'] = $this->mm->getStudents();
		$this->load->model('my_model', 'mm');
		$data['course'] = $this->mm->getCourse();

		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/registrationside');
		$this->load->view('Dashboard/indexstudentregi', $data);
		$this->load->view('templates/footer');
	}
}
