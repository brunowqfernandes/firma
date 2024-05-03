<?php
  get_header();
?>

<style>
  header .custom-logo-link, header .menu-toggle {
    filter: brightness(0) saturate(0);
  }
</style>

<main class="trabalhos">
    <?php while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php
        // Obtemos o ID do post atual, que é um cliente
        $cliente_id = get_the_ID();

        // Argumentos para a consulta de projetos relacionados
        $args = array(
            'post_type'      => 'projeto',
            'posts_per_page' => -1,
            'meta_query'     => array(
                array(
                    'key'     => 'cliente', // Certifique-se de substituir pela chave correta do campo ACF
                    'value'   => $cliente_id,
                    'compare' => '='
                )
            )
        );

        // A consulta
        $projetos = new WP_Query($args);

        if ($projetos->have_posts()) : ?>
            <div class="fotos">
                <?php
                  while ( $projetos->have_posts() ) {
                      $projetos->the_post();
                ?>
                      <img class="foto-projeto" src="<?php echo get_field('imagem_banner')?>">
                <?php 
                  }
                ?>
                            
            </div>
            <div class="projetos">
                <ul>
                    <?php
                            while ( $projetos->have_posts() ) {
                                $projetos->the_post();
                    ?>
                                <li>
                                    <a href="<?php echo get_the_permalink()?>"><?php echo get_the_title()?></a>
                                </li>
                    <?php 
                            } 
                            wp_reset_postdata();
                    ?>
                </ul>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
</main>

<?php
  get_footer();
?>