<?php
/**
 * Template Name: Home Page Template
 * Description: Template per la pagina Home
 *
 * @package ProvaTema
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    // Ottieni l'ID della pagina Home
    $home_page_id = 217; // Sostituisci con l'ID effettivo della tua pagina Home

    // Ottieni il contenuto della pagina Home
    $home_page_content = get_post_field('post_content', $home_page_id);

    // Output del contenuto della pagina Home
    echo $home_page_content;
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
