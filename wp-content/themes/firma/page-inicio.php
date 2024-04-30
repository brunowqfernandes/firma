<?php
  get_header();
?>

<main>
  <div class="hero">
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php
          $the_query = new WP_Query('post_type=projeto');
          if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
              $the_query->the_post();
        ?>
            <div class="swiper-slide" style="background-image: url(<?php echo get_field('imagem_banner');?>)">
              <a href="<?php echo get_the_permalink()?>"></a>
            </div>
        <?php
            }
          } 
          wp_reset_postdata();          
        ?>
      </div>
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>    
    <?php echo nl2br(get_field('texto_banner'))?>
  </div>

</main>

<?php
  get_footer();
?>