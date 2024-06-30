<?php
  get_header();
?>

<style>
  header .custom-logo-link, header .menu-toggle {
    filter: brightness(0) saturate(0);
  }
</style>

<main class="trabalhos">
  <h2 class="titulo-pagina">Projetos</h2>
    <?php
        $the_query = new WP_Query( array(
          'post_type' => 'projeto',
          'tax_query' => array(
              array (
                  'taxonomy' => 'cat_projetos',
                  'field' => 'slug',
                  'terms' => 'arquivo',
                  'operator' => 'NOT IN'
              )
          ),
      ) );
        if ( $the_query->have_posts() ) {
    ?>
            <div class="fotos">
                <?php
                  while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                ?>
                      <img class="foto-projeto" src="<?php echo get_field('imagem_banner')?>">
                <?php 
                  }
                ?>
                            
            </div>
            <div class="projetos">
                <ul>
                    <?php
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                    ?>
                                <li>
                                    <a href="<?php echo get_the_permalink()?>"><?php echo get_field('cliente')->post_title . ', ' . get_the_title()?></a>
                                </li>
                    <?php 
                            }
                    ?>
                </ul>
            </div>
    <?php
        } 
        wp_reset_postdata();          
    ?>
</main>

<?php
  get_footer();
?>