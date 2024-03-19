

<link rel="stylesheet" href="../css/cart.css">
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

                    <a href="#" class="col-lg-1 col-md-1 col-sm-0 header__cart">
                    <div class="header__cart-icon-wrap">
                    <?php
                            if(isset($count)){
                            foreach ($count as $item) {
                            ?>
                            <span class="header__notice"> <?php echo $item ?> </span>
                            <?php }}
                            else{
                                echo '<span class="header__notice">0</span>';
                            }
                            
                            ?>
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
                                <a href="contact.html" class="header__nav-link">Liên hệ</a> -->
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </header>
    <!--end header nav -->

<button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i class="fas fa-chevron-up"></i></button>
    <!-- cart -->
	<section class="cart">
		<div class="container">
			<article class="row cart__head pc">
            <nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                    <ul class="menu__list">
                        <?php
                        
                        foreach($echo_all_catalogy as $data){
                            extract($data);
                        echo '
                            <li class="menu__item menu__item--active">
                                <a href="#" class="menu__link">
                                <!-- <img src="../images1/item/baby-boy.png" alt=""  class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"> -->
                                '.$name.'</a>
                            </li>
                        ';
                        }
                        ?>

                      
                    </ul>
                </nav>
				<div class="col-4 cart__head-name">
					Thông tin sản phẩm
				</div>
				<div class="col-2 cart__head-quantity">
					Số lượng
				</div>
				<div class="col-2 cart__head-price">
					Giá sản phẩm
				</div>
                <div class="col-2 cart__head-price">
					Đơn giá
				</div>
                <div class="col-1 cart__head-price">
					Thao tác
				</div>
			</article>

            <?php      
            $total = 0 ;   


                foreach($Sp_cart as $item){
                    
                    extract($item);
                    // $temp = "";
                    // $temp1 = "";
                    // echo count($Sp_cart);
                    for($i=0;$i<count($Sp_cart);$i++){

                    }
                    
                    // echo $addToBill;
                    $total += ($price*$book_quantity);
                    // echo $id;
                    
                 
            ?>

			<article class="row cart__body">
				<div class="col-4 cart__body-name">
					<div class="cart__body-name-img">
						<img src="../images1/product/<?php echo $image?>">
					</div>
					<a href="" class="cart__body-name-title">
                        <?php echo $book_name ?>
					</a>
				</div>
				<div class="col-2 cart__body-quantity">
                    <?php
                    if($book_quantity>1){
                        echo '<a href="index.php?act=cartUnplus&unPlusValueId='.$id.'"><input type="button" onclick="location.reload()"  value="-"  class="cart__body-quantity-minus"></a>';
                    }
                    else{
                        echo '<a href="index.php?act=cartDelete&ValueId='.$id.'"><input type="button" onclick="location.reload()"  value="-"  class="cart__body-quantity-minus"></a>';
                    }
                    ?>
                    <input type="number" placeholder="<?php echo $book_quantity ?>"  value="<?php echo $book_quantity ?>" class="cart__body-quantity-total">
                    <a href="index.php?act=cartPlus&plusValueId=<?php echo $id ?>"><input type="button" onclick="location.reload()" value="+" class="cart__body-quantity-plus"></a>
				</div>
				<div class="col-2 cart__body-price">
					<span><?php echo number_format($price, 0, '.', '.'); ?>đ</span>

					
				</div>
                <div class="col-2 cart__body-price">
					<span><?php echo number_format($price*$book_quantity, 0, '.', '.');  ?>đ</span>

					
				</div>
                <div class="col-1 cart__body-price">
                <?php echo '<a href="index.php?act=cartDelete&ValueId='.$id.'">Xóa</a>'?>

					
				</div>
			</article>

<?php } ?>
			<article class="row cart__foot">
				<div class="col-6 col-lg-6 col-sm-6 cart__foot-update">
					
				</div>

				<p class="col-3 col-lg-3 col-sm-3 cart__foot-total">
					Tổng cộng: 
				</p>

				<span class="col-3 col-lg-3 col-sm-3 cart__foot-price">
					<?php echo number_format($total, 0, '.', '.'); ;?>đ <br>

					<a href="index.php?act=Pay"  class="cart__foot-price-btn">Mua hàng</a>

				</span>
			</article>
		</div>
	</section>
    <!--end cart -->
    <!-- <script>
        const quantityInput = document.querySelector(".cart__body-quantity-total");

        // Định nghĩa số lượng tối thiểu và tối đa
        const MIN_QUANTITY = 1;
        const MAX_QUANTITY = 555; // Điều chỉnh giá trị này theo mong muốn tối đa của bạn

        // Đặt giá trị ban đầu
        quantityInput.value = MIN_QUANTITY;

        // Giới hạn đầu vào chỉ là số
        quantityInput.addEventListener("keypress", (event) => {
        if (!event.key.match(/\d/)) {
            event.preventDefault();
        }
        });

        // Giới hạn phạm vi đầu vào
        quantityInput.addEventListener("change", () => {
        const currentQuantity = parseInt(quantityInput.value, 10);
        if (currentQuantity < MIN_QUANTITY) {
            quantityInput.value = MIN_QUANTITY;
        } else if (currentQuantity > MAX_QUANTITY) {
            quantityInput.value = MAX_QUANTITY;
            alert("Bạn phải nhập số lượng ít hơn !");
        }
        });

    </script> -->
    