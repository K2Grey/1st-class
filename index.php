<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike1 = new Bicycle('Yellow');
$bike2 = new Bicycle('Blue');

echo '<p>' . $bike1->getColor() . ' bike: ' . '<br>';
echo $bike1->forward();
echo '<br> Vitesse du vélo : ' . $bike1->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike1->brake();
echo '<br> Vitesse du vélo : ' . $bike1->getCurrentSpeed() . ' km/h' . '</p>';

echo '<p>' . $bike2->getColor() . ' bike: ' . '<br>';
echo $bike2->forward();
echo '<br> Vitesse du vélo : ' . $bike2->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike2->brake();
echo '<br> Vitesse du vélo : ' . $bike2->getCurrentSpeed() . ' km/h' . '</p>';

$car1 = new Car('White', 5, 'gasoline');
$car2 = new Car('Black', 4, 'electricity');

echo '<p>' . $car1->start();
echo '<br> Vitesse de la voiture : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
echo $car1->forward();
echo '<br> Vitesse de la voiture : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
echo $car1->brake();
echo '<br> Vitesse de la voiture : ' . $car1->getCurrentSpeed() . ' km/h' . '</p>';

echo '<p>' . $car2->start();
echo '<br> Vitesse de la voiture : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
echo $car2->forward();
echo '<br> Vitesse de la voiture : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
echo $car2->brake();
echo '<br> Vitesse de la voiture : ' . $car2->getCurrentSpeed() . ' km/h' . '</p>';
