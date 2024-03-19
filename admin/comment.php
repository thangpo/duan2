<div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Quản Lý Bình luận</span>
                </div>

                <table class="table table-bordered">
                    <thead>
                      <tr> 
                        <th scope="col">ID</th>
                        
                        <th scope="col">Đánh giá</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Tên sách</th> 
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Ngày sửa</th>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Hành động</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      
                      
                      $select_all_comments = select_all_comments();
                      foreach($select_all_comments as $data){
                        extract($data);
                        echo '
                        
                        <tr>
                          <td>'.$id.'</td>
                          <td>'.$rating.'</td>
                          <td>'.$full_name.'</td>
                          <td>'.$book_name.'</td>
                          <td>'.$created_at.'</td>
                          <td>'.$updated_at.'</td>
                          <td>'.$content.'</td>
                          <td>
                          <form action="./index.php?act=reply&id='.$id.'"" method="post" >
                          <textarea name="reply" id="" cols="30" rows="1">'.$reply.'</textarea>
                          <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Phản hồi</button>
                          </form>
                          </td>
                          
                        </tr>
                        ';
                      }
                      
                      ?>

                    </tbody>
                  </table>
            </div>

            </div>
        </div>
    </section>
    
    <script src="../admin-js/admin.js"></script>
</body>
</html> 