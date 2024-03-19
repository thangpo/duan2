<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/category.css">
 <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
    </head>
<body>
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

                    <!-- <a href="./index.php?act=Cart" class="col-lg-1 col-md-1 col-sm-0 header__cart"> -->
                        <?php
                        if(isset($_SESSION['iduser'])){
                            echo '<a href="./index.php?act=Cart" class="col-lg-1 col-md-1 col-sm-0 header__cart">';
                            
                        }
                        else{
                            echo '<a href="#" class="col-lg-1 col-md-1 col-sm-0 header__cart">';
                        }
                         
                        
                        ?>
                        <div class="header__cart-icon-wrap">
                            <?php
                            if(isset($count)){
                            foreach ($count as $item) {
                            ?>
                            <span class="header__notice"> <?php echo $item ?> </span>
                            <?php }}
                            else{
                                echo '<span class="header__notice"> <?php echo $item ?>0</span>';
                            } ?>
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
                    <div class="header__nav-menu-wrap col-lg-3 col-md-0 col-sm-0">
                        <i class="fas fa-bars header__nav-menu-icon"></i>
                        <div class="header__nav-menu-title">Danh mục sản phẩm</div>
                    </div>

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
    <!-- slide - menu list -->
    <section class="menu-slide">
        <div class="container">
            <div class="row">
            <nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                    <ul class="menu__list">
                        <a ></a>
                        <?php
                        
                        foreach($echo_all_catalogy as $data){
                            extract($data);
                        echo '
                            <li class="menu__item menu__item--active">
                                <a'; 
                              ?>  onclick="window.location.href='./index.php?act=catalogy#<?php echo $id?>';"
                                <?php 
                                echo 'class="menu__link" >
                                
                                '.$name.'</a>
                            </li>
                        ';
                        }
                        ?>

                      
                    </ul>
                </nav>

                <div class="slider col-lg-9 col-md-12 col-sm-0">
                    <div class="row">
                        <div class="slide__left col-lg-8 col-md-0 col-sm-0">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">                           

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../images1/banner/363488_final1511.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="../images1/banner/Gold_DongA_600X350.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="../images1/banner/megabook-glod600X350.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="slide__left-bottom">
                                <div class="slide__left-botom-one">
                                    <img src="../images1/banner/363107_05.jpg" class="slide__left-bottom-one-img">
                                </div>
                                <div class="slide__left-bottom-two">
                                    <img src="../images1/banner/363104_06.jpg" class="slide__left-bottom-tow-img">
                                </div>
                            </div>
                        </div>

                        <div class="slide__right col-lg-4 col-md-0 col-sm-0">
                            <img src="../images1/banner/slider-right.png" class="slide__right-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end header -->

    <!-- category 1: Sách trong nước-->
    <?php
    foreach($echo_all_catalogy as $data){
        extract($data);
        // echo $id;
        echo '    <section id ="'.$id.'" class="product__love">
        <div class="container">
            <div class="row bg-white">
                <div class="col-lg-12 col-md-12 col-sm-12 product__love-title">
                    <h2 class="product__love-heading upper">
                        '.$name.'
                    </h2>
                </div>
            </div>
            <div class="row bg-white">'?>
            <?php
            // echo $id;
                        $book_folow_id = sanpham_get_all_folow_id($id);
                        
                        foreach($book_folow_id as $item){
                            extract($item);
                            // echo $rating;
                            $price =  number_format($price, 0, '.', '.');
                            $star = get_rating_stars($rating);
                            echo '<div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                            <div class="product__panel-img-wrap">
                                <a href="index.php?act=Product&id='.$id.'">
                                <img src="../images1/product/'.$image.'" alt="" class="product__panel-img">
                                </a>
                                
                            </div>
                            <h3 class="product__panel-heading">
                                <a href="index.php?act=Product&id='.$id.'"  class="product__panel-link">'.$book_name.'</a>
                            </h3>
                            <h1>'.$star.'</h1>
        
                            <div class="product__panel-price">
                                <span class="product__panel-price-current" href="index.php?act=Product&id='.$id.'">
                                '.$price.'
                                </span>
                            </div>  
                        </div>';
                        }
            
            ?>
                <!-- <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                    <div class="product__panel-img-wrap">
                        <img src="images1/product/image_187163.jpg" alt="" class="product__panel-img">
                    </div>
                    <h3 class="product__panel-heading">
                        <a href="#"  class="product__panel-link">Tuổi Thơ Dữ Dội - Tập 2 (Tái Bản 2019)</a>
                    </h3>
                    <div class="product__panel-rate-wrap">
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                    </div>

                    <div class="product__panel-price">
                        <span class="product__panel-price-old product__panel-price-old-hide">
                            80.000đ
                        </span>
                        <span class="product__panel-price-current">
                            69.000đ
                        </span>
                    </div>  
                </div>

                <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                    <div class="product__panel-img-wrap">
                        <img src="images1/product/image_188285.jpg" alt="" class="product__panel-img">
                    </div>
                    <h3 class="product__panel-heading">
                        <a href="#" class="p-name product__panel-link">Chuyện Con Mèo Dạy Hải Âu Bay</a>
                    </h3>
                    <div class="product__panel-rate-wrap">
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                    </div>

                    <div class="product__panel-price">
                        <span class="product__panel-price-old product__panel-price-old-hide">
                            49.000đ
                        </span>
                        <span class="product__panel-price-current">
                            34.300đ
                        </span>
                    </div> 
                </div> -->


            <?php
            echo '    
            </div>
        </div>
    </section>';
    
    }
    ?>

    
    
