<?php esc_html(get_header()); ?>

<main>
    <section class="section-single-post" id="home">
        <div class="single-post">
          <?php
          //loop single
          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              
          <article  id="post-<?php the_ID(); ?>">
          <!--title/category-->
            <div class="single-post__title">
              <div class="box-btn">
                  <button class="btn btn--white"><?php echo the_category();?></button>
                  <button class="btn btn--black">
                    <?php echo get_post_meta($post->ID, 'playtheme_video_lenght', true);?>
                  </button>
              </div>
              <h1 class= "heading-primary-modified" 
                href="<?php esc_html(the_title( get_the_permalink())); ?>"> <?php echo esc_html(the_title())?>
              </h1>
            </div>

            <!--cover/popup-->

            <div class="single-post__video">
                <img class = "single-post__single-cover" 
                  src="<?php echo get_post_meta($post->ID, 'playtheme_upload_file', true); ?>"/>
                
                  <div class="single-post__button">
                    <a href="#popup"> 
                      <button class="btn-play">
                      <i class="fas fa-circle-play"></i>
                      </button></span>
                    </a>
                  </div>

                  <div class="popup" id="popup">
                  <a href="#" class="popup__close"><strong>&times;</strong></a>
                      <div id="player">
                        <!--player youtube (it will be replaced -->
                      </div>
                      </div>
                  </div>                      
                  
                  <div class="single-post__sinopse">
                    <p class="paragraph"> 
                    <? echo esc_html(get_post_meta($post->ID, 'playtheme_video_sinopse', true)); ?></p>
                  </div>
</section>  
        
    <?php get_template_part('parts/menu-mobile');?>
    
</main>
                      </div>
                          

                        </article>
                <?php endwhile; endif; ?>

</main>

<?php esc_html(get_footer()) ?>




                  

