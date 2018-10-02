<?php

header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Origin: ' . getallheaders()['Origin']);
header('Access-Control-Allow-Headers: origin, x-requested-with, content-type, accept, *');



echo json_encode([
  'cookie' => $_COOKIE,
  // 'server' => $_SERVER,
  'time' => $_GET['t'],
  'host' => $_SERVER['HTTP_HOST'],
]);