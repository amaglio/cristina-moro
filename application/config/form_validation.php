<?php

$config = array(
            
    // --------------------------------- LOGUEO ADMIN ------------------------------


            'loguearse' => array(
                                    array(
                                            'field' => 'usuario',
                                            'label' => 'usuario',
                                            'rules' => 'required|trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'clave',
                                            'label' => 'clave',
                                            'rules' => 'required|trim|xss_clean'
                                        )
                                ),

            'buscar_cursos' => array(
                                    array(
                                            'field' => 'id_tema',
                                            'label' => 'id_tema',
                                            'rules' => 'trim|xss_clean|callback_validate_either'
                                        ),
                                    array(
                                            'field' => 'id_modalidad',
                                            'label' => 'id_modalidad',
                                            'rules' => 'trim|xss_clean|callback_validate_either'
                                        ) 
                                ),

             'buscar_servicios' => array(

                                    array(
                                            'field' => 'id_tipo_servicio',
                                            'label' => 'id_tipo_servicio',
                                            'rules' => 'trim|xss_clean|required'
                                        ) 
                                ),

             'buscar_productos' => array(

                                    array(
                                            'field' => 'id_producto_tipo',
                                            'label' => 'id_producto_tipo',
                                            'rules' => 'trim|xss_clean|required'
                                        ) 
                                ),
 
                                
);


?>