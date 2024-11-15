<?php
//Q1
for ($i = 0; $i < 5; $i++) {
    for ($k = $i; $k < 5; $k++) {
        echo "&nbsp;";
    }
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 5; $i >= 1; $i--) {
    for ($k = $i; $k < 5; $k++) {
        echo "&nbsp;";
    }
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
//2
for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 5; $i >= 1; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
//3
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 2; $i >= 1; $i--) {
    for ($j = 0; $j < (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
