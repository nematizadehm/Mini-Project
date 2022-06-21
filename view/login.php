<?php include "header.php"; ?>
<?php include "view/navbar.php"; ?>
<?php include "model/database.php"; ?>
    <div class="container">

<?php if(isset($_SESSION["message"])): ?>

    <div class="row justify-content-center mt-3">
        <?php for($i=0, $len=count($_SESSION["message"]); $i<$len; $i++): ?>
            <div class="col-12">
                <?php if($_SESSION["message_type"][$i] == "success"): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION["message"][$i]; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php elseif($_SESSION["message_type"][$i] == "error"): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION["message"][$i]; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif ?>
            </div>
        <?php endfor; ?>
    </div>

    <?php unset($_SESSION["message"]); ?>
<?php endif; ?>
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#">ورود کاربر/پذشک</a>
                </li>
        </div>
        <div class="card-body">
            <h5 class="card-title">به صفحه ورود خوش آمدید</h5>
            <p class="card-text">لطفا انتخاب کنید</p>
            <!-- Button trigger modal -->
            <button   href="#" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 بیمار
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <img src="img/logo.png" alt="">
                        </div>
                        <div class="modal-body">
                            <div class="card-body ">
                                <form id="register-form" method="post" action="admin_users_as">
                                        <div class="mb-3">
                                            <label class="form-label" style="font-size: 15px;">نام کاربری</label>
                                            <input type="text" class="form-control" name="username" placeholder="ایمیل یا شماره موبایل">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="font-size: 15px;">گذرواژه</label>
                                            <input type="password" class="form-control" name="password" placeholder="****">
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">یاداوری کدواژه</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">ارسال</button>
                                    </form>


                            </div>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <button   href="#" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eampleModal">
                 پذشک
            </button>
            <!-- Modal -->
            <div class="modal fade" id="eampleModal" tabindex="-1" aria-labelledby="xampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <img src="img/logo.png" alt="">
                        </div>
                        <div class="modal-body">
                            <div class="card-body ">
                                <form id="register-form" method="post" action="admin_users_aa">
                                    <div class="form-group">
                                        <label>نام کاربری</label>
                                        <input type="text" name="username" class="form-control" placeholder="نام کاربری خود را وارد نمایید" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">کلمه عبور</label>
                                        <input type="password" name="password" class="form-control" placeholder="کلمه عبور را وارد نمایید">
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="remember">
                                        <label>مرا به خاطر بسپار</label>
                                    </div>

                                    <button type="submit" name="user_login" class="btn btn-success">ورود</button>
                                </form>
        </div>
    </div>
    </div>
    </div>

    </div>
    </div>
<?php
include "view/footer.php";
?>