<?php
  get_header();
?>

<style>
  header .custom-logo-link {
    filter: brightness(0) saturate(0);
  }
</style>

<main class="time">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper" data-swiper-autoplay="false">
        <!-- Slides -->
        <?php
          $the_query = new WP_Query('post_type=membro');
          if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
              $the_query->the_post();
        ?>
            <div class="swiper-slide">
                <div class="descricao">
                    <p><?php echo nl2br(get_field('descricao', false, false)) ?></p>
                </div>
                <div class="foto" style="background-image: url('<?php echo get_field('foto') ?>')">
                    <h2><?php echo get_the_title(); ?></h2>
                </div>
            </div>
        <?php
            }
          } 
          wp_reset_postdata();          
        ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>    
    
</main>

<?php
  get_footer();
?>