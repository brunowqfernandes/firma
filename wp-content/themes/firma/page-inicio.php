<?php
  get_header();
?>

<main>
  <div class="hero" style="background: url(<?php echo get_field('background_banner')?>)">
        <?php echo nl2br(get_field('texto_banner'))?>
  </div>

</main>

<?php
  get_footer();
?>