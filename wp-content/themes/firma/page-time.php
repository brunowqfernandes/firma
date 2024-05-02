<?php
  get_header();
?>

<main class="time">
    <div class="descricao">
        <p><?php echo nl2br(get_field('descricao', false, false)) ?></p>
    </div>
    <div class="foto" style="background: url('<?php echo get_field('foto') ?>')">
        <h2><?php echo get_the_title(); ?></h2>
    </div>
</main>

<?php
  get_footer();
?>