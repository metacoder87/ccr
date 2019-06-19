    <?php get_header(); ?>
     
          <h2 class="page-heading">Search Results for... <?php echo get_search_query(); ?></h2>

        <?php if(have_posts()) { ?>

          <section>

            <?php 

                while(have_posts()) {
                  the_post();
            ?>

            <div class="card">
              <div class="card-image">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Post Image">
                </a>
              </div>
              <div class="post-description">
                <a href="<?php the_permalink(); ?>">
                  <h3><?php the_title(); ?></h3>
                </a>
                <div class="card-meta">
                    Posted by <?php the_author(); ?> on <?php the_time('F,j Y'); ?> 
                    <?php if(get_post_type() =='post') { ?> in <a href="*"><?php echo get_the_category_list(', ') ?></a>
                    <?php } ?>
                </div>
                <p>
                  <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="btn-readmore">read more</a>
              </div>
            </div>

                <?php }
                   wp_reset_query(); 
                 ?>

          </section>

                    <?php } else { ?>

                    <div class="no-results">
                        <h2>Nothing was found.</h2>
                        <h3>Use the keys on the board to form coherent words for me to locate... it's supposed to be easy.</h3>
                        <h3>No Worries</h3>
                        <h3>Check out the following links:</h3>
                            <ul>
                                <li>
                                    <a href="<?php echo site_url('/team'); ?>">Learn about the Team</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('/schedule'); ?>">Schedule of upcoming Races</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('/blog'); ?>">Check out the Blog</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('/contact'); ?>">Contact the CCR team</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('/photos'); ?>">Photo Gallery</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url(''); ?>">Just take me Home</a>
                                </li>
                            </ul>
                    </div>

                    <?php } ?>

          <div class = "pagination">
                  <?php echo paginate_links(); ?>
          </div>

     <?php get_footer(); ?>