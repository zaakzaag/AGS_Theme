<?php

$className = 'testimonial';
if(!empty($block['className'])){
    $className .=' '.$block['className'];
}

if(!empty($block['align'])){
    $className .=' align'.$block['align'];
}

$image = get_field('top_image');

if( !empty( $image) ): ?>

    <style type="text/css">

    .image-top {
    background-image: url('<?php echo esc_url($image['url']);?>');
    }
    </style>

<?php endif; ?>


<section class="section section-about-top">
    <div class="row m-0  image-top "></div>
    <div class="row m-0 ">

        <?php if( have_rows('top_titles') ): ?>
                                <?php while( have_rows('top_titles') ): the_row(); 
                                $name = get_sub_field('sub_title');?>

                                    <div class="col-lg-3 col-sm-6 d-flex align-items-center justify-content-center text-center titles">
                                    <h2>    <?php echo $name?></h2> 
                                    </div>

                                <?php endwhile; ?>
        <?php endif; ?>


    </div>
</section>
