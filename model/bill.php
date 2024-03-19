<?php

function bill_get_all($user){
    $sql="SELECT * FROM `bill` WHERE `customer_id` = $user ORDER BY `id` DESC";
    return pdo_query($sql);
}

function delete_bill_after_admin_confirm($arr_books,$arr_book_quantity){
    $sql="UPDATE `book` SET `quantity`=`quantity` - '$arr_books'  WHERE `book_name`='$arr_book_quantity';";
    return pdo_query($sql);
}

function delete_bill_from_client($id){
    $sql="DELETE FROM `bill` WHERE `id` = $id";
    return pdo_query($sql);
}

function bill_get_all_admin(){
    $sql="SELECT * FROM `bill` ORDER BY `id` DESC ";
    return pdo_query($sql);
}


function bill_get_one($id){
    $sql="SELECT * FROM `bill` WHERE `id` = $id ";
    return pdo_query_one($sql);
}


function update_bill_from_admin($order_status,$id){
    $sql="UPDATE `bill` SET `order_status`='$order_status' WHERE `id`='$id'";
    return pdo_query($sql);
}

function view_cart_of_one_person($custom_id){
    $sql="SELECT `id`,  `books`, `book_quantity`, `book_price`, `order_date`, `order_status`, `shipping_address`, `payment_method`, `phone` FROM `bill` WHERE `customer_id` = $custom_id ORDER BY id DESC";
    return pdo_query($sql);
}

function insert_address_of_bill($id,$address){
    $sql="UPDATE `bill` SET `shipping_address`='$address' WHERE `id`= $id";
    pdo_execute($sql);
}
?>