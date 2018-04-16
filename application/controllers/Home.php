<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Producto_model');
		$this->load->model('Servicio_model');
		$this->load->model('Curso_model');
		$this->load->model('Home_model');
	}

	public function index()
	{	
		$data['productos'] = $this->Producto_model->get_productos_home();
		$data['servicios_spa'] = $this->Servicio_model->get_servicios_spa_home();
		$data['cursos_home'] = $this->Curso_model->get_cursos_home();
		$data['slider_home'] = $this->Home_model->get_slider_home();

 		$this->load->view('estructura/head.php' );
		$this->load->view('home.php',$data);
		$this->load->view('estructura/footer.php' );
	}

 	

}