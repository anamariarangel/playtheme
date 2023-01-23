<div class="slider-single slider-single-film">

 <i class="fas fa-chevron-left btn-arrow btn-arrow--left left-film"></i>
 <i class="fas fa-chevron-right btn-arrow btn-arrow--right right-film"></i>  
            
        <div class="slider-single__wrapper"> 
          <div class="slider-single__article-film">            
            <?php //LOOP FILMES
              $argument = array( 'post_type' => 'videos', 'category_name' => 'filmes',);
              $filmes = new WP_Query($argument);
              if ( $filmes -> have_posts() ) : while ($filmes -> have_posts() ) : $filmes -> the_post();
                //ARTICLE ?>
                <div class="article-slider item-film current-item-film">
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

  
              <?php  endwhile; 
                endif; 
                wp_reset_postdata();?>          
          </div>
       </div>
</div>