<?php
session_start(); 

require_once 'vendor/autoload.php';

define("ROOT_URL", "http://127.0.0.1:5000");

use App\Core\Route;
use App\Models\UserModel;
use App\Models\Jobs;
use App\Core\Sessions;

new Route;
$user = new UserModel();
// $job = new Jobs();

$session = new Sessions;
