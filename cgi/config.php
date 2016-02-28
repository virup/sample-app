<?php

global $db_config;

$host = getenv('DB_PORT_3306_TCP_ADDR');
if (empty($host)) $host = 'localhost';

$port = getenv('DB_PORT_3306_TCP_PORT');
if (empty($port)) $port = '3306';

$username = getenv('DB_ENV_MYSQL_USER');
if (empty($username)) $username = 'root';

$password = getenv('DB_ENV_MYSQL_PASSWORD');
if (empty($password)) $password = 'admin';


// DB configuration settings
$db_config = array(
  'host' => $host,
  'port' => $port,
  'username' => $username,
  'password' => $password,
  'db_name' => 'sample-app',

);
global $theme;

$themes = array(
  "cerulean",
  "cosmos",
  "cyborg",
  "darkly",
  "flatly",
  "united"
);

// Change the theme by change the index here.
// 0 - blue menubar, white background color
// 1 - black menubar, white background color
// 2 - full black (black background, grey foreground)
// 3 - dark blue menubar, dark grey background, green text.
// 4 - dark blue menubar, white background, dark blue text.
// 5 - orange menubar, white background
$theme = $themes[2];

//var_dump($db_config);
//var_dump($_ENV);
