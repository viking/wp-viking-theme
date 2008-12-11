<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>

    <div id="content_outer">
  <?php rounded_top('content'); ?>
<div id="content">

<h2>Links:</h2>
<ul>
<?php get_links_list(); ?>
</ul>

</div>
<?php rounded_bottom('content'); ?>
    </div>



<?php get_footer(); ?>
