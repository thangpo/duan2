
<?php
$all_product = sanpham_get_all_admin();


?>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Quản Lý Sản Phẩm</span>
                </div>

                <table class="table table-bordered">
                    <thead>
                      <tr> 
                        <th scope="col">ID</th>
                        <th scope="col">Ảnh sản phẩm</th>
                        <th scope="col">Tên sách</th>
                        <th scope="col">Loại sách</th>
                        <th scope="col">Miêu tả ngắn</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Nhà sản xuất</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số trang</th>
                        <th scope="col">Năm sản xuấ</th>
                        <th scope="col">Kích cỡ</th>
                        <th scope="col">Cân nặng</th>
                        <th scope="col">Số lượng còn lại</th>
                        <th scope="col">Giới thiệu dài</th>
                        <th scope="col">Đánh giá</th>
                        <th scope="col">Hành động</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                        foreach($all_product as $item){
                            extract($item);
                            // echo $type_book; 
                            // echo $id;    
                            echo 
                            '
                            <form action="./index.php?act=update_book&id='.$id.'"" method="post" enctype="multipart/form-data">
                            <tr>
                                <th scope="row">'.$id.'</th>
                                <td><img src="../images1/product/'.$image.'" alt="" width="55px "><input type="file" name="images" id="" multiple></td>
                                <td><textarea name="book_name" id="" cols="30" rows="10" placeholder=" '.$book_name.'">'.$book_name.'</textarea></td>
                                <td>
                                <select style="border: none;" name="typeofbook" id="" class="form-select" aria-label="Default select example">
                                <option value="#">Chọn loại sách</option>
                                
                            ';
                            

                            $id_book = $id;
                            $typeofbook = allcatalogy();
                            foreach($typeofbook as $item){
                                
                                extract($item);
                                if($type_book == $id){
                                    $alert = "selected";
                                }
                                else{
                                    $alert = "";
                                }
                                
                                echo '<option value="'.$id.'" '.$alert.'>'.$name.'</option>';
                            }
                            
                        
                            echo '   
                            </select> 
                                </td>
                                <td><input type="text" style="border: none;" name="description_book" id="" value="'.$description_book.'" placeholder=" '.$description_book.'"></td>
                                <td><input type="text" style="border: none;" name="author" id="" value="'.$author.'" placeholder=" '.$author.'"></td>
                                <td><input type="text" style="border: none;" name="publisher" id="" value="'.$publisher.'" placeholder=" '.$publisher.'"></td>
                                <td><input type="text" style="border: none;" name="price" id="" value="'.$price.'" placeholder=" '.$price.'"></td>
                                <td><input type="text" style="border: none;" name="pages" id="" value="'.$pages.'" placeholder=" '.$pages.'"></td>
                                <td><input type="text" style="border: none;" name="year" id="" value="'.$year.'" placeholder=" '.$year.'"></td>
                                <td><input type="text" style="border: none;" name="size" id="" value="'.$size.'" placeholder=" '.$size.'"></td>
                                <td><input type="text" style="border: none;" name="weight" id="" value="'.$weight.'" placeholder=" '.$weight.'"></td>
                                <td><input type="text" style="border: none;" name="quantity" id="" value="'.$quantity.'" placeholder=" '.$quantity.'"></td>
                                <td><textarea name="introduction" id="" cols="30" rows="10" placeholder=" '.$introduction.'">'.$introduction.'</textarea></td>
                                <td>
                                    <select name="rating" id="" class="form-select" aria-label="Default select example">
                                        <option value="'.$rating.'" selected>'.$rating.'</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    
                                </td>
                                <td>
                                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Sửa</button>

                                ';?>
                                <a href="./index.php?act=delete_book&id= <?php echo $id_book?>" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" onclick="return confirm('Bạn có muốn xóa <?php echo $book_name?> không?')">Xóa</a>
                                <?php echo'
                                </td>
                                
                            </form>
                        </tr>
                        
                        </form>
                            ';
                        }
                        ?>

                    </tbody>
                    <tfoot>
                        <form action="./index.php?act=add_book" method="post" enctype="multipart/form-data">
                        <th scope="row"><?php echo $id+1?></th>
                                <td><input type="file" name="images" id="" multiple></td>
                                <td><input type="text" style="border: none;" name="book_name" id=""placeholder="  Book's name "></td>
                                <td>
                                    <select name="typeofbook" id="" class="form-select" aria-label="Default select example">
                                        <option value="#">Chọn loại sách</option>
                                        <?php
                                        $typeofbook = allcatalogy();
                                        foreach($typeofbook as $item){  
                                            extract($item);
                                            echo '<option value="'.$id.'">'.$name.'</option>';
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td><input type="text" name="description_book" id="" placeholder="  Description"></td>
                                <td><input type="text" placeholder="  Author" name="author"></td>
                                <td><input type="text" placeholder="  Publisher" name="publisher"></td>
                                <td><input type="text" placeholder="  Price" name="price"></td>
                                <td><input type="text" placeholder="  Pages" name="pages"></td>
                                <td><input type="text" placeholder="  Year" name="year"></td>
                                <td><input type="text" placeholder="  Size" name="size"></td>
                                <td><input type="text" placeholder="  Weight" name="weight"></td>
                                <td><input type="text" placeholder="  Quatity" name="quatity"></td>
                                <td><input type="text" placeholder="  Introduction" name="introduction"></td>
                                <td>
                                    <select name="rating" id="" class="form-select" aria-label="Default select example">
                                        <option value="#" selected>Nhập rating</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    
                                </td>
                                <td scope="col"><button class="btn btn-primary" type="submit" >Thêm</button></td>
                            </form>
                    </tfoot>
                  </table>
            </div>
            <p style="color: red; text-align: center;" class="mb-0 mt-4 text-center"><?php if(isset($alert_for_book)){echo $alert_for_book;} ?></p>
            </div>
        </div>
    </section>
    
    <script src="./admin-js/admin.js"></script>
</body>
</html> 