<?php

$className = 'testimonial';
if(!empty($block['className'])){
    $className .=' '.$block['className'];
}

if(!empty($block['align'])){
    $className .=' align'.$block['align'];
}



?>
<section class="section contact-section">
    <div class="wrapper text-center justify-content-center">
        <div class="title">
            <h2>Chcesz dowiedzieć się więcej?</h2>
            <h3>Napisz do nas</h3>
        </div>
        <div class="row d-flex justify-content-center "> 
            <?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
        </div>
  
    </div>

</section>


