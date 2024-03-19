<?php
function allcatalogy(){
    $sql="SELECT * FROM `type`";
    return pdo_query($sql); 
}


function insert_catalogy($name,$description){
    $sql="INSERT INTO `type`( `name`, `description`) VALUES ('$name','$description')";
    pdo_execute($sql);
}

function count_all_books_of_catalogy($id){
    $sql="SELECT type.name,COUNT(*) AS number_of_books FROM `book` INNER JOIN `type` ON book.type_book = type.id WHERE type.id = $id GROUP BY type.name";
    return pdo_query_one($sql);
}

function delete_catalogy($id){
    $sql="DELETE FROM `type` WHERE `id` = $id";
    pdo_execute($sql);
}

function update_catalogy($id,$name,$description){
    $sql="UPDATE `type` SET `name`='$name',`description`='$description' WHERE  `id` = $id";
    pdo_execute($sql);
}

// function update_catalogy($id,$name,$description){
//     $sql="UPDATE `type` SET `name`='$name',`description`='$description' WHERE  `id` = $id";
//     pdo_execute($sql);
// }

function delete_book_follow_catalogy($id){
    $sql="DELETE FROM `book` WHERE `type_book` = $id";
    return pdo_query($sql);
}
?>