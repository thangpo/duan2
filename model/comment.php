<?php

function delete_comment($id){
    $sql="DELETE FROM `comment` WHERE `id` = $id";
    return pdo_query($sql);
}

function total_comments(){
    $sql="SELECT COUNT(*) AS total_comments FROM comment;";
    return pdo_query($sql);
}

function select_all_comments(){
    $sql="SELECT comment.id, book.book_name,account.full_name,content,comment.rating,comment.created_at,comment.updated_at,comment.reply FROM `comment` 
    INNER JOIN book ON book.id = comment.book_id
    INNER JOIN account ON comment.account_id = account.id";
    return pdo_query($sql);
}


function select_one_book_comments($id){
    $sql="SELECT comment.id as comment_id,account.id as user_id,account.avatar,account.full_name,comment.content,comment.created_at,comment.rating as book_rate, comment.reply FROM `comment`
    INNER JOIN account ON account.id = comment.account_id
    INNER JOIN book on 	book.id = comment.book_id
    WHERE book_id = $id ORDER BY comment_id DESC";
    return pdo_query($sql);
}

function insert_reply_comment($id,$reply){
    $sql="UPDATE `comment` SET `reply`='$reply' WHERE  `id`=$id";
    pdo_execute($sql);
}

function insert_comment($account_id,$book_id,$content,$rating){
    $sql="INSERT INTO `comment`( `account_id`, `book_id`, `content`, `rating` ) VALUES ('$account_id','$book_id','$content','$rating')";
    pdo_execute($sql);
}

function get_rating_stars($book_rate) {
    $stars = '';
    for ($i=0; $i < $book_rate; $i++) {
        $stars .= '⭐';
    }
    return $stars;
}

function update_comment($id,$content,$rating){
    $sql="UPDATE `comment` SET `content`='$content',`rating`='$rating' WHERE `id`='$id' ";
    pdo_execute($sql);
}




function delete_comment_folow_book($id){
    $sql="DELETE FROM `comment` WHERE `book_id` =$id";
    pdo_execute($sql);
}

function delete_comment_folow_book_folow_catalogy($id){
    $sql="DELETE FROM `comment`
    WHERE book_id IN (
      SELECT id
      FROM book
      WHERE type_book = $id
    );";
    pdo_execute($sql);
}

?>