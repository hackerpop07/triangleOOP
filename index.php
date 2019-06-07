<?php
include "Shape.php";
include "Triangle.php";
$triangle = new Triangle();
$triangle->toString();
echo "<br>";
$triangle->setSide123(4, 6, 7);
$triangle->toString();