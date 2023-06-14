<!--Services Section-->
<div class="Services-section">
    <h2 class="text-center">Why Choose Our Services?</h2>
    <p class="text-center">looking at its layout. The point of using Lorem Ipsumreadable content of the page <br />when looking at its layout</p>
    <div class="container-fluid">
        <div class="container">
            <div class="pt-5 pb-3">
                <?php
                $args = array(
                    'post_type' => 'testimonial', // Replace with your custom post type or use 'post' for regular posts
                    'posts_per_page' => 4, // Adjust the number of testimonials to display
                );
                $testimonials = new WP_Query($args);
                $count = 1;

                if ($testimonials->have_posts()) :
                    while ($testimonials->have_posts()) : $testimonials->the_post();
                ?>
                    <div class="row p-2 justify-content-center">
                        <div class="col-4 text-center text-light"><?php echo sprintf('%02d', $count); ?></div>
                        <div class="col-8 text-center text-light"><?php the_content(); ?></div>
                    </div>
                <?php
                        $count++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            
            </div>
        </div>
    </div>
</div>