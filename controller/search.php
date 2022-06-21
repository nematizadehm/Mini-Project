<?php
include "model/database.php";
$text = $_POST["text"];
$groups = $db->query("SELECT * FROM messages WHERE caption LIKE %$text%");
