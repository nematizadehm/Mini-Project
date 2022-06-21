<?php
include "model/database.php";
 include "view/header.php";
 include "view/navbar.php";
if (!isset($_SESSION)) {
 session_start();
}
$groups = $db->query("SELECT * FROM groups INNER JOIN messages ON groups.singer_id=messages.id");
 ?>

<div class="card text-center">
 <div class="card-header">
  نوبت‌دهی/خدمات پزشکان
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
     <th scope="col">نوبت‌دهی </th>

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

     <td>

      <a href="adminadda.php?group=<?php echo $group["id"]?>" class="btn btn-success btn-lg">
       <i class="fas fa-plus"></i>
      </a>

     </td>
     <?php endforeach; ?>



    </tbody>

   </table>

  </div>
 </div>
</div>
</div>
</div>
</div>
</div>

