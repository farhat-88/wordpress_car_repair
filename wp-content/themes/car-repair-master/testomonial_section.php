<!--Testomonial Section-->
<div class="test-section mt-3">
    <div class="container">
        <h2 class="text-center">What Our Clients Says</h2>
        <p class="text-center">looking at its layout. The point of using Lorem Ipsumreadable content of the page when <br/> looking at its layout</p>
        <div class="items">
            <?php
                $args = array(
                    'post_type' => 'testimonial', // Replace with your custom post type or use 'post' for regular posts
                    'posts_per_page' => -1, // Retrieve all testimonial posts, adjust as needed
                );
                $testimonials = new WP_Query($args);

                if ($testimonials->have_posts()) :
                    while ($testimonials->have_posts()) : $testimonials->the_post();
                ?>
                        <div class="card">
                            <div class="test_work">
                                <div class="p-5">
                                    <h5 class="mt-5"><?php the_title(); ?></h5>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
            ?>
        </div>
    </div>
</div>