<?php
include "model/database.php";
$title = $_POST["title"];
$price = $_POST["price"];
$price2 = $_POST["price2"];
$singer_id = $_POST["singer_id"];

$db->query("INSERT INTO `groups`( `title`, `price`, `price2`,`singer_id`) VALUES('$title','$price','$price2','$singer_id')");
//require "view/amin/admin-em.php";