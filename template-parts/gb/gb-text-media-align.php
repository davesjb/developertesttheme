<?php
$section_class = get_field('section_class');
$custom_class = get_field('custom_class');
$text_content = get_field('text_content');
$text_align = get_field('text_align');
$image_content = get_field('image_content');
$size = 'full';
$image_align = get_field('image_align');
$video_content = get_field('video_content');
$video_align = get_field('video_align');
$button_content = get_field('button_content');
$button_align = get_field('button_align');

?>

<section class="section <?php echo $section_class; ?>">
    <div class="<?php echo $custom_class; ?>">
        <?php if ($text_content) { ?>
            <div class="col text_content <?php echo $text_align; ?>">
                <?php echo $text_content; ?>
            </div>
        <?php } ?>

        <?php if($image_content): ?>
            <div class="col image_content <?php echo $image_align; ?>">
                <img src="<?php the_field('image_content'); ?>" />
            </div>
        <?php endif; ?>

        <?php if ($video_content) { ?>
            <div class="col video_content <?php echo $video_align; ?>">
                <div class="video-content">
                    <?php the_field('video_content'); ?>
                </div>   
            </div>
        <?php } ?>
       
        <?php if ($button_content) { ?>
            <div class="col button-content <?php echo $button_align; ?>">
                <button class="button-content">
                    <?php echo $button_content; ?>
                </button>   
            </div>
        <?php } ?>
        
    </div>
</section>