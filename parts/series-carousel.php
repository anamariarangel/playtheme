<div class="slider-single">

 <i class="btn-arrow left-series btn-arrow--left fas fa-chevron-left"></i>
 <i class="btn-arrow right-series btn-arrow--right fas fa-chevron-right"></i> 
            
        <div class="slider-single__wrapper"> 
          <div class="slider-single__article-series">            
          <?php //LOOP SERIES
                  $argument1 = array( 'post_type' => 'videos', 'category_name' => 'series',);
                  $series = new WP_Query($argument1);
                  if ( $series -> have_posts() ) : while ($series -> have_posts() ) : $series -> the_post();
                //ARTICLE ?>

<div class="article-slider item-series current-item-series">
            <div class="article-slider__inner">  
            <article class="article " >
                  <div class="article-slider__thumb ">
                  <img class="article-slider__img " src="<?php esc_html(the_post_thumbnail());?>"/>
                                   </div>

                  <div class="article-slider__data">  
                    <button class="btn btn--black btn--article">
                      <?php echo esc_html(get_post_meta($post->ID, 'playtheme_video_lenght', true)); ?>
                    </button>

                    <a href="<?php esc_attr(the_permalink());?>">
                    <h3 class= "heading-tertiary" > 
                      <?php esc_html(the_title()); ?></h3>
                  </a>
                    
                  </div>                  
            </article>
        </div>
    </div>

  <?php                
                endwhile; 
                endif; 
                wp_reset_postdata();?>          
          </div>
       </div>