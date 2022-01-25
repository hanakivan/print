<?php

$fruits = include "./products.php";

function print_max($fruits, $more = []) {
    foreach($fruits as $key => $package) {
        if(is_array($package)) {
            print_max($package, array_merge($more, [$key]));
        } else {
            echo implode(" -> ", $more);
            echo " -> ";
            echo $key;
            echo ": ";
            echo $package;
            echo PHP_EOL;
        }
    }
}

print_max($fruits);