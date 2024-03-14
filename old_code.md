<?php 
    $names= array("Sam", "James", "Danny", "Sara");
    $count = 0;
    while($count <= 100) {
        echo" <p>$count</>";
        $count++;
    }
?>

<?php 
    $index = 0;
    while($index < count($names)){
        echo "<p>Hello, my name is $names[$index]</p>";
        $index++;
    }

    foreach($names as $name) {
        echo "<p>Hello, my name is $name</p>";
    }
?>

// while (have_posts()) {
//     the_post(); ?>
//     <a href="<?php the_permalink() ?>">
//         <h2>
//             <?php the_title() ?>
//         </h2>
//     </a>
//     <p>
//         <?php the_content() ?>
//         <hr>
//         <?php
// }