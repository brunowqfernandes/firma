<?php
  get_header();
?>

<style>
  header .custom-logo-link, header .menu-toggle {
    filter: brightness(0) saturate(0);
  }
</style>

<main class="clientes">
    <div class="clientes-wrapper">
        <?php
            $the_query = new WP_Query('post_type=cliente&posts_per_page=-1');
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
        ?>
                    <a href="<?php echo get_the_permalink()?>">
                        <img class="cliente" src="<?php echo get_field('logo')?>">
                    </a>
        <?php
                }
            }
            wp_reset_postdata();          
        ?>

    </div>
</main>

<?php
  get_footer();
?>