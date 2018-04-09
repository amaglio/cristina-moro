<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicio extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
	}

	public function index()
	{	
 		$this->load->view('estructura/head.php' );
		$this->load->view('servicios.php');
		$this->load->view('estructura/footer.php' );
	}

	public function ver_servicio()
	{	
 		$this->load->view('estructura/head.php' );
		$this->load->view('servicio.php');
		$this->load->view('estructura/footer.php' );
	}
 	

}