<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curso extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Curso_model');
	}

	public function index()
	{
		$data['cursos'] = $this->Curso_model->get_cursos();
		$data['cursos_tema'] = $this->Curso_model->get_tema_curso();
		$data['cursos_modalidad'] = $this->Curso_model->get_modalidad_curso();
 		$this->load->view('estructura/head.php' );
		$this->load->view('cursos.php',$data);
		$this->load->view('estructura/footer.php' );
	}

	public function ver_curso($id_curso)
	{
 		$data['informacion_curso'] = $this->Curso_model->get_informacion_curso($id_curso);

 		$this->load->view('estructura/head.php' );
		$this->load->view('ver_curso.php');
		$this->load->view('estructura/footer.php' );
	}
 	
	public function buscar_cursos()
	{
 		chrome_log("cursos/buscar_cursos");

 		 

		if ($this->form_validation->run('buscar_cursos') == FALSE):

			chrome_log("No paso validacion");
			$this->session->set_flashdata('mensaje', 'Error: no paso la validacion.');
			redirect('curso/index/','refresh');

		else:

			chrome_log("Paso validacion");
			$cursos_encontrados = $this->Curso_model->buscar_cursos($this->input->post());
	 
			if( $cursos_encontrados ):

				$data['cursos_encontrados'] = $cursos_encontrados;

			endif; 
			
			$this->load->view('estructura/head.php' );
			$this->load->view('cursos_resultados.php',$data);
			$this->load->view('estructura/footer.php' );

		endif;	
	}

	function validate_either()
	{

       	if($this->input->post('id_tema') || $this->input->post('id_modalidad')  )
       	{
            return TRUE;
       	}
       	else
       	{
            $this->form_validation->set_message('validate_name', 'Seleccione al menos un filtro de busqueda');
        	return FALSE;
       }
    }
}