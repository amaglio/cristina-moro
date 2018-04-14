<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicio extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Servicio_model');
	}

	public function index()
	{	
		$data['servicios_spa'] = $this->Servicio_model->get_servicios_spa();
		$data['servicio_tipo'] = $this->Servicio_model->get_tipo_servicio_spa();
		
 		$this->load->view('estructura/head.php' );
		$this->load->view('servicios.php',$data);
		$this->load->view('estructura/footer.php' );
	}

	public function ver_servicio()
	{	
 		$this->load->view('estructura/head.php' );
		$this->load->view('servicio.php');
		$this->load->view('estructura/footer.php' );
	}
 	

}