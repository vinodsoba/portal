<!DOCTYPE html>
<html>
<head>
  <title>RainForest Theme</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
  <header>
    <?php echo "this is my header"; ?>

    <div class="container">
      <div class="row">
    <?php wp_nav_menu(

      array(
        'theme_location' => 'top-menu',
        'menu_class' => 'navigation'
      )
    );?>
  </div>
  </div>

  </header>
