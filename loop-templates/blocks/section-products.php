<?php

$className = 'testimonial';
if(!empty($block['className'])){
    $className .=' '.$block['className'];
}

if(!empty($block['align'])){
    $className .=' align'.$block['align'];
}



?>
<section class="section section-products">
    <div class="wrapper">

        <div class="title text-center section-title">
            <div class="row d-flex justify-content-center higher-index">
                <div class="col-lg-11 higher-index">
                    <h2><?php echo get_field('section_title')?></h2>
                    <div class="description"><?php echo get_field('section_description')?></div>
                </div>
            </div>
        </div>

        <div class="listing">
            <div class="row">

                <?php if( have_rows('products_view') ): ?>
    
                    <?php while( have_rows('products_view') ): the_row(); 
                    $title = get_sub_field('title');
                    $link = get_sub_field('link_url');
                    $background_image = get_sub_field('background_image');
                    ?>

                        <div class="col-md-6 col-lg-4 col-xl-4">                    
                        <div class="item">
                            <div class="item-miniature" style="background-image:url(<?php echo $background_image['url']?>)">
                                
                            </div>
    
                            <div class="item-name">
                                <h3><?php echo $title?></h3>
                                <a href="<?php echo $link?>" class="item-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
    
                            <a href="<?php echo $link?>" class="product-hover-effect"><?php echo $title?></a>
    
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>




            </div>
            <div class="row pt-3 pb-5">
                <div class="col d-flex justify-content-center">
                    <div class="buttons">
                        <a class="btn btn-lg btn-gray" href="<?php echo get_field('button_link')?>"><?php echo get_field('button_title')?></a>
                    </div>
                </div>
            </div>
        </div>

        
    </div>




</section>