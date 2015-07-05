<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!empty($content['field_image'])): ?>
    <?php print render($content['field_image']); ?>
    <div class="clear padding"></div>
  <?php endif; ?>
  <div class="two_thirds">
    <h3 class="delta"<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>

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

  </div>

  <div class="one_third last">
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

    <a href="<?php print $node_url; ?>" class="button"><?php print t('Read More'); ?></a>
  </div>
  <div class="clear"></div>
</article>