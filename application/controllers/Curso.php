<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curso extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
	}

	public function index()
	{	
 		$this->load->view('estructura/head.php' );
		$this->load->view('cursos.php');
		$this->load->view('estructura/footer.php' );
	}

	public function ver_curso()
	{	
 		$this->load->view('estructura/head.php' );
		$this->load->view('curso.php');
		$this->load->view('estructura/footer.php' );
	}
 	

}