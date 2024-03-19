<?php 

extract($oneSp);

?>

<link rel="stylesheet" href="../css/product.css">
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
                                <a href="index.html" class="header__top-link">

                                Hỏi đáp</a>
                            </li>
                            <li class="header__top-item">
                                <a href="#" class="header__top-link">Hướng dẫn</a>
                            </li>
                            <li class="header__top-item">
                                <?php 
                                    if (isset($_SESSION['iduser'])) {
                                        echo '
                                        <li class="header__top-item">
                                        <a href="#" class="header__top-link">Xin Chào '.$_SESSION['user'].'</a>
                                        </li>
                                        ';
                                        echo '<a href="./index.php?act=logout" class="header__top-link">Đăng Xuất</a>';
                                    }
                                    else{
                                        echo '<a href="#" class="header__top-link">Đăng Nhập/Đăng ký</a>';
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

                    <div class="col-lg-6 col-md-7 col-sm-0 header__search">
                        <select name="" id="" class="header__search-select">
                            <option value="0">All</option>
                            <option value="1">Sách tiếng việt</option>
                            <option value="2">Sách sách nước ngoài</option>
                            <option value="3">Manga-Comic</option>
                            
                        </select>
                        <input type="text" class="header__search-input" placeholder="Tìm kiếm tại đây...">
                        <button class="header__search-btn">
                            <div class="header__search-icon-wrap">
                                <i class="fas fa-search header__search-icon"></i>
                            </div>
                        </button>
                    </div>

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
                    <div class="header__nav-menu-wrap col-lg-3 col-md-0 col-sm-0">
                        <i class="fas fa-bars header__nav-menu-icon"></i>
                        <div class="header__nav-menu-title">Danh mục sản phẩm</div>
                    </div>

                    <div class="header__nav col-lg-9 col-md-0 col-sm-0">
                        <ul class="header__nav-list">
                            <li class="header__nav-item">
                                <a href="index.html" class="header__nav-link">Trang chủ</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="category.html" class="header__nav-link">Danh mục sản phẩm</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="product.html" class="header__nav-link">Sản phẩm</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="post.html" class="header__nav-link">Bài viết</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="#" class="header__nav-link">Tuyển cộng tác viên</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="contact.html" class="header__nav-link">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </header>
    <!--end header nav -->
    <!-- score-top-->

<button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i class="fas fa-chevron-up"></i></button>
    <!-- product -->
    <section class="product">
        <div class="container">
            <div class="row bg-white pt-4 pb-4 border-bt pc">
                <nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                    <ul class="menu__list">
                        <li class="menu__item menu__item--active">
                            <a href="#" class="menu__link">
                            <img src="../images1/item/baby-boy.png" alt=""  class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                            Sách Tiếng Việt</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                            <img src="../images1/item/translation.png" alt="" class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                            Sách nước ngoài</a>
                        </li>
                      
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                                <img src="../images1/item/1380754_batman_comic_hero_superhero_icon.png" alt="" class="menu__item-icon"  viewBox="0 0 512 512" width="1012" height="512">

                            Manga - Comic</a>
                        </li>
                      
                    </ul>
                </nav>

                <article class="product__main col-lg-9 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="product__main-img col-lg-4 col-md-4 col-sm-12">
                            <div class="product__main-img-primary">
                                <img src="../images1/product/hoc-tap-qua-du-an-2-01-1.jpg">
                            </div>

                            <div class="product__main-img-list">
                                <img src="../images1/product/hoc-tap-qua-du-an-2-01-1.jpg">
                                <!-- <img src="../images1/product/hoc-tap-qua-du-an-2-01-1 1.jpg">
                                <img src="../images1/product/hoc-tap-qua-du-an-2-01-1 2.jpg">
                                <img src="../images1/product/23f849a0617301e63159067164aecfd2.png"> -->
                            </div>
                        </div>

                        <div class="product__main-info col-lg-8 col-md-8 col-sm-12">
                            <div class="product__main-info-breadcrumb">
                                Trang chủ / Sản phẩm
                            </div>
                            <a href="#" class="product__main-info-title">
                                <h2 class="product__main-info-heading">
                                    <?php echo $name?>
                                </h2>
                            </a>

                            <div class="product__main-info-rate-wrap">
                                <!-- <i class="fas fa-star product__main-info-rate"></i>
                                <i class="fas fa-star product__main-info-rate"></i>
                                <i class="fas fa-star product__main-info-rate"></i>
                                <i class="fas fa-star product__main-info-rate"></i>
                                <i class="fas fa-star product__main-info-rate"></i> -->
                                <?php
                                    for ($i=0; $i < $rating; $i++) { 
                                        echo '<i class="fas fa-star product__main-info-rate"></i>';
                                    }
                                ?>
                            </div>

                            <div class="product__main-info-price">
                                <span class="product__main-info-price-current">
                                <?php echo $price?>đ
                                </span>
                            </div>

                            <div class="product__main-info-description">
                            <?php echo $description?>
                            </div> 

                            <div class="product__main-info-cart">
                                <!--<div class="product__main-info-cart-quantity">
                                    <input type="button" value="-"  class="product__main-info-cart-quantity-minus">
                                    <input type="number" step="1" min="1" max="999" value="1" class="product__main-info-cart-quantity-total">
                                    <input type="button" value="+" class="product__main-info-cart-quantity-plus">
                                </div>-->
                                <?php echo $_SESSION['iduser'] ?>
                                <?php echo $id ?>
                                <div class="product__main-info-cart-btn-wrap">
                                    <button class="product__main-info-cart-btn">
                                        <a href="index.php?act=AddProductToCart&iduser=<?php echo $_SESSION['iduser'] ?>&idbook=<?php echo $id ?>" style="font-size: medium; color:white;">Thêm vào giỏ hàng</a>
                                    </button>
                                </div>
                            </div>

                            <div class="product__main-info-contact">
                                <a href="#" class="product__main-info-contact-fb">
                                    <i class="fab fa-facebook-f"></i>
                                    Chat Facebook
                                </a>
                                <div class="product__main-info-contact-phone-wrap">
                                    <div class="product__main-info-contact-phone-icon">
                                        <i class="fas fa-phone-alt "></i>
                                    </div>
                                    
                                    <div class="product__main-info-contact-phone">
                                        <div class="product__main-info-contact-phone-title">
                                            Gọi điện tư vấn
                                        </div>
                                        <div class="product__main-info-contact-phone-number">
                                            (0585.245.989)
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row bg-white">
                        <div class="col-12 product__main-tab">
                            <a href="#" class="product__main-tab-link product__main-tab-link--active">
                                Mô tả
                            </a>
                            <a href="#" class="product__main-tab-link">
                                Đánh giá
                            </a>
                        </div>

                        <div class="col-12 product__main-content-wrap">
                            <h2 class="product__main-content-heading">
                                <?php echo $name?>
                            </h2>

                            <p>
                            <?php echo $introduction?>
                            </p>

                        </div>
                        
                    </div>
                </article>

                <aside class="product__aside col-lg-3 col-md-0 col-sm-0">
                    <div class="product__aside-top">
                        <div class="product__aside-top-item">
                            <img src="../images/shipper.png">
                            <div class="product__aside-top-item-text">
                                <p>
                                    Giao hàng nhanh chóng
                                </p>
                                <span>
                                    Chỉ trong vòng 24h
                                </span>
                            </div>
                        </div>
                        <div class="product__aside-top-item">
                            <img src="../images/brand.png">
                            <div class="product__aside-top-item-text">
                                <p>
                                    Sản phẩm chính hãng
                                </p>
                                <span>
                                    Sản phẩm nhập khẩu 100%
                                </span>
                            </div>
                        </div>
                        <div class="product__aside-top-item">
                            <img src="../images/less.png">
                            <div class="product__aside-top-item-text">
                                <p>
                                    Mua hàng tiết kiệm
                                </p>
                                <span>
                                    Rẻ hơn từ 10% đến 30%
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="product__aside-bottom">
                        <h3 class="product__aside-heading">
                            Có thể bạn thích
                        </h3>

                        <div class="product__aside-list">
                            <div class="product__aside-item product__aside-item--border">
                                <div class="product__aside-img-wrap">
                                    <img src="../images1/product/image_227958.jpg" class="product__aside-img">
                                </div>
                                <div class="product__aside-title">
                                    <a href="#" class="product__aside-link">
                                        <h4 class="product__aside-link-heading"> Giáo Dục Stem/Steam : Từ Trải Nghiệm Thực Hành Đến Tư Duy</h4>
                                    </a>

                                    <div class="product__aside-rate-wrap">
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                    </div>

                                    <div class="product__aside-price">
                                        <span class="product__aside-price-current">
                                            72.250
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="product__aside-item">
                                <div class="product__aside-img-wrap">
                                    <img src="../images1/product/untitled-1_9_25_1.jpg" class="product__aside-img">
                                </div>
                                <div class="product__aside-title">
                                    <a href="#" class="product__aside-link">
                                        <h4 class="product__aside-link-heading">Tôi Thích Bản Thân Nỗ Lực Hơn ( Tái bản 2019)</h4>
                                    </a>

                                    <div class="product__aside-rate-wrap">
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                    </div>

                                    <div class="product__aside-price">
                                        <span class="product__aside-price-current">
                                            76.800đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </aside>

            </div>
            
           <div class="customer-reviews row pb-4 pb-4  py-4 pb-4 py-4 py-4">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 >Bình luận sản phẩm</h3>
                <form id ="formgroupcomment" method="post">
                    <div class="form-group">
                        <label>Tên:</label>
                        <input name="comm_name" required="" type="text" id ='form-name' class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input name="comm_mail" required="" type="email"  class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                        <label>Nội dung:</label>
                        <textarea name="comm_details" required="" rows="8" id ='formcontent' class="form-control"></textarea>     
                    </div>
                    <button type="submit" name="sbm" id= "submitcomment" class="btn btn-primary">Gửi</button>
                </form> 
            </div>
           </div>
            
           <div class="product-comment row pb-4 pb-4  py-4 pb-4 py-4 py-4">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="comment-item">
                    <ul class = item-reviewer>
                        <div class="comment-item-user">
                            <img src="../images/img/1.png" alt="" class="comment-item-user-img">
                            
                            <li><b>Nguyễn Nhung</b></li> 
                         </div>
                      
                       <br>
                        <li>2021-08-17 20:40:10</li>
                        <li>
                           <h4>Sách được bọc nilong kỹ càng, sạch, mới. Giao hàng nhanh. Nội dung chưa đọc nhưng nhìn sơ có vẻ hấp dẫn và rất nhiều kiến thức bổ ích. Mình ở nước ngoài nhờ người mua rồi gửi qua nên khâu đóng gói của người bán quan trọng lắm, giúp cho sách vận chuyển đi xa cũng không bị hư tổn gì. Sẽ tiếp tục ủng hộ. Love book shop .From Hust with LOve</h4>
                        </li>
                    </ul>
                </div>            
            </div>
           </div>
             
            

    
                               
                             

            <section class="product__love col-12 mt-4">
                <div class="row bg-white">
                <div class="col-lg-12 col-md-12 col-sm-12 product__love-title">
                    <h2 class="product__love-heading">
                        Sản phẩm tương tự
                    </h2>
                </div>
            </div>
            <div class="row bg-white">
                <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                    <div class="product__panel-img-wrap">
                        <img src="../images1/product/image_189077.jpg" alt="" class="product__panel-img">
                    </div>
                    <h3 class="product__panel-heading">
                        <a href="#" class="product__panel-link">Tâm Lý Học - Khái Lược Những Tư Tưởng Lớn</a>
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
                         300.000đ
                        </span>
                        <span class="product__panel-price-current">
                            273.000đ
                        </span>
                    </div>  
                </div>
            </div>
            </section>
        </div>
    </section>
    <!--product -->