<?php
//создадим идентификатор подключения к базе данных
$host='localhost';
$db='travel_db';
$user='root';
$pass='';
$charset='utf8';

//строка подключения к базе данных
$dsn="mysql:host=$host;dbname=$db;charset=$charset";

//указываем опции с настройками подключения: ошибки в виде исключений (протоколирование ошибок) и указываем что мы хотим получить асоуиативный массив
$options=[
  PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
];

//создадим экземпляр класса PDO
$pdo=new PDO($dsn,$user,$pass,$options);
