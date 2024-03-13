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