    <?php get_header(); ?>
    
        <a href="<?php echo site_url('/photos'); ?>">
          <h2 class="page-heading">CCR Photo Gallery</h2>
        </a>

          <section>

            <?php 
            
                $prgs = array(
                    'post_type' => 'photos',
                    'posts_per_page' => 20,
                );

                $picpost = new WP_Query($prgs);

                while($picpost->have_posts()) {
                 $picpost->the_post();
            ?>
              <div class="pic">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Post Image">
               </div>

                <?php }
                wp_reset_query(); 
              ?>

          </section>

    <?php get_footer(); ?>