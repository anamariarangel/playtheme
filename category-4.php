<?php get_header(); ?>

<main>
  <!--Arquivo-->
<section class="section-archive">
  <div class="category-archive">
    <div class="category-archive__aside">
        <h1 class="heading-secondary documentario"><?php esc_html(single_cat_title()) ?></h1>
            <p class="paragraph"><?php echo the_archive_description();?></p>
    </div>
   
  <div class="category-archive__thumb">                      
  <div class="category-archive__article">
                   
            <?php //LOOP FILMES
              $argument2 = array( 'post_type' => 'videos', 'category_name' => 'documentarios',);
              $documentarios = new WP_Query($argument2);
              if ( $documentarios -> have_posts() ) : while ($documentarios -> have_posts() ) : $documentarios -> the_post();
                //ARTICLE
                get_template_part( 'parts/content');
                endwhile; 
                endif; 
                wp_reset_postdata();?>          
    </div>
  </div>


  </div>
         </section> 
         
         <?php get_template_part('parts/menu-mobile');?>
         
              </main>
<?php esc_html(get_footer())?>      
   
