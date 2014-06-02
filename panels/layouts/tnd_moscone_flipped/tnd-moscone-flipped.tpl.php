<?php
/**
 * @file
 * Template for Radix Moscone Flipped.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display moscone-flipped clearfix <?php if (!empty($classes)) { print $classes; } ?><?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

<?php if ($content['header']): ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['header']; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif;?>
<?php if ($content['intro']): ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['intro']; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif;?>
  <div class="container ">
    <div class="row">
      <div class="col-md-9 content panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['contentmain']; ?>
        </div>
      </div>
      <div class="col-md-3 sidebar panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['sidebar']; ?>
        </div>
      </div>
    </div>
    
  </div>
<?php if ($content['footer']): ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['footer']; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif;?>
  
  <div id="pagebanner" class="banner">
    <div class="panel-panel">
      <div class="panel-panel-inner">
        <?php print $content['banner']; ?>
      </div>
    </div>
  </div>
  
</div><!-- /.moscone-flipped -->
