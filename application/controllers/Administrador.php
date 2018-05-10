<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('administrador.php',(array)$output);
	}
 

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function cursos()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('curso');
			$crud->set_subject('Curso');
			$crud->required_fields('nombre', 'id_tema_curso');

			$crud->columns('nombre','id_modalidad_curso', 'id_tema_curso', 'descripcion', 'fecha', 'duracion', 'dia_horario' , 'foto' , 'programa'  );

 
			$crud->unset_texteditor('descripcion');

			$crud->display_as('id_modalidad_curso','Modalidad del curso');
			$crud->display_as('id_tema_curso','Tema del curso');

			$crud->set_relation('id_modalidad_curso','curso_modalidad','descripcion');
			$crud->set_relation('id_tema_curso','curso_tema','descripcion');

			$crud->set_field_upload('foto','assets/img/cursos');


 	
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function servicios()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('servicio_spa');
			$crud->set_subject('Servicio SPA');
			$crud->required_fields('titulo', 'id_tipo_servicio');


			$crud->columns('titulo','descripcion', 'id_tipo_servicio', 'foto', 'home'  );

			$crud->unset_texteditor('descripcion');

			$crud->display_as('id_tipo_servicio','Tipo de servicio');
 
			$crud->set_relation('id_tipo_servicio','servicio_tipo','descripcion'); 

			$crud->set_field_upload('foto','assets/img/servicios');
 	
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function productos()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('producto');
			$crud->set_subject('Producto');
			$crud->required_fields('nombre', 'id_tipo_producto');

			$crud->columns('nombre','descripcion', 'foto', 'id_tipo_producto', 'home'  );
			$crud->unset_texteditor('descripcion');

			$crud->display_as('id_tipo_producto','Tipo de producto');
 
			$crud->set_relation('id_tipo_producto','producto_tipo','descripcion'); 

			$crud->set_field_upload('foto','assets/img/productos');
 	
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function carrusel()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('carrusel');
			$crud->set_subject('Carrusel');
			$crud->required_fields('titulo', 'foto');

			$crud->columns('titulo','foto', 'link'  );
 

			$crud->set_field_upload('foto','assets/img/carrusel');
 	
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

 
	public function tipos_producto()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('tipo_producto');
			$crud->set_subject('Tipo de producto');
			$crud->required_fields('descripcion');
			$crud->columns('id_tipo_producto','descripcion' );

			$crud->display_as('id_tipo_producto','Tipo de producto'); 
			$crud->unset_delete();

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function promociones()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('promocion');
			$crud->set_subject('promociones');
			$crud->required_fields('descripcion');
			$crud->columns('titulo', 'descripcion','precio', 'foto', 'carrousel'  );

		 
			$crud->change_field_type('description', 'text');

			$crud->display_as('id_tipo_producto','Tipo de producto'); 

			$crud->set_field_upload('foto','assets/img/promociones');
 

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function contactos()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('contacto');
			$crud->set_subject('Contactos'); 
			$crud->columns('nombre', 'apellido','email', 'telefono', 'ubicacion', 'comentario', 'url_referer'  );
			$crud->change_field_type('description', 'text');  
 			$crud->unset_add();
			$crud->unset_edit();

			$crud->callback_column('url_referer', array($this, '_full_text'));

			$output = $crud->render();

			$this->_example_output($output);
	}

 	public function opiniones_facebook()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('opiniones_facebook');
			$crud->set_subject('Opiniones facebook');
			$crud->required_fields('iframe');
			$crud->columns('id_opinion', 'iframe' );  
  
			$crud->callback_column('iframe',array($this,'add_field_callback_1'));

			$output = $crud->render();

			$this->_example_output($output);
	}

	function add_field_callback_1($value, $row)
	{
		return $value.'';
	}

	function _full_text($value, $row)
	{
	return $value = wordwrap($value, 30, "<br>", true);
	}
}
