<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto_model extends CI_Model {

public $variable;

public function __construct()
{
	parent::__construct();
	
	
}

function alta_contacto($array)
{	
	$contacto['nombre'] = $array['nombre'];
	$contacto['apellido'] = $array['apellido'];
	$contacto['email'] = $array['email'];
	$contacto['email'] = $array['email'];

	if(!empty($array['telefono']))
		 $contacto['telefono'] = $array['telefono'];

	if(!empty($array['ubicacion']))
		 $contacto['ubicacion'] = $array['ubicacion'];

	if(!empty($array['comentario']))
		 $contacto['comentario'] = $array['comentario'];
 
	$contacto['url_referer'] = str_replace( base_url() , '', $_SERVER['HTTP_REFERER'] );
	
	return $this->db->insert('contacto', $contacto); 
}
 

}

/* End of file  */
/* Location: ./application/models/ */