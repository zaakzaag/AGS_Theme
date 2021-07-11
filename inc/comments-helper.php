<?php
if( ! function_exists( 'better_commets' ) ):
function better_comments($comment, $args, $depth) {
    ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

<div class="container  pb-sm-4">
    <div class="row">
        <div class=" avatar d-flex flex-column justify-content-center align-self-center">   <?php echo get_avatar($comment,$size='80' ); ?></div>
        <div class="col-9 author-date d-flex flex-column justify-content-center">
           <div class="author-nick"><?php echo get_comment_author() ?></div>
           <div class="date">            
            <?php printf(get_comment_date()); ?></div> 

        </div>
        <div class="col-1 d-flex flex-column justify-content-center">
        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>

    </div>
    <div class="row d-flex mt-2">
        <div class="col-10 comment-desc">   <?php comment_text(); ?></div>
 
    </div>
</div>
        

<?php
        }
endif; ?>