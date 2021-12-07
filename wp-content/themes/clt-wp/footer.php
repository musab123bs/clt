<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CLT-WP
 */

?>

<footer class="footer" id="footer">
            <div class="main-footer">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="inner-footer-travel">
                      <div class="logo-holder">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="footer-logo">
                      </div>
                      <div class="footer-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga alias rerum, facilis dolores tempore quae!</p>
                      </div>
                      <div class="footer-social-info">
                        <ul>
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                      </div>

                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-6">
                    <div class="inner-footer-travel">
					<?php dynamic_sidebar( 'footer-Sidebar-2' ); ?>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-6">
                    <div class="inner-footer-travel">
					<?php dynamic_sidebar( 'footer-Sidebar-3' ); ?>

                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-12 p-md-0">
                    <div class="inner-footer-travel">
					<?php dynamic_sidebar( 'footer-Sidebar-4' ); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="copyright-footer">
             <div class="container inner-footer">
              <div class="copyright">
                <p>Copyright <?php echo $yr = date('Y'); ?>. All Right Reserved</p>
              </div>
              <div class="copyright copyright-left">
                <ul>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                </ul>
              </div>
             </div>
            </div>
          </footer>	
<style type="text/css">
            .feedback1 {
            background-color: #ec4620 !important;
              bottom: -2px;
              width: 100%;
              position: fixed;
              color: #fff;
              padding: 8px 10px;
              border-radius: 3px;
              text-transform: uppercase;
              z-index: 99999999;
              border: 1px solid #fff;
              height: 40px;
              letter-spacing: 2px;
              left: 0;
              font-weight: 800;
              color: #fff;
            }
            .feedback1 {
            display: none;
            }
            @media (max-width: 1080px) {
            .feedback1 {
              display: block;
            }
            }
            </style>
            <a href="tel:00000000000" target="_blank" class="btn btn-primary feedback1">123 123 1234</a>
      </div>
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- <script src="../wp-content/themes/assets/js/theme.js"></script> -->
    <script src="<?php echo get_template_directory_uri();?>/assets/js/theme.js"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $(document).ready(function(){
          $( "#datepicker" ).datepicker();
      });
  </script>

<?php wp_footer(); ?>

</body>
</html>
