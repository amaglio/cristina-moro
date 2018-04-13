<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curso_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
		
	}

	function get_cursos()
    {
   	
    	$resultado = $this->db->query("	SELECT  c.*, 
    											cm.descripcion as descripcion_modalidad,
    											ct.descripcion as descripcion_tema
						    			FROM 	curso c,
						    				 	curso_modalidad cm,
						    				 	curso_tema ct
						    			WHERE 	c.id_modalidad_curso = cm.id_modalidad 
						    			AND 	c.id_tema_curso = ct.id_tema " );

    	return $resultado->result_array();
    }

    function get_informacion_curso($id_curso)
    {
   	
    	$resultado = $this->db->query("	SELECT *
						    			FROM 	curso c,
						    				 	curso_modalidad cm,
						    				 	curso_tema ct
						    			WHERE 	c.id_modalidad_curso = cm.id_modalidad 
						    			AND 	c.id_tema_curso = ct.id_tema
						    			AND 	c.id_curso = ? ", array( $id_curso ) );

    	return $resultado->result_array();
    }


}

/* End of file  */
/* Location: ./application/models/ */