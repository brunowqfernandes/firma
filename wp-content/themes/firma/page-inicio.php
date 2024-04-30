<?php
  get_header();
?>

<main>
  <div class="hero" style="background-image: url(<?php echo get_field('background_banner')?>)">
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php $contador = 1;
          while(get_field('background_banner_imagem_'.$contador):?>
            <div class="swiper-slide" background-image: url(<?php echo get_field('background_banner_imagem_'.$contador); $contador++?>)></div>
        <?php endwhile;?>
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