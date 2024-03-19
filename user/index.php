
<?php
session_start();
ob_start();
include "../model/pdo.php";
include "../model/account.php";
include "../model/comment.php";
include "../model/product.php";
include "../model/cart.php";
include "../model/pay.php";
include "../model/bill.php";
include "../model/catalogy.php";
include "./header.php";
$listSp=sanpham_get_all();
$echo_all_catalogy = allcatalogy();

if (isset($_SESSION['iduser'])) {
    $idcount= $_SESSION['iduser'];
    $count = countCart($idcount);
    
}


if (isset($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = 'Home';
}

switch($act){
    case "Home":
        include "./content.php";
        break;
    
    
    case "temp1":
        include "./temp_1.php";
        break;

    

    case "Cart":
        $user = $_SESSION['iduser'];
        // echo $user;
        $Sp_cart=load_sanpham_cart($user);
        include "./cart.php";
        break;


    case "Delete_cart":
        // $user = $_SESSION['iduser'];
        $id = $_GET['id'];
       
        include "./history_purchase.php";
        break;


    case "find":
        // echo $find_value;
        // echo $catalogy;
        if(isset($_POST['find_value'])&&$_POST['catalogy_name'] != 0){
            $catalogy = $_POST['catalogy_name'];
            $find_value = $_POST['find_value'];
            // echo $catalogy;
            $list_book_find_folow_catalogy_and_keyword = sanpham_get_folow_keyword_and_catalogy($catalogy,$find_value);
        }
        elseif(isset($_POST['find_value'])){
        $find_value = $_POST['find_value'];
        $list_book_find_folow_catalogy_and_keyword = sanpham_get_folow_keyword($find_value);
        }
        include "./find.php";
        break;



    case "Product":
        // $number = "1500";
        // $beta = convertNumber($number);
        // echo $beta;
        $id =  $_GET['id'];
        $select_one_book_comments = select_one_book_comments($id);
        $oneSp = loadOne_sanpham($id);
        include "./product.php";
        break;

    case "Pay":
        $user = $_SESSION['iduser'];    
        $Sp_cart=load_sanpham_cart($user);
        $user = $_SESSION['iduser'];
        $onePersonCart = load_sanpham_cart($user);
        if (isset($_SESSION['iduser'])) {
            $userInfo1 = getuserinfo1($_SESSION['iduser']);
        }
        include "./pay.php";
        break;


    case "Bill":
        $user = $_SESSION['iduser'];
        if (!isset($_POST['allBooks'])) {
            if (isset($_SERVER['HTTP_REFERER'])) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                } else {
                header('Location: /');
                }
        }
        elseif ($_POST['allBooks'] != null&&$_POST['phone'] != null&&$_POST['payment_method'] != 0&&$_POST['address'] != null&&$_POST['book_price'] != null&&$_POST['book_quantity'] != null&&$_POST['total'] != null) {

            $allBooks =  $_POST['allBooks'];
            $book_quantity = $_POST['book_quantity'];
            $book_price = $_POST['book_price'];
            $address = $_POST['address'];
            $payment_method = $_POST['payment_method'];
            $phone = $_POST['phone'];
            $total = $_POST['total'];
            if($payment_method)
            insert_bill($user,$allBooks,$book_quantity,$book_price,$address,$payment_method,$phone,$total);
            // echo $_SESSION['iduser'];
            $listBill = bill_get_all($user);
            // var_dump($listBill) ;
            $user = $_SESSION['iduser'];
            $onePersonCart = load_sanpham_cart($user);
            if (isset($_SESSION['iduser'])) {
                $userInfo1 = getuserinfo1($_SESSION['iduser']);
            }
            deleteCart_afterbuy($user);
            if ($_POST['payment_method'] =="Momo") {
                $total = $_POST['total'];
                include "./temp2.php";
            }
            include "./bill.php";
        }

        else{
            $alert = "Vui lòng nhập đầy đủ thông tin!!!";
            $userInfo1 = getuserinfo1($_SESSION['iduser']);
            $Sp_cart=load_sanpham_cart($user);
            $onePersonCart = load_sanpham_cart($user);
            include "./pay.php";
        }

        
        // $user = $_SESSION['iduser'];
        // echo $_SESSION['iduser'];

        
        break;

    case "Login_register":

        include "./login_register.php";
        break;

    case "history_purchase":
        
        include "./history_purchase.php";
        break;

    case "edit_history":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            include "./edit_history.php";
        }
        else{
            if (isset($_SERVER['HTTP_REFERER'])) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                } else {
                header('Location: /');
                }
        }

        break;


    case "catalogy":
        include "./catalogy.php";
        break;

    case "insert_address":
        $id = $_GET['id'];
        $city_input = $_POST['city_input'];
        $district_input = $_POST['district_input'];
        $wards_input = $_POST['wards_input'];
        $address = $wards_input.", ".$district_input.", ".$city_input;
        insert_address_of_bill($id,$address);
        // echo $address;
        if (isset($_SERVER['HTTP_REFERER'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
            header('Location: /');
            }
        break;

    case "logout":

        if(isset($_SESSION['iduser'])&& $_SESSION['iduser']){
            unset($_SESSION['iduser']);
            unset($_SESSION['user']);
            unset($_SESSION['role']);
            
        }
        include "./login_register.php";
        break;

    case "login":
        $thongbao="";
        if($_POST['user']!=""&& $_POST['pass']!=""){



            if($_POST['user']!=""&& $_POST['pass']!=""){
                // $user=$_POST['user'];
                // $pass=$_POST['pass'];
                $user = htmlspecialchars($_POST['user']);
                $pass = htmlspecialchars($_POST['pass']);

                $checkuser=getuserinfo($user,$pass);
                if(is_array($checkuser)){
                    $role=$checkuser['role'];
                    $id=$checkuser['id'];
                    $checkadmin=getadmininfo1($id,$role);
                    if($role==3||$role==2){
                        $_SESSION['role']=$role;
                        $_SESSION['user']=$checkadmin['username'];
                        $_SESSION['iduser']=$checkadmin['id'];                                                 
                        header('location:../admin/index.php');
                        break;
                    }
                    elseif($role==0){
                        $thongbao="Bạn đã bị khóa tài khoản, vui lòng liên hệ admin để được hỗ trợ!!";
                        include "./login_register.php";
                        break;
                    }
                    else{
                        $_SESSION['role']=$role;
                        $_SESSION['user']=$checkuser['username'];
                        $_SESSION['iduser']=$checkuser['id'];
                        header('location: index.php');
                        break;
                    }
                }
            
            }
            if($_POST['user']==""&& $_POST['pass']==""){
                $thongbao="Vui lòng nhập thông tin!!";
                include "./login_register.php";
            }
            else{
                $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra lại";
                include "./login_register.php";
            }
            }else{
                include "./login_register.php";
            }
            break;



        case "signin":
                    

            $thongbao="";
            if(isset($_POST['dangky']) && ($_POST['dangky'])){
                if($_POST['user']!=""&& $_POST['pass']!=""&&$_POST['email']!=""){
                    $check_to_insert_account = "true";
                    $get_all_user_to_check_sign_in = get_all_user_to_check_sign_in();
                    foreach($get_all_user_to_check_sign_in as $item){
                        extract($item);
                        if($_POST['user'] == $username){
                            $check_to_insert_account = "false";
                            $thongbao="Tên đăng nhập đã tồn tại";
                        }
                    }
                    if ($check_to_insert_account == "true") {
                        $user=$_POST['user'];
                        $email=$_POST['email'];
                        $pass=$_POST['pass'];
                        
                        insert_taikhoan($user,$pass,$email);
                        // $comment_id = LAST_INSERT_ID();
                        $thongbao="Đăng ký thành công.Vui lòng đăng nhập để mua hàng và bình luận!!";
                    }

                }else{
                    $thongbao="Vui lòng nhập thông tin!!";
                }
            }
            include "./login_register.php";
            break;

        case "comment":

            // echo $_POST['content'];
            if(isset($_POST['content'])){
                $content = $_POST['content'];
                $book_id = $_POST['id_book'];
                $rating = $_POST['rating'];
                $account_id = $_SESSION['iduser'];
                // echo $comment;
                // echo "----";
                // echo $id_book;
                // echo "----";
                // echo $_SESSION['iduser'];
                // echo "----";
                // echo $rating;
                insert_comment($account_id,$book_id,$content,$rating);
            }
            // Lưu trữ URL của trang trước đó
            $previous_url = $_SERVER['HTTP_REFERER'];

            // Trở lại trang trước đó
            header("Location: $previous_url");
            // include "./product.php";
            break;


    case "cartPlus":
        if (isset($_GET['plusValueId'])) {
            $id = $_GET['plusValueId'];
            updateCart_plus($id);
        }
        if (isset($_SERVER['HTTP_REFERER'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
            header('Location: /');
            }
        break;

    case "cartUnplus":
        if (isset($_GET['unPlusValueId'])) {
            $id = $_GET['unPlusValueId'];
            updateCart_unplus($id);
        }
        if (isset($_SERVER['HTTP_REFERER'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
            header('Location: /');
            }
        break;

    case "cartDelete":
        // echo "1";
        if (isset($_GET['ValueId'])) {
            $id = $_GET['ValueId'];
            deleteCart_unplus($id);
        }
        if (isset($_SERVER['HTTP_REFERER'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
            header('Location: /');
            }
        break;


    case "delete_comment":
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // $id = $_GET['ValueId'];
            // deleteCart_unplus($id);
            delete_comment($id);
        }
        if (isset($_SERVER['HTTP_REFERER'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
            header('Location: /');
            }
        break;


        case "update_comment":
            // echo "HHAHAHHAHAH";
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                // echo $id;
                // echo "rate";
                $rating =  $_POST['rating'];
                // echo $rating;
                // echo "/content";
                $content =  $_POST['content'];
                // echo $content;
                update_comment($id,$content,$rating);
    
                // $id = $_GET['ValueId'];
                // deleteCart_unplus($id);
                // delete_comment($id);
            }
            if (isset($_SERVER['HTTP_REFERER'])) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                } else {
                header('Location: /');
                }
            break;


            case "AddProductToCart":
                // echo $id;
                $check = 0;
                $id_user = $_GET['iduser'];
                $id_book = $_GET['idbook'];
                $quantity_of_book = $_POST['quantity_of_book'];
                // echo $id_user;
                // echo $id_book;
                $checkForAddToCart = check_for_add_to_cart();
                foreach ($checkForAddToCart as $value) {
                    extract($value);
                    // echo"*";
                    // echo $book_id;
                    // echo $user_id;
                    // echo $cart_id;
                    if($id_user == $user_id &&$id_book == $book_id){
                        // echo $id_user."=".$user_id."&&".$id_book."=".$book_id;
                        $check = 1;
                        echo $cart_id;
                        updateCart_plus($cart_id,$quantity_of_book);    
                    if (isset($_SERVER['HTTP_REFERER'])) {
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                        } else {
                        header('Location: /');
                        }
                    }
                    
                }

                if ($check == 0) {
                    insertProductToCart($id_book,$id_user,$quantity_of_book);
                    if (isset($_SERVER['HTTP_REFERER'])) {
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                        } else {
                        header('Location: /');
                        }   
                }
                // echo $check;
                // insertProductToCart($_GET['idbook'],$id_user);
               
        break;

    default:
        include "./content.php";
        break;
    }

    if ($act='Product') {
        include "./footer-pr.php";
    }
    else{
        include "./footer.php";
    }

?>
