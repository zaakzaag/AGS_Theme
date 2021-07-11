<?php

$className = 'testimonial';
if(!empty($block['className'])){
    $className .=' '.$block['className'];
}

if(!empty($block['align'])){
    $className .=' align'.$block['align'];
}


$headTitle = get_field('head_title');
?>


<section class="section section-address">
    <div class=" wrapper mw-100  pt-5">
        <div class="row d-flex align-items-top justify-content-center text-center  pt-5 pb-5">



            <?php if( have_rows('address_columns') ): ?>
                <?php while( have_rows('address_columns') ): the_row(); 
                                    $headerTitle = get_sub_field('head_title');
                                    $address = get_sub_field('address_data'); ?>

                    <div class="col-md-3 mb-5 d-flex flex-column align-items-center justify-content-top">

                        <div class="top-dot d-flex align-items-center justify-content-center">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="top-title mb-3 mt-3"><h3><?php echo $headerTitle; ?></h3></div>
                        <div class="address-data">
                            <address>
                                <?php echo $address['name_surname']; ?><br/>
                                <a href="tel:<?php echo $address['phone_number']; ?>"><?php echo $address['phone_number']; ?></a><br/>
                                <a href="mailto:<?php echo $address['email']; ?>"><?php echo $address['email']; ?></a><br/>
                                <?php echo $address['place']; ?>

                            </address>

                        </div>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>


</section>