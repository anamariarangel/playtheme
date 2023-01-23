<?php esc_html(get_header()); 

    /* Start the Loop */
            $args = array('post_type'=> 'videos','posts_per_page' => 1,);
            $new_query_videos = new WP_Query($args);
            if ( $new_query_videos -> have_posts() ) : 
              while ($new_query_videos -> have_posts() ) : 
                $new_query_videos -> the_post(); 
              endwhile; endif; ?>
      <main>
          <section class="section-header">
            <div class="article-box">
                <article  id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>          
                  <img class = "article-box__dynamic-cover" 
                  src="<?php echo get_post_meta($post->ID, 'playtheme_upload_file', true); ?>"/>
                </div>  
              
            <div class= "article-box__video-data">
              <div class="box__btn">
                <button class="btn btn--white">
                  <?php echo the_category();;?>
                </button>
              
                <button class="btn btn--black">
                  <?php echo get_post_meta($post->ID, 'playtheme_video_lenght', true); ?>
                </button>
              </div>
              
          <div class="article-box__title-area">

            <a href="<?php the_permalink();?>"> 
            <h1 class= "heading-primary"><?php the_title(); ?></h1></a>
              
            <a href="<?php the_permalink();?>">
            <button class="btn btn--red-desktop">Mais Informações</button></a>

            <a href="<?php the_permalink();?>">
            <button class="btn btn--red-phone">Assistir</button></a>

          </div> 
            <?php wp_reset_postdata();?>

          </div>
        </article>
      </div>
  </section>
              
<section class="section-slider">
        
 <!---SLIDER FILMES-->
 <div>
      <a href="/index.php?cat=1">
        <h2 class="heading-secondary">Filmes</h2>
      </a>   
 </div>

 <?php get_template_part('parts/film-carousel');?>


<!--SLIDER SERIES--> 
<div>
            <a href="/index.php?cat=3">
            <h2 class="heading-secondary">Séries</h2></a>   
      </a>   
 </div>

 <?php get_template_part('parts/series-carousel');?>


<!--SLIDER DOCUMENTARIOS-->
<div>
            <a href="/index.php?cat=4">
            <h2 class="heading-secondary">Documentários</h2></a>   
      </a>   
 </div>

 <?php get_template_part('parts/docs-carousel');?>
 


   </section>
   <?php get_template_part('parts/menu-mobile');?> 
      </main>
  
            <?php esc_html(get_footer());?>