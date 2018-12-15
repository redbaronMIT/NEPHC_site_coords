<?php
/*
Template Name: List Child Links
*/
$children = wp_list_pages( 'title_li=&child_of='.$page->ID.'&echo=0' );
if ( $children) : ?>
    <ul>
        <?php echo $children; ?>
    </ul>
<?php endif; ?>
