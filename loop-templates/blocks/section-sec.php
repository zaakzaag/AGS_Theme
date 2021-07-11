<?php

$className = 'testimonial';
if(!empty($block['className'])){
    $className .=' '.$block['className'];
}

if(!empty($block['align'])){
    $className .=' align'.$block['align'];
}

?>



<?php 

$image = get_field('background_image');


if( !empty( $image ) ): ?>
<style type="text/css">

.section-two-column {
background-image: url('<?php echo esc_url($image['url']);?>');
}
</style>
<?php endif; ?>

<section class="section section-two-column">
<div class=" wrapper d-flex align-items-center align-middle test-class h-100">
    <div class="row my-row">
        <div class="col-lg-6 align-self-center align-middle text-center">
            <?php 
                $image = get_field('image_left');
                if( !empty( $image ) ): ?>
                <img class="image-column" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="col-lg-6 align-self-center ">
                <h2><?php echo get_field('title_second_section');?></h2>
                <?php echo get_field('text_label');?>
                <div class="buttons">
                    <a class="btn btn-small btn-blue" href="#">Button</a>
                </div>
        </div>
    </div>


</div>
</section>