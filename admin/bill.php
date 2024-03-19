<?php 

// foreach($userInfo1 as $info){
//     extract($info);
// }
// // echo $full_name;

extract($bill_get_all_admin);
// echo $listBill;  

    // var_dump($arr_book_quantity);
    // $num_elements = count($arr_data);

    // for($i=0;$i<count($arr_books); $i++){
    //     echo $arr_books[$i];
    // };
    // // echo $arr_books[2];
    //     // echo count($arr_book_quantity);
    // for($i=0;$i<count($arr_book_quantity); $i++){
    //     echo $arr_book_quantity[$i];
    // };
    // for($i=0;$i<count($arr_book_price); $i++){
    //     echo $arr_book_price[$i];
    // };
    // var_dump($arr_book_quantity);
    // $tadu = $arr_data[0];
    // $ha_triều = $arr_data[1];
    // $lac_tri_dư = $arr_data[2];
    // $tieu_ngạn = $arr_data[3];
    // echo 

    // extract($listBill);
    // echo $listBill;
    // var_dump($userInfo1);

    // $temp = 'Tạ du;Hạ triều;Hạ tri dư;Tiêu ngạn';
    // extract($temp);
    // var_dump($temp);
?>


    <!--end header nav -->
                <div class="col-lg">
                    <h1>Đơn hàng của bạn</h1>
                            
                    <?php
                    
                    foreach($bill_get_all_admin as $item){
                        extract($item);
                        $id_user = $id;
                        // echo $total_amount;
                        // extract($books);
                        $arr_books = explode(";", $books);
                        $arr_book_quantity = explode(";", $book_quantity);
                        // var_dump($arr_book_quantity);
                        $arr_book_price = explode(";", $book_price);
                        echo '
                        <div class="card border-secondary mb-5">
                          <div class="card-header bg-secondary border-0">
                              <h4 class="font-weight-semi-bold m-0">Đơn hàng mã '.$id_user.'</h4>
                          </div>
                        <div class="card-body">
                              <h2 class="font-weight-medium mb-3">Sản Phẩm</h2>';?>
                              <?php
                              $total = 0;
                              $totalPrice = 0;

                              for ($index = 0; $index < count($arr_books); $index++) {
                              // $item = $onePersonCart[$index];
                              // echo $index;
                              $totalPrice += $arr_book_quantity[$index] * $arr_book_price[$index];

                              echo '<div class="d-flex justify-content-between">
                                  <p>' . $arr_books[$index] . ' X ' . $arr_book_quantity[$index]. '</p>
                                  <p>' . number_format($arr_book_quantity[$index] * $arr_book_price[$index], 0, '.', '.') . ' VND</p>
                                  

                              </div>';    
                            //   echo $arr_books[$index];
                            //   echo $arr_book_quantity[$index];
// delete_bill_after_admin_confirm($arr_books[$index],$arr_book_quantity[$index]);
                              }
                              ?>
                              <?php
                              echo '
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                        <h2 class="font-weight-medium mb-3">Thông tin khách hàng</h2>
                            <div class="d-flex justify-content-between mt-2">
                                <h6 class="font-weight">Ngày mua hàng</h6>
                                <h6 class="font-weight">'.$order_date.'</h6>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <h6 class="font-weight">Trạng thái</h6>
                                <h6 class="font-weight">'.$order_status.'</h6>
                            </div>
                                <div class="d-flex justify-content-between mt-2">
                                <h6 class="font-weight">Địa chỉ giao hàng</h6>
                                <h6 class="font-weight">'.$shipping_address.'</h6>
                            </div>
                                <div class="d-flex justify-content-between mt-2">
                                <h6 class="font-weight">Phương thức thanh toán</h6>
                                <h6 class="font-weight">'.$payment_method.'</h6>
                            </div>
                                <div class="d-flex justify-content-between mt-2">
                                <h6 class="font-weight">Số điện thoại</h6>
                                <h6 class="font-weight">'.$phone.'</h6>
                            </div>

                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h2 class="font-weight-bold">Tổng Cộng</h2>
                                <h2 class="font-weight-bold">';?><?php echo number_format($totalPrice, 0, '.', '.'); ?>VNĐ</h2>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <h2 class="font-weight-bold">Trạng thái</h2>
                                <h2 class="font-weight-bold">
                                  <form action="./index.php?act=bill_confirm_order_status&id_bill=<?php echo $id_user ?>" method="post">
                                  <?php
                                  if($order_status  == "Đã gửi hàng thành công"){
                                    echo '<input type="text" name="books" value="'.$order_status.'" style="border: none;">';
                                  }
                                  elseif($order_status  == "Gửi hàng thất bại"){
                                    echo '<input type="text" name="books" value="'.$order_status.'" style="border: none;">';
                                  }
                                  else{
                                    echo '                                    
                                        <select name="order_status" id="">
                                            <option value="#">'.$order_status.'</option>
                                            <option value="1">Đã xác nhận</option>
                                            <option value="2">Đang vận chuyển</option>
                                            <option value="3">Đã gửi hàng thành công</option>
                                            <option value="4">Gửi hàng thất bại</option>
                                        </select>
                                        <button type="submit" name="sbm" id= "submitcomment" class="btn btn-primary">Confirm</button>

                                        ';

                                  }
                                  
                                  
                                  ?>

                                    <input type="hidden" name="books" value="<?php echo $books?>">
                                    <input type="hidden" name="book_quantity" value="<?php echo $book_quantity?>">
                                  </form>
                                </h2>
                            </div>
                        </div>
                    </div>
                        
                        
                   <?php }
                    
                    
                    ?>
                </div>
            </div>
            <!-- <input type="text" name="" style="border: none;" id="" value="cjdfbvhjbf"> -->
        </div>

    </body>
</html>
