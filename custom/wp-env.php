<?php

use Symfony\Component\Dotenv\Dotenv;

/** @desc this loads the composer autoload file */
require_once dirname(__DIR__) . '/vendor/autoload.php';

$dotenv = new Dotenv();
$envFilePath = dirname(__DIR__) . '/../../.env.local';
if (file_exists($envFilePath)) {
    $dotenv->load($envFilePath);
}
