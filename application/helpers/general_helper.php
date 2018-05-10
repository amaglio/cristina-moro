<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 


// Mensaje de error de las variables flash session
if(!function_exists('mensaje_resultado'))
{
    function mensaje_resultado($mensaje)
    {
        if ($mensaje): ?>
                <div class="callout callout-success mensaje_resultado" style="padding:5px 30px 5px 15px">
                  <h5 style="font-weight: bold"><?=$mensaje?></h5>
                </div>
        <?php  endif;  
    }
}

 

if(!function_exists('enviar_email'))
{
    function enviar_email($array)
    {   
        $CI =& get_instance();

        $CI->load->library("email"); 
        $CI->load->model('Curso_model');
        $CI->load->model('Producto_model');
        $CI->load->model('Servicio_model');

        /* Busco informacion de donde pregunto , sino es de contacto */

        $url_referer = str_replace( base_url() , '', $_SERVER['HTTP_REFERER'] );

        $url_array = explode("/", $url_referer);
 
        switch ($url_array[1]) 
        {
            case 'curso':
                $row = $CI->Curso_model->get_informacion_curso($url_array[3]);
           
                $item = $row['nombre'];
                break;
            
            case 'producto':
                $row = $CI->Producto_model->get_informacion_producto($url_array[3]);
     
                $item = $row['nombre'];
                break;

            case 'servicio':
                $row = $CI->Servicio_model->get_informacion_servicio($url_array[3]);
 
                $item = $row['titulo'];
                break;
            
        }

        /*----------------------------------------------------------*/

        $configuracion = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'digipayargentina@gmail.com',
                'smtp_pass' => 'digipay2016',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n",
                 'smtp_timeout' => 30,
            );

        //Cargamos la configuración 

        $CI->email->initialize($configuracion);
        $CI->email->from("info@morospa.com");
        $CI->email->subject("Moro SPA - Contacto web");

        //$CI->email->to("info@cristinamoro.com.ar");

        $CI->email->cc('adrian.magliola@gmail.com');

        $mensaje = "";

        $mensaje .= "Nombre: ".$array['nombre']."<br>";
        $mensaje .= "Apellido: ".$array['apellido']."<br>";
        $mensaje .= "Email: ".$array['email']."<br>";

        if($array['telefono'])
            $mensaje .= "Telefono: ".$array['telefono']."<br>";

        if($array['ubicacion'])
            $mensaje .= "Ubicacion: ".$array['ubicacion']."<br>";

        if($array['comentario'])
            $mensaje .= "Comentario: ".$array['comentario']."<br>"; 


        $mensaje .= "Url: ".$url_referer."<br>";

        if($item)
            $mensaje .= "Item: ".$item."<br>";


        $CI->email->message($mensaje);

        if( $CI->email->send() ):

            chrome_log("ENVIO EL EMAIL");  
            $return["error"] = false;

        else:
            
            chrome_log("NO ENVIO EL EMAIL"); 
            $return["error"] = true;
            

        endif;
    }
}

// Mensaje de error de las variables flash session
if(!function_exists('active_url'))
{
    function active_url($uri)
    {
        echo $this->uri->segment(1) ;
    }
}

// Mensaje de error de las variables flash session
if(!function_exists('ver_avales'))
{
    function ver_avales()
    { ?>
        
        <div class="row">
            <div class="col-4 col-md-12 "   >
                <img class="img-rounded img-thumbnail thumbnail avales" src="<?=base_url()?>assets/img/avales/centro_internacional.png">
            </div>
       
         
            <div class="col-4 col-md-12 "  >
                <img class="img-rounded img-thumbnail thumbnail avales" src="<?=base_url()?>assets/img/avales/federacion_argentina.jpeg">
            </div>
       
         
            <div class="col-4 col-md-12 "  >
                <img class="img-rounded img-thumbnail thumbnail avales" src="<?=base_url()?>assets/img/avales/acyeba.jpg">
            </div>
        </div>
       
    <? 
    }
}

// Mensaje de error de las variables flash session
if(!function_exists('ver_formulario_contacto'))
{
    function ver_formulario_contacto()
    { ?>
        <label> Informes y consultas </label>
        <form id="form_contacto" name="form_contacto" method="post" action="<?=site_url('contacto/procesar_contacto')?>">
            <div class="form-group div_contacto_form"> 
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre *">
            </div>
            <div class="form-group div_contacto_form"> 
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido *">
            </div>
            <div class="form-group div_contacto_form"> 
                <input type="text" class="form-control" id="email" name="email" placeholder="Email *">
            </div>
            <div class="form-group div_contacto_form"> 
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono celular y/o fijo">
            </div>
            <div class="form-group div_contacto_form"> 
                <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Localidad y país">
            </div>
            <div class="form-group div_contacto_form"> 
                <textarea class="form-control" id="comentario" name="comentario" placeholder="Comentario"></textarea>   
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>
       
    <? 
    }
}