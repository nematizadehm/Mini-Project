<?php include "view/header.php"; ?>
<?php include "model/database.php";?>

<?php
include "view/amin/admin_prooess.php";

if (!isset($_SESSION)) {
    session_start();
}

$groups = $db->query("SELECT * FROM groups");

?>

    <div class="card text-center">
        <div class="card-header">
            خدمات پزشکان در مطب/خانه
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-evenly">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">اسم دکتر</th>
                        <th scope="col">مطب/خانه</th>
                        <th scope="col">خدمات پزشکان</th>
                        <th scope="col">تایم های</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($groups as $group) : ?>
                        <tr>
                            <th scope="row">
                                <?php echo $group["price"]; ?>
                            </th>
                            <td>
                                <?php echo $group["price2"]; ?>
                            </td>

                            <td>
                                <?php echo $group["title"]; ?>
                            </td>
                            <td>
                                <?php echo $group["Time1"]; ?>
                            </td>
                              <th>
             <a href="admin_remove_albums?group-id=<?php echo $group["id"]; ?>" class="btn btn-sm btn-danger">
                 <i class="fas fa-trash"></i>
             </a>
         </th>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

            </div>

            <div class="card-footer text-muted">
                <a href="admin_users_adddmm" class="btn btn-success btn-lg">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </div>

