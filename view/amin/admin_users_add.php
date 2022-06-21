<?php
include "view/header.php";
include "model/database.php";
include "view/amin/admin_prooess.php";

?>
<div class="container">
    <?php if(isset($_SESSION["message"])):?>
        <div class="row justify-content-center mt-5 ">
            <div class="col-4"  style="width: 222%;">
                <?php if($_SESSION["message_type"] == "success"): ?>
                    <div class="alert alert-succes alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION["message"];?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif;?>
                <?php if ($_SESSION["message_type"] == "error"):?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION["message"];?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif;?>
            </div>
        </div>
        <?php unset($_SESSION["message"]);?>
    <?php endif;?>

<div class="card">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
                    <form  id="form_df" method="post" action="admin_users_add" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="user_name" class="form-control" placeholder="user_name" >
                            </div>

                            <div class="col">
                                <input type="text" name="text" class="form-control" placeholder="نام دکتر">
                            </div>
                        </div>
                        <button type="submit"  form="form_df" class="btn btn-primary mt-3">ذخیره</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


