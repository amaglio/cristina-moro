<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();		
	}

	function get_productos()
  {
 	
  	$resultado = $this->db->query("	SELECT   p.*, 
                  											     pt.descripcion as descripcion_tipo_producto
                					    			FROM 	   producto p,
                					    				 	     producto_tipo pt 
                					    			WHERE 	 p.id_tipo_producto = pt.id_producto_tipo   " );

  	return $resultado->result_array();
  }

  function get_productos_home()
  {
  
    $resultado = $this->db->query(" SELECT    p.*, 
                                              pt.descripcion as descripcion_tipo_producto
                                    FROM      producto p,
                                              producto_tipo pt 
                                    WHERE     p.id_tipo_producto = pt.id_producto_tipo   
                                    AND       p.home = 1
                                    LIMIT     0,3" );

    return $resultado->result_array();
  }

  function get_informacion_servicio($producto_tipo)
  {
 	
  	$resultado = $this->db->query("	  SELECT   p.*, 
                                           pt.descripcion as descripcion_tipo_producto
                                      FROM     producto p,
                                               producto_tipo pt 
                                      WHERE    p.id_tipo_producto = pt.id_producto_tipo  
                                      AND      p.id_producto_tipo ", array( $producto_tipo ) );

  	return $resultado->result_array();
  }

  function get_producto_tipos()
  {
 	
  	$resultado = $this->db->query("	SELECT  *
					    			                FROM 	producto_tipo" );

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