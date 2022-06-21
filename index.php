<?php
session_start();
$request = $_SERVER["REQUEST_URI"];
$request = str_replace('/matab_kade', '', $request);
$request = preg_replace('/\?.*/', '', $request);

switch ($request)
{
  case("/index"):
  require "view/index.php";
   break;
    case("/index2"):
        require "controller/index.php";
        break;
    case("/home"):
        require "controller/home.php";
        break;

           case("/admin-add-n"):
               require "controller/Services.php";
               break;


    case("/admin_users_add"):
        require "controller/admin_users_add.php";
        break;

    case("/admin_users_addd"):
        require "view/amin/admin_users_add.php";
        break;

    case("/adminadda.php"):
        require "controller/adminaddn.php";
        break;
    case("/adminaddn.php"):
        require "adminaddn.php";
        break;
    case("/login"):
        require "controller/admin_users_as.php";
        break;
    case("/admin_login"):
        require "view/amin/admin_login.php";
        break;
    case("/login.php"):
        require "view/login.php";
        break;
    case("/admin_prooess"):
        require "view/amin/admin_prooess.php";
        break;

    case("/admin_users_as"):
        require "controller/admin_users_as.php";
        break;

    case("/admin_users_aa"):
        require "controller/admin_users_aa.php";
        break;
    case("/search"):
        require "controller/search.php";
        break;
    case("/admin_users"):
        require "view/amin/admin_users.php";
        break;
    case("/admin_em"):
        require "view/amin/admin-em.php";
        break;
    case("/admin_remove_albums"):
        require "view/amin/admin_remove_albums.php";
        break;
    case("/admin_users_adddm"):
        require "controller/admin_users_adddm.php";
        break;
    case("/admin_users_adddmm"):
        require "view/amin/admin_users_adddm.php";
        break;
    case("/logout"):
        require "view/logout.php";
        break;
    case("/admin_Patient"):
        require "view/amin/admin_Patient.php";
        break;








    default:
        require "view/404.php";
        break;


}
?>