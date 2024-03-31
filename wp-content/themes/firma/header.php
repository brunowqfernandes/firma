<!DOCTYPE html>
<html lang="pt-BR" <?php language_attributes(); ?>>

<head>
	<?php wp_head(); ?>

</head>
<body>
    <header>
      <div class="container container-md">
        <div class="row align-items-center">
          <div class="col-md-3">
            <?php the_custom_logo()?>
          </div>
        </div>
      </div>
      <button class="menu-toggle">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/menu.png" alt="">
      </button>
    </header>
    <div class="menu-wrapper">
      <?php wp_nav_menu(array( 'theme_location' => 'main_menu' )); ?>
    </div>
    <!-- <div class="parallax-wrapper">
      <div>
        <img class="parallax" src="<?php echo get_template_directory_uri()?>/assets/img/parallax/img_paralax-01.png" alt="">
      </div>
      <div>
        <img class="parallax" src="<?php echo get_template_directory_uri()?>/assets/img/parallax/img_paralax-02.png" alt="">
      </div>
      <div>
        <img class="parallax" src="<?php echo get_template_directory_uri()?>/assets/img/parallax/img_paralax-03.png" alt="">
      </div>
    </div> -->