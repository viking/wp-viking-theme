<?php get_header(); ?>

	<div id="content_outer">
    <?php rounded_top('content'); ?>
   <div id="content">
    <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post(); ?>
        <?php 
          if ($post->post_status == 'private') 
            continue;
        ?>
              

        <div class="post" id="post-<?php the_ID(); ?>">
          <div class="post_title">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
          </div>

          <div class="entry">
            <?php the_content('Read the rest of this entry &raquo;'); ?>
          </div>

          <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
        </div>

      <?php endwhile; ?>

      <div class="navigation">
        <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
        <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
      </div>

    <?php else : ?>

      <h2 class="center">Not Found</h2>
      <p class="center">Sorry, but you are looking for something that isn't here.</p>
      <?php include (TEMPLATEPATH . "/searchform.php"); ?>

    <?php endif; ?>
    </div>
    <?php rounded_bottom('content'); ?>

	</div>

<?php get_footer(); ?>
