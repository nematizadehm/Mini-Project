<?php
include "model/database.php";

$user_name = $_POST["user_name"];
$text = $_POST["text"];
$db->query("INSERT INTO `messages`(`user_name`, `text`) VALUES ('$user_name','$text')");
require "view/amin/admin_users.php";

