<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
	}

	public function index()
	{	
 		$this->load->view('estructura/head.php' );
		$this->load->view('productos.php');
		$this->load->view('estructura/footer.php' );
	}

	public function ver_producto()
	{	
 		$this->load->view('estructura/head.php' );
		$this->load->view('producto.php');
		$this->load->view('estructura/footer.php' );
	}
 	

}