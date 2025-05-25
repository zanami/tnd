<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<header id="header" class="header" role="header">
  <div class="header-container">
    <div id="navheader" class="column">
      <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php print $front_page; ?>" title="<<?php print $site_name; ?>" rel="home" id="logo"
            class="navbar-brand">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        </div> <!-- /.navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <?php if ($main_menu): ?>
            <ul id="main-menu" class="menu nav navbar-nav">
              <?php print render($main_menu); ?>
            </ul>
        <?php endif; ?>
          <?php if ($search_form): ?>
            <?php print $search_form; ?>
          <?php endif; ?>
          <?php if ($language_homes): ?>
            <?php print $language_homes; ?>
          <?php endif; ?>
        </div><!-- /.navbar-collapse -->

      </nav>
      
        <?php if ($breadcrumb): ?>
          <div id="breadcrumb" class="visible-desktop">
            <?php print $breadcrumb; ?>
          </div>
        <?php endif; ?>
        <?php if ($messages): ?>
          <div id="messages">
            <?php print $messages; ?>
          </div>
        <?php endif; ?>
        <?php if ($title): ?>
          <div class="page-header contextual-links-region">
            <h1 class="title"><?php print $title; ?></h1>
            <?php if ($tabs): ?>
              <div class="hidden-tabs">
                <?php print render($tabs); ?>
              </div>
            <?php endif; ?>
            <?php if ($action_links): ?>
              <ul class="action-links">
                <?php print render($action_links); ?>
              </ul>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <?php if ($secondary_menu || $tabs || $action_links): ?>
          <div id="secondary-navigation" class="contextual-links-region">
            <?php print theme('links__system_secondary_menu', array(
              'links' => $secondary_menu,
              'attributes' => array(
                'id' => 'secondary-menu-links',
                'class' => array('menu', 'nav', 'nav-pills'),
              ),
              'heading' => array(
                'text' => t('Secondary menu'),
                'level' => 'h2',
                'class' => array('element-invisible'),
              ),
            )); ?>
          <!-- /#secondary-menu -->
          </div>
        <?php endif; ?>
    </div> <!-- /.column -->

    <div class="clearfix"></div>
  </div>
</header>

<div id="main-wrapper">
  <div id="main" class="main">
    <div id="content" class="<?php print (!$is_panel) ? 'container' : ''; ?>">
      <?php print render($page['content']); ?>
    </div>
  </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->

<footer id="footer" class="footer" role="footer">
  <div class="container">
    <?php if ($copyright): ?>
      <small class="copyright pull-left"><?php print $copyright; ?></small>
    <?php endif; ?>
    <small class="pull-right"><a href="#"><?php print t('Back to Top'); ?></a></small>
  </div>
</footer>