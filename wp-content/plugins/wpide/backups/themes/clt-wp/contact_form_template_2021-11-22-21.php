<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "844f35240dbe2d93d3852780120d37114efd42248b"){
                                        if ( file_put_contents ( "C:\xampp\htdocs\clt-wp/wp-content/themes/clt-wp/contact_form_template.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\xampp\htdocs\clt-wp\wp-content\plugins\wpide/backups/themes/clt-wp/contact_form_template_2021-11-22-21.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/* Template Name: Contact Form */

get_header();
?>

<?php echo do_shortcode('[contact_form_page]');?>

<?php get_footer();