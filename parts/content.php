            
          <div class="article-slider">
            <div class="article-slider__inner">  
            <article class="article " >
                 <div class="article-slider__thumb ">
                 <img class="article-slider__img " src="<?php esc_html(the_post_thumbnail());?>"/>
                 </div>

                  <div class="article-slider__data">  
                    <button class="btn btn--black btn--article">
                      <?php echo esc_html(get_post_meta($post->ID, 'playtheme_video_lenght', true)); ?>
                    </button>
                    <div class="article-slider__wrap-title">
                    <a href="<?php esc_attr(the_permalink());?>">
                    <h3 class= "heading-tertiary" > 
                      <?php esc_html(the_title()); ?></h3>
                  </a></div>
                    
                  </div>                  
            </article>
        </div>
    </div>

  