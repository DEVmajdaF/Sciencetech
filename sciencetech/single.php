<?php get_header(); ?>

<section class="page-wrap">
<div class="container ">

    <h1><?php the_title(); // the title of the post ?> </h1>
    <?php get_template_part('includes/section','blogcontent');?>
    <?php 
    if(comments_open() || get_comments_number()){
        comments_template();
    }
    ?>

    
 
</div>
</section>


<?php get_footer(); ?>