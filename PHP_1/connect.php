<?php
$hostname="localhost";
$dbname="user_341";
$username="root";
$password="";
//dựng đối tượng PDO
try{
    $conect=new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
    $conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo"kết nối thành công";
}
catch (PDOException $e){
    $e->getMessage();

}