<?php
$media_position = get_sub_field('media_position');// buttion group field with option left and right
$media_type = get_sub_field('media_type');// button group field with option imgae and video

$image = get_sub_field('image');// acf group field

$image_type = $image ['image_type']; // button group field with option single and gallery
$single_image = $image['single_image']; // image field type with array output
$gallery_images = $image['gallery_images']; // gallery field type with array output

$video = get_sub_field ('video');// acf file field type with array output

$section_tagline = get_sub_field('section_tagline'); // acf text filed
$smart_heading = get_sub_field('smart_heading'); // acf text filed
$smart_tagline = get_sub_field('smart_tagline'); // acf text filed
$section_title = get_sub_field('section_title'); // acf text filed
$section_descritption = get_sub_field('section_descritption'); // acf textarea filed
$counter_boxes = get_sub_field('counter_boxes'); // acf repeater filed
$counter_number = get_sub_field('counter_number'); // acf text filed
$counter_content = get_sub_field('counter_content'); // acf text filed
$smart_content_list = get_sub_field('smart_content_list'); // acf whays filed



if($media_position === 'left') {
    $media_position_class = 'media-left';
}else {
   $media_position_class = 'media-right';
}


?>

<section class="smart-media-section layout-padding pt-50 pb-50">
    <div class="section-section-heading text-center">
        <?php if (!empty($smart_tagline)):?>
            <div class="section-tagline">
                <span>
                    <?php echo esc_html($smart_tagline);?>
                </span>
            </div>
        <?php endif;?>
        <?php if (!empty($smart_heading)):?>
            <div class="section-heading-title">
                <h2><?php echo esc_html($smart_heading);?></h2>
            </div>
        <?php endif;?> 
    </div>
    <div class="smart-media-grid mt-50 mt-lg-90  <?php echo $media_position_class; ?>">
        <div class="smart-section-content">
            <?php if ($section_tagline) : ?>
                <div class="section-tagline">
                    <span><?php echo esc_html($section_tagline); ?></span>
                </div>
            <?php endif; ?>

            <?php if ($section_title) : ?>
                <div class="section-title mt-20">
                    <h3><?php echo esc_html($section_title); ?></h3>
                </div>
            <?php endif; ?>

            <?php if ($section_descritption) : ?>
                <div class="section-description">
                    <p><?php echo esc_html($section_descritption); ?></p>
                </div>
            <?php endif; ?>

            <?php if ($counter_boxes) : ?>
                <div class="counter-boxes">
                    <?php foreach ($counter_boxes as $counter_box) : ?>
                        <div class="counter-box">

                            <?php if (!empty($counter_box['counter_number'])) : ?>
                                <h3><?php echo esc_html($counter_box['counter_number']); ?></h3>
                            <?php endif; ?>

                            <?php if (!empty($counter_box['counter_content'])) : ?>
                                <p><?php echo esc_html($counter_box['counter_content']); ?></p>
                            <?php endif; ?>

                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if ($smart_content_list) : ?>
                <div class="smart-content-list">
                    <?php echo wp_kses_post($smart_content_list); ?>
                </div>
            <?php endif; ?>
        </div>
        <!-- Media -->
        <div class="smart-section-media">

            <?php if($media_type === 'image'):?>

                <?php if($image_type === 'single'):?>
                    <?php if($single_image): ?>
                    <div class="single-image media">
                        <img src="<?php echo esc_url($single_image['url']); ?>" alt="<?php echo esc_attr($single_image['alt']); ?>">
                    </div>
                <?php endif;?>   

                <?php elseif($image_type === 'gallery'):?>   
                <div class="gallery-images media column-count-<?php echo esc_attr(count($gallery_images));?>">
                    <?php if($gallery_images): ?>
                            <?php foreach( $gallery_images as $gallery_image ) : ?>
                                <div class="gallery-image">
                                   <img src="<?php echo esc_url($gallery_image['url']); ?>" alt="<?php echo esc_attr($gallery_image['alt']); ?>">
                                </div>
                            <?php endforeach; ?>
                        <?php endif;?>   
                </div>
                <?php endif;?>
            
                <?php elseif($media_type === 'video'): ?>
                <?php if($video): ?>
                        <video controls>
                            <source src="<?php echo esc_url($video['url']); ?>" type="<?php echo esc_attr($video['mime-type']); ?>">
                        </video>
                <?php endif; ?>

            <?php endif;?>      
        </div>
    </div>
</section>