<?php
  get_header();
?>

<style>
  header .custom-logo-link, header .menu-toggle {
    filter: brightness(0) saturate(0);
  }
</style>

<main class="trabalhos">
<?php get_header(); ?>

<div class="content">
    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>

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
                    'value'   => '"' . $cliente_id . '"',
                    'compare' => 'LIKE'
                )
            )
        );

        // A consulta
        $projetos = new WP_Query($args);

        if ($projetos->have_posts()) : ?>
            <h2>Projetos Relacionados</h2>
            <ul>
                <?php while ($projetos->have_posts()) : $projetos->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        <?php endif; ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>

</main>

<?php
  get_footer();
?>