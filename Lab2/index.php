<?php

require_once "vendor\autoload.php";

use Php2\Controller\BaseController;
use Php2\Core\Route;
use Php2\Model\BaseModel;

$data = new BaseController(); 
$core = new Route(); 
$base = new BaseModel(); 
echo $data->get();
echo $core->getcore();
echo $base->getmodel();
