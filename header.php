<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
  <head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php wp_enqueue_script('viking-jquery', '/wp-content/themes/viking/js/jquery-1.2.6.min.js' ); ?>
  <?php wp_enqueue_script('quotes', "/wp-content/themes/viking/js/quotes.js") ?>
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body>
<div id="main">
<div id="header">
  <div class="inner">
    <img class="ls" src="<?php viking_img('hl') ?>"/>
    <img class="rs" src="<?php viking_img('hr') ?>"/>
    <div class="description"><?php bloginfo('description'); ?></div>
    <div class="headline"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
  </div>
</div>
<div id="quote" style="background-image: url(<?php viking_img('qtf') ?>)">
  <div class="inner">
    <img id="qbutton" src="<?php viking_img('gray') ?>"/>
    <div class="text"></div>
    <img class="lc" src="<?php viking_img('qbl') ?>"/>
    <img class="rc" src="<?php viking_img('qbr') ?>"/>
  </div>
</div>
