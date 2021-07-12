<?php

$className = 'testimonial';
if(!empty($block['className'])){
    $className .=' '.$block['className'];
}

if(!empty($block['align'])){
    $className .=' align'.$block['align'];
}
$title= get_the_title();
$background_image_url = get_the_post_thumbnail_url();

$title_acf=get_field('top_header');
$background_image_url_acf=get_field('image');

if(!empty($background_image_url_acf)){
$background_image_url = $background_image_url_acf['url'];

}

if(!empty($title_acf)){
    $title=$title_acf;
}

?>

    <style type="text/css">

    .image-background-column {
    background-image: url('<?php echo esc_url($background_image_url);?>');
    }
    </style>



<section class="section-case-study-single">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-6 text-center image-background-column"></div>
            <div class="col-lg-6 info-column"><h2><?php echo $title ?></h2>
             <?php the_field('text_info') ?>
            </div>
            


        </div>

    </div>
</section>