<?php

$fruits = include "./products.php";

function print_items(array $fruits, int $level = 1): void {
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