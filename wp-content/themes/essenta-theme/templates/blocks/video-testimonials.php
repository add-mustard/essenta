<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$video_testimonial_subheading = get_sub_field('video_testimonials_subheading');
$video_testimonial_heading  = get_sub_field('video_testimonials_heading');
$video_testimonial_content = get_sub_field('video_testimonials_content');
$video_testimonial_videos = get_sub_field('video_testimonials');

?>

<section class="video-testimonials">
    <div class="video-testimonials__stage">
        <div class="video-testimonials__intro">
            <?php if ($video_testimonial_subheading) : ?>
                <p class="eyebrow"><?php echo esc_html($video_testimonial_subheading); ?></p>
            <?php endif; ?>

            <?php if ($video_testimonial_heading) : ?>
                <h2><?php echo esc_html($video_testimonial_heading); ?></h2>
            <?php endif; ?>

            <?php if ($video_testimonial_content) : ?>
                <div class="video-testimonials__content"><?php echo wp_kses_post($video_testimonial_content); ?></div>
            <?php endif; ?>
        </div>

        <?php if ($video_testimonial_videos) : ?>
            <div class="video-testimonials__videos">
                <?php foreach ($video_testimonial_videos as $video) : ?>
                    <div class="video-testimonials__video">
                        <video controls playsinline preload="metadata" poster="<?php echo esc_url(get_the_post_thumbnail_url($video['testimonial_video']['ID'], 'full')); ?>">
                            <source src="<?php echo esc_url($video['testimonial_video']['url']); ?>" type="<?php echo esc_attr($video['testimonial_video']['mime_type']); ?>">
                            <?php esc_html_e('Your browser does not support the video tag.', 'essenta-theme'); ?>
                        </video>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <?php if (count($video_testimonial_videos ?: array()) > 1) : ?>
        <div class="video-testimonials__nav">
            <button type="button" class="video-testimonials__prev" aria-label="<?php esc_attr_e('Previous testimonial', 'essenta-theme'); ?>"></button>
            <button type="button" class="video-testimonials__next" aria-label="<?php esc_attr_e('Next testimonial', 'essenta-theme'); ?>"></button>
        </div>
    <?php endif; ?>
</section>