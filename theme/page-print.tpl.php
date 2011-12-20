<?php // $Id: page.tpl.php,v 1.1.2.5 2010/01/11 00:09:05 sociotech Exp $ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php //print $styles; ?>
  <link rel="stylesheet" href="<?php print base_path() . drupal_get_path('module', 'extension_printfriendly') .'/theme/print.css'; ?>" type="text/css" media="all">
</head>

<body class="print-friendly-body">

  <div id="limiter"> <!-- adds shadow around page -->
    <form id="send-to-printer">
      <input type="button" value="Print" onClick="window.print()" />
      <input type="button" value="Back" onClick="history.go(-1)" />
    </form>
  
    <div id="header">
      <div id="url-path">
        <?php print '<strong>Printed page URL:</strong> ' . $_SERVER['HTTP_HOST'] . base_path() . 'node/' . $node->nid; ?>
        <hr />
      </div> <!-- /url-path -->
    </div> <!-- /header -->
  
    <div id="content-region" class="content-region row nested">
      <div id="content-region-inner" class="content-region-inner inner">
        <div id="content-inner" class="content-inner block">
          <div id="content-inner-inner" class="content-inner-inner inner">
          
            <?php if ($title): ?>
              <h2 class="title"><?php print $title; ?></h2>
            <?php endif; ?>
            
            <?php if ($content): ?>
              <div id="content-content" class="content-content">
                <?php print $content; ?>
                <?php print $feed_icons; ?>
              </div><!-- /content-content -->
            <?php endif; ?>
          
          </div><!-- /content-inner-inner -->
        </div><!-- /content-inner -->
      </div><!-- /content-region-inner -->
    </div><!-- /content-region -->
  
  </div> <!-- /limiter -->

<?php print $closure; ?>

</body>
</html>
