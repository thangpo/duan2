<?php


extract($bill_get_all_admin);
?>

<link rel="stylesheet" href="../css/pay.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.21.0/slimselect.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.21.0/slimselect.js"></script>
<style>
.form-group {
  display: inline-block;
  padding-right: 200px;
}

</style>
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
                        extract($bill_get_all_admin);
                        $id_user = $id;
                        // echo $total_amount;
                        // extract($books);
                        $arr_books = explode(";", $books);
                        $arr_book_quantity = explode(";", $book_quantity);
                        // var_dump($arr_book_quantity);
                        $arr_book_price = explode(";", $book_price);
                        echo '
                        <div class="card border-secondary mb-5">
                          <div class="card-header bg-secondary border-0">
                              <h4 class="font-weight-semi-bold m-0">Đơn hàng mã '.$id.'</h4>
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
                            //   echo $arr_books[$index];
                            //   echo $arr_book_quantity[$index];
// delete_bill_after_admin_confirm($arr_books[$index],$arr_book_quantity[$index]);
                              }
                              ?>
                              <?php
                              echo '
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                        <h2 class="font-weight-medium mb-3">Thông tin khách hàng</h2>
                            <div class="d-flex justify-content-between mt-2">
                                <h6 class="font-weight">Ngày mua hàng</h6>
                                <h6 class="font-weight">'.$order_date.'</h6>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <h6 class="font-weight">Trạng thái</h6>
                                <h6 class="font-weight">'.$order_status.'</h6>
                            </div>
                                <div class="d-flex justify-content-between mt-2">
                                <h6 class="font-weight">Địa chỉ giao hàng</h6>
                                <h6 class="font-weight">
                                '.$shipping_address.'

                                </h6>
                            </div>


                            
                                <div class="d-flex justify-content-between mt-2">
                                <h6 class="font-weight">Phương thức thanh toán</h6>
                                <h6 class="font-weight">'.$payment_method.'</h6>
                            </div>
                                <div class="d-flex justify-content-between mt-2">
                                <h6 class="font-weight">Số điện thoại</h6>
                                <h6 class="font-weight">'.$phone.'</h6>
                            </div>

                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h2 class="font-weight-bold">Tổng Cộng</h2>
                                <h2 class="font-weight-bold">';?><?php echo number_format($totalPrice, 0, '.', '.'); ?>VNĐ</h2>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <h2 class="font-weight-bold">Trạng thái</h2>
                                <h2 class="font-weight-bold"><?php echo $order_status?></option></h2>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <h2 class="font-weight-bold">Sửa địa chỉ</h2>
                                <h2 class="font-weight-bold">

                                <div class="box-province">
                        <form action="./index.php?act=insert_address&id=<?php echo $id?>" method="post">
                                <div class="form-group">
                                <label for="city">Thành Phố</label><br>
                                <select name="city" id="city" style="font-size: 30px;width: 200px;" >
                                    <option value="chon">Chọn</option>
                                </select>
                                <input type="hidden" name="city_input" id="city_input">
                                </div>
                                <div class="form-group">
                                <label for="city">Quận Huyện</label><br>
                                <select name="district" id="district" style="font-size: 30px;width: 200px;">
                                    <option value="chon">Chọn</option>
                                </select>
                                <input type="hidden" name="district_input" id="district_input">
                                </div>
                                <div class="form-group">
                                <label for="">Phường xã</label><br>
                                <select name="wards" id="wards" style="font-size: 30px;width: 200px;">
                                    <option value="chon">Chọn</option>
                                </select>
                                <input type="hidden" name="wards_input" id="wards_input">
                                </div>
                                
                                <!-- <a href="./index.php?act=insert_address" class="btn btn-primary btn-lg active" role="button" >Sửa</a> -->
                                <button type="submit" class="btn btn-primary btn-lg active">Sửa</button>
                                </form>
                            <!-- </div> -->

                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </body>
    <script >
  new SlimSelect({
    select: '#city'
  });
  new SlimSelect({
    select: '#district'
  });
  new SlimSelect({
    select: '#wards'
  });
const elements = {
    city: document.getElementById("city"),
    district: document.getElementById("district"),
    wards: document.getElementById("wards")
};

const urlapi = 'https://provinces.open-api.vn/api/';

function handleApiCity() {
    fetch(urlapi + "p")
        .then(res => res.json())
        .then(data => {
            if (data.length > 0) {
                appendOptions(elements.city, data);
            }
        });
        // console.log(data);
}

function changeCity() {
    fetch(urlapi + "p/" + elements.city.value + "?depth=2")
        .then(res => res.json())
        .then(data => {
            if (data.districts.length > 0) {
                clearAndAppendOptions(elements.district, data.districts);
                clearAndAppendOptions(elements.wards, []);
            }
        });
}

function handleApiDistrict() {
    fetch(urlapi + "d/" + elements.district.value + "?depth=2")
        .then(res => res.json())
        .then(data => {
            if (data.wards.length > 0) {
                clearAndAppendOptions(elements.wards, data.wards);
            }
        });
}

function appendOptions(element, data) {
    const fragment = document.createDocumentFragment();
    data.forEach(item => {
        const option = document.createElement("option");
        option.value = item.code;
        option.innerHTML = item.name;
        option.style.fontSize = "10px";
        fragment.appendChild(option);
    });
    element.appendChild(fragment);
    // console.log(data);
}

function clearAndAppendOptions(element, data) {
    var option = "<option value='chon'>Chọn</option>"
    element.innerHTML = option
    appendOptions(element, data);
    // console.log(element);
}

handleApiCity();

elements.city.addEventListener("change", changeCity);
elements.district.addEventListener("change", handleApiDistrict);


        const citySelect = document.getElementById('city');
        const cityInput = document.getElementById('city_input');

        
        citySelect.addEventListener('change', () => {
          const selectedOption = citySelect.options[citySelect.selectedIndex];
          cityInput.value = selectedOption.text;
        });

        const cityDistrict = document.getElementById('district');
        const districtInput = document.getElementById('district_input');

        cityDistrict.addEventListener('change', () => {
          const selectedOption = cityDistrict.options[cityDistrict.selectedIndex];
          districtInput.value = selectedOption.text;
        });
        const wardsSelect = document.getElementById('wards');
        const wardsInput = document.getElementById('wards_input');

        wardsSelect.addEventListener('change', () => {
          const selectedOption = wardsSelect.options[wardsSelect.selectedIndex];
          wardsInput.value = selectedOption.text;
        });
        
</script>
</html>
