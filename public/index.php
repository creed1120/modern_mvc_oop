<?php

session_start();

// Loads all filed needed to run the application
require('../app/core/init.php');

$app = new App();
$app->loadController();