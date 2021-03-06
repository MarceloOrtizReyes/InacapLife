<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {

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
		$this->load->view('navbar');
		$this->load->view('footer');
	}
	public function registroAlumno(){
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('administrador');
		$this->load->view('footer');
	}
	public function registroAlumnoDos(){
		$this->load->model('Alumno_model');
		$datosAlumno = $_POST['alumno'];
		$alumno = $this->Alumno_model->create($datosAlumno);
		$datosCompletos = $alumno->validate();
		if (count($datosCompletos) == 0) {
			$alumno->save();
		}else{
			echo "Faltan Campos";
		}
	}
}

