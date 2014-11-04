<?php

require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Vit\VitKernel;

$request = Request::createFromGlobals();

$kernel = new FeatonKernel();
$response = $kernel->handle($request);

$response->send();
