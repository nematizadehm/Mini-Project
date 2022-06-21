<?php
include "view/header.php";
include "model/database.php";
include "view/amin/admin_prooess.php";

if (!isset($_SESSION)) {
 session_start();
}
$groups = $db->query("SELECT * FROM messages");

?>
<div class="card text-center">
 <div class="card-header">
  مراجع کنده های
 </div>

 <div class="card-body">
  <div class="d-flex justify-content-evenly">
   <table class="table table-striped table-hover">

    <tr>
     <th scope="col">مراجع کنده</th>
     <th scope="col"> دکتر اقای/خانم</th>
     <th scope="col"></th>
     <th scope="col">تایم های</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($groups as $group) : ?>
     <tr>
      <th scope="row">
       <?php echo $group["user_name"]; ?>
      </th>
      <th>
       <?php echo $group["text"]; ?>
      </th>
         <th>
             <a href="admin_remove_albums?group-id=<?php echo $group["id"]; ?>" class="btn btn-sm btn-danger">
                 <i class="fas fa-trash"></i>
             </a>
         </th>
         <th>
             <?php echo $group["send_date"];?>
         </th>
     </tr>

    <?php endforeach; ?>

    </tbody>
   </table>
  </div>
 </div>

    <div class="card-footer text-muted">
        <a href="admin_users_addd" class="btn btn-success btn-lg">
            <i class="fas fa-plus"></i>
        </a>
    </div>
</div>

</div>
</div>
</div>

</div>

