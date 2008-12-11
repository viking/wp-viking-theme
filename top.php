<div id="header_outer">
  <div id="header">
    <?php rounded_top('header'); ?>
    <div class="description"><?php bloginfo('description'); ?></div>
    <div class="headline"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
  </div>
  <table cellpadding="0" cellspacing="0" style="background: #D8D8C0">
    <tr>
      <td style="width: 1.3em"><img src="/wp-content/themes/viking/images/header-bl.gif" style="vertical-align: bottom;"/></td>
      <td style="width: 1.5em; background: transparent url(/wp-content/themes/viking/images/header-bfill.gif) bottom repeat-x;">&nbsp;</td>
      <td style="width: 52.4em; background: transparent url(/wp-content/themes/viking/images/quotes-tfill.gif) bottom repeat-x;">&nbsp;</td>
      <td style="width: 1.5em; background: transparent url(/wp-content/themes/viking/images/header-bfill.gif) bottom repeat-x;">&nbsp;</td>
      <td style="width: 1.3em"><img src="/wp-content/themes/viking/images/header-br.gif" style="vertical-align: bottom;"/></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td style="background: #28a07d url(/wp-content/themes/viking/images/quotes-right.gif) right no-repeat; text-align: right">
        <img src="/wp-content/themes/viking/images/blue.gif" style="float:right; margin-right: 10px; vertical-align: top" onclick="update_quote('quote');" />
        <img src="/wp-content/themes/viking/images/quotes-left.gif" style="float:left;"/>
        <div id="quote"></div>
      </td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>
<script type="text/javascript">
update_quote('quote');
</script>
