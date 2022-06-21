<?php include "view/header.php"; ?>
<?php include "view/navbar.php"; ?>
<?php include "model/database.php";?>
<?php

?>
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
                    <a class="nav-link active" aria-current="true" href="#">ثبت نام</a>
                </li>
        </div>
        <div class="card-body">
            <h5 class="card-title">به صفحه ثبت نام خوش آمدید</h5>
            <p class="card-text">لطفا انتخاب کنید</p>
            <!-- Button trigger modal -->
            <button   href="#" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ثبت نام بیمار
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

                                <form id="register-form" action="index2" method="post">
                                    <div class="row g-3">
                                        <div class="col ">
                                            <input id="name"  name="first-name" type="text" class="form-control" placeholder="نام" aria-label="First name" >
                                        </div>
                                        <div class="col">
                                            <input id="family" name="last-name" type="text" class="form-control" placeholder="نام خانوادگی" aria-label="Last name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mt-2">
                                            <input  id="email"  name="email" type="email" class="form-control" placeholder="ایمیل خود را وارد کنید" aria-label="">
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-1">
                                        <div class="col ">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input  id="username" type="text" class="form-control" name="account-name" required placeholder="*نام کاربری" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <input id="mobile" name="mobile-number" type="text" class="form-control " id="inputPassword4" placeholder="---------989+">
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-2">
                                        <div class="col ">
                                            <input  id="password"name="password" type="password" class="form-control" placeholder="پسورد خود را وارد کنید" aria-label="First name">
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-2">
                                        <div class="col ">
                                            <input  id="password"name="confirm-password" type="password" class="form-control" placeholder="پسورد خود را وارد کنید" aria-label="First name">
                                        </div>
                                    </div>


                            </div>

                            <button type="submit" name="user_register"  class="btn btn-success mt-3">ذخیره</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <button   href="#" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eampleModal">
                ثبت نام پذشک
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
                                <form id="reegister-form" action="register" method="post">
                                    <div class="row g-3">
                                        <div class="col ">
                                            <input  name="name" type="text" class="form-control" placeholder="نام" aria-label="First name" >
                                        </div>
                                        <div class="col">
                                            <input  name="family" type="text" class="form-control" placeholder="نام خانواگی" aria-label="Last name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mt-2">
                                            <input name="Medical_system_code" type="text" class="form-control" placeholder="کد نظام پزشکی" aria-label="">
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-1">
                                        <div class="col ">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input  type="text" class="form-control"name="username" required placeholder="*نام کاربری" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <input name="mobile" type="text" class="form-control " id="inputPassword4" placeholder="---------989+">
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-2">
                                        <div class="col ">
                                            <div class="col">
                                                <abell   name="mobile_number" for="inputState" class="form-label"></abell>
                                                <select id="inputState" class="form-select">
                                                    <option selected>تخصص</option>
                                                    <option>مغز و اعصاب (نورولوژی)</option>
                                                    <option>جراحی مغز و اعصاب</option>
                                                    <option>پیوند کلیه</option>
                                                    <option>آنکولوژی</option>
                                                </select>
                                            </div>                                                    </div>
                                        <div class="col">
                                            <input name="password2" type="password" class="form-control" placeholder="پسورد خود را وارد کنید" aria-label="Last name">
                                        </div>
                                    </div>
                            </div>
                            <button type="submit" name="mployee_register" class="btn btn-success mt-3">ذخیره</button>
                        </div>
                    </div>
                    </form>
                </div>                        </div>

        </div>
    </div>
    </div>
    </div>

    </div>
    </div>
<?php
include "view/footer.php";
?>