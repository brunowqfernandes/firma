<!DOCTYPE html>
<html lang="pt-BR" <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset')?>">

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <title>Nutrimotiva</title>

  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri()?>/assets/img/favicon.png">

  <meta property="og:title" content="Nutrimotiva" />
  <meta property="og:url" content="https://www.nutrimotiva.com" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:description" content="Prazer, nós somos a Nutrimotiva. Nosso programa oferece consultas com
  nutricionistas, bioimpedância InBody e apoio emocional. Com uma abordagem
  eficiente, prática e livre de radicalismos." />


  <meta name="description" content="Prazer, nós somos a Nutrimotiva. Nosso programa oferece consultas com
  nutricionistas, bioimpedância InBody e apoio emocional. Com uma abordagem
  eficiente, prática e livre de radicalismos." />

	<?php wp_head(); ?>

</head>
<body>
    <header>
      <div class="container container-md">
        <div class="row align-items-center">
          <div class="col-md-3">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" alt="">
          </div>
          <div class="col-md-9">
            <div class="menu-wrapper">
              <div id="menuToggle" class="d-md-none">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>                
              </div>
              <nav>
                
                <ul>
                  <li>
                    <a href="<?php echo get_home_url() ?>">Home</a>
                  </li>
                  <li>
                    <a href="https://nutrimotiva.com/#como-funciona" target="_blank">Como funciona</a>
                  </li>
                  <li>
                    <a href="https://nutrimotiva.com/#planos" target="_blank">Planos</a>
                  </li>
                  <li>
                    <a href="https://nutrimotiva.com/#quem-somos" target="_blank">Quem somos</a>
                  </li>
                </ul>
              </nav>
              <a href="https://wa.me/11976104206?text=Ol%C3%A1" target="_blank" class="botao">Contrate agora</a>             
            </div>
          </div>
        </div>
      </div>
    </header>
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