<?php
/* Template Name: Rental Car Template */

get_header();
?>

<div class="inner-banner-img-holder">
<?php echo get_the_post_thumbnail();?>
<h3><?php the_title();?></h3>
</div>
	 <!-- Car Rent  -->
                       <?php 
						$post_21 = get_post( 91 ); 
						$title = $post_21->post_title;
						$content = $post_21->post_content;
						?>
          <section class="car-rent top-banner">
            <div class="container-fluid">
              <div class="row mx-auto">
                <div class="main-heading">
                  <h1><?php echo $title;?></h1>
                  <p><?php echo $content;?></p>
                </div>
				<?php
			 	if( have_rows('car_rental_trip', 91) ) {
					 while( have_rows('car_rental_trip', 91) ){
						 the_row();
					?>
                <div class="col-md-3 col-sm-6">
                  <div class="inner-car-rent">
                    <div class="car-img-holder">
                      <img src="<?php echo get_sub_field('car_rental_image', 91);?>"/>
                    </div>
                    <div class="car-descr">
                      <a href="#"><?php echo get_sub_field('car_rental_name', 91);?></a>
                    </div>
                  </div>
                </div>
				<?php }} ?>
                <div class="spacer"></div>
                <div class="book-now-btn theme-btn">
                  <a href="#">BOOK NOW</a>
                </div>
              </div>
            </div>
          </section>
<?php
get_footer();
