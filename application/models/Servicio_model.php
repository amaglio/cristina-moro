<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicio_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
		
	}

	function get_servicios_spa()
  {
 	
  	$resultado = $this->db->query("	SELECT   s.*, 
                  											     st.descripcion as descripcion_tipo_servicio
                					    			FROM 	   servicio_spa s,
                					    				 	     servicio_tipo st 
                					    			WHERE 	 s.id_tipo_servicio = st.id_tipo_servicio   " );

  	return $resultado->result_array();
  }

  function get_servicios_spa_home()
  {
  
    $resultado = $this->db->query(" SELECT   s.*, 
                                             st.descripcion as descripcion_tipo_servicio
                                    FROM     servicio_spa s,
                                             servicio_tipo st 
                                    WHERE    s.id_tipo_servicio = st.id_tipo_servicio   
                                    AND       s.home = 1
                                    LIMIT     0,3" );

    return $resultado->result_array();
  }

  function get_informacion_servicio($id_servicio_spa)
  {
 	
  	$resultado = $this->db->query("	   SELECT   s.*, 
                                           st.descripcion as descripcion_tipo_servicio
                                      FROM     servicio_spa s,
                                               servicio_tipo st 
                                      WHERE    s.id_tipo_servicio = st.id_tipo_servicio  
                                      AND      s.id_servicio_spa ", array( $id_servicio_spa ) );

  	return $resultado->result_array();
  }

  function get_tipo_servicio_spa()
  {
 	
  	$resultado = $this->db->query("	SELECT  *
					    			                FROM 	servicio_tipo" );

  	return $resultado->result_array();
  }

   

  function buscar_cursos($array)
  {	
  	$tema = $modalidad = '';

 		if(!empty($array['id_modalidad']))
 			$id_modalidad .= 'AND cm.id_modalidad = '.$array['id_modalidad'];

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
}

/* End of file  */
/* Location: ./application/models/ */