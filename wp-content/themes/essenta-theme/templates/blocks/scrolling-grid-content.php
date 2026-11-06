<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$scrolling_grid_subheading = get_sub_field('scrolling_grid_subheading');
$scrolling_grid_heading = get_sub_field('scrolling_grid_heading');
$scrolling_grid_cta_primary = get_sub_field('scrolling_grid_cta_primary');
$scrolling_grid_cta_secondary = get_sub_field('scrolling_grid_cta_secondary');

$scrolling_grid_contents = get_sub_field('scrolling_grid_contents');
?>
<section class="scrolling-text scrolling-grid-content">
    <div class="container">
        <div class="scrolling-text-header">
            <?php if ($scrolling_grid_subheading) : ?>
                <p class="scrolling-text-subheading eyebrow"><?php echo esc_html($scrolling_grid_subheading); ?></p>
            <?php endif; ?>
            <?php if ($scrolling_grid_heading) : ?>
                <h2 class="scrolling-text-heading"><?php echo esc_html($scrolling_grid_heading); ?></h2>
            <?php endif; ?>
            <?php if ($scrolling_grid_cta_primary || $scrolling_grid_cta_secondary) : ?>
                <div class="scrolling-grid-content__ctas">
                    <?php if ($scrolling_grid_cta_primary) : ?>
                        <a href="<?php echo esc_url($scrolling_grid_cta_primary['url']); ?>" class="btn primary" target="<?php echo esc_attr($scrolling_grid_cta_primary['target'] ?: '_self'); ?>"<?php if ($scrolling_grid_cta_primary['target'] === '_blank') : ?> rel="noopener noreferrer"<?php endif; ?>><?php echo esc_html($scrolling_grid_cta_primary['title']); ?></a>
                    <?php endif; ?>
                    <?php if ($scrolling_grid_cta_secondary) : ?>
                        <a href="<?php echo esc_url($scrolling_grid_cta_secondary['url']); ?>" class="btn secondary" target="<?php echo esc_attr($scrolling_grid_cta_secondary['target'] ?: '_self'); ?>"<?php if ($scrolling_grid_cta_secondary['target'] === '_blank') : ?> rel="noopener noreferrer"<?php endif; ?>><?php echo esc_html($scrolling_grid_cta_secondary['title']); ?></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if ($scrolling_grid_contents) : ?>
            <div class="scrolling-grid-content__cards">
                <?php foreach ($scrolling_grid_contents as $content) : ?>
                    <div class="scrolling-grid-content__card">
                        <?php if ($content['grid_content_card_title']) : ?>
                            <h3><?php echo esc_html($content['grid_content_card_title']); ?></h3>
                        <?php endif; ?>
                        <?php if ($content['grid_content_card_text']) : ?>
                            <div class="scrolling-grid-content__card-text"><?php echo wp_kses_post($content['grid_content_card_text']); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>