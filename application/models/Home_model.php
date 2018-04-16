<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

public $variable;

public function __construct()
{
	parent::__construct();
	
	
}

function get_slider_home()
{
	
	$resultado = $this->db->query("	SELECT   * 
              					    			FROM 	   carrusel 
                                  LIMIT   0,3" );

	return $resultado->result_array();
}
 

}

/* End of file  */
/* Location: ./application/models/ */