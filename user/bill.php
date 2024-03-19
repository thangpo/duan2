<?php 

// foreach($userInfo1 as $info){
//     extract($info);
// }
// // echo $full_name;
extract($userInfo1);
// echo $listBill;  

    // var_dump($arr_book_quantity);
    // $num_elements = count($arr_data);

    // for($i=0;$i<count($arr_books); $i++){
    //     echo $arr_books[$i];
    // };
    // // echo $arr_books[2];
    //     // echo count($arr_book_quantity);
    // for($i=0;$i<count($arr_book_quantity); $i++){
    //     echo $arr_book_quantity[$i];
    // };
    // for($i=0;$i<count($arr_book_price); $i++){
    //     echo $arr_book_price[$i];
    // };
    // var_dump($arr_book_quantity);
    // $tadu = $arr_data[0];
    // $ha_triều = $arr_data[1];
    // $lac_tri_dư = $arr_data[2];
    // $tieu_ngạn = $arr_data[3];
    // echo 

    // extract($listBill);
    // echo $listBill;
    // var_dump($userInfo1);

    // $temp = 'Tạ du;Hạ triều;Hạ tri dư;Tiêu ngạn';
    // extract($temp);
    // var_dump($temp);
?>

<link rel="stylesheet" href="../css/pay.css">

</head>
<body >
    <!-- header -->
    <header id="header">
        <!-- header top -->
        <div class="header__top">
            <div class="container">
                <section class="row flex">
                    <div class="col-lg-5 col-md-0 col-sm-0 heade__top-left">
                        <span>MagicBook - Điều kì diệu qua từng trang sách</span>
                    </div>

                    <nav class="col-lg-7 col-md-0 col-sm-0 header__top-right">
                        <ul class="header__top-list">
   
                            
                            <li class="header__top-item">
                                <?php 
                                    if (isset($_SESSION['iduser'])) {
                                        echo '
                                        <li class="header__top-item">
                                        <a href="#" class="header__top-link">Xin Chào '.$_SESSION['user'].'</a>
                                        </li>
                                        ';
                                        echo '                         
                                        <li class="header__top-item">
                                            <a href="./index.php?act=history_purchase" class="header__top-link">
                                            Lịch sử mua hàng
                                            </a>
                                        </li>
                                            
                                    
                                        </li>';
                                        echo '<a href="./index.php?act=logout" class="header__top-link">Đăng Xuất</a>';
                                    }
                                    else{
                                        echo '<a href="./index.php?act=Login_register" class="header__top-link">Đăng Nhập/Đăng ký</a>';
                                    }  
                                ?>
                            </li>
                        </ul>
                    </nav>
                </section>
            </div>
        </div>
        <!--end header top -->

        <div class="header__bottom">
            <div class="container">
                <section class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 header__logo">
                        <h1 class="header__heading">
                            <a href="#" class="header__logo-link">
                                <img src="../images1/logo1.png" alt="Logo" class="header__logo-img">
                            </a>
                        </h1>
                    </div>
                    <form action="./index.php?act=find" method="post" class="col-lg-6 col-md-7 col-sm-0 header__search">
                    <!-- <div class="col-lg-6 col-md-7 col-sm-0 header__search"> -->
                        
                            <select name="catalogy_name" id="" class="header__search-select">
                                <option value="0">All</option>
                                <?php
                                    foreach($echo_all_catalogy as $data){
                                        extract($data);
                                    echo '
                                    <option value="'.$id.'">'.$name.'</option>
                                    ';
                                    }
                                ?>
                            </select>
                            <input type="text" name="find_value" class="header__search-input" placeholder="Tìm kiếm tại đây...">
                        <button class="header__search-btn">
                            <div class="header__search-icon-wrap">
                                <i class="fas fa-search header__search-icon"></i>
                            </div>
                        </button>
                        
                    <!-- </div> -->
                    </form>

                    <div class="col-lg-2 col-md-0 col-sm-0 header__call">
                        <div class="header__call-icon-wrap">
                            <i class="fas fa-phone-alt header__call-icon"></i>  
                        </div>
                        <div class="header__call-info">
                            <div class="header__call-text">
                                Gọi điện tư vấn
                            </div>
                            <div class="header__call-number">
                                0585.245.989
                            </div>
                        </div>
                    </div>

                    <a href="./index.php?act=Cart" class="col-lg-1 col-md-1 col-sm-0 header__cart">
                        <div class="header__cart-icon-wrap">
                                <?php
                                foreach ($count as $item) {
                                ?>
                                <span class="header__notice"> <?php echo $item ?> </span>
                                <?php } ?>
                                <i class="fas fa-shopping-cart header__nav-cart-icon"></i>
                        </div>
                    </a>
                </section>
            </div>   
        </div>
        <!--end header bottom -->

        <!-- header nav -->
        <div class="header__nav">
            <div class="container">
                <section class="row">

                <div class="header__nav col-lg-9 col-md-0 col-sm-0">
                        <ul class="header__nav-list">
                            <li class="header__nav-item">
                                <a href="index.php" class="header__nav-link">Trang chủ</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="index.php?act=catalogy" class="header__nav-link">Danh mục sản phẩm</a>
                            </li>
                            <!-- <li class="header__nav-item">
                                <a href="index.php?act=Product" class="header__nav-link">Sản phẩm</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="post.html" class="header__nav-link">Bài viết</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="#" class="header__nav-link">Tuyển cộng tác viên</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="contact.html" class="header__nav-link">Liên hệ</a>
                            </li> -->
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </header>
    <!--end header nav -->
                <div class="col-lg">
                    <h1>Đơn hàng của bạn</h1>
                            
                    <?php
                    $count = 0;
                    foreach($listBill as $item){
                        if ($count>0) {
                            break;
                        }
                        extract($item);
                        $count++;
                        $id_user = $id;
                        // echo $total_amount;
                        // extract($books);
                        $arr_books = explode(";", $books);
                        $arr_book_quantity = explode(";", $book_quantity);
                        $arr_book_price = explode(";", $book_price);
                        echo '
                                            <div class="card border-secondary mb-5">
                        <div class="card-header bg-secondary border-0">
                            <h4 class="font-weight-semi-bold m-0">Đơn hàng mã '.$id_user.'</h4>
                        </div>
                        <div class="card-body">
                            <h2 class="font-weight-medium mb-3">Sản Phẩm</h2>';?>
                            <?php
                            $total = 0;
                            $totalPrice = 0;

                            for ($index = 0; $index < count($arr_books); $index++) {
                            // $item = $onePersonCart[$index];
                            // echo $index;
                            $totalPrice += $arr_book_quantity[$index] * $arr_book_price[$index];

                            echo '<div class="d-flex justify-content-between">
                                <p>' . $arr_books[$index] . ' X ' . $arr_book_quantity[$index]. '</p>
                                <p>' . number_format($arr_book_quantity[$index] * $arr_book_price[$index], 0, '.', '.') . ' VND</p>
                            </div>';    
                            }
                            ?>
                            <?php
                            echo '
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h2 class="font-weight-bold">Tổng Cộng</h2>
                                <h2 class="font-weight-bold">';?><?php echo number_format($totalPrice, 0, '.', '.'); ?>VNĐ</h2>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <h2 class="font-weight-bold">Trạng thái</h2>
                                <h2 class="font-weight-bold"><?php echo $order_status?></h2>
                            </div>
                        </div>
                    </div>
                        
                        ';
                   <?php }
                    
                    
                    ?>
                </div>
            </div>
            
        </div>

    </body>
</html>
