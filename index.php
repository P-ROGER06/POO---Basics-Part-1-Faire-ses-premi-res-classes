<?php
require_once 'Vehicule.php';

$car = new Vehicule('blue & white', 4, 'Petrol');

$bike =new Vehicule('black', 2, 'Electricity');

$bike->setCurrentSpeed(10);


echo $bike->forward();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();


$car->setCurrentSpeed(50);

echo $car->forward();

echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo $car->brake();

echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo $car->brake();
