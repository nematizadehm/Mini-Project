<?php
include "model/database.php";
if (!isset($_SESSION)) {
    session_start();
}
$groups = $db->query("SELECT * FROM groups INNER JOIN messages ON groups.singer_id=messages.id");
require "view/amin/admin-add-n.php";

