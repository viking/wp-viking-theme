<div id="content" class="narrowcolumn">
  <div class="top">
    <img class="lc" src="<?php viking_img('ctl') ?>"/>
    <img class="rc" src="<?php viking_img('ctr') ?>"/>
  </div>
  <div class="inner">
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="title">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br/>
        <?php if (!is_page()) : ?>
        <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
        <?php endif; ?>
      </div>

      <div class="entry">
        <?php the_content('Read the rest of this entry &raquo;'); ?>
      </div>

      <?php if (is_page()) : ?>
      <?php elseif (is_single()) : ?>
      <p class="postmetadata-single">
        <small>
          This entry was posted
          <?php /* This is commented, because it requires a little adjusting sometimes.
            You'll need to download this plugin, and follow the instructions:
            http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
            /* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
          on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
          and is filed under <?php the_category(', ') ?>
          <?php the_tags( 'and has the following tags: ', ', ', ''); ?>.
          You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

          <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
            // Both Comments and Pings are open ?>
            You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

          <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
            // Only Pings are Open ?>
            Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

          <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
            // Comments are open, Pings are not ?>
            You can skip to the end and leave a response. Pinging is currently not allowed.

          <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
            // Neither Comments, nor Pings are open ?>
            Both comments and pings are currently closed.

          <?php } edit_post_link('Edit this entry','','.'); ?>

        </small>
      </p>
      <?php else : ?>
      <p class="postmetadata">
        <?php the_tags('Tags: ', ', ', '<br />'); ?>
        <?php if (!in_category("uncategorized")) { ?>
        Posted in <?php the_category(', ') ?> |
        <?php } ?>
        <?php edit_post_link('Edit', '', ' | '); ?>
        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
      </p>
      <?php endif; ?>
    </div>
    <?php if (is_single()) : comments_template(); endif; ?>
  <?php endwhile; ?>
  <div class="navigation">
    <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
    <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
  </div>
<?php else : ?>
  <h2 class="center">Not Found</h2>
  <p class="center">Sorry, but you are looking for something that isn't here.</p>
  <?php get_search_form(); ?>
<?php endif; ?>
  </div>
  <div class="bottom">
    <img class="lc" src="<?php viking_img('cbl') ?>"/>
    <img class="rc" src="<?php viking_img('cbr') ?>"/>
  </div>
</div>
