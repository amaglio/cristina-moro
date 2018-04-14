<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Producto_model');
	}

	public function index()
	{	
		$data['productos'] = $this->Producto_model->get_productos();
		$data['producto_tipos'] = $this->Producto_model->get_producto_tipos();

 		$this->load->view('estructura/head.php' );
		$this->load->view('productos.php',$data);
		$this->load->view('estructura/footer.php' );
	}

	public function ver_producto()
	{	
 		$this->load->view('estructura/head.php' );
		$this->load->view('producto.php');
		$this->load->view('estructura/footer.php' );
	}
 	

}