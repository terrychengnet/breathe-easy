<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link href="<?= get_template_directory_uri() ?>/resources/fonts/fontawesome/css/fontawesome.css"
        rel="stylesheet">
  <link href="<?= get_template_directory_uri() ?>/resources/fonts/fontawesome/css/brands.css"
        rel="stylesheet">
  <link href="<?= get_template_directory_uri() ?>/resources/fonts/fontawesome/css/solid.css"
        rel="stylesheet">
  <!-- End Font Awesome -->

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11335234229"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-11335234229');
  </script>
    <!-- Google tag (gtag.js) ends -->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php do_action('get_header'); ?>

  <div id="app">
    <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
  </div>

  <?php do_action('get_footer'); ?>
  <?php wp_footer(); ?>
</body>

</html>