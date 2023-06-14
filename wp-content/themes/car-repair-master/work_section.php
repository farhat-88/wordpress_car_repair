<!-- How It Works-->
<div class="work-section">
    <div class="container">
        <h2 class="text-center">How It Works</h2>
        <p class="text-center">Readable content of a page when looking at its layout. The point of using Lorem Ipsumreadable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
        <div class="row justify-content-center">
        <?php
     $args = array(
        // 'post_type'      => 'post', // Replace with your actual post type name
        'posts_per_page' => -1 // Retrieve all posts
    );
    $query = new WP_Query($args);
    
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
    
            //if (has_post_thumbnail()) {
                $image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); // Get the URL of the featured image
                $image_name = basename($image_url); // Image name (extracted from the URL)
                ?>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_name; ?>" class="service-img"/>
                    <button class="service-badge text-center">
                        MAKE AN <br/> APPOINTMENT
                    </button>
                </div>
                <?php
            //}
        }
        wp_reset_postdata();
    }
    
    
        
            
            
        
        
        ?>

        </div>
    </div>
</div>



        
        <!-- <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service-1.png" alt="car-services" class="service-img"/>
                    <button class="service-badge text-center">
                            MAKE AN <br/> APPOINMENT
                    </button>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service-2.png" alt="car-services" class="service-img"/>
                    <button class="service-badge text-center">
                            MAKE AN <br/> APPOINMENT
                    </button>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service-3.png" alt="car-services" class="service-img"/>
                    <button class="service-badge text-center">
                            MAKE AN <br/> APPOINMENT
                    </button>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service-4.png" alt="car-services" class="service-img"/>
                    <button class="service-badge text-center">
                            MAKE AN <br/> APPOINMENT
                    </button>
                </div>
        </div> -->
        <!-- <div class="row justify-content-center new-row" style="display:none">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service-1.png" alt="car-services" class="service-img"/>
                    <button class="service-badge text-center">
                            MAKE AN <br/> APPOINMENT
                    </button>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service-2.png" alt="car-services" class="service-img"/>
                    <button class="service-badge text-center">
                            MAKE AN <br/> APPOINMENT
                    </button>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service-3.png" alt="car-services" class="service-img"/>
                    <button class="service-badge text-center">
                            MAKE AN <br/> APPOINMENT
                    </button>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service-4.png" alt="car-services" class="service-img"/>
                    <button class="service-badge text-center">
                            MAKE AN <br/> APPOINMENT
                    </button>
                </div>
        </div> -->
        <div class="d-grid gap-2 col-2 mx-auto">
                <button class="btn btn-color" type="button">Read More</button>
        </div>
    </div>
</div>