<?php
include "model/database.php";
if (!isset($_SESSION)) {
    session_start();

}
$group_id = $_GET["group"];
$groups = $db->query("SELECT * FROM groups INNER JOIN messages ON groups.singer_id=messages.id");

//درست شد سپاس
require "adminadda.php";
?>