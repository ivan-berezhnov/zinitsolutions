<?php

include 'inc/FactoryBuild.php';
include 'inc/Robot.php';

$Factory = new FactoryBuild();
$RobotOne = new RobotOne();
$RobotTwo = new RobotTwo();

$Factory->make( $RobotOne, 10 ); // Робимо та запускаємо 10 роботів
$Factory->getPower( $RobotOne ); // Виводить 100
$Factory->makeOff( $RobotOne, 2 ); // Робимо не активних 2 робота
$Factory->getPower( $RobotOne ); // Виводить 100
$Factory->make( $RobotOne, 5 ); // Робимо та запускаємо 5 роботів
$Factory->getPower( $RobotOne ); // Виводить 150
$Factory->makeOff( $RobotTwo, 2 ); // Помилка, роботи не запущені
$RobotTwo->setPowerRobot( 15 ); // Визначаємо потужність рота
$Factory->make( $RobotTwo, 2 ); // Робимо і запускаємо 2 робота типу Two
$Factory->getPower( $RobotTwo ); // Виводить 30
