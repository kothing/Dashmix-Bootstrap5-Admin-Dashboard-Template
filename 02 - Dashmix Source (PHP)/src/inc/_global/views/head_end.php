<?php
/**
 * head_end.php
 *
 * Author: pixelcave
 *
 * (continue) The first block of code used in every page of the template
 *
 * The reason we separated head_start.php and head_end.php is for enabling
 * us to include between them extra plugin CSS files needed only in specific pages
 *
 */
?>

  <!-- Dashmix framework -->
  <link rel="stylesheet" id="css-main" href="<?php echo $dm->assets_folder; ?>/css/dashmix.min.css">

  <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
  <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
  <?php if ($dm->theme) { ?>
  <link rel="stylesheet" id="css-theme" href="<?php echo $dm->assets_folder; ?>/css/themes/<?php echo $dm->theme; ?>.min.css">
  <?php } ?>
  <!-- END Stylesheets -->
</head>

<body>
