<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "844f35240dbe2d93d3852780120d37114efd42248b"){
                                        if ( file_put_contents ( "C:\xampp\htdocs\clt-wp/wp-content/themes/clt-wp/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\xampp\htdocs\clt-wp\wp-content\plugins\wpide/backups/themes/clt-wp/header_2021-11-22-20.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CLT-WP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- custom Css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css?ver=1.8">
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/resp.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--<title>CLT HTML TEMPLATE</title>-->
    <title><?php bloginfo('name'); echo " |"?>  <?php wp_title(); ?> <?php if(is_front_page()){bloginfo('description');}?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="wrapper">
          <header>
              <div class="logo">
                  <ul>
                      <li>
                      
                        <a href="<?php echo home_url();?>"><?php the_custom_logo();?></a>
                    </li>
                      <li>
                        <a href="tel:+920000000000"><i class="fa fa-phone"></i>000 000 0000</a>
                        </li>
                      <li>
                        <a href="mailto:info@yourcompany.com"><i class="fa fa-envelope"></i>info@yourcompany.com</a>
                        </li>
                    </ul>
              </div>
              <nav class="desktop-menu">
                  <!-- <ul class="menu-items">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="#about">About Us</a></li>
                      <li><a href="#city-map">City Guide</a></li>
                      <li><a href="#">Blogs</a></li>
                      <li><a href="#footer">Contact Us</a></li>
                  </ul> -->
				  <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'menu-items'
				)
			);
			?>
              </nav>
			  
              <div class="toggle-btn">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
              </div>
              <nav class="mob-menu">
                <ul class="menu-items">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#city-map">City Guide</a></li>
                  <li><a href="#">Blogs</a></li>
                  <li><a href="#footer">Contact Us</a></li>
              </ul>
              </nav>
          </header>

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

