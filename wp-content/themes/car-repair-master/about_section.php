<!--About Section-->
<div class="about mt-5" id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 pt-5">
                <h2>About Mechanical Garage</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                <button type="button" class="btn btn-dark">About More</button>
            </div>
            <div class="col-sm-12 col-md-4">
                <?php
                    $attachment_id = 6; // Replace with the ID of the desired image attachment
                    $image_size = 'full'; // Replace with the desired image size (e.g., thumbnail, medium, large, full)

                    $image_src = wp_get_attachment_image_src($attachment_id, $image_size);
                    if ($image_src) {
                        $image_url = $image_src[0];
                        $image_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
                        ?>
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"  style="float:right;">
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>