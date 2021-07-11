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

.section-header {
background-image: url('<?php echo esc_url($image['url']);?>');
}
</style>
<?php endif; ?>


<section class="section section-header">
<div class="wrapper d-flex align-items-center align-middle test-class h-100">
     <div> 
         <h1>  
                <?php the_field('text_box'); ?>
            </h1>
            <div class="buttons">

                <?php if( have_rows('first_sect_btns') ): ?>
                    <?php while( have_rows('first_sect_btns') ): the_row(); 
                                    $title = get_sub_field('title');
                                    $link = get_sub_field('link'); ?>
                        <a class="btn btn-small btn-white" href="<?php echo $link?>"><?php echo $title?></a>
                    <?php endwhile; ?>
                <?php endif; ?>

        </div>
    </div>
        </div>

</div>
</section>