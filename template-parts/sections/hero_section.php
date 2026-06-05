<?php
$hero_bg = get_sub_field('hero_bg');        // acf colorpicker field
$hero_badge = get_sub_field('hero_badge');        // acf text field
$hero_text = get_sub_field('hero_text');          // acf text field
$hero_description = get_sub_field('hero_description'); // acf wysiwyg field
$heroBtnl = get_sub_field('hero_btn_1');          // acf link array btn
$heroBtn2 = get_sub_field('hero_btn_2');          // acf link array btn
$hero_bottom_text = get_sub_field('hero_bottom_text'); // acf link array btn
?>

<!-- Hero Section -->
<section class="hero-section layout-padding pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-color: <?php echo $hero_bg; ?>">
   <div class="hero-content text-center">
        <?php if ($hero_badge) : ?>
          <div class="hero-badge">
             <span><?php echo esc_html($hero_badge); ?></span>
          </div>
       <?php endif; ?>

       <?php if ($hero_text) : ?>
        <div class="hero-text">
             <h1><?php echo esc_html($hero_text); ?></h1>
        </div>
       <?php endif; ?>

        <?php if ($hero_description) : ?>
            <div class="hero-description">
                <?php echo esc_html($hero_description); ?>
            </div>
        <?php endif; ?>

        <div class="hero-btns">
            <?php if ($heroBtnl) : ?>
                <a class="site-btn"
                href="<?php echo esc_url($heroBtnl['url']); ?>"
                target="<?php echo esc_attr($heroBtnl['target']); ?>">
                <?php echo esc_html($heroBtnl['title']); ?>
                </a>
           <?php endif; ?>

           <?php if ($heroBtn2) : ?>
                <a class="site-btn btn-transparent"
                href="<?php echo esc_url($heroBtn2['url']); ?>"
                target="<?php echo esc_attr($heroBtn2['target']); ?>">
                <?php echo esc_html($heroBtn2['title']); ?>
                </a>
           <?php endif; ?>
        </div>

        <?php if ($hero_bottom_text) : ?>
            <div class="hero-bottom-text">
                <p><?php echo esc_html($hero_bottom_text); ?></p>
            </div>
        <?php endif; ?>

   </div>
</section>
