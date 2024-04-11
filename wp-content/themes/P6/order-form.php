<?php
// order-form.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Traitez vos données de formulaire ici
    // N'oubliez pas de désinfecter et de valider vos entrées
}

$site_url= site_url(); // Définit une variable $site_url qui stocke l'URL du site (probablement utilisée ailleurs dans le code).
$gouts= ""; // Initialise une chaîne vide $gouts pour stocker le HTML généré pour chaque "gout" (goût ou produit).
$args= array( // Prépare un tableau d'arguments pour la récupération des posts de type 'gout' dans WordPress.
    'post_type' => 'gout', // spécifie le type de contenu personnalisé à récupérer, ici 'gout'.
);
$posts=get_posts($args); // Utilise la fonction get_posts avec les arguments fournis pour récupérer les posts de type 'gout'.
foreach ($posts as $post){ // Boucle à travers chaque post récupéré pour traiter et générer le HTML correspondant.  
    $gouttitle= $post->post_title;   // Stocke le titre du post dans la variable $gouttitle.   
    $goutimg= get_the_post_thumbnail_url($post); // Obtient l'URL de l'image à la une du post et la stocke dans $goutimg.    
    $thumbnail_id = get_post_thumbnail_id( $post ); // Obtient l'ID de l'image à la une pour le post en cours.    
    $goutimgalt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); // Récupère le texte alternatif de l'image à la une et le stocke dans $goutimgalt.  
    // Prépare le template HTML pour un "gout", en utilisant les variables précédemment définies.
    $gouttemplate= <<<EOD
    <div class="produit">
    <img src="$goutimg"  alt="$goutimgalt" class="img-produit"> <!-- Affiche l'image avec le texte alternatif -->
    <input type="number" name="$gouttitle" value="0" class="produit-order-field"> <!-- Champ pour saisir une quantité, pré-rempli à 0 -->
    </div>
    EOD;
    $gouts.= $gouttemplate; // Ajoute le template HTML généré à la chaîne $gouts.
}
?>

<form action="?" method="post">
    <div class="section-commande">
        <h2 class="order-title">Votre commande</h2>
        <div class="produits">
            <?php echo $gouts; ?>
        </div>
    </div>
        </div>
    </div>
    <div class="section-info">
        <div class="infos-client">
            <h2>Vos informations</h2>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="">

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="">

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="">
        </div>
        <div class="infos-livraison">
            <h2>Livraison</h2>
            <label for="adresse">Adresse de livraison</label>
            <input type="text" id="adresse" name="adresse" placeholder="">

            <label for="code_postal">Code postal</label>
            <input type="text" id="code_postal" name="code_postal" placeholder="">

            <label for="ville">Ville</label>
            <input type="text" id="ville" name="ville" placeholder="">
        </div>
    </div>
    <div class="submit-section">
        <input type="submit" value="Commander">
    </div>
</form>
