<?php require_once "core/base.php" ?>
<?php require_once "core/db_connect.php" ?>
<?php require_once "core/function.php" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo $url ?>/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo $url ?>/assets/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url  ?>/assets/css/style.css">
</head>
<body>

<section class="main container-fluid">
    <div class="row">
        <!--        side-bar start-->
       <?php include "sidebar.php"; ?>
        <!--        side-bar end-->
        <div class="col-12  col-lg-9 col-xl-10 vh-100  content shadow p-3   rounded" >
            <div class="row header rounded mb-4">
                <div class="col-12 ">
                    <div class="p-2 bg-primary d-flex justify-content-between align-items-center">
                        <button class="show-sidebar-btn btn btn-primary d-block d-lg-none ">
                            <i class="feather-menu text-light" style="font-size: 2em"></i>
                        </button>
                        <form action="" class=" d-none d-md-block">
                            <div class="form-check-inline">
                                <input type="text" class="mr-2" style="width: 202px;border-radius:7px;height: 41px;outline: none;border: none" placeholder="Search Here" autofocus>
                                <button class="btn btn-light">
                                    <i class="feather-search"></i>
                                </button>
                            </div>
                        </form>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/user/avatar2.jpg" class="user-img shadow-sm" alt="">  Kaung si thu
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>