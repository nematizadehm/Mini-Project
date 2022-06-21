<?php
 include "model/database.php";
$group_id=$_GET["group-id"];
$db->query("DELETE FROM messages WHERE id =$group_id");
header("location:admin_users");
?>
