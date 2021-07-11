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


<section class="section section-about-desc">
    <div class=" wrapper mw-100  pt-5">
        <div class="row d-flex align-items-top justify-content-center  pt-5 pb-5">
            <div class="col-lg-5 ">
                <h2>
                    <?php echo $headTitle ?>
                </h2>


                
                <?php if( have_rows('left_column_about') ): ?>
                    <?php while( have_rows('left_column_about') ): the_row(); 
                                    $paragraph = get_sub_field('left_side_paragraph');
                                    ?>
                                    <p><?php echo $paragraph?></p>
                    <?php endwhile; ?>  
                <?php endif; ?>


            </div>
            <div class="col-lg-5">

            <?php if( have_rows('right_column_about') ): ?>
                    <?php while( have_rows('right_column_about') ): the_row(); 
                                    $paragraph = get_sub_field('right_side_paragraph');
                                    $subTitle = get_sub_field('sub_title');
                                    ?>
                                    <h4><?php echo $subTitle?></h4>
                                    <p><?php echo $paragraph?></p>
                    <?php endwhile; ?>  
                <?php endif; ?>

            </div>
        </div>



    </div>

    <div class="row d-flex align-items-top justify-content-center text-center pt-5 pb-5 sub-footer m-0">
        To my –&nbsp; <b> AGS Systems</b>.
    </div>
</section>