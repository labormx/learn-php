<?php
require_once ('Figure.class.php');
require_once ('Triangle.class.php');
require_once ('Square.class.php');
$tri = new Triangle(10, 5);
$sqr = new Square(10, 5);

print('三角形の面積は'.$tri->getArea().'です。');
print('四角形の面積は'.$sqr->getArea().'です。');
?>