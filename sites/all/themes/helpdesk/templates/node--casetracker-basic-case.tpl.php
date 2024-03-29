<article<?php print $attributes; ?> id="node-type-case">
  <div id="node-content-region">
  
  <div class="node-author"><?php print $user_picture; ?></div>
  
  <div id="node-content"> 
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  
  
  <div class="node-information">
    <h1 class="ticket-title"><?php print t('Ticket: '); ?><span class="themecolor-text">#<?php print $nid; ?></span> - <?php print $title; ?></h1>
   <i class="fa fa-clock-o"></i> Send by <?php print $name ?> on <span class="node-post-date"><?php print date('m/d/Y h:i',$node->created); ?></span>
    
  </div>
  
  <div <?php print $content_attributes; ?>>
    
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['casetracker_case_summary']);
      print render($content);
    ?>
  </div>
  </div>
  
  
  </div>
  
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>