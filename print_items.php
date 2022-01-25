<?php

$fruits = include "./products.php";

function print_items($fruits, $level = 1) {
    foreach($fruits as $key => $package) {
        echo str_repeat(".", $level);
        echo $key;
        echo PHP_EOL;

        if(is_array($package)) {
            print_items($package,$level+1);
        }
    }
}

print_items($fruits);