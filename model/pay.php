<?php

function load_sanpham_cart_of_one(){
    $sql="SELECT * FROM `cart` WHERE `user_id` = 4";
    return pdo_query($sql);
}


function insert_bill($user,$allBooks,$book_quantity,$book_price,$address,$payment_method,$phone,$total){
    $sql="INSERT INTO `bill`(`id`, `customer_id`, `books`, `book_quantity`, `book_price`,  `order_status`, `shipping_address`, `payment_method`, `phone`,`total`) 
    VALUES ('','$user','$allBooks','$book_quantity','$book_price','Chờ xác nhận','$address','$payment_method','$phone','$total')";
    return pdo_query($sql);
}
?>