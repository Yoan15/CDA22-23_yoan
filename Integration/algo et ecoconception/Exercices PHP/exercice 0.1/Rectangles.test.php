<?php

require 'Rectangles.class.php';

$rectangle = new Rectangles(8, 10);
echo $rectangle->afficherRectangle()."\n";

$carre = new Rectangles(10, 10);
echo $carre->afficherRectangle()."\n";