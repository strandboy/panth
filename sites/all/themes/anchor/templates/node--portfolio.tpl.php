
<?php if (!$page): ?>
  <?php
  include 'node_portfolio_teaser.tpl.php';
  ?>
<?php else: ?>
  <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php print $user_picture; ?>
    <?php if (theme_get_setting('show_node_title_on_full_page', 'anchor')): ?>
      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
        <h3<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    <?php endif; ?>



    <div class="content"<?php print $content_attributes; ?>>
      <?php
      // We hide the comments and links now so that we can render them later.
      if (!empty($content['field_tags'])) {
        hide($content['field_tags']);
      }
      if (!empty($content['field_portfolio_category'])) {
        hide($content['field_portfolio_category']);
      }
      hide($content['comments']);
      hide($content['links']);
      print render($content);
      ?>
    </div>

    <?php if ($display_submitted): ?>
      <div class="zeta meta submitted">
        <?php print $submitted; ?>
        <?php
        if (!empty($node->comment_count)) {
          print ' / <a href="' . url('node/' . $node->nid) . '#comments">' . $node->comment_count . ' ' . t('comments') . '</a>';
        }
        ?>
        <?php
        if (!empty($content['field_tags'])) {
          print ' / ' . t('Tags') . ':' . anchor_format_comma_field('field_tags', $node);
        }
        ?>
        <?php
        if (!empty($content['field_portfolio_category'])) {
          print ' / ' . t('Category') . ':' . anchor_format_comma_field('field_portfolio_category', $node);
        }
        ?>
      </div>
    <?php endif; ?>
    <div class="clear"></div>
    <?php print render($content['links']); ?>

    <?php print render($content['comments']); ?>

  </div>

<?php endif; ?>