<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <?php wp_head();?>
   
</head>    

    <header >
    <div class="container-fluid">
        <div class="row">
            <div class="col-4" id="logo">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<img class="logo-head"  src="'. esc_url( $logo[0] ) .'">';
                } else {
                        echo '<img src="'. get_stylesheet_directory_uri() . '/images/sciencetech.png' .'">';
                }
?>
            </div>
           
            <div class="col-5">
                    <?php 
        
            wp_nav_menu(
                
                array(

                    'menu' => 'top bar',
                    
                    'menu_class' => 'top-bar'
                )

            );
            
            
                    ?>
            </div>
            <div class="col-2">
                <?php 
            wp_nav_menu(
                
                array(

                    'menu' => 'second bar',
                    
                    'menu_class' => 'second-bar'
                )

            );
            ?>


            </div>
        </div>    
            <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-6">
                            <?php 
                
                    wp_nav_menu(
                        
                        array(

                            'menu' => 'buttom bar',
                            
                            'menu_class' => 'buttom-bar'
                        )

                    );
                    
                    
                            ?>
            </div>
         
        </div>

      
    
    </div>
    </header>


<body>
    
