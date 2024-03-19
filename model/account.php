<?php

function getuserinfo($user,$pass){
    $sql="select * from account where username='".$user."' AND password='".$pass."'";
    $user=pdo_query_one($sql);
    return $user;
}

function getadmininfo(){
    $sql="SELECT * FROM `account` WHERE `role` =2 OR`role` =3";
    return pdo_query($sql); 
}

function alluserinfo(){
    $sql="SELECT * FROM account
    WHERE `role` = 0 OR role = 1
    ";
    return pdo_query($sql); 
}


function count_account(){
    $sql="SELECT COUNT(*) AS all_account FROM `account` ";
    return pdo_query($sql); 
}

function getadmininfo1($id,$role){
    $sql="select * from account where  id='".$id."' AND role='".$role."'";
    $user=pdo_query_one($sql);
    return $user;
}

function get_all_user_to_check_sign_in(){
    $sql="SELECT account.username FROM `account`";
    $user=pdo_query($sql);
    return $user;
}

function getuserinfo1($id){
    $sql="SELECT * FROM `account` WHERE `id`= $id ";
    $userinfo1=pdo_query_one($sql);
    return $userinfo1;
}

function insert_taikhoan($user,$pass,$email){
    $sql="INSERT INTO `account`( `username`, `password`, `email`, `role`) VALUES ('$user','$pass','$email',1)";
    pdo_execute($sql);
}

function block_account($iduser){
    $sql="   UPDATE `account` SET `role`= 0 WHERE `id`=$iduser";
    pdo_execute($sql);
}
function unblock_account($iduser){
    $sql="   UPDATE `account` SET `role`= 1 WHERE `id`=$iduser";
    pdo_execute($sql);
}

function delete_account($iduser){
    $sql="DELETE FROM `account` WHERE `account`.`id` = $iduser";
    pdo_execute($sql);
}

function insert_account_admin($hinh_anh,$fullname,$username,$password,$email,$phone,$address,$birthday,$gender,$position){
    $sql="INSERT INTO `account`( `full_name`, `username`, `password`, `email`, `phone`, `address`, `birthday`, `gender`, `avatar`, `role`) 
    VALUES ('$fullname','$username','$password','$email','$phone','$address','$birthday','$gender','$hinh_anh','$position')";
    pdo_execute($sql);
}

function update_account_admin($id,$fullname,$username,$password,$email,$phone,$address,$birthday,$gender,$position){
    $sql="UPDATE `account` SET `full_name`='$fullname',`username`='$username',`password`='$password',`email`='$email',`phone`='$phone',`address`='$address',`birthday`='$birthday',`gender`='$gender', `role`='$position' WHERE `id`= $id;";
    pdo_execute($sql);
}

function update_account_admin_withimg($id,$fullname,$username,$password,$email,$phone,$address,$birthday,$gender,$hinh_anh,$position){
    $sql="UPDATE `account` SET `full_name`='$fullname',`username`='$username',`password`='$password',`email`='$email',`phone`='$phone',`address`='$address',`birthday`='$birthday',`gender`='$gender',`avatar`='$hinh_anh', `role`='$position' WHERE `id`= $id;";
    pdo_execute($sql);
}

?>