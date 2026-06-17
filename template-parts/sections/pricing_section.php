<?php

$eyebrow      = get_sub_field( 'eyebrow_text' );// acf text field
$heading      = get_sub_field( 'section_heading' );// acf text field
$subheading   = get_sub_field( 'section_subheading' );// acf textarea field
$show_toggle  = get_sub_field( 'show_billing_toggle' );// acf true false field
$yearly_label = get_sub_field( 'yearly_discount_label' );//acf text field
$plans        = get_sub_field( 'pricing_boxes' );
?>

<section class="pricing-section layout-padding pt-50 pb-50 pt-lg-120 pb-lg-120">
    <div class="pricing__header text-center">

        <?php if ( $eyebrow ) : ?>
            <span class="pricing__eyebrow">
                <?php echo esc_html( $eyebrow ); ?>
            </span>
        <?php endif; ?>

        <?php if ( $heading ) : ?>
            <h2 class="pricing__heading">
                <?php echo esc_html( $heading ); ?>
            </h2>
        <?php endif; ?>

        <?php if ( $subheading ) : ?>
            <p class="pricing__subheading">
                <?php echo esc_html( $subheading ); ?>
            </p>
        <?php endif; ?>

        <?php if ( $show_toggle ) : ?>
            <div class="pricing__toggle">
                <button type="button" class="pricing__toggle-btn is-active" data-period="monthly">Monthly</button>
                <button type="button" class="pricing__toggle-btn" data-period="yearly">
                    Yearly
                    <?php if ( $yearly_label ) : ?>
                        <span class="pricing__toggle-badge"><?php echo esc_html( $yearly_label ); ?></span>
                    <?php endif; ?>
                </button>
            </div>
        <?php endif; ?>

    </div>

    <?php if ( $plans ) : ?>
        <div class="pricing__grid">

            <?php foreach ( $plans as $plan ) :

                $highlight = $plan['highlight_pricing'];
                $name      = $plan['plan_name'];
                $content     = $plan['plan_content'];
                $price     = $plan['plan_price'];
                $button    = $plan['pricng_btn'];
                $features  = $plan['pricing_feature_list'];

                $card_class = 'pricing__card' . ( $highlight ? ' pricing__card--featured' : '' );
                ?>

                <div class="<?php echo esc_attr( $card_class ); ?>">

                    <h5 class="pricing__plan-name"><?php echo esc_html( $name ); ?></h5>

                      <div class="paln__content">
                         <p><?php echo esc_html( $content); ?></p>
                      </div>

                    <div class="pricing__price">
                        <h4 class="pricing__price-amount"><?php echo esc_html( $price ); ?></h4>
                    </div>

                    <?php if ( $button && ! empty( $button['url'] ) ) : ?>
                        <a
                            href="<?php echo esc_url( $button['url'] ); ?>"
                            class="pricing__btn <?php echo $highlight ? 'pricing__btn--filled' : 'pricing__btn--outline'; ?>"
                            <?php echo ! empty( $button['target'] ) ? 'target="' . esc_attr( $button['target'] ) . '"' : ''; ?>
                        >
                            <?php echo esc_html( $button['title'] ?: 'Learn more' ); ?>
                        </a>
                    <?php endif; ?>

                    <?php if ( $features ) : ?>
                        <ul class="pricing__features">
                            <?php foreach ( $features as $feature ) :
                                $feature_text = $feature['feature_text']; 
                                if ( ! $feature_text ) {
                                    continue;
                                }
                                ?>
                                <li class="pricing__feature">
                                    <span class="pricing__feature-check" aria-hidden="true">
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 4L3.5 6.5L9 1" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    <?php echo esc_html( $feature_text ); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                </div>

            <?php endforeach; ?>

        </div>
    <?php endif; ?>
</section>
