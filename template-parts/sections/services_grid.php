<?php 
$section_tagline = get_sub_field('section_tagline');// acf text field
$section_title = get_sub_field('section_title');// acf text field
$section_description = get_sub_field('section_description');// acf whys field
$number_of_column = get_sub_field('number_of_column'); // acf button group field


//acf column count //
 if($number_of_column === '1') {
     $number_of_column_class = 'grid-column-1';
}elseif($number_of_column === '2') {
   $number_of_column_class = 'grid-column-2';
 }elseif($number_of_column === '3') {
    $number_of_column_class = 'grid-column-3';
 }

?>

<section class="service-grid layout-padding mt-50 pt-50 pb-50 pt-90 pb-90">
     <div class="section-heading text-center">
           <?php if ($section_tagline) : ?>
            <div class="section-tagline">
                 <span><?php echo esc_html($section_tagline); ?></span>
            </div>   
       <?php endif; ?>

      <?php if ($section_title) : ?>
            <div class="section-title">
                <h2><?php echo esc_html($section_title); ?></h2>
            </div>   
      <?php endif; ?>
    
       <?php if ($section_description) : ?>
            <div class="section-description">
                <p><?php echo esc_html($section_description); ?></p>
            </div>   
       <?php endif; ?>
   </div>

    
<div class="service-boxes mt-50 <?php echo $number_of_column_class; ?>">
        <?php
        $services = new WP_Query(array(
            'post_type'      => 'service',
            'posts_per_page' => -1,
            'order'          => 'DESC',
        ));

        if ($services->have_posts()) :
            while ($services->have_posts()) : $services->the_post();

                $service_icon = get_field('service_icon');
                
              ?>
                <div class="service-box">
                    <div class="service-icon">
                        <?php if ($service_icon) : ?>
                            <img src="<?php echo esc_url($service_icon); ?>">
                        <?php endif; ?>
                    </div>

                    <h5 class="service-title">
                        <?php the_title(); ?>
                    </h5>

                    <div class="short-description">
                        <?php the_excerpt(); ?>
                    </div>

                    <div class="box-footer">
                        <a href="<?php the_permalink(); ?>">Learn more →</a>
                    </div>
                </div>

            <?php endwhile; wp_reset_postdata();endif;?>
        </div>
</section>