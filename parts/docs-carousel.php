<div class="slider-single">

<i class="btn-arrow btn-arrow--left left-docs fas fa-chevron-left"></i>
 <i class="btn-arrow btn-arrow--right right-docs fas fa-chevron-right"></i>   
           
       <div class="slider-single__wrapper"> 
         <div class="slider-single__article-docs">            
         <?php //LOOP DOCUMENTARIOS
                       $argument2 = array('post_type' => 'videos', 'category_name' => 'documentarios',);
                       $documentarios = new WP_Query($argument2);
                       if ( $documentarios -> have_posts() ) : while ($documentarios -> have_posts() ) : $documentarios -> the_post();
               //ARTICLE ?>
               <div class="article-slider item-docs current-item-docs">
            <div class="article-slider__inner">  
            <article class="article " >
                  <div class="article-slider__thumb ">
             
                    <img class="article-slider__img " src="<?php esc_html(the_post_thumbnail());?>"/>
                  </a> 
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