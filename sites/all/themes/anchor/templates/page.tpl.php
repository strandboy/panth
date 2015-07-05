<!--PRELOADER-->
<!-- Preloader -->
<div id="preloader">
  <?php if ($site_name): ?>
    <h2 class="mega"><?php print $site_name; ?></h2>
  <?php endif; ?>
  <i class="<?php print theme_get_setting('preloader_icon_class', 'anchor'); ?>"></i>
  <div id="status">
    <div class="windows8">
      <div class="wBall" id="wBall_1">
        <div class="wInnerBall">
        </div>
      </div>
      <div class="wBall" id="wBall_2">
        <div class="wInnerBall">
        </div>
      </div>
      <div class="wBall" id="wBall_3">
        <div class="wInnerBall">
        </div>
      </div>
      <div class="wBall" id="wBall_4">
        <div class="wInnerBall">
        </div>
      </div>
      <div class="wBall" id="wBall_5">
        <div class="wInnerBall">
        </div>
      </div>
    </div>
  </div>
</div>
<!--END PRELOADER-->

<?php if ($page['contact_map']): ?>
  <?php print render($page['contact_map']); ?>
<?php endif; ?>

<?php if ($page['header_left'] || $page['header_right']): ?>
  <section id="header" class="social">
    <div class="wrapper clearfix">
      <?php if ($page['header_left']): ?>
        <div class="col1-2">
          <?php print render($page['header_left']); ?>
        </div>
      <?php endif; ?>

      <?php if ($page['header_right']): ?>
        <div class="col1-2">
          <?php print render($page['header_right']); ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>

<nav>
  <div class="wrapper clearfix">

    <div class="col1-4">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div class="gamma" id="site-name"><strong>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </strong></div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 class="gamma" id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /#name-and-slogan -->
      <?php endif; ?>

    </div>

    <?php if ($page['main_navigation']): ?>
      <div class="col3-4" id="nav">
        <?php print render($page['main_navigation']); ?>
      </div>
    <?php else: ?>
      <div class="col3-4" id="nav"><ul class="nav"></ul></div>
    <?php endif; ?>
  </div>
</nav>

<div id="header-bg" class="blue largetoppadding">
  <div class="wrapper clearfix">
    <?php if ($breadcrumb): ?>
      <div class="col1-1 breadcrumbs">
        <?php print $breadcrumb; ?>
      </div>
    <?php endif; ?>

    <?php if ($title): ?>
      <div class="col1-1">
        <h1 class="mega"><?php print $title; ?></h1>
        <?php if ($page['subtitle']): ?>
          <h4 class="delta subtitle"><?php print render($page['subtitle']); ?></h4>
        <?php endif; ?>
      </div>
    <?php endif; ?>

  </div>
</div>

<div id="main-wrapper" class="wrapper clearfix light">
  <div id="main">
    <div class="col1-1">
      <?php print $messages; ?>
    </div>

    <div id="content" class="<?php print $content_class; ?>"><div class="section">
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div>
    </div> <!-- /.section, /#content -->


    <?php if ($page['sidebar']): ?>
      <aside class="sidebar col1-4">
        <section>
          <?php print render($page['sidebar']); ?>
        </section>
      </aside>
    <?php endif; ?>


  </div>

</div><!--/WRAPPER-->

<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']): ?>
  <footer id="footer-columns" class="asphalt clearfix">
    <div class="wrapper">

      <?php if ($page['footer_first']): ?>
        <div class="col1-4">
          <?php print render($page['footer_first']); ?>
        </div>
      <?php endif; ?>

      <?php if ($page['footer_second']): ?>
        <div class="col1-4">
          <?php print render($page['footer_second']); ?>
        </div>
      <?php endif; ?>

      <?php if ($page['footer_third']): ?>
        <div class="col1-4">
          <?php print render($page['footer_third']); ?>
        </div>
      <?php endif; ?>


      <?php if ($page['footer_fourth']): ?>
        <div class="col1-4">
          <?php print render($page['footer_fourth']); ?>
        </div>
      <?php endif; ?>


    </div>
  </footer>
<?php endif; ?>

<?php if ($page['footer']): ?>
  <section id="footer-bottom" class="subfooter midnight">
    <div class="wrapper">
      <?php print render($page['footer']); ?>
      <div class="clear"></div>
    </div>
  </section>
<?php endif; ?>
<!--END FOOTER-->

<ul class="menu normal">
  <li class="btt"><a href="#"><i class="icon-double-angle-up"></i></a></li>
</ul>