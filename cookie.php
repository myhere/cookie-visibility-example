<?php

$HOST = $_SERVER['HTTP_HOST'];

$key = str_replace('.', '_', $HOST);
setcookie($key . '_1', 'HostOnly', time() + 60 * 60, '/', '', false, false);
setcookie($key . '_2', 'HostOnly-HttpOnly', time() + 60 * 60, '/', '', false, true);
setcookie($key . '_3', 'Not_HostOnly-Not_HttpOnly', time() + 60 * 60, '/', $HOST, false, false);
setcookie($key . '_4', 'HttpOnly', time() + 60 * 60, '/', $HOST, false, true);
setcookie($key . '_5', 'Exactly_Host-HttpOnly', time() + 60 * 60, '/', $HOST, false, true);
setcookie($key . '_6', 'Exactly_Host-Not_HttpOnly', time() + 60 * 60, '/', $HOST, false, false);

$parts = explode('.', $HOST);


if (count($parts) > 2) {
  array_shift($parts);
  $parentHost = join($parts, '.');

  setcookie($key . '_7', 'parent_domain_cookie', time() + 60 * 60, '/', $parentHost, false, false);
}


echo '<pre>';
echo json_encode($_COOKIE);
echo '</pre>';
