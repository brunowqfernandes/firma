<!DOCTYPE html>
<html lang="pt-BR" <?php language_attributes(); ?>>

<head>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <header>
      <?php the_custom_logo()?>
      <button class="menu-toggle">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/menu.png" alt="">
      </button>
    </header>
    <div class="menu-wrapper">
      <div class="menu-content">
        <?php wp_nav_menu(array( 'theme_location' => 'main_menu' )); ?>
      </div>
      <div class="menu-footer">
        <p>@studio_firma / @vimervm</p>
        <p>
          studiofirma@studiofirma.com.br <br>
          Rua Patizal, 62, Vila Madalena São Paulo-SP <br>
          Trabalhos Arquivo Clientes Loja Contato 
        </p>
      </div>
    </div>