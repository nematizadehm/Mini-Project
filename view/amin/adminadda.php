<?php
include "view/header.php";
include "view/navbar.php";
include "model/database.php";
$group_id = $_GET["group"];
$groups = $db->query("SELECT * FROM groups WHERE singer_id=$group_id");
?>
<table class="table">

    <thead>
    <tr>
        <div class="d-flex justify-content-evenly">

        <th scope="col">نام دکتر</th>
        <th scope="col">رزوره  کردن</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($groups as $group) : ?>
        <tr>
            <th scope="row">
                <?php echo $group["price"]; ?>
            </th>
        <td colspan="2">
            <a href="adminaddn.php?group=<?php echo $group[" type="button" class="btn btn-success"> رزوه کردن                            <?php echo $group["title"]; ?>
            </a>
        </td>
    </tr>
    <?php endforeach; ?>

    </tbody>
</table>
</div>