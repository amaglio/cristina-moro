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

  function get_producto_relacionados($id_tipo_producto, $id_producto)
  { 

    $resultado = $this->db->query(" SELECT   p.*, 
                                             pt.descripcion as descripcion_tipo_producto
                                    FROM     producto p,
                                             producto_tipo pt 
                                    WHERE    p.id_tipo_producto = pt.id_producto_tipo
                                    AND      p.id_tipo_producto = ? 
                                    AND      p.id_producto != ?
                                    LIMIT    0, 3 ", array( $id_tipo_producto ,$id_producto )  );

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

  function get_informacion_producto($id_producto)
  {
 	
  	$resultado = $this->db->query("	  SELECT    p.*, 
                                                pt.descripcion as descripcion_tipo_producto
                                      FROM      producto p,
                                                producto_tipo pt 
                                      WHERE     p.id_tipo_producto = pt.id_producto_tipo  
                                      AND       p.id_producto = ? ", array( $id_producto ) );

  	return $resultado->row_array();
  }

  function get_producto_tipos()
  {
 	
  	$resultado = $this->db->query("	SELECT  *
					    			                FROM 	producto_tipo" );

  	return $resultado->result_array();
  }

  function buscar_productos($array)
  {	

  	$resultado = $this->db->query("	SELECT   p.*, 
                                             pt.descripcion as descripcion_tipo_producto
                                    FROM     producto p,
                                             producto_tipo pt 
                                    WHERE    p.id_tipo_producto = pt.id_producto_tipo
					    				              AND      p.id_tipo_producto = ? ", array( $array['id_producto_tipo'] )  );

  	return $resultado->result_array();
  }

  function existe_producto($id_producto)
  {
    
    $query = $this->db->query(" SELECT  *
                                    FROM  producto
                                    WHERE id_producto = ?", array($id_producto) );


    if($query->num_rows() > 0)
      return false;
    else
      return true;
  }
}

/* End of file  */
/* Location: ./application/models/ */