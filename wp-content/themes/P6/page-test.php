<?php 
$args= array(
    'post_type' => 'gout',
);
$posts=get_posts($args);
echo "<pre>";
print_r($posts);
echo "</pre>";

foreach ($posts as $post){
    echo $post->post_title;
    echo "<br>";
    echo get_the_post_thumbnail_url($post);
    echo "<br>";
    echo "<br>";
}
?>