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

$className = 'testimonial';
if(!empty($block['className'])){
    $className .=' '.$block['className'];
}

if(!empty($block['align'])){
    $className .=' align'.$block['align'];
}
 ?>


<section class="section  section-team">
    <div class=" wrapper mw-100 px-0">
        <div class="row m-0  pt-0 pb-5">

        <?php if( have_rows('team_repeater') ): ?>
        
            <?php while( have_rows('team_repeater') ): the_row(); 
            $name_and_surname = get_sub_field('name_and_surname');
            $job_position = get_sub_field('job_position');
            $person_description = get_sub_field('person_description');
            $background_image = get_sub_field('picture');
            ?>



                <div class="col-lg-4 col-md-6 person-column d-flex align-items-end" style="background-image:url(<?php echo $background_image['url']?>)">                
                    <h5><?php echo $name_and_surname; ?></h5>

                    <div class="person-info d-flex d-flex justify-content-center">
                        <h5><?php echo $name_and_surname; ?></h5>
                        <div class="person-position"><?php echo $job_position; ?></div>
                        <div class="person-desc"><?php echo $person_description; ?></div>

                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

        </div>
    </div>
</section>