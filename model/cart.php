<?php

function load_sanpham_cart($user){
    $sql="select cart.id ,image,book_name,book_quantity,price,name,book.author from cart 
    INNER JOIN account ON cart.user_id = account.id
    INNER JOIN book on cart.book_id = book.id
    INNER JOIN type ON type.id = book.type_book
    where account.id=$user";
    return pdo_query($sql);
}

function loadall_cart(){
    $sql="
    SELECT
    account.id,
      account.avatar,
      MAX(account.full_name) AS full_name
    FROM
      cart
    INNER JOIN account ON cart.user_id = account.id
    
    GROUP BY
      account.full_name
      ";
    return pdo_query($sql);
}

function countCart($idcount){
    $sql = "SELECT COUNT(*) AS count_rows FROM cart INNER JOIN account ON cart.user_id = account.id WHERE account.id= $idcount";
    return pdo_query_one($sql);
}

function updateCart_plus($id){
    $sql="UPDATE `cart` SET `book_quantity` = `book_quantity` + 1 WHERE `cart`.`id` = $id";
    pdo_execute($sql);
}

function updateCart_unplus($id){
    $sql="UPDATE `cart` SET `book_quantity` = `book_quantity` - 1 WHERE `cart`.`id` = $id";
    pdo_execute($sql);
}

function deleteCart_unplus($id){
    $sql="DELETE FROM `cart` WHERE `id`= $id";
    pdo_execute($sql);
}

function deleteCart_afterbuy($user){
    $sql="DELETE FROM `cart` WHERE user_id = $user";
    pdo_execute($sql);
}


function select_all_to_admin(){
    $sql="SELECT account.avatar, account.full_name,book.book_name,cart.book_quantity FROM `cart`
    INNER JOIN account ON account.id = cart.user_id
    INNER JOIN book ON book.id = cart.book_id";
    return pdo_query($sql);
}

function insertProductToCart($book_id,$user_id,$quantity_of_book){
    $sql="INSERT INTO `cart`(`id`, `book_id`, `user_id`, `book_quantity`) VALUES ('','$book_id','$user_id','$quantity_of_book')";
    pdo_execute($sql);
}

function check_for_add_to_cart(){
    $sql="SELECT `id` as cart_id,`book_id`,`user_id` FROM `cart`";
    return pdo_query($sql);
}


function delete_cart_folow_book($id){
    $sql="DELETE FROM `cart` WHERE `book_id` = $id";
    pdo_execute($sql);
}


function delete_cart_folow_book_folow_catalogy($id){
    $sql="DELETE FROM `cart`
    WHERE book_id IN (
      SELECT id
      FROM book
      WHERE type_book = $id
    );";
    pdo_execute($sql);
}   

?>