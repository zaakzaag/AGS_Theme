<?php

$className = 'testimonial';
if(!empty($block['className'])){
    $className .=' '.$block['className'];
}

if(!empty($block['align'])){
    $className .=' align'.$block['align'];
}


$image = get_field('image_bg');


if( !empty( $image) ): ?>

    <style type="text/css">

    .clients-section {
    background-image: url('<?php echo esc_url($image['url']);?>');
    }
    </style>

<?php endif; ?>


<section class="section clients-section">
    <div class="wrapper text-center justify-content-center">
        <div class="row justify-content-center title">
            <h2>REKOMENDACJE</h2>
        </div>
        <div class="row justify-content-center slider-row">
            <div class="col-md-10 ">    
                <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">



                        <?php if( have_rows('recommendations_list') ): ?>
                                <?php while( have_rows('recommendations_list') ): the_row(); 
                                $name = get_sub_field('name');
                                $description = get_sub_field('description'); ?>

                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="row justify-content-center">
                                                <div class="col-7 col-sm-8 col-md-10 recomm-info ">

                                                    <div class="top-dot"></div>
                                                    <div class="recommendation-name"><?php echo $name?></div>
                                                    <div class="recommendation-description"><?php echo $description?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endwhile; ?>
                        <?php endif; ?>


                    </div>
                    <div class="fa fa-chevron-left prev-button"></div>
                    <div class="fa fa-chevron-right next-button"></div>
           
                </div>
            </div>
        </div>
        <div class="row logos-row d-flex align-items-center justify-content-center">

            <?php if( have_rows('logo_section') ): ?>
                <?php while( have_rows('logo_section') ): the_row(); 
                                $logoImage = get_sub_field('logo_image');
                                 ?>

                            <div class="col-sm-3 d-flex align-items-center justify-content-center">
                                <img src="<?php echo $logoImage['url']?>" alt="">
                            </div>
                                 

                <?php endwhile; ?>
            <?php endif; ?>
            
        </div>
    </div>
</section>