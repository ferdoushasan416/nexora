<?php 
$section_tagline = get_sub_field('section_tagline');// acf text field
$section_title = get_sub_field('section_title');// acf text field
$section_description = get_sub_field('section_description');// acf whys field



?>

<section class="services-grid layout-padding mt-50">
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
    

    <?php
    $services = new WP_Query(array(
        'post_type'      => 'service',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    ));

    if ($services->have_posts()) :
        while ($services->have_posts()) : $services->the_post();

            $service_icon  = get_sub_field('service_icon');
            $service_badge = get_sub_field('service_badge');
            $service_btn   = get_sub_field('service_btn');
    ?>

        <article class="service-card">

            <?php if ($service_badge) : ?>
                <span class="service-badge">
                    <?php echo esc_html($service_badge); ?>
                </span>
            <?php endif; ?>

            <?php if ($service_icon) : ?>
                <img src="<?php echo esc_url($service_icon['url']); ?>"
                    alt="<?php echo esc_attr($service_icon['alt']); ?>">
            <?php endif; ?>

            <h3 class="service-card-title">
                <?php the_title(); ?>
            </h3>

            <div class="service-content">
                <?php the_content(); ?>
            </div>

            <?php if ($service_btn) : ?>
                <a class="card-btn"
                    href="<?php echo esc_url($service_btn['url']); ?>"
                    target="<?php echo esc_attr($service_btn['target'] ?: '_self'); ?>">
                        <?php echo esc_html($service_btn['title']); ?>
                    </a>
            <?php endif; ?>

        </article>

    <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>

</section>