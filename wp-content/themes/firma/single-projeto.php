<?php
  get_header();
?>

<style>
  header .custom-logo-link, header .menu-toggle {
    filter: brightness(0) saturate(0);
  }
</style>

<main class="trabalho">
    <div class="fotos">
        <?php
            $contador = 1;
                while ( get_field('imagens_projeto_imagem_' . $contador) ) {
        ?>
            <img src="<?php echo get_field('imagens_projeto_imagem_' . $contador); $contador++;?>">
        <?php 
                }
        ?>
                    
    </div>
    <div class="descricao">
        <h2><?php echo get_the_title();?></h2>
        <p><?php echo nl2br(get_field('descricao', false, false));?></p>
    </div>
</main>

<?php
  get_footer();
?>