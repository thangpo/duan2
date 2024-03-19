<div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Quản Lý Bình luận</span>
                </div>
                
                <?php

                    $loadall_cart = loadall_cart();
                    // echo '<pre>';
                    // var_dump($loadall_cart);
                    // echo '</pre>';

                    foreach($loadall_cart as $item){
                        extract($item);

                        echo 
                        '<hr>

                        
                    <table >
                        <thead >
                        
                          <tr> 
                          <th scope="col">ㅤㅤㅤ</th>
                            <th><img  src="../images/img/'.$avatar.'" alt="" width="65px"">'. "ㅤ".$full_name.'</th>
                          </tr>
                        </thead>

                    </table>
                        ';
                        // $id = $user; 
                        $cart_of_one=load_sanpham_cart($id);
                        // var_export($cart_of_one);
                        echo '                                <table class="table table-bordered">
                        <thead>
                            <tr> 
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Author</th>
                            <th scope="col">Price</th>
                            <th scope="col">Bookquantity</th>
                            
                            </tr>
                        </thead>  
                        <tbody>
                                              
';
                        foreach($cart_of_one as $value){
                            extract($value);
                            // echo $book_name;
                            echo '

                                    <tr>
                                        <td><img src="../images1/product/'.$image.'" alt="" width="55px "></td>
                                        <td>'.$book_name.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$author.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$book_quantity.'</td>
                                    </tr>
                                
                                ';
                        }
                    }

                ?>
                            </tbody>
                        </table>
                        
                <!-- <table class="table table-bordered">
                    <thead>
                      <tr> 
                        <th scope="col">ID</th>
                        <th scope="col">Avatar</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table> -->
            
            
            </div>
            </div>
        </div>
    </section>
    
    <script src="./admin-js/admin.js"></script>
</body>
</html> 