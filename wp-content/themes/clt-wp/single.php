<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CLT-WP
 */

get_header();
wp_head();
?>
<style>
	.clt-post-single {}
.clt-post-single .main-clt-post-single {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    border: 1px solid #ddd;
    margin: 70px 0;
	cursor: pointer;
}
.clt-post-single .main-clt-post-single .inner-post {
	padding: 0;
}
.clt-post-single .main-clt-post-single .inner-post .content {
	position: relative;
}
.clt-post-single .main-clt-post-single .inner-post:nth-child(2) {}
.clt-post-single .main-clt-post-single .inner-post:nth-child(2) .content {
    padding: 20px 10px;
}
.clt-post-single .main-clt-post-single .inner-post .content .post-thumnail-holder {
	height: 400px;
}
.clt-post-single .main-clt-post-single:hover .inner-post .content .post-thumnail-holder {
    clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
}
.clt-post-single .main-clt-post-single .inner-post .content .post-thumnail-holder img {
	width: 100%;
    height: 100%;
    object-fit: cover;
}
.clt-post-single .main-clt-post-single .inner-post .content .post-details {}
.clt-post-single .main-clt-post-single .inner-post .content .post-details h2 {
	position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    flex-direction: column;
    color: #fff;
    font-size: clamp(1.7rem, 3.3vw, 3.8rem);
	filter: drop-shadow(2px 4px 2px #000);
	text-align: center;
}
.clt-post-single .main-clt-post-single .inner-post .content .post-details p {
	display: -webkit-box;
    overflow: hidden;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}
.clt-post-single .main-clt-post-single .inner-post .content .post-details .post-btn {}
.clt-post-single .main-clt-post-single .inner-post .content .post-details .post-btn a {
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
.clt-post-single .main-clt-post-single:hover .inner-post .content .post-details .post-btn a {
	clip-path: polygon(0 0, 100% 0, 100% 60%, 100% 100%, 0 100%);
}
.clt-post-single .main-clt-post-single .inner-post .content .post-details .time {
	position: absolute;
    top: 95%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    color: #f00;
    z-index: 44;
    background-color: #fee04a;
    padding: 10px 20px;
}
.clt-post-single .main-clt-post-single .inner-post .content .post-details .time span {
    margin-right: 14px;
}
.clt-post-single .main-clt-post-single .inner-post .content .post-details .time span i {
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
</style>
<div class="clt-post-single">
	<div class="container">
		<div class="row main-clt-post-single">
			<div class="col-md-12 inner-post">
				<div class="content">
					<div class="post-thumnail-holder">
					<?php echo get_the_post_thumbnail();?>
					</div>
					<div class="post-details">
						<h2><?php the_title();?></h2>
						<div class="time">
             			 <span><i class="fa fa-user"></i><?php echo get_the_author(); ?></span>
             			 <span><i class="fa fa-calendar"></i><?php echo get_the_date();?></span>
            			</div>
					</div>
				</div> 
			</div> 
			<div class="col-md-12 inner-post">
				<div class="content">
					<div class="post-details-para">
					   <p><?php the_content();?></p>
					</div>
				</div> 
			</div>
		</div>
		<div class="pagination text-center"><?php  wp_pagenavi();?></div>
	</div>
		
	</div>
	<div class="comment-box">
		<div class="container">
			<div class="row">
				<div class="col-md-9 ax-auto">
					<div class="comment-form-holder">
						<?php comments_template();?>
					</div>
				</div>
			</div> 
		</div>
	</div>

<?php
get_footer();
