<?php

require_once '../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . "/../");
$dotenv->load();

$db = new PDO(getenv('DB_CONNECTION') . ':host=' . getenv('DB_HOST') . ';dbname=' . getenv('DB_DATABASE'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'));

$pusher = new Pusher(getenv('APP_KEY'), getenv('APP_SECRET'), getenv('APP_ID'));
