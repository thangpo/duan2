<?php
$admininfo = getadmininfo();
$alluserinfo = alluserinfo();
// extract($admininfo);
// var_dump($admininfo);
// echo $admininfo;





?>



        
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Quản Lý Tài Khoản Khách Hàng</span>
                </div>

                <table class="table table-bordered " >
                    <thead>
                      <tr> 
                        <th  scope="col">ID</th>
                        <th scope="col">Ảnh đại diện</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Tên đăng nhập</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Email</th>
                        <th scope="col">SĐT</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php  

                        foreach($alluserinfo as $data){
                            extract($data);
                            if ($role == 1) {
                                $background =  'style="background-color: #f0f8ff;"';
                                } else {
                                $background =  'style="background-color: #ffe0e0;"';
                                }
                            // echo $_SESSION['role'];

                            if($role==0){
                                $button_control = '<a href="./index.php?act=unblockuser&unblockid='.$id.'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Mở khóa</a>';
                            }
                            else{
                                $button_control = '<a href="./index.php?act=blockuser&blockid='.$id.'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Khóa</a>';
                            }
                            echo '
                                <tr '.$background.'>
                                    <th scope="row">'.$id.'</th>
                                    <td> <img src="../images/img/'.$avatar.'" alt="" width="65px""></td>
                                    <td>'.$full_name.'</td>
                                    <td>'.$username.'</td>
                                    <td>'.$password.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$birthday.'</td>
                                    <td>'.$gender.'</td>
                                    <td>'.$button_control.'</td>
                                </tr>
                                ';
                        }
                        
                        
                        
                        ?>

                    </tbody>
                  </table>
            </div>
            <?php if(isset($_SESSION['role'])&& $_SESSION['role'] == 3){ 
                        // echo $_SESSION['role'];  
                        echo '            
                        <div class="title">
                        <i class="uil uil-clock-three"></i>
                        <span class="text">Quản Lý Tài Khoản Nhân Sự</span>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                          <tr> 
                            <th  scope="col">ID</th>
                            <th scope="col">Ảnh đại diện</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Tên đăng nhập</th>
                            <th scope="col">Mật khẩu</th>
                            <th scope="col">Email</th>
                            <th scope="col">SĐT</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Chức vụ</th>
                            <th scope="col">Thao tác</th>
                          </tr>
                        </thead>
                        <tbody>';
                        foreach($admininfo as $datauser){
                            extract($datauser);
                            $value = "";
                            $value1 = "";
                            $value2 = "";
                            $value3 = "";
                            $value4 = "";
                            $value5 = "";
                            $value6 = "";
                            if ($role == 2) {
                                $role =  "Nhân viên";
                              } else {
                                $role =  "Quản trị viên";
                              }

                            if ($role == "Quản trị viên") {
                                $value = "selected";
                            }
                            elseif($role == "Nhân viên") {
                                $value1 = "selected";
                            }
                            else{
                                $value2 = "";
                            }

                            if ($gender == "Nam") {
                                $value3 = "selected";
                            }
                            elseif($gender == "Nữ") {
                                $value4 = "selected";
                            }
                            elseif($gender == "Khác") {
                                $value5 = "selected";
                            }
                            else{
                                $value6 = "";
                            }
                            echo '
                                <tr>
                                    <form action="./index.php?act=update_account&id='.$id.'"" method="post" enctype="multipart/form-data">
                                        <th scope="row">'.$id.'</th>
                                        <td> <img src="../images/img/'.$avatar.'" alt="" width="65px""><input type="file" name="avatar" id="" ></td>
                                        <td>  <input type="text" style="border: none;" name="fullname" placeholder="'.$full_name.'" value="'.$full_name.'"></td>
                                        <td><input type="text" style="border: none;" name="username" placeholder="'.$username.'" value="'.$username.'"></td>
                                        <td><input type="text" style="border: none;" name="password" placeholder="'.$password. '" value="'.$password. '"></td>
                                        <td><input type="text" style="border: none;" name="email" placeholder="'.$email. '" value="'.$email. '"></td>
                                        <td><input type="text" style="border: none;" name="phone" placeholder="'.$phone. '" value="'.$phone. '"></td>
                                        <td><input type="text" style="border: none;" name="address" placeholder="'.$address. '" value="'.$address. '"></td>
                                        <td>
                                        <input type="date" style="border: none;" name="birthday" placeholder="'.$birthday. '" value="'.$birthday. '">
                                        </td>
                                        <td>
                                            <select name="gender" id="" class="form-select" aria-label="Default select example">
                                                <option value="#" '.$value6.'>Chọn giới tính</option>
                                                <option value="Nam" '.$value3.'> Nam</option>
                                                <option value="Nữ"'.$value4.'> Nữ</option>
                                                <option value="Khác" '.$value5.'> Khác</option>
                                            </select>
                                        
                                        </td>
                                        <td>
                                        <select name="position" id="" class="form-select" aria-label="Default select example">
                                        <option value="#" '.$value2.'> Chọn chức vụ </option>
                                        <option value="2" '.$value1.'>Nhân viên</option>
                                        <option value="3" '.$value.' >Quản trị viên</option>
                                        </select>
                                        
                                        </td>
                                        <td>
                                        <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Sửa</button>
                                        ';?>
                                        <a href="./index.php?act=delete_account&id=<?php echo $id?>" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" onclick="return confirm('Bạn chắc chắn muốn xóa không?')">Xóa</a>
                                    <?php echo'    
                                    </td>
                                    </form>
                                </tr>
                                ';
                        }
                        

                        
                    }
                    else{
                        echo "";
                    }
                    ?>
<!-- <td><input type="text" style="border: none;" name="position" placeholder="'.$role. '" value="'.$role. '"></td> -->
                    <?php if(isset($_SESSION['role'])&& $_SESSION['role'] == 3){

                        echo '                    
                        </tbody>
                        <tfoot>
                              <tr> 
                                <form action="./index.php?act=insert_account" method="POST" enctype="multipart/form-data">
                                    <th scope="col">'.($id+1).'</th>
                                    <th scope="col"><input type="file" name="avatar" id="" ></th>
                                    <th scope="col"><input type="text" name="fullname" placeholder=" Họ tên"></th>
                                    <th scope="col"><input type="text" name="username" placeholder=" Tên đăng nhập"></th>
                                    <th scope="col"><input type="text" name="password" placeholder=" Mật khẩu"></th>
                                    <th scope="col"><input type="email" name="email" placeholder=" Email"></th>
                                    <th scope="col"><input type="text" name="phone" placeholder=" Số điện thoại"></th>
                                    <th scope="col"><input type="text" name="address" placeholder=" Địa chỉ"></th>
                                    <th scope="col"><input type="date" name="birthday" ></th>
                                    <th scope="col">
                                        <select name="gender" id="" class="form-select" aria-label="Default select example">
                                            <option value="#" selected>Chọn giới tính</option>
                                            <option value="Nam"> Nam</option>
                                            <option value="Nữ"> Nữ</option>
                                            <option value="Khác"> Khác</option>
                                        </select>
                                    </th>
                                    <th scope="col">
                                        <select name="position" id="" class="form-select" aria-label="Default select example">
                                            <option value="#" selected> Chọn chức vụ </option>
                                            <option value="2">Nhân viên</option>
                                            <option value="3">Quản trị viên</option>
                                        </select>
                                    </th>
                                    <th scope="col"><button class="btn btn-primary" type="submit">Thêm</button></th>
                                </form>
    
                              </tr>
                            </tfoot>
                      </table>';
                     }
                     ?>

            </div>
        </div>
        <p sclass="mb-0 mt-4 text-center"><?php if(isset($alert_for_account)){echo $alert_for_account;} ?></p>
        
    </section>
    









    
    <script src="./admin-js/admin.js"></script>
</body>
</html>