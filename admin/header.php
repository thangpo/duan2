<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="./admin-js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="./admin-css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Admin</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">Admin</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="./index.php?act=home_admin">
                    <i class="uil uil-dashboard"></i>
                    <span class="link-name">Trang chủ</span>
                </a></li>
                <li><a href="./index.php?act=catalogy">
                    <i class="uil uil-folder"></i>
                    <span class="link-name">Quản lý danh mục</span>
                </a></li>
                <li><a href="./index.php?act=product">
                    <i class="uil uil-box"></i>
                    <span class="link-name">Quản lý sản phẩm</span>
                </a></li>
                <li><a href="./index.php?act=comment">
                    <i class="uil uil-comment"></i>
                    <span class="link-name">Quản lý bình luận</span>
                    <!-- <a href="binhluan.html">Quản lý</a> -->
                </a></li>
                <li><a href="./index.php?act=cart">
                    <i class="uil uil-shopping-cart"></i>
                    <span class="link-name">Quản lý giỏ hàng</span>
                    <!-- <a href="donhang.html">Quản lý</a>1 -->
                </a></li>  
                <li><a href="./index.php?act=bill">
                    <i class="uil uil-bill"></i>
                    <span class="link-name">Quản lý hóa Đơn</span>
                    <!-- <a href="donhang.html">Quản lý</a>1 -->
                </a></li>          
                <li><a href="./index.php?act=account">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Quản lý tài khoản</span>
                </a></li>
            </ul>
            <ul class="logout-mode">
                <li><a href="./index.php?act=logout">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Đăng xuất</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <!-- <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here..." >
            </div>
             -->
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-book-open"></i>
                    <span class="text">Bảng tin</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-comments"></i>
                        <span class="text">Bình luận</span>
                        <span class="number"><?php 
                        
                        $total_comments = total_comments();
                        foreach($total_comments as $item)
                        extract($item);
                        echo $total_comments;
                        ?></span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-share"></i>
                        <span class="text">Tổng người dùng</span>
                        <span class="number"><?php 
                        $count_account = count_account();
                        foreach($count_account as $data){
                            extract($data);
                        }
                        
                        echo $all_account;
                        
                        ?></span>
                    </div>
                </div>
            </div>