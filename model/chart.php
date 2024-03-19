<?php
function count_all_books_of_catalogy_for_chart(){
    $sql="SELECT type.name,COUNT(*) AS number_of_books FROM `book` INNER JOIN `type` ON book.type_book = type.id GROUP BY type.name";
    return pdo_query($sql);
}

function count_money_folow_year(){
    $sql="SELECT EXTRACT(MONTH FROM order_date) AS month, SUM(total) AS total_amount
    FROM bill
    WHERE`order_status` = 'Đã gửi hàng thành công'
    GROUP BY EXTRACT(MONTH FROM order_date);";
    return pdo_query($sql);
}

function count_money_folow_4mouth(){
    $sql="SELECT
    QUARTER(order_date) AS quarter,
    SUM(total) AS total_amount
  FROM bill
  WHERE`order_status` = 'Đã gửi hàng thành công'
  GROUP BY QUARTER(order_date)";
    return pdo_query($sql);
}

function count_id_year(){
    $sql="SELECT EXTRACT(MONTH FROM order_date) AS month, COUNT(`id`) AS total_amount
    FROM bill
    WHERE`order_status` = 'Đã gửi hàng thành công'
    GROUP BY EXTRACT(MONTH FROM order_date);";
    return pdo_query($sql);
}

function count_id_year_faile(){
    $sql="SELECT EXTRACT(MONTH FROM order_date) AS month, COUNT(`id`) AS total_amount_number_count_id_year_faile
    FROM bill
    WHERE`order_status` = 'Gửi hàng thất bại'
    GROUP BY EXTRACT(MONTH FROM order_date);";
    return pdo_query($sql);
}
?>
