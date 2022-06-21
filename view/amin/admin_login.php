<?php include "view/header.php"; ?>
<?php include "view/navbar.php"; ?>

<div class="container">
    <div class="d-flex justify-content-evenly mt-4">
        <div class="card">
            <div class="card-body">
                <form method="post" action="admin_prooess">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">نام کاربری</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">کدواژه</label>
                        <input type="password" class="form-control" name="pessword">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="exampleCheck1"> مرا به خاصر بسپر</label>
                    </div>
                    <button type="submit" class="btn btn-primary">ورود</button>
                </form>
            </div>
        </div>
