<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

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
		$this->load->view('header');	
		$this->load->view('adminNavbar');
		$this->load->view('adminSidebar');
		$this->load->view('adminHome');
		$this->load->view('footer');
	}

	public function actividades()
	{
		$this->load->view('header');	
		$this->load->view('adminNavbar');
		$this->load->view('adminSidebar');
		$this->load->view('adminActividades');
		$this->load->view('footer');
	}

	public function alumnos()
	{
		$this->load->view('header');	
		$this->load->view('adminNavbar');
		$this->load->view('adminSidebar');
		$this->load->view('adminAlumnos');
		$this->load->view('footer');
		
	}

	public function beneficios()
	{
		$this->load->view('header');	
		$this->load->view('adminNavbar');
		$this->load->view('adminSidebar');
		$this->load->view('adminBeneficios');
		$this->load->view('footer');
		
	}

	public function intercambio(){
		$this->load->view('header');	
		$this->load->view('adminNavbar');
		$this->load->view('adminSidebar');
		$this->load->view('footer');
	}

}
