<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$lifecycle_subheading = get_sub_field('lifecycle_subheading');
$lifecycle_heading = get_sub_field('lifecycle_header');
$lifecycle_intro = get_sub_field('lifecycle_header_content');

$highlighted_title = get_sub_field('highlighted_header');
$highlighted_content = get_sub_field('highlighted_content');

$lifecycle_cards = get_sub_field('lifecycle_cards');

?>

<section class="lifecycle-block">
    <div class="container">
        <?php if ($lifecycle_subheading || $lifecycle_heading || $lifecycle_intro): ?>
            <div class="lifecycle-header">
                <div class="lifecycle-header-title">
                    <?php if ($lifecycle_subheading): ?>
                        <p class="eyebrow lifecycle-subheading"><?php echo esc_html($lifecycle_subheading); ?></p>
                    <?php endif; ?>
                    <?php if ($lifecycle_heading): ?>
                        <h2 class="lifecycle-heading"><?php echo esc_html($lifecycle_heading); ?></h2>
                    <?php endif; ?>
                </div>
                <?php if ($lifecycle_intro): ?>
                    <p class="lifecycle-intro"><?php echo esc_html($lifecycle_intro); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($highlighted_title || $highlighted_content): ?>
            <div class="lifecycle-highlight">
                <?php if ($highlighted_title): ?>
                    <h3 class="highlighted-title"><?php echo esc_html($highlighted_title); ?></h3>
                <?php endif; ?>
                <?php if ($highlighted_content): ?>
                    <p class="highlighted-content"><?php echo esc_html($highlighted_content); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($lifecycle_cards): ?>
            <ol class="lifecycle-cards" role="list">
                <?php foreach ($lifecycle_cards as $card): ?>
                    <li class="lifecycle-card">
                        <?php if (!empty($card['lifecycle_card_title'])): ?>
                            <h4 class="card-title"><?php echo esc_html($card['lifecycle_card_title']); ?></h4>
                        <?php endif; ?>
                        <?php if (!empty($card['lifecycle_content'])): ?>
                            <p class="card-content"><?php echo esc_html($card['lifecycle_content']); ?></p>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ol>
        <?php endif; ?>
    </div>
</section>