 <?php

include 'usuarios.php';


                            global $current_user;
                            $current_user = wp_get_current_user();
                            $user_info = get_userdata($current_user->ID);
                            $first_name = $user_info->first_name;
                            $last_name = $user_info->last_name;
                            $user_email = $user_info->user_email;

                            ?>


            
                                    <?php 

                                    // LISTA DE EMPRESAS + ROLES + CONSULTORES + SUPERVISORES
                                    
                                    switch ($user_email) {
                                        case $rogerio:
                                            # code...
                                            echo do_shortcode( '[xyz-ips snippet="panelsphp"]' ); 
                                            break;

                                            case $liane:
                                            echo do_shortcode( '[xyz-ips snippet="panelsphp"]' ); 
                                            break;

                                            case $admin:
                                            echo do_shortcode( '[xyz-ips snippet="panelsphp"]' ); 
                                            break;

                                            case $liego:
                                            echo do_shortcode( '[xyz-ips snippet="panelsphp"]' ); 

                                        
                                        default:
                                            echo "email não cadastrado no sistema, favor entrar em contato com o suporte";
                                            break;
                                    }
                                    
                                    
                                    
                                   ?>