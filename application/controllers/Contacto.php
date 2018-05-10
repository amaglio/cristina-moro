<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Contacto_model');
		$this->load->model('Curso_model');
		$this->load->model('Producto_model');
		$this->load->model('Servicio_model');
	}

	public function index()
	{	
 		$this->load->view('estructura/head.php' );
		$this->load->view('contacto.php');
		$this->load->view('estructura/footer.php' );
	}

	public function procesar_contacto()
	{
 		chrome_log("Contacto/procesar_contacto");

		if ($this->form_validation->run('procesar_contacto') == FALSE):

			chrome_log("No paso validacion");
			$this->session->set_flashdata('mensaje', 'Error: no paso la validacion.');
			redirect('home/index/','refresh');

		else:

			chrome_log("Paso validacion");

			$data['resultado'] = $this->Contacto_model->alta_contacto($this->input->post());
 			enviar_email($this->input->post());
 

			$this->load->view('estructura/head.php' );
			$this->load->view('contacto_resultado.php',$data);
			$this->load->view('estructura/footer.php' ); 

		endif;	
	}

}
?>