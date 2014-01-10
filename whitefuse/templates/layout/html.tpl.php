<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head profile="<?php print $grddl_profile; ?>">

  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <div id="skip-link">
	<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

</body>

</html>
