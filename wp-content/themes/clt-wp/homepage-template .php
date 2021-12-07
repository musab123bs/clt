<?php
/* Template Name: Home */

get_header();
the_post();
?>
 <!-- banner -->

 <div class="banner">
            <div class="banner-img-holder">
            </div>
           <div class="container d-flex">
            <div class="banner-content">
              <h2>Consectetus<br>Adipiscing Tempus</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, autem.</p>
              <a href="#" class="banner-btn">EXPLORE <i class="fa fa-chevron-right"></i></a>
            </div>
            <?php echo do_shortcode("[tabs-view]");?>
           </div>
          </div>

	  <!-- cities slider -->

	  <section class="city-building">
            <div class="row">
              <div class="col-md-3 col-lg-3 col-sm-5">
                <div class="inner-city-buid-content">
                  <div class="city-col left-city">
                    <h4>FUSCE DAPIBUS</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, perferendis!</p>
                  </div>
                </div>
              </div>
              <div class="col-md-9 col-lg-9 col-sm-7 col-12 neg-margin p-0">
                <div class="inner-city-buid-content">
                  <div class="city-col right-city">
                      <div class="city-img-holder">
                       <?php 
                       if( have_rows('city', 8) ){
                        while( have_rows('city', 8) ){
                          the_row();
                       ?>
                        <img src="<?php echo get_sub_field('city_image', 8);?>">
                        <?php }}?>
                      </div>
                  </div>
                </div>
              </div>
            </div>
      </section>

          <!-- Thumb slider -->

          <section class="thumb-slider" id="about">
            <div class="container">
               <div class="thumb-container-wrapp">
                <div class="row">
                  <div class="col-md-4 p-0 img-holder">
                    <div class="inner-thumb">
                      <div class="img-holder">
                        <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/second-slider-left.png" alt="sl-left"> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 p-0">
                    <div class="inner-thumb">
                      <div class="inner-right-content">
                        <div class="thum-ri-heading">
                          <h3>EOS TATION ERIPUIT  VOLUPTUA</h3>
                        </div>
                        <div class="thumb-ri-para">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit nulla ad eaque? Fugit consequatur optio nemo dolorem sapiente similique est!</p>
                        </div>
                        <div class="thumb-slider-images">
                          <img src="<?php echo get_template_directory_uri();?>/assets/images/thumb-slider-1.png" alt="">
                          <img src="<?php echo get_template_directory_uri();?>/assets/images/thumb-slider-2.png" alt="">
                          <img src="<?php echo get_template_directory_uri();?>/assets/images/thumb-slider-3.png" alt="">
                          <img src="<?php echo get_template_directory_uri();?>/assets/images/thumb-slider-4.png" alt="">
                          <img src="<?php echo get_template_directory_uri();?>/assets/images/thumb-slider-2.png" alt="">
                        </div>
                        <div class="explore-btn">
                          <span>Explore <a href="#"><i class="fa fa-chevron-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- location -->
          <div class="location">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 pr-0 pl-0 inner-location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5319479.189417651!2d2.280451656064152!3d49.38238817412999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd6e6c430575d5%3A0x689a42951641f833!2sNefis%20Restaurant!5e0!3m2!1sen!2s!4v1634177053174!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-6 pl-0">
                  <div class="inner-location">
                    <div class="location-desc">
                      <h3>EOS TATION ERIPUIT  VOLUPTUA</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum vel officiis odio inventore eos ea, impedit distinctio atque?</p>
                    </div>
                    
                  <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12 p-0">
                      <div class="location-holder">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/contact-img.png" alt="location">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="destination-details">
                        <div class="venues-details">
                          <span><i class="fa fa-chevron-right"></i>UBIQUE</span>
                          <span><i class="fa fa-chevron-right"></i>ACCUSUM</span>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, totam!</p>
                        </div>
                        <div class="location-btn theme-btn">
                          <a href="#"><i class="fa fa-pole"></i>ULAMCORPER</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <section class="single-content">
            <div class="container">
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <div class="single-para-and-btn">
                    <div class="single-section theme-btn">
                      <a href="#">EOS TATION ERIPUIT  VOLUPTUA</a>
                    </div>
                    <div class="loc-bottom-para text-center">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quaerat ratione reprehenderit dolores laudantium numquam quas tempore veniam tempora. Itaque nobis officiis molestiae blanditiis rem molestias deleniti iusto quam doloribus.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- gallery -->
          <section class="gallery">
            <div class="container">
              <div class="row">
                <div class="col-md-3 col-sm-6 col-12 p-md-1 p-1">
                  <div class="image-holder">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/gal-1.png" alt="g-1">
                  </div>
                  <div class="image-holder">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/gal-2.png" alt="g-2">
                  </div>
                  <div class="image-holder">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/gal-3.png" alt="g-3">
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 p-md-1 p-1">
                  <div class="image-holder">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/gal-4.png" alt="g-4">
                  </div>
                  <div class="image-holder">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/gal-5.png" alt="g-5">
                  </div>
                  <div class="image-holder">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/gal-6.png" alt="g-6">
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 p-md-1 p-1">
                  <div class="image-holder">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/gal-7.png" alt="g-7">
                  </div>
                  <div class="image-holder">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/gal-8.png" alt="g-8">
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 p-md-1 p-1">
                  <div class="image-holder">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/gal-9.png" alt="g-9">
                  </div>
                  <div class="image-holder">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/gal-10.png" alt="g-10">
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Video slider -->
          <div class="video-slider">
            <div class="video-hoder">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/vid-1.png" alt="1">
            </div>
            <div class="video-hoder">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/vid-2.png" alt="2">
            </div>
            <div class="video-hoder">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/vid-3.png" alt="3">
            </div>
            <div class="video-hoder">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/vid-4.png" alt="4">
            </div>
            <div class="video-hoder">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/vid-1.png" alt="5">
            </div>
            <div class="video-hoder">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/vid-2.png" alt="6">
            </div>
          </div>

          <!-- Car Rent  -->
		  <?php 
						$post_21 = get_post( 71 ); 
						$title = $post_21->post_title;
						$content = $post_21->post_content;
            $img = $post_21->post_image;
						?>
          <section class="car-rent">
            <div class="container-fluid">
              <div class="row mx-auto">
                <div class="main-heading">
                  <h1><?php echo $title;?></h1>
                  <p><?php echo $content;?></p>
                  <img src="<?php echo $img['url']?>" alt="">
                </div>
				<?php
			 	if( have_rows('car_rental_trip', 71) ) {
					 while( have_rows('car_rental_trip', 71) ){
						 the_row();
					?>
                <div class="col-md-3 col-sm-6">
                  <div class="inner-car-rent">
                    <div class="car-img-holder">
                      <img src="<?php echo get_sub_field('car_rental_image', 71);?>"/>
                    </div>
                    <div class="car-descr">
                      <a href="#"><?php echo get_sub_field('car_rental_name', 71);?></a>
                    </div>
                  </div>
                </div>
				<?php }} ?>
                <div class="spacer"></div>
                <div class="book-now-btn theme-btn">
					<?php 
					$post_21 = get_post( 91 );
					$link = $post_21->post_link;
					?>
                  <a href="http://localhost/clt-wp/car-gallery/">BOOK NOW</a>
                  <!-- <a href="<?php echo $link; ?>">BOOK NOW</a> -->
                </div>
              </div>
            </div>
          </section>

          <!-- contact form -->

          <section class="mail-form">
            <div class="container">
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <div class="inner-mail-content">
                    <div class="heading">
                      <h3>FUSCE DAPIBUS</h3>
                    </div>
                    <div class="para">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, voluptate.</p>
                    </div>
                    <div class="input">
                      <input type="email" name="name" placeholder="Your Email">
                      <button class="submit-btn"><i class="fa fa-envelope"></i>FUSCE DAPIBUS</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

<?php
get_footer();
