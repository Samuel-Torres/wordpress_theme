<?php
while (have_posts()) {
    the_post(); ?>
    <a href="<?php the_permalink() ?>">
        <h2>
            <?php the_title() ?>
        </h2>
    </a>
    <p>
        <?php the_content() ?>
        <hr>
        <?php
}


// $posts = get_posts([
//     'post_type' => 'custom',
//     'post_status' => 'publish',
//     'numberposts' => -1,
//     'order'    => 'ASC'
// ]);
// echo $posts
?>