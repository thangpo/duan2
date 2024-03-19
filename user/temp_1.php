<?php
$records = sanpham_get_all();
// 1. Lấy tổng số bản ghi
$total_records = count($records);

// 2. Xác định số bản ghi trên mỗi trang
$records_per_page = 2;

// 3. Tính toán số trang
$total_pages = ceil($total_records / $records_per_page);

// 4. Lấy trang hiện tại
$current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

// 5. Kiểm tra xem trang hiện tại có hợp lệ không
if ($current_page < 1 || $current_page > $total_pages) {
  $current_page = 1;
}

// 6. Lấy dữ liệu cho trang hiện tại
$start = ($current_page - 1) * $records_per_page;
$end = $start + $records_per_page;
$records = array_slice($records, $start, $end);

// 7. Hiển thị dữ liệu cho trang hiện tại
foreach ($records as $record) {
  extract($record);
    echo $id;
    echo $book_name;
}

// 8. Hiển thị các liên kết phân trang
?>

<ul class="pagination">
  <li class="page-item"><a class="page-link" href="?page=1">Trang đầu</a></li>
  <li class="page-item <?php if ($current_page == 1) { echo 'disabled'; } ?>"><a class="page-link" href="?page=<?php echo $current_page - 1; ?>">Trang trước</a></li>
  <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
    <li class="page-item <?php if ($current_page == $i) { echo 'active'; } ?>"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
  <?php } ?>
  <li class="page-item <?php if ($current_page == $total_pages) { echo 'disabled'; } ?>"><a class="page-link" href="?page=<?php echo $current_page + 1; ?>">Trang sau</a></li>
  <li class="page-item"><a class="page-link" href="?page=<?php echo $total_pages; ?>">Trang cuối</a></li>
</ul>
