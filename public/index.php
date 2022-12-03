<?php
/*******************
 * App entry point
 *******************/

session_start();

// Loads all files needed to run the application
require('../app/core/init.php');

$app = new App();
$app->loadController();