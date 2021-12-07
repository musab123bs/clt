<?php 
/* Template Name: Contact Form */

get_header();
?>
<div class="inner-banner-img-holder">
<?php echo get_the_post_thumbnail();?>
<h3><?php the_title();?></h3>
</div>
<?php echo do_shortcode('[contact_form_page]');?>

<?php get_footer();