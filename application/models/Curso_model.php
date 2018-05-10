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

function get_curso_relacionados($id_modalidad_curso, $id_tema_curso, $id_curso)
{

  $resultado = $this->db->query(" SELECT  c.*, 
                      cm.descripcion as descripcion_modalidad,
                      ct.descripcion as descripcion_tema
                  FROM  curso c,
                      curso_modalidad cm,
                      curso_tema ct
                  WHERE   c.id_modalidad_curso = cm.id_modalidad 
                  AND   c.id_tema_curso = ct.id_tema 
                  AND   ( c.id_tema_curso = ? OR  c.id_modalidad_curso = ? )
                  AND   c.id_curso != ?
                  ", array(  $id_tema_curso, $id_modalidad_curso, $id_curso  )  );

  return $resultado->result_array();
}



function get_cursos_home()
{

  $resultado = $this->db->query(" SELECT  c.*, 
                                      cm.descripcion as descripcion_modalidad,
                                      ct.descripcion as descripcion_tema
                                  FROM  curso c,
                                      curso_modalidad cm,
                                      curso_tema ct
                                  WHERE   c.id_modalidad_curso = cm.id_modalidad 
                                  AND   c.id_tema_curso = ct.id_tema 
                                  AND c.fecha >=(now())
                                  ORDER BY c.fecha asc" );

  return $resultado->result_array();
}

function get_informacion_curso($id_curso)
{
	
	$resultado = $this->db->query("	SELECT   c.*, 
                                          cm.descripcion as descripcion_modalidad,
                                          ct.descripcion as descripcion_tema
              					    			FROM 	curso c,
              					    				 	curso_modalidad cm,
              					    				 	curso_tema ct
              					    			WHERE 	c.id_modalidad_curso = cm.id_modalidad 
              					    			AND 	c.id_tema_curso = ct.id_tema
              					    			AND 	c.id_curso = ? ", array( $id_curso ) );

	return $resultado->row_array();
}

function get_modalidad_curso()
{
	
	$resultado = $this->db->query("	SELECT  *
				    			                FROM 	curso_modalidad" );

	return $resultado->result_array();
}

function get_tema_curso()
{
	
	$resultado = $this->db->query("	SELECT  *
				    			FROM 	curso_tema" );

	return $resultado->result_array();
}

function buscar_cursos($array)
{	
	$tema = $modalidad = '';

		if(!empty($array['id_modalidad']))
			  $modalidad .= 'AND cm.id_modalidad = '.$array['id_modalidad'];

		if(!empty($array['id_tema']))
			  $tema .= 'AND ct.id_tema = '.$array['id_tema'];


	$resultado = $this->db->query("	SELECT  c.*, 
											cm.descripcion as descripcion_modalidad,
											ct.descripcion as descripcion_tema
				    			FROM 	curso c,
				    				 	curso_modalidad cm,
				    				 	curso_tema ct
				    			WHERE 	c.id_modalidad_curso = cm.id_modalidad 
				    			AND 	c.id_tema_curso = ct.id_tema 
				    				    $modalidad
				    				    $tema " );

	return $resultado->result_array();
}

function get_descripcion_modalidad($id_modalidad)
{
  
  $resultado = $this->db->query(" SELECT  descripcion
                                  FROM  curso_modalidad
                                  WHERE id_modalidad = ?", array($id_modalidad) );

  return $resultado->row()->descripcion;
}

function get_descripcion_tema($id_tema)
{
  
  $resultado = $this->db->query(" SELECT  descripcion
                                  FROM  curso_tema
                                  WHERE id_tema = ?", array($id_tema) );

  return $resultado->row()->descripcion;
}


function existe_curso($id_curso)
{
  
  $query = $this->db->query(" SELECT  *
                                  FROM  curso
                                  WHERE id_curso = ?", array($id_curso) );


  if($query->num_rows() > 0)
		return false;
	else
		return true;
}




}

/* End of file  */
/* Location: ./application/models/ */