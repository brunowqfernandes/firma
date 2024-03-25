<?php
  get_header();
?>

<main>
  <section id="topo">
    <div class="bg-hero"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-6 bloco-conteudo">
          <h1>But I must explain you how all</h1>
          <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and.</p>
        </div>
      </div>
    </div>

    <a href="https://wa.me/11976104206?text=Ol%C3%A1" target="_blank" class="whatsapp">
      <img src="<?php echo get_template_directory_uri()?>/assets/img/avatar-nutri.png" alt="">
      <span class="texto">
        <h3><span>Sua</span>Nutri!</h3>
        <p>Fale com a nossa equipe!</p>
      </span>
      <img src="<?php echo get_template_directory_uri()?>/assets/img/whats.png" alt="">
    </a>    
  </section>

  <section id="blog">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-10 mb-107">
          <h2>
          But I must explain to you how all this
          </h2>
          <p class="subtitulo">
            The quick, brown fox jumps over a lazy dog. DJs
          </p>
        </div>
      </div>
      <div class="row justify-content-center align-items-center">

      <?php
        $the_query = new WP_Query('post_type=post');
        if ( $the_query->have_posts() ) {

          while ( $the_query->have_posts() ) {
            $the_query->the_post();
      ?>
              <div class="col-12 col-md-10 col-lg-4 mb-4 mb-lg-0">
                <div class="card">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <div class="content">
                    <h3><?php the_title();?></h3>
                    <p><?php the_excerpt();?></p>
                    <a href="<?php the_permalink() ?>">Saiba mais</a>
                  </div>
                </div>
              </div>
      <?php                
          }
        } 
        wp_reset_postdata();          
      ?>
        
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <a href="#topo" class="voltar-topo"><?php echo file_get_contents(get_template_directory_uri() . "/assets/img/voltar-topo.svg")  ?></a>  
        </div>
      </div>
    </div>
  </section>

</main>

<?php
  get_footer();
?>