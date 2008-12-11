<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

function rounded_top($prefix) {
?>
<div class="corners" style="height: 13px; background: transparent url(<?php bloginfo('stylesheet_directory') ?>/images/<?php echo $prefix ?>-tr.gif) top right no-repeat;">
  <img src="<?php bloginfo('stylesheet_directory') ?>/images/<?php echo $prefix ?>-tl.gif" style="vertical-align: top" />
</div>
<?php
}
function rounded_bottom($prefix) {
?>
<div class="corners" style="clear: both; height: 20px; background: transparent url(<?php bloginfo('stylesheet_directory') ?>/images/<?php echo $prefix ?>-bfill.gif) bottom repeat-x;">
  <img src="<?php bloginfo('stylesheet_directory') ?>/images/<?php echo $prefix ?>-br.gif" style="float: right; vertical-align: bottom;"/>
  <img src="<?php bloginfo('stylesheet_directory') ?>/images/<?php echo $prefix ?>-bl.gif" style="vertical-align: bottom;"/>
</div>
<?php
}
?>
