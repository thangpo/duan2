<?php
function sanpham_get_all(){
    $sql="select * from book order by id desc limit 0,9";
    return pdo_query($sql);
}

function sanpham_get_all_admin(){
    $sql="select * from book";
    return pdo_query($sql);
}

function sanpham_get_folow_keyword_and_catalogy($catalogy,$find_value){
    $sql="SELECT *
    FROM book
    WHERE book.book_name LIKE '%$find_value%'AND book.type_book = $catalogy";
    return pdo_query($sql);
}

function sanpham_get_folow_keyword($find_value){
    $sql="SELECT *
    FROM book
    WHERE book.book_name LIKE '%$find_value%'";
    return pdo_query($sql);
}

function sanpham_get_folow_catalogy($catalogy){
    $sql="SELECT *
    FROM book
    WHERE book.type_book = $catalogy";
    return pdo_query($sql);
}

function sanpham_get_all_folow_id($id){
    $sql="select * from book WHERE book.type_book = $id";
    return pdo_query($sql);
}

function checkForAddToCart(){
    $sql="SELECT cart.id,book_id,user_id FROM book INNER JOIN cart ON book.id = cart.book_id";
    return pdo_query($sql);
}

function check_for_unplus_quantity($bookname){
    $sql="SELECT quantity FROM `book` WHERE `book_name` = '$bookname'";
    return pdo_query($sql);
}

function delete_book($id){
    $sql="DELETE FROM `book` WHERE `book`.`id` = $id";
    return pdo_query($sql);
}

function loadOne_sanpham($id){
    $sql="SELECT `id` as id_of_book, `book_name`, `type_book`, `description_book`, `author`, `publisher`, `price`, `image`, `pages`, `year`, `size`, `weight`, `quantity`, `introduction`, `rating` FROM `book` WHERE id = $id";
    $sp=pdo_query_one($sql);    
    return $sp;
}

function insert_book($book_name,$typeofbook,$description,$author,$publisher,$price,$images,$pages,$year,$size,$weight,$quatity,$introduction,$rating){
    $sql="INSERT INTO `book` ( `book_name`, `type_book`, `description_book`, `author`, `publisher`, `price`, `image`, `pages`, `year`, `size`, `weight`, `quantity`, `introduction`, `rating`) 
    VALUES ('$book_name', $typeofbook, '$description', '$author', '$publisher', '$price', '$images', '$pages', '$year', '$size', '$weight', '$quatity', '$introduction', '$rating');";
    return pdo_query($sql);
}

function update_book_admin($id,$book_name,$typeofbook,$description,$author,$publisher,$price,$pages,$year,$size,$weight,$quantity,$introduction,$rating){
    $sql="UPDATE `book` SET `book_name`='$book_name',`type_book`='$typeofbook',`description_book`='$description',`author`='$author',`publisher`='$publisher',`price`='$price',`pages`='$pages',`year`='$year',`size`='$size',`weight`='$weight',`quantity`='$quantity',`introduction`='$introduction',`rating`='$rating' WHERE `id`= $id;";
    pdo_execute($sql);
}

function update_book_admin_withimg($id,$book_name,$typeofbook,$description,$author,$publisher,$price,$images,$pages,$year,$size,$weight,$quantity,$introduction,$rating){
    $sql="UPDATE `book` SET `book_name`='$book_name',`type_book`='$typeofbook',`description_book`='$description',`author`='$author',`publisher`='$publisher',`price`='$price',`image`='$images',`pages`='$pages',`year`='$year',`size`='$size',`weight`='$weight',`quantity`='$quantity',`introduction`='$introduction',`rating`='$rating' WHERE `id`=  $id;";
    pdo_execute($sql);
}

function redirectToProduct($id) {
    header("Location: index.php?act=Product&id=<?php echo $id ?>");
  }
  
?>


<!-- INSERT INTO `book` (`id`, `book_name`, `type_book`, `description`, `author`, `publisher`, `price`, `image`, `pages`, `year`, `size`, `weight`, `quantity`, `introduction`, `rating`) VALUES (NULL, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '5'); -->

<!-- UPDATE `book` SET `book_name`='[value-2]',`type_book`='[value-3]',`description_book`='[value-4]',`author`='[value-5]',`publisher`='[value-6]',`price`='[value-7]',`image`='[value-8]',`pages`='[value-9]',`year`='[value-10]',`size`='[value-11]',`weight`='[value-12]',`quantity`='[value-13]',`introduction`='[value-14]',`rating`='[value-15]' WHERE `id`='[value-1]' -->