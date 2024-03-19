<?php
session_start();
ob_start();
if(isset($_SESSION['iduser'])&&($_SESSION['role']==2||$_SESSION['role']==3)){
    include "../model/comment.php";
include "../model/pdo.php";
include "../model/account.php";
include "../model/product.php";
include "../model/cart.php";
include "../model/pay.php";
include "../model/bill.php";
include "../model/catalogy.php";
include "../model/chart.php";
include "header.php";
$total_comments = total_comments();


// echo $total_comments[$total_comments][0];
// var_dump($total_comments);
if(isset($_GET['act']) && $_GET['act']!=""){
    $act=$_GET['act'];
    switch($act){
        case 'home_admin':
            include "admin.php";
            break;


        case 'bill':
            include "bill.php";
            break;

        case 'chart':
            include "chart.php";
            break;


        // case "chart_count_money_folow_year":
        //     include "admin.php";
        //     include "chart_of_compare_cart_and_bill.php";
        //     break;

        
        case "chart_of_compare_view_and_login":
            include "admin.php";
            include "temp.php";
            break;

        case "chart_book":
            $book = "";
            $number = "";
            $count_all_books_of_catalogy_for_chart = count_all_books_of_catalogy_for_chart();
            foreach($count_all_books_of_catalogy_for_chart as $data){
                extract($data);
                
                // echo $name;
                if($book == ""){
                    $book = $name;
                }
                else{
                    $book = $book.",".$name;
                }
                if($number == ""){
                    $number = $number_of_books;
                }
                else{
                    $number = $number.",".$number_of_books;
                }               
            }
            $result_for_list_book = "";
            $result_for_list_book = implode("', '", explode(",", $book));
            include "admin.php";
            include "temp2.php";
            break;



        case "delete_insert_bill":
            
            $number = "";
            $number_count_id_year_faile ="";
            $count_id_year = count_id_year();
            $count_id_year_faile=count_id_year_faile();
            foreach($count_id_year as $data){
                extract($data);
                

                if($number == ""){
                    $number = $total_amount;
                }
                else{
                    $number = $number.",".$total_amount;
                }               
            }
            foreach($count_id_year_faile as $data){
                extract($data);
                

                if($number == ""){
                    $number_count_id_year_faile = $total_amount_number_count_id_year_faile;
                }
                else{
                    $number_count_id_year_faile = $number_count_id_year_faile.",".$total_amount_number_count_id_year_faile;
                }               
            }
            include "admin.php";
            include "temp.php";
            break;

        case "chart_count_money_folow_year":
            $number = "";
            $count_money_folow_year = count_money_folow_year();
            foreach($count_money_folow_year as $data){
                extract($data);
                if($number == ""){
                    $number = $total_amount;
                }
                else{
                    $number = $number.",".$total_amount;
                }               
            }
            $result_count_money_folow_year = "";
            $result_count_money_folow_year = implode("', '", explode(",", $number));
            // echo $result_count_money_folow_year;
            // echo $result_count_money_folow_year;
            include "admin.php";
            include "chart_count_money_folow_year.php";
            break;


            case "count_money_folow_4mouth":
                $number = "";
                $count_money_folow_4mouth = count_money_folow_4mouth();
                foreach($count_money_folow_4mouth as $data){
                    extract($data);
                    if($number == ""){
                        $number = $total_amount;
                    }
                    else{
                        $number = $number.",".$total_amount;
                    }               
                }
                $result_count_money_folow_4mouth = "";
                $result_count_money_folow_4mouth = implode("', '", explode(",", $number));
                // echo $result_count_money_folow_year;
                include "admin.php";
                include "count_money_folow_4mouth.php";
                break;
            
        case 'bill_confirm_order_status':
            if(isset($_POST['order_status']) &&$_POST['order_status'] != "#" &&isset($_GET['id_bill'])){
                // echo $_POST['order_status'];
                $id = $_GET['id_bill'];
                // echo $id;
                if($_POST['order_status'] == "1"){
                    $order_status = "Đã xác nhận";
                    // echo "1";    
                }
                elseif($_POST['order_status'] == "2"){
                    $order_status = "Đang vận chuyển";
                    // echo "2";
                }
                elseif($_POST['order_status'] == "3"){
                    $order_status = "Đã gửi hàng thành công";
                    // echo "3";
                }
                elseif($_POST['order_status'] == "4"){
                    $order_status = "Gửi hàng thất bại";
                    // echo "4";
                    // echo $id;
                }
                else{

                }
                
            }
            include "bill.php";
            break;
        case 'account':
            // echo "logout";
            // echo $_SESSION['iduser'];
            // echo $_SESSION['user'];
            // echo $_SESSION['role'];
            // echo $_SESSION['role'];
            include "account.php";
            break;
        case 'product':
            include "product.php";
            break;

        case 'reply':
            $id = $_GET['id'];
            $reply = $_POST['reply'];
            insert_reply_comment($id,$reply);
            include "comment.php";
            break;

        case 'cart':
            $select_all_to_admin = select_all_to_admin();
            // echo $select_all_to_admin;
            include "cart.php";
            break;


        case 'catalogy':
            
            include "catalogy.php";
            break;

        case 'add_catalogy':
            
            $name = $_POST['name'];
            $description = $_POST['description'];
            if ($_POST['name']!=null&&$_POST['description']!=null) {
                insert_catalogy($name,$description);
                
            }
            else{
                $alert_for_catalogy = "Bạn đã nhập thiếu thông tin, vui lòng kiểm tra lại";
                if($_POST['name']==null){
                    $alert_for_catalogy = $alert_for_catalogy." | Tên danh mục |";
                }
                if($_POST['description']==null){
                    $alert_for_catalogy = $alert_for_catalogy." | Tiêu đề |";
                }
            }

            include "catalogy.php";
            break;  


        case 'add_book':
            if($_POST['book_name'] !=null&&$_POST['typeofbook'] !=null&&$_POST['description_book'] !=null
            &&$_POST['author'] !=null&&$_POST['publisher'] !=null&&$_POST['price'] !=null
            &&$_POST['pages'] !=null&&$_POST['year'] !=null&&$_POST['size'] !=null
            &&$_POST['weight'] !=null&&$_POST['quatity'] !=null&&$_POST['introduction'] !=null
            &&$_POST['rating'] !=null){

                $book_name = $_POST['book_name'];
                $typeofbook = $_POST['typeofbook'];
                $description = $_POST['description_book'];
                $author = $_POST['author'];
                $publisher = $_POST['publisher'];
                $price = $_POST['price'];
                $pages = $_POST['pages'];
                $year = $_POST['year'];
                $size = $_POST['size'];
                $weight = $_POST['weight'];
                $quatity = $_POST['quatity'];
                $introduction = $_POST['introduction'];
                $rating = $_POST['rating'];

            $images= $_FILES['images']['name'];
            $tmp_name=$_FILES['images']['tmp_name'];
            move_uploaded_file($tmp_name,'../images1/product/'.$images);

            insert_book($book_name,$typeofbook,$description,$author,$publisher,$price,$images,$pages,$year,$size,$weight,$quatity,$introduction,$rating);
 
            }
            else{
                $alert_for_book = "Bạn đã nhập thiếu thông tin, vui lòng kiểm tra lại";
                if($_POST['book_name']==null){
                    $alert_for_book = $alert_for_book." | Tên sách |";
                }
                if($_POST['typeofbook']=="#"){
                    $alert_for_book = $alert_for_book." | Loại sách |";
                }
                if($_POST['description_book']==null){
                    $alert_for_book = $alert_for_book." | Tiêu đề ngắn |";
                }
                if($_POST['author']==null){
                    $alert_for_book = $alert_for_book." |  Tác giả |";
                }
                if($_POST['publisher']==null){
                    $alert_for_book = $alert_for_book." | Nhà sản xuất |";
                }
                if($_POST['price']==null){
                    $alert_for_book = $alert_for_book." | Giá |";
                }
                if($_POST['pages']==null){
                    $alert_for_book = $alert_for_book." | Số trang |";
                }
                if($_POST['year']==null){
                    $alert_for_book = $alert_for_book." | Năm phát hành |";
                }
                if($_POST['size']==null){
                    $alert_for_book = $alert_for_book." | Kích cỡ |";
                }
                if($_POST['weight']==null){
                    $alert_for_book = $alert_for_book." | Trọng lượng |";
                }
                if($_POST['quatity']==null){
                    $alert_for_book = $alert_for_book." | Số hàng tồn kho |";
                }
                if($_POST['introduction']==null){
                    $alert_for_book = $alert_for_book." | Giới thiệu dài |";
                }
                if($_POST['rating']=="#"){
                    $alert_for_book = $alert_for_book." | Đánh giá |";
                }


            }
                       include "product.php";
            break;  

            case "update_book":
                if(isset($_POST['book_name'])){                           
                $book_name = $_POST['book_name'];
                $typeofbook = $_POST['typeofbook'];
                $description = $_POST['description_book'];
                $author = $_POST['author'];
                $publisher = $_POST['publisher'];
                $price = $_POST['price'];
                $pages = $_POST['pages'];
                $year = $_POST['year'];
                $size = $_POST['size'];
                $weight = $_POST['weight'];
                $quantity = $_POST['quantity'];
                $introduction = $_POST['introduction'];
                $rating = $_POST['rating'];
                $id = $_GET['id'];
    
                $images= $_FILES['images']['name'];
                $tmp_name=$_FILES['images']['tmp_name'];
                move_uploaded_file($tmp_name,'../images1/product/'.$images);

                // echo "1.name:  ".$book_name ;
                // echo '<br>';
                // echo "2.Loại:  ".$typeofbook ;
                // echo '<br>';
                // echo "3.Tiêu đề ".$description ;
                // echo '<br>';
                // echo "4.Tác giả:  ".$author ;
                // echo '<br>';
                // echo "5.NXB:  ".$publisher ;
                // echo '<br>';
                // echo "6.GIá: ".$price ;
                // echo '<br>';
                // echo "7.Trang: ".$pages ;
                // echo '<br>';
                // echo "8.Năm: ".$year ;
                // echo '<br>';
                // echo "9.Size: ".$size ;
                // echo '<br>';
                // echo "10.Trọng Lượng: ".$weight ;
                // echo '<br>';
                // echo "11.Số Lượng: ".$quantity ;
                // echo '<br>';
                // echo "12.Giới thiệu: ".$introduction ;
                // echo '<br>';
                // echo "13.Rating: ".$rating;
                // echo '<br>';
                // echo $images;        
                }
                if (isset($images) && $images != NULL) {
                    // echo "1";
                    update_book_admin_withimg($id,$book_name,$typeofbook,$description,$author,$publisher,$price,$images,$pages,$year,$size,$weight,$quantity,$introduction,$rating);
                }
                else{
                    // echo "2";
                    update_book_admin($id,$book_name,$typeofbook,$description,$author,$publisher,$price,$pages,$year,$size,$weight,$quantity,$introduction,$rating);
                }
                // update_account_admin($id,$fullname,$username,$password,$email,$phone,$address,$birthday,$gender,$position);
                include "product.php";
                // header("Location: ./index.php?act=account");
                
                break;  

        case 'delete_catalogy':
            $id = $_GET['id'];
            delete_cart_folow_book_folow_catalogy($id);
            delete_comment_folow_book_folow_catalogy($id);
            delete_book_follow_catalogy($id);
            delete_catalogy($id);
            include "catalogy.php";
            break;  


        case 'delete_book':
            $id = $_GET['id'];
            
            delete_cart_folow_book($id);
            delete_comment_folow_book($id);
            delete_book($id);
            include "product.php";
            break;


        case 'update_catalogy':
            if($_GET['id']!=""&&$_POST['name']!=""){
                $id = $_GET['id'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                update_catalogy($id,$name,$description);
                
                if($_POST['description']==null){
                    $alert_for_catalogy = "Bạn đã nhập thiếu thông tin, vui lòng kiểm tra lại";
                    $alert_for_catalogy = $alert_for_catalogy." | Tên danh mục |";
                }
                if($_POST['name']==null){
                    $alert_for_catalogy = $alert_for_catalogy." | Tiêu đề |";
                }
            }
            else{
                $alert_for_catalogy = "Bạn đã nhập thiếu thông tin, vui lòng kiểm tra lại";
                if($_POST['description']==null){
                    $alert_for_catalogy = $alert_for_catalogy." | Tên danh mục |";
                }
                if($_POST['name']==null){
                    $alert_for_catalogy = $alert_for_catalogy." | Tiêu đề |";
                }
            }

            include "catalogy.php";
            break; 

        case 'comment':
            include "comment.php";
            break;  
        case "logout":
            // include "../user/login_register.php";
            if(isset($_SESSION['iduser'])){
                unset($_SESSION['iduser']);
                unset($_SESSION['user']);
                unset($_SESSION['role']);
                // echo $_SESSION['role'];
                // header('Location: ../user');
                
            }
            header('Location: ../user/index.php?act=Login_register');    
            break;   
        case "blockuser":
            if(isset($_GET['blockid'])){
                $iduser = $_GET['blockid'];
            block_account($iduser);
            }
            include "account.php";
            break;  
            // include "account.php";
        case "unblockuser":
            if(isset($_GET['unblockid'])){
            $iduser = $_GET['unblockid'];
            unblock_account($iduser);
        }
        include "account.php";
            break;  
            // include "account.php";
        case "insert_account":
            if ($_POST['fullname']!=null&&$_POST['username']!=null&&$_POST['password']!=null&&$_POST['email']!=null&&$_POST['phone']!=null&&$_POST['address']
                    !=null&&$_POST['birthday']!=null&&$_POST['gender']!=null&&$_POST['position']!=null
            ){
                # code...
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $birthday = $_POST['birthday'];
            $gender = $_POST['gender'];
            $position = $_POST['position'];

            $hinh_anh= $_FILES['avatar']['name'];
            $tmp_name=$_FILES['avatar']['tmp_name'];
            move_uploaded_file($tmp_name,'../images/img/'.$hinh_anh);

            // echo $fullname." - " ;
            // echo $username." - " ;
            // echo $password." - " ;
            // echo $email." - " ;
            // echo $phone." - " ;
            // echo $address." - " ;
            // echo $birthday." - " ;
            // echo $gender." - " ;
            // echo $position ;
            insert_account_admin($hinh_anh,$fullname,$username,$password,$email,$phone,$address,$birthday,$gender,$position);
            // header("Location: ./index.php?act=account");
            include "account.php";
            }
            else{
                $alert_for_account = "Bạn đã nhập thiếu thông tin, vui lòng kiểm tra lại";
                if($_POST['fullname']==null){
                    $alert_for_account = $alert_for_account." | Tên đầy đủ |";
                }
                if($_POST['username']==null){
                    $alert_for_account = $alert_for_account." | Tên đăng nhập |";
                }
                if($_POST['password']==null){
                    $alert_for_account = $alert_for_account." | Tên mật khẩu |";
                }
                if($_POST['email']==null){
                    $alert_for_account = $alert_for_account." | Tên email |";
                }
                if($_POST['phone']==null){
                    $alert_for_account = $alert_for_account." | Số điện thoại |";
                }
                if($_POST['address']==null){
                    $alert_for_account = $alert_for_account." | Địa chỉ |";
                }
                if($_POST['birthday']==null){
                    $alert_for_account = $alert_for_account." | Sinh nhật |";
                }
                if($_POST['gender']="#"){
                    $alert_for_account = $alert_for_account." | Giới tính |";
                }
                if($_POST['position']=="#"){
                    $alert_for_account = $alert_for_account." | Vị trí công việc |";
                }
                
                include "account.php";
            }
            break;  

            case "update_account":
                if (isset($_POST['fullname'])&& isset($_GET['id'])) {
                $fullname = $_POST['fullname'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $birthday = $_POST['birthday'];
                $gender = $_POST['gender'];
                $position = $_POST['position'];

                $hinh_anh= $_FILES['avatar']['name'];
                $tmp_name=$_FILES['avatar']['tmp_name'];
                move_uploaded_file($tmp_name,'../images/img/'.$hinh_anh);

                if($position == "Quản trị viên"){
                    $position = "3";
                }
                else{
                    $position = "2";
                }
                $id = $_GET['id'];
              
                // echo '1.Name:'.$fullname." - " ;
                // echo '2.username:'.$username." - " ;
                // echo '3.password:'.$password." - " ;
                // echo '4.email:'.$email." - " ;
                // echo '5.phone:'.$phone." - " ;
                // echo '6.address:'.$address." - " ;
                // echo '7.birthday:'.$birthday." - " ;
                // echo '8.gender:'.$gender." - " ;
                // echo '9.position:'.$position." - " ;
                // echo '10.id:'.$id;
                // echo '11.hinh_anh:'.$hinh_anh;
                if (isset($hinh_anh) && $hinh_anh != NULL) {
                    update_account_admin_withimg($id,$fullname,$username,$password,$email,$phone,$address,$birthday,$gender,$hinh_anh,$position);

                }
                else{
                    update_account_admin($id,$fullname,$username,$password,$email,$phone,$address,$birthday,$gender,$position);
                }
                // update_account_admin($id,$fullname,$username,$password,$email,$phone,$address,$birthday,$gender,$position);
                include "account.php";
                // header("Location: ./index.php?act=account");
                }
                break;  


                                        

            case "delete_account":
                if (isset($_GET['id'])) {
                    delete_account( $_GET['id']);
                }
                
                include "account.php";
                break;  
    }
}
else{
    
    include "admin.php";
}



}
else{
    echo "Bạn không có quyền truy cập";
}

?>
