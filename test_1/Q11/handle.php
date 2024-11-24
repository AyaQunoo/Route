<?php

if (isset($_GET["submit"])) {
    $color = htmlspecialchars($_GET["bgcolor"]);
    setcookie("bgcolor", $color, time() + 2 * 24 * 120);
    header("location:index.php");
} else {
    header("location:index.php");
}
