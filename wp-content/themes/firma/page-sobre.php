<?php
  get_header();
?>

<style>
  @media (max-width: 767px) {
    .hero {
      padding-top: 120px;
      padding-bottom: 40px;
      height: auto;
    }
  }
</style>

<main>
  <h2 class="titulo-pagina" style="color:#fff;"><?php the_title()?></h2>
  <div class="hero" style="background-image: url(<?php echo get_field('background_sobre')?>)">
        <?php echo nl2br(get_field('texto_sobre'))?>
  </div>

</main>

<?php
  get_footer();
?>