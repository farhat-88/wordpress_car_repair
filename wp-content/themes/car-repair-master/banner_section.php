<!--Banner Section-->
<div class="bg-image">
    <div class="image">
        <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-8 pt-5">
                        <h3>Landing page 2022</h3>
                        <h1>Car Repair Services</h1>
                        <button type="button" class="btn btn-dark">Read More</button>
                        <?php
                        $attachment_id = 05; // Replace with the ID of the desired image attachment
                        $image_size = 'full'; // Replace with the desired image size (e.g., thumbnail, medium, large, full)

                        $image_src = wp_get_attachment_image_src($attachment_id, $image_size);
                        if ($image_src) {
                            $image_url = $image_src[0];
                            $image_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
                            ?>
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 img-row">
                    <?php
                        $attachment_id = 9; // Replace with the ID of the desired image attachment
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
</div>