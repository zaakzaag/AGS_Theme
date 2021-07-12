<?php

$className = 'testimonial';
if(!empty($block['className'])){
    $className .=' '.$block['className'];
}

if(!empty($block['align'])){
    $className .=' align'.$block['align'];
}
 ?>


<section class="section  section-products section-case-study">
    <div class=" wrapper mw-100  pt-5">
        <div class="row d-flex align-items-top justify-content-center  pt-5 pb-5">
            <div class="col-10 ">



                <?php
                    $mypages = get_pages( array( 'child_of' => 12 ) );
 
                foreach( $mypages as $page ) {      
 
                ?>

                        <div class="item case-study">
                            <div class="item-miniature" style="background-image:url(<?php echo get_the_post_thumbnail_url($page->ID); ?>)">
                                
                            </div>
    
                            <div class="item-name">
                                <h3><?php echo $page->post_title; ?></h3>
                                <a href="<?php echo get_page_link( $page->ID ); ?>" class="item-arrow"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
    
                            <a href="<?php echo get_page_link( $page->ID ); ?>" class="product-hover-effect"><?php echo $page->post_title; ?></a>
    
                        </div>
              
                <?php }   ?>


            </div>
        </div>
    </div>
</section>