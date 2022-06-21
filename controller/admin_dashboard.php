<?php
include "model/database.php";
if (!isset($_SESSION)) {
    session_start();
}

$groups = $db->query("SELECT * FROM messages");
$groups = $db->query("SELECT * FROM messages");

require "view/amin/admin_users.php";

