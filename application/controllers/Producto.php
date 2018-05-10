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

	public function ver_producto($id_producto)
	{	
		$_POST['id_producto'] = $id_producto; 
		$this->form_validation->set_message('comprobar_producto_existente', 'El producto no existe.');
		$this->form_validation->set_data($_POST);

		if ( $this->form_validation->run('ver_producto') == FALSE ):

			chrome_log("No paso validacion"); 
			redirect('home','refresh');

		else:

			$data['producto'] = $this->Producto_model->get_informacion_producto($id_producto);

			$data['productos'] = $this->Producto_model->get_producto_relacionados( $data['producto']['id_tipo_producto'], $data['producto']['id_producto']);

			$data['producto_tipos'] = $this->Producto_model->get_producto_tipos();

	 		$this->load->view('estructura/head.php' );
			$this->load->view('producto.php',$data);
			$this->load->view('estructura/footer.php' );

		endif;
	}

	public function buscar_productos()
	{
 		chrome_log("Servicio/buscar_productos");

		if ($this->form_validation->run('buscar_productos') == FALSE):

			chrome_log("No paso validacion");
			$this->session->set_flashdata('mensaje', 'Error: no paso la validacion.'); 

		else:

			chrome_log("Paso validacion");

			 
			$productos_encontrados = $this->Producto_model->buscar_productos($this->input->post());

			$data['productos'] = $productos_encontrados;
 			$data['producto_tipos'] = $this->Producto_model->get_producto_tipos();
			
			$this->load->view('estructura/head.php' );
			$this->load->view('productos_resultados.php',$data);
			$this->load->view('estructura/footer.php' ); 

		endif;	
	}
 	
	public function comprobar_producto_existente($id_producto=null)
	{
		if($this->Producto_model->existe_producto($id_producto)) 
			return false; 
		else 
			return true;
	}
	
}