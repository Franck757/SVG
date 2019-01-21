<?php

include "Tools/SimpleSvgRenderer.class.php";

include "Shapes/ShapeInterface.php";
include "Shapes/Shape.class.php";
include "Shapes/Rectangle.class.php";
include "Shapes/Carre.class.php";
include "Shapes/Circle.class.php";
include "Shapes/Ellipse.class.php";
include "Shapes/Triangle.class.php";
include "Shapes/Point.class.php";

/*
 * Programme principal
 */

$renderer = new SimpleSvgRenderer();

$rectangle = (new Rectangle($renderer))->setSize(200,100)->fillWithColor('#0527D0')->rotate(50);
$rectangle->getLocation()->moveTo(50,50);
$rectangle->draw('rect1');

$carre = (new Carre($renderer))->setSize(180)->fillWithColor('#D00511')->rotate(60);
$carre->getLocation()->moveTo(190,120);
$carre->draw('carre1');

$circle = (new Circle($renderer))->fillWithColor('#C7007C')->setSize(100);
$circle->getLocation()->moveTo(390,300);
$circle->draw('circle1');

$ellipse = (new Ellipse($renderer))->fillWithColor('#1EE0E3')->setSize(100,150);
$ellipse->getLocation()->moveTo(450,410);
$ellipse->draw('ellipse1');

$triangle = (new Triangle($renderer))->fillWithColor('#98FF01');
$triangle->getLocation()->moveTo(300,300);
$triangle->draw('triangle1');

$svg = $renderer->display();

/*
 * Affichage
 */

include "Templates/index.phtml";
