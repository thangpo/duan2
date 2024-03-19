<style>
    .nav-link {
  display: flex;
  flex-wrap: wrap;
  margin: 0;
  padding: 0;
}

.nav-link li {
  list-style: none;
  display: inline-block;
  margin: 0 10px;
}

.nav-link li a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: #333;
}
.nav-link {
  color: #333;
  font-size: 16px;
  font-weight: 600;
  background-color: #fff;
  border-radius: 5px;
  padding: 10px 20px;
}

.nav-link li:hover {
  color: #000;
  background-color: #ddd;
}

.nav-link i {
  font-size: 20px;
}

</style>
<div class="menu-items">
            <ul class="nav-link">
                <li>
                    <a href="./index.php?act=delete_insert_bill">
                    <!-- <i class="uil uil-dashboard"></i> -->
                    <span class="link-name">Thống kê sô lượng đơn hàng thành công và thất bại</span>
                    </a>
                </li>
                <li>
                    <a href="./index.php?act=chart_book">
                    <!-- <i class="uil uil-folder"></i> -->
                    <span class="link-name">Thống kê số lượng sách theo danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="./index.php?act=chart_count_money_folow_year">
                    <!-- <i class="uil uil-folder"></i> -->
                    <span class="link-name">Doanh thu theo năm</span>
                    </a>
                </li>
                <li>
                    <a href="./index.php?act=count_money_folow_4mouth">
                    <!-- <i class="uil uil-folder"></i> -->
                    <span class="link-name">Doanh thu theo quý</span>
                    </a>
                </li>
            </ul>


        </div>
        <script src="./admin-js/admin.js"></script>
</body>
</html>