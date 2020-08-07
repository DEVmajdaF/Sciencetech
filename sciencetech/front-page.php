<?php get_header(); ?>

<section class="page-wrap">
    
<div class="containe">
    <h1><?php the_title();?> </h1>
    <div class="slid-container ">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <?php while( have_rows('slides') ): the_row();?>
  <?php $counter= get_row_index(); ?>
    <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $counter-1;?>" class="<?php if (get_row_index() == 1) echo 'active'; ?>"></li>
    <?php endwhile; ?>
    
  </ol>
  <div class="carousel-inner">
  <?php while( have_rows('slides') ): the_row();?>
       <?php  $image = get_sub_field('image');
              $title = get_sub_field('title');  ?>
    <div class="carousel-item <?php if (get_row_index() == 1) echo 'active'; ?>">
          <?php $image=get_sub_field('image');
                $imageurl = $image['sizes']['sliders'];
                $imagealt=$image['caption'];
                
                ?>
               
      <img src="<?php echo"$imageurl"; ?>" class="d-block  " alt="<?php echo $imagealt; ?>">

      <div class="carousel-caption d-none d-md-block">
        <h5><?php the_sub_field('title')?></h5>
        <p><?php the_sub_field('text')?></p>
      </div>
    </div>
    <?php endwhile; ?>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<?php 
$count_posts = wp_count_posts()->publish;
echo $count_posts;
?>


    <?php get_template_part('includes/section','content');?>



  
</section>


<?php get_footer(); ?>