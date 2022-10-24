<?php

$dbHost = "localhost";
$user = "root";
$pass = "root";
$dbName = "nailsalon";
$mysqli = mysqli_connect($dbHost, $user, $pass, $dbName);
if ($mysqli == false) {
    echo ("Ошибка подключения к БД!");
}

$name = $_POST['name'];

if(mb_strlen($name)>30 || mb_strlen($name)<2){
    echo("Недопустимая длина имени максимум 30 символов!");
    exit();
}

$telNumber = $_POST['telNumber'];

if(mb_strlen($telNumber) != 11){
    echo("Недопустимая длина номера телефона, максимум 11 символов!");
    exit();
}

$result = mysqli_query($mysqli, "SELECT * FROM `application` WHERE `telNaumber` = $telNumber");

$application = mysqli_fetch_assoc($result);

if(count($application) > 0){
    echo("Вы уже оставляли заявку!");
    exit();
}

mysqli_query($mysqli, "INSERT INTO `application` (`id`, `name`, `telNumber`) VALUES (NULL, '$name', '$telNumber')");

$mysqli -> close();

header('Location: /');

exit();

?>