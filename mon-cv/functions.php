<?php 
function create_custom_posts() {
    register_post_type('Skills', [
        'labels'=> ['name'=>'skills'],
        'public'=>true,
        'show_in_rest'=>true
    ]);

    register_post_type('Langues', [
        'labels'=> ['name'=>'Mes langues'],
        'public'=>true,
    ]);

    register_post_type('Centres', [
        'labels'=> ['name'=>'Centres'],
        'public'=>true,
    ]);

    register_post_type('XP', [
        'labels'=> ['name'=>'XP'],
        'public'=>true,
    ]);
}
add_action('init', 'create_custom_posts');