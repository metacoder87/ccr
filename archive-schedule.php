    <?php get_header(); ?>
    
        <a href="<?php echo site_url('/schedule'); ?>">
          <h2 class="page-heading">Schedule of Races</h2>
        </a>

          <section class="schedule">

            <?php 
            
                $crgs = array(
                    'post_type' => 'schedule',
                    'posts_per_page' => 20,
                    'order' => 'ASC',
                );

                $eventpost = new WP_Query($crgs);

                while($eventpost->have_posts()) {
                 $eventpost->the_post();
            ?>

             <div>
                  <table>
                      <tr>
                          <td class="the-day">
                              <?php the_title(); ?>
                          </td>
                          <td class="the-place">
                              <?php the_content(); ?>
                          </td>
                      </tr>
                  </table>
              </div>
                <?php }
                wp_reset_query(); 
              ?>

          </section>

    <?php get_footer(); ?>