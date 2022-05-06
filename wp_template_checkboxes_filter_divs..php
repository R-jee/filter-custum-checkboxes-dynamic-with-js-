<?php
/**
 * Template Name: Success Stories Demo
 */

 //get_template_part('templates/page-header'); 
 
?>
<style>
.page-breadcrumbs {
	display: none !important;
}
.row.cls-spacer {
	padding-top: 60px;
	padding-bottom: 60px;
}
.spl-demo-page .post h3 {
	line-height: normal;
	font-size: 1rem;
	margin: .75rem .33rem;
	letter-spacing: normal;
	margin-bottom: 0;
	min-height: 70px;
	display:block;
}
.row.cls-spacer.end-secline {
	border-top: 1px solid #e9e9e9;
}
.cls-spacer.end-secline .post h3 {
	font-size: 14px;
	min-height: 60px;
}
.cls-spacer.end-secline .post.box {
	min-height: 240px;
	margin-bottom: 30px;
}
.bg-page-nws h2 {
	color: #fff;
	font-family: Open Sans Condensed,sans-serif;
	font-size: 40px;
	font-weight: 700;
	line-height: 1.3;
	margin-bottom: 12px;
	position: relative;
	text-shadow: 2px 2px 2px rgba(0,0,0,.35);
	text-transform: uppercase;
}
.bg-page-nws .txt-orange {
	font-size: 22px;
	line-height: normal;
	text-transform: uppercase;
	text-shadow: 1px 1px 1px rgba(0,0,0,.15);
}
.bg-page-nws .button {
	font-family: Open Sans Condensed,sans-serif;
}
.spl-main-page {
	background-color: #014690;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center center;
}
.bg-page-nws {
	display: flex;
	width: 100%;
	max-width: 1200px;
	margin-right: auto;
	margin-left: auto;
	min-height: 480px;
	align-items: center;
}
.bg-page-nws .bg-page-nws-inner {
	display: block;
	max-width: 640px;
	width: 100%;
	padding: 0 15px;
}
.txt-orange {
	color: #f50;
}
.filter_rc_nws h4 {
	display: block;
	color: #505050;
	margin-top: 25px;
	font-size: 18px;
	line-height: normal;
	margin-bottom: 15px;
}
.filter_rc_nws ul {
	display: block;
	margin: 0;
	padding: 0;
}
.filter_rc_nws {
	display: block;
	padding-left: 12px;
}
.filter_rc_nws ul li {
	display: block;
	list-style: none;
	margin-left: 2px;
	line-height: normal;
	font-size: 15px;
	position: relative;
	margin-bottom: 8px;
	cursor: pointer;
}
.filter_rc_nws ul li input {
	margin-right: 8px;
}
.filter_rc_nws ul li input {
	margin-right: 0;
	margin-bottom: 0;
	position: absolute;
	left: 0;
	right: 0;
	display: block;
	top: 0;
	bottom: 0;
	width: 100%;
	opacity: 0;
	cursor: pointer;
	height: 100%;
}
.filter_rc_nws ul li::before {
	content: "";
	display: inline-block;
	width: 15px;
	height: 15px;
	background: transparent;
	margin-right: 8px;
	line-height: normal;
	border-radius: 2px;
	border: 2px solid #505050;
	position: relative;
	top: 2px;
}
.filter_rc_nws ul li.activefilter::after {
	content: "";
	display: block;
	background: #ff5500;
	width: 8px;
	height: 8px;
	position: absolute;
	top: 7px;
	left: 3.5px;
}
@media screen and (max-width:900px){
    .row.cls-spacer.end-secline {
    	display: flex;
    	flex-wrap: wrap;
    	flex-direction: column-reverse;
    }
    .row.cls-spacer .small-9.columns {
    	width: 100%;
    }
    .row.cls-spacer .small-3.columns {
    	width: 100%;
    }
    .filter_rc_nws {
    	display: block;
    	padding-left: 15px;
    	margin-bottom: 40px;
    }
}
@media screen and (max-width:480px){
    .bg-page-nws h2 {
    	font-size: 25px;
    }
}
</style>
<?php 
$image = get_field('background_image');
$subtitle = get_field('subtitle');
$title = get_field('title');
$btext = get_field('button_text');
$blink = get_field('button_link');
?>
<section class="spl-main-page" style="background-image:url('<?php if( $image ){ echo $image; } ?>');" >
    <div class="bg-page-nws" >
      <div class="bg-page-nws-inner" >
        <?php if( $subtitle ){ ?><h3 class="txt-orange" ><?php echo $subtitle; ?></h3><?php } ?>
        <?php if( $title ){ ?><h2><?php echo $title; ?></h2><?php } ?>
        <?php if( $btext ){ ?><a href="<?php echo $blink; ?>" class="button orange" ><?php echo $btext; ?></a><?php } ?>
    </div>
  </div>
</section>
<section class="post-archive-content spl-demo-page">
 <div class="row cls-spacer" >
  <div class="small-12 columns" >
    <div class="row" >
        <?php
        $featured_posts = get_field('featured_posts');
        if( $featured_posts ){ ?>
            <?php foreach( $featured_posts as $post ){
                setup_postdata($post); ?>
                <div class="small-12 medium-4 columns end">
                    <div class="post box box-border box-rounded">
                      <a href="<?php the_permalink(); ?>">
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                        <img src="<?php echo $url; ?>" />
                        <h3><?php the_title(); ?></h3>
                      </a>
                    </div>
                </div>
              <?php } 
            wp_reset_postdata(); 
          } ?>
      </div>
     </div>
    </div>
    <div class="row cls-spacer end-secline" >
        <div class="small-9 columns" >
            <div class="row" >
                <?php
                $args = array(
                'post_type'=> 'post',
                'post_status' => 'publish',
                'order'    => 'ASC',
                'posts_per_page' => -1 // this will retrive all the post that is published 
                );
                $result = new WP_Query( $args );
                if ( $result-> have_posts() ){ ?>
                    <?php while ( $result->have_posts() ){ $result->the_post(); 
                        $terms = get_the_terms( $post->ID , 'category'); ?>
                        <div class="small-12 medium-4 columns end filter-items-nws" <?php foreach( $terms as $term ) { $cat_obj = get_term($term->term_id, 'category'); $cat_slug = $cat_obj->slug; ?>data-cat-<?php echo $cat_slug; ?>="true"<?php } ?> >
                            <div class="post box box-border box-rounded">
                              <a href="<?php the_permalink(); ?>">
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                                <img src="<?php echo $url; ?>" />
                                <h3><?php the_title(); ?></h3>
                              </a>
                            </div>
                        </div>
                      <?php } 
                    wp_reset_postdata(); 
                  } ?>
              </div>
        </div>
        <div class="small-3 columns" >
          <div class="filter_rc_nws">
            <h2>Filter Resources</h2>
            <h4>Categories</h4>
            <ul>
                <?php $categories = get_categories(); foreach($categories as $category) { ?>
                  <li class="" data-cat="<?php echo $category->slug; ?>" ><input type="checkbox" name="filter_nws" value="<?php echo $category->slug; ?>" /><?php echo $category->name; ?></li>
                <?php } ?>
            </ul>
          </div>
        </div>
  </div>
 </div>
</section>
<script>
    jQuery(document).ready(function(){
        jQuery(".filter_rc_nws ul li").click(function(){
            jQuery(this).toggleClass("activefilter");
        });
        
        //  NWS- filter checked box function work ----
        
        
        var checked_boxes = jQuery(".filter_rc_nws ul li").length;
        setInterval(()=>{
            if( jQuery('.filter_rc_nws ul li input:checked').length  == 0 ){
                jQuery(".post-archive-content .filter-items-nws").css('display', 'block');
            }
        },1000);
        for (let index = 0; index < checked_boxes; index++) {
            var check_uniq_id = null;
            var check_uniq_id = jQuery(jQuery(".filter_rc_nws ul li")[index]).attr('data-cat');
            
            jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").on("click",function() {
                
                if (jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").is(":checked")) {
                    jQuery(".post-archive-content .filter-items-nws[data-cat-"+ check_uniq_id +"='true']").css('display', 'block');
                } else if (jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").is(":not(:checked)")) {
                    jQuery(".post-archive-content .filter-items-nws[data-cat-"+ check_uniq_id +"='true']").css('display', 'none');
                }
                for (let index = 0; index < checked_boxes; index++) {
                    var check_uniq_id = null;
                    var check_uniq_id = jQuery(jQuery(".filter_rc_nws ul li")[index]).attr('data-cat');
                    if (jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").is(":checked")) {
                        jQuery(".post-archive-content .filter-items-nws[data-cat-"+ check_uniq_id +"='true']").css('display', 'block');
                    } else if (jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").is(":not(:checked)")) {
                        jQuery(".post-archive-content .filter-items-nws[data-cat-"+ check_uniq_id +"='true']").css('display', 'none');
                    }
                }
            });
        }
        
        
        
        // var checked_boxes = jQuery(".filter_rc_nws ul li").length;
        // for (let index = 0; index < checked_boxes; index++) {
        //     var check_uniq_id = null;
        //     var check_uniq_id = jQuery(jQuery(".filter_rc_nws ul li")[index]).attr('data-cat');
            
        //     jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").on("click",function() {
                
        //         if (jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").is(":checked")) {
        //             jQuery(".post-archive-content .filter-items-nws[data-cat-"+ check_uniq_id +"='true']").css('display', 'block');
        //         } else if (jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").is(":not(:checked)")) {
        //             jQuery(".post-archive-content .filter-items-nws[data-cat-"+ check_uniq_id +"='true']").css('display', 'none');
        //         }
        //         for (let index = 0; index < checked_boxes; index++) {
        //             var check_uniq_id = null;
        //             var check_uniq_id = jQuery(jQuery(".filter_rc_nws ul li")[index]).attr('data-cat');
        //             if (jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").is(":checked")) {
        //                 jQuery(".post-archive-content .filter-items-nws[data-cat-"+ check_uniq_id +"='true']").css('display', 'block');
        //             } else if (jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").is(":not(:checked)")) {
        //                 jQuery(".post-archive-content .filter-items-nws[data-cat-"+ check_uniq_id +"='true']").css('display', 'none');
        //             }
        //         }
        //     });
        // }
        
        
    });
    
    
</script>
