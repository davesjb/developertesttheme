<?php
$section_class = 'section';
$custom_class = get_field('custom_class');
$text_content_1 = get_field('text_content_1');
$text_content_2 = get_field('text_content_2');
$text_content_3 = get_field('text_content_3');

$image_content_1 = get_field('image_content_1');
$video_content_1 = get_field('video_content_1');

$button = get_field('button');
?>


<section class="<?php echo $section_class; ?>">
    <div class="container <?php echo $custom_class; ?>">
        <?php if ($text_content_1) { ?>
            <div class="col text_content">
                <?php echo $text_content_1; ?>
                <button class="btn"><?php echo $button; ?></button>
            </div>
        <?php } ?>

        <?php if($video_content_1): ?>
            <div class="col video_content">
                <div class="embed-container video-content">
                    <?php the_field('video_content_1'); ?>
                </div>   
            </div>
        <?php elseif ($image_content_1): ?>
            <div class="col image_content">
                <img src="<?php the_field('image_content_1'); ?>" />
            </div>
        <?php endif; ?>

    </div>
</section>