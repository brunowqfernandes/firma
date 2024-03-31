<?php
  get_header();
?>

<main>
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.367339980616!2d-46.68873599999999!3d-23.5552469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5797ca0796bd%3A0x1b60d77caeb6f8a0!2sR.%20Patizal%2C%2062%20-%20Vila%20Madalena%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005433-040!5e0!3m2!1spt-BR!2sbr!4v1711903428502!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="location">
    <?php if ( is_active_sidebar( 'barra-endereco' ) ) : ?>
        <?php dynamic_sidebar( 'barra-endereco' ); ?>
    <?php endif; ?>
  </div>
</main>

<?php
  get_footer();
?>