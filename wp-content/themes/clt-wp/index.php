<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CLT-WP
 */

get_header();
wp_head();
?>

<div class="inner-banner-img-holder">
<?php echo get_the_post_thumbnail();?>
<h3><?php the_title();?></h3>
</div>

<style>
	.clt-post {}
.clt-post .main-clt-post {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    border: 1px solid #ddd;
    margin: 70px 0;
	cursor: pointer;
}
.clt-post .main-clt-post .inner-post {
	padding: 0 20px 0 0;
}
.clt-post .main-clt-post .inner-post .content {}
.clt-post .main-clt-post .inner-post:nth-child(2) {}
.clt-post .main-clt-post .inner-post:nth-child(2) .content {
    padding: 20px 10px;
}
.clt-post .main-clt-post .inner-post .content .post-thumnail-holder {
	height: 300px;
	clip-path: polygon(0 0, 100% 0%, 90% 100%, 0% 100%);
	transition: 0.5s;
}
.clt-post .main-clt-post:hover .inner-post .content .post-thumnail-holder {
    clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
}
.clt-post .main-clt-post .inner-post .content .post-thumnail-holder img {
	width: 100%;
    height: 100%;
    object-fit: cover;
}
.clt-post .main-clt-post .inner-post .content .post-details {}
.clt-post .main-clt-post .inner-post .content .post-details h2 {}
.clt-post .main-clt-post .inner-post .content .post-details p {
	display: -webkit-box;
    overflow: hidden;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}
.clt-post .main-clt-post .inner-post .content .post-details .post-btn {}
.clt-post .main-clt-post .inner-post .content .post-details .post-btn a {
	padding: 7px 10px;
    background-color: #ff4318;
    color: #fff;
    outline: none;
    border: 0;
    clip-path: polygon(0 0, 100% 0, 100% 60%, 90% 100%, 0 100%);
    border: 3px solid #ff4318;
    display: inline-block;
	transition: 0.5s
}
.clt-post .main-clt-post:hover .inner-post .content .post-details .post-btn a {
	clip-path: polygon(0 0, 100% 0, 100% 60%, 100% 100%, 0 100%);
}
.clt-post .main-clt-post .inner-post .content .post-details .time {}
.clt-post .main-clt-post .inner-post .content .post-details .time span {
    margin-right: 14px;
}
.clt-post .main-clt-post .inner-post .content .post-details .time span i {
    margin-right: 6px;
}
.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
}
@media only  screen and (max-width: 767px){
	.clt-post .main-clt-post .inner-post .content .post-thumnail-holder {
    clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
}
.clt-post .main-clt-post .inner-post {
    padding: 0 0px 0 0;
}
}
</style>
<div class="clt-post">
	<div class="container">
		<?php 
		while(have_posts()){
			the_post();
		?>
		<div class="row main-clt-post">
			<div class="col-md-4 inner-post">
				<div class="content">
					<div class="post-thumnail-holder">
					<?php echo get_the_post_thumbnail();?>
					</div>
				</div> 
			</div> 
			<div class="col-md-8 inner-post">
				<div class="content">
					<div class="post-details">
						<h2><?php the_title();?></h2>
						<div class="time">
             			 <span><i class="fa fa-user"></i><?php the_author(); ?></span>
             			 <span><i class="fa fa-calendar"></i><?php echo get_the_date();?></span>
            			</div>
						<p><?php the_excerpt();?></p>
						<div class="post-btn">
						<a href="<?php the_permalink();?>" >Read more</a>
						</div>
					</div>
				</div> 
			</div>
		</div>
		<?php } ?>
		<div class="pagination text-center"><?php  wp_pagenavi();?></div>
	</div>
		
	</div>

<?php
get_footer();
