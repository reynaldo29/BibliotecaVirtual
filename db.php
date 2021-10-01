<?php
define('_HOST_NAME','localhost');
define('_DATABASE_NAME','semana7');
define('_DATABASE_USER_NAME','root');
define('_DATBASE_PASSWORD','');


  $MySql= new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,
    _DATBASE_PASSWORD,_DATABASE_NAME);

  if($MySql->connect_errno){
    die("Error ->" .$MySql->connect_error);
  }
