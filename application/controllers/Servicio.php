<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicio extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Servicio_model');
	}

	public function index()
	{	
		chrome_log("Servicio/index");

		$data['servicios_spa'] = $this->Servicio_model->get_servicios_spa();
		$data['servicio_tipo'] = $this->Servicio_model->get_tipo_servicio_spa();
		
 		$this->load->view('estructura/head.php' );
		$this->load->view('servicios.php',$data);
		$this->load->view('estructura/footer.php' );
	}

	public function ver_servicio($id_servicio)
	{	
		chrome_log("Servicio/ver_servicio");

		$data['servicio'] = $this->Servicio_model->get_informacion_servicio($id_servicio);
		$data['servicio_tipo'] = $this->Servicio_model->get_tipo_servicio_spa();
		$data['servicios_spa'] = $this->Servicio_model->get_servicios_relacionados( $data['servicio']['id_tipo_servicio'], $data['servicio']['id_servicio_spa']);
 
 		$this->load->view('estructura/head.php' );
		$this->load->view('servicio.php',$data);
		$this->load->view('estructura/footer.php' );
	}
 	
 	public function buscar_servicios()
	{
 		chrome_log("Servicio/buscar_servicios");

		if ($this->form_validation->run('buscar_servicios') == FALSE):

			chrome_log("No paso validacion");
			$this->session->set_flashdata('mensaje', 'Error: no paso la validacion.');
			//redirect('curso/index/','refresh');

		else:

			chrome_log("Paso validacion");
			$servicios_encontrados = $this->Servicio_model->buscar_servicios($this->input->post());
 

			$data['servicios_spa'] = $servicios_encontrados;
 			$data['servicio_tipo'] = $this->Servicio_model->get_tipo_servicio_spa();
			
			$this->load->view('estructura/head.php' );
			$this->load->view('servicios_resultados.php',$data);
			$this->load->view('estructura/footer.php' ); 

		endif;	
	}	

}