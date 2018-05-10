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

 function get_servicios_relacionados($id_tipo_servicio, $id_servicio_spa)
{ 

  $resultado = $this->db->query(" SELECT   s.*, 
                                           st.descripcion as descripcion_tipo_servicio
                                  FROM     servicio_spa s,
                                           servicio_tipo st 
                                  WHERE    s.id_tipo_servicio = st.id_tipo_servicio
                                  AND      s.id_tipo_servicio = ?
                                  AND      s.id_servicio_spa  != ?
                                  LIMIT    0, 2 ", array( $id_tipo_servicio, $id_servicio_spa )  );

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
                                  LIMIT     0,2" );

  return $resultado->result_array();
}

function get_informacion_servicio($id_servicio_spa)
{
	
	$resultado = $this->db->query("	   SELECT   s.*, 
                                             st.descripcion as descripcion_tipo_servicio
                                    FROM     servicio_spa s,
                                             servicio_tipo st 
                                    WHERE    s.id_tipo_servicio = st.id_tipo_servicio  
                                    AND      s.id_servicio_spa = ? ", array( $id_servicio_spa ) );

	return $resultado->row_array();
}

function get_tipo_servicio_spa()
{
	
	$resultado = $this->db->query("	SELECT  *
				    			                FROM 	servicio_tipo" );

	return $resultado->result_array();
}

function buscar_servicios($array)
{	
    $resultado = $this->db->query(" SELECT   s.*, 
                                           st.descripcion as descripcion_tipo_servicio
                                  FROM     servicio_spa s,
                                           servicio_tipo st 
                                  WHERE    s.id_tipo_servicio = st.id_tipo_servicio
                                  AND      s.id_tipo_servicio = ? ", array( $array['id_tipo_servicio'] ) );

    return $resultado->result_array();
}

function existe_servicio($id_servicio)
{
  
  $query = $this->db->query(" SELECT  *
                              FROM  servicio_spa
                              WHERE id_servicio_spa = ?", array($id_servicio) );


  if($query->num_rows() > 0)
    return false;
  else
    return true;
}


}

/* End of file  */
/* Location: ./application/models/ */