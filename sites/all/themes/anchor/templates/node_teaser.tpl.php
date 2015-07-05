<?php
$node_teaser_class = 'body-content';
if (!empty($node->field_image) && !empty($content['field_image'])) {
  $node_teaser_class = 'one_third last';
}
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <h3 class="delta"<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
  <?php if (!empty($node->field_image) && !empty($content['field_image'])): ?>
    <div class="two_thirds">
      <?php print render($content['field_image']); ?>
    </div>
  <?php endif; ?>
  <div class="<?php print $node_teaser_class; ?>">
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
      </div>
    <?php endif; ?>
    <div class="content"<?php print $content_attributes; ?>>
      <?php
      // We hide the comments and links now so that we can render them later.
      if (!empty($content['field_tags'])) {
        hide($content['field_tags']);
      }
      hide($content['comments']);
      hide($content['links']);
      print render($content);
      ?>
    </div>
    <a href="<?php print $node_url; ?>" class="button"><?php print t('Read More'); ?></a>
  </div>
  <div class="clear"></div>
</article>