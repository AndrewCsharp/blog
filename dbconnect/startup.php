<?php
function startup() {
    // Настройки подключения к БД.
    $hostname = 'localhost'; 
    $username = 'root'; 
    $password = '';
    $dbName = 'news';
  
    // Подключение к БД.
    mysql_connect($hostname, $username, $password) or die('No connect with data base'); 
    mysql_select_db($dbName) or die('No data base');
	
	session_start();
}
?>