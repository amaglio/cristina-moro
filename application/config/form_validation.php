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
            
            'procesar_contacto' => array(

                                    array(
                                            'field' => 'nombre',
                                            'label' => 'nombre',
                                            'rules' => 'trim|xss_clean|required'
                                        ),
                                    array(
                                            'field' => 'apellido',
                                            'label' => 'apellido',
                                            'rules' => 'trim|xss_clean|required'
                                        ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'email',
                                            'rules' => 'trim|xss_clean|required'
                                        )  
                                ),

                'ver_curso' => array(

                                        array(
                                                'field' => 'id_curso',
                                                'label' => 'id_curso',
                                                'rules' => 'required|trim|xss_clean|numeric|callback_comprobar_curso_existente'
                                            ) 
                                ),
                'ver_producto' => array(

                                        array(
                                                'field' => 'id_producto',
                                                'label' => 'id_producto',
                                                'rules' => 'required|trim|xss_clean|numeric|callback_comprobar_producto_existente'
                                            ) 
                                ),
                'ver_servicio' => array(

                                        array(
                                                'field' => 'id_servicio',
                                                'label' => 'id_servicio',
                                                'rules' => 'required|trim|xss_clean|numeric|callback_comprobar_servicio_existente'
                                            ) 
                                ),
);


?>