<?php 

define('TBP6_VERSION','1.0.0');
add_action('wp_enqueue_scripts','tbp6_scripts');
add_action('after_setup_theme','tbp6_setup');
add_filter( 'use_default_gallery_style', '__return_false' );
add_action('init', 'enregistrer_mon_shortcode');

function personnaliser_menu_admin_bar() {
    if ( ! is_user_logged_in() ) {
        // Si l'utilisateur n'est pas connecté, retire le menu admin
        add_filter( 'show_admin_bar', '__return_false' );
    } else {
        // Ici, vous pouvez ajouter des éléments personnalisés au menu admin si nécessaire
        // en utilisant la fonction add_action ou add_menu par exemple
        // Exemple : add_action('admin_bar_menu', 'ajouter_mon_element', 100);
    }
}
add_action( 'after_setup_theme', 'personnaliser_menu_admin_bar' );



function tbp6_scripts () {
    //chargement des styles
    wp_enqueue_style('tbp6', get_template_directory_uri().'/css/style.css', array() , TBP6_VERSION , 'all');

    //chargement des scripts
    wp_enqueue_script('tbp6_admin_script', get_template_directory_uri().'/js/p6.js', array('jquery') , TBP6_VERSION , false);

}


function tbp6_setup() {

    add_theme_support( 'post-thumbnails' );  //support des vignettes
    remove_action('wp_head','wp_generator'); //enlère générateur de version de wp
    // remove_filter('the_content','wptexturize'); //enlève les guillemets à la francaise
    add_theme_support('title-tag'); //support du titre
    register_nav_menus( array( 'primary' => 'principal')); //active la gestion des menus
}

function include_order_form() {
    ob_start();
    include 'wp-content\themes\P6\order-form.php'; // Corrigez le chemin selon les besoins
    return ob_get_clean();
}

function formulaire_page_contact() {
    $form = '<form action="' . esc_url($_SERVER['REQUEST_URI']) . '" method="post" >
    <label for="nom">Nom </label>
    <input type="text" id="nom" name="nom" required><br>

    <label for="email">E-mail </label>
    <input type="email" id="email" name="email" required><br>

    <label for="message" class="form-message">Message </label>
    <textarea id="form-message" name="message" required></textarea><br>
    <div class="form-1-button">
    <input type="submit" value="Envoyer">
    </div>
    </form>';

    return $form;
}

function enregistrer_mon_shortcode() {
    add_shortcode('formulaire_contact', 'formulaire_page_contact');
    add_shortcode('order_form', 'include_order_form');
}

