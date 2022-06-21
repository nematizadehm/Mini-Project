<?php
include "view/header.php"; ?>
<?php include "view/navbar.php"; ?>
<?php include "model/database.php";
if(!isset($_SESSION))
{
    session_start();
}
?>
<div class="row">
    <div class="col-md-4">
        <div class="well mt-3">

            <div class="list-group">
                <a class="list-group-item" href="admin_users">کاربران</a>
                <a class="list-group-item" href="admin_em">دکتر</a>
                <a class="list-group-item" href="logout">خروج</a>
            </div>
        </div>
    </div>
