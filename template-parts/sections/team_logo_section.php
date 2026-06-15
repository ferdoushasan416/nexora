<?php
$section_tagline   = get_sub_field('section_tagline');
$team_logo_wrapper = get_sub_field('team_logo_wrapper');
?>

<section class="team-logo-section layout-padding pt-50">

    <?php if ($section_tagline) : ?>
        <div class="section-tagline text-center">
            <span><?php echo esc_html($section_tagline); ?></span>
        </div>
    <?php endif; ?>

    <?php if ($team_logo_wrapper) : ?>
        <div class="team-logo-wrapper">
            <?php foreach ($team_logo_wrapper as $team_logo) : 
                $team_logo = $team_logo['team_logo'];
                
                if ($team_logo) :
            ?>
                <div class="team-logo-item">
                    <img src="<?php echo esc_url($team_logo); ?>" alt="">
                </div>
            <?php
                endif;
            endforeach; ?>
        </div>
    <?php endif; ?>

</section>