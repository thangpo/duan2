

    <!-- echo $id;
    echo $name;
    echo $description;

} -->
<?php
$catalogy = allcatalogy();
?>

<!-- ?>  -->
<div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Quản Lý Danh Mục</span>
                </div>

                <table class="table table-bordered">
                    <thead>
                      <tr> 
                        <th scope="col">ID</th>
                        <th scope="col">Tên Danh Mục</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Thao tác</th>
                      </tr>
                    </thead>
                    <?php  
                    
                    foreach($catalogy as $data){
                        extract($data);
                        $count_all_books_of_catalogy = count_all_books_of_catalogy($id);
                        // extract($count_all_books_of_catalogy);
                        if(isset($count_all_books_of_catalogy['number_of_books'])){
                            $number_of_book =  $count_all_books_of_catalogy['number_of_books'];
                        }
                        else{
                            $number_of_book = "0";
                        }
                        
                        // foreach($count_all_books_of_catalogy as $data){}
                        echo '
                            <tbody>
                                <tr>
                                    <form action="./index.php?act=update_catalogy&id='.$id.'"" method="post" enctype="multipart/form-data">
                                        <th scope="row">'.$id.'</th>
                                        <td><input type="text" name="name" id="" placeholder=" '.$name.'" style="border: none;" value="'.$name.'"></td>
                                        <td><input type="text" name="description" id="" placeholder=" '.$description.'" style="border: none;" value="'.$description.'"></td>
                                        <td>
                                        ';?>
                                        
                                        
                                        <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" onclick="return confirm('Bạn chắc chắn muốn sửa không?')">Sửa</button>
                                        <a href="./index.php?act=delete_catalogy&id=<?php echo $id  ?>" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" onclick="return confirm('Bạn có muốn xóa danh mục {<?php echo $name?>} không? (hiện có <?php echo $number_of_book?> sách trong danh mục này)')">Xóa</a>
                                        <?php
                                        echo'
                                        </td>
                                    </form>
                                </tr>
                            </tbody>
                            ';
                    }
                    ?>

                    <tfoot> 
                        <form action="./index.php?act=add_catalogy" method="post">
                            <th scope="row"><?php echo $id+1 ?></th>    
                            <td><input type="text" name="name" id="" placeholder=" Tên danh mục"></td>
                            <td><input type="text" name="description" id="" placeholder=" Mô tả"></td>
                            <td><button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" >Thêm</button></td>
                        </form>
                    </tfoot>
                  </table>
            </div>
            </div>
            <p style="color: red; text-align: center;" class="mb-0 mt-4 text-center"><?php if(isset($alert_for_catalogy    )){echo $alert_for_catalogy ;} ?></p>
        </div>
    </section>
    
    <script src="./admin-js/admin.js"></script>
</body>
</html> 