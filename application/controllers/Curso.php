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
		$_POST['id_curso'] = $id_curso; 
		$this->form_validation->set_message('comprobar_curso_existente', 'El curso no existe.');

		$this->form_validation->set_data($_POST);

		if ( $this->form_validation->run('ver_curso') == FALSE ):

			chrome_log("No paso validacion"); 
			redirect('home','refresh');

		else:

			chrome_log("Paso validacion"); 

			$data['curso'] = $this->Curso_model->get_informacion_curso($id_curso);
	 		$data['cursos_tema'] = $this->Curso_model->get_tema_curso();
			$data['cursos_modalidad'] = $this->Curso_model->get_modalidad_curso();

			$data['cursos'] = $this->Curso_model->get_curso_relacionados($data['curso']['id_modalidad_curso'],$data['curso']['id_tema_curso'],$id_curso);

	 		$this->load->view('estructura/head.php' );
			$this->load->view('curso.php',$data);
			$this->load->view('estructura/footer.php' );

		endif;

 		
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
			$data['cursos'] = $this->Curso_model->buscar_cursos($this->input->post());
 
  			if($this->input->post('id_modalidad'))	
  				$data['descripcion_modalidad'] = $this->Curso_model->get_descripcion_modalidad($this->input->post('id_modalidad'));

  		 
  			if($this->input->post('id_tema'))
  				$data['descripcion_tema'] = $this->Curso_model->get_descripcion_tema($this->input->post('id_tema'));

	 
			$data['cursos_tema'] = $this->Curso_model->get_tema_curso();
			$data['cursos_modalidad'] = $this->Curso_model->get_modalidad_curso();
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

    public function comprobar_curso_existente($id_curso=null)
	{
		if($this->Curso_model->existe_curso($id_curso)) 
			return false; 
		else 
			return true;
	}
}