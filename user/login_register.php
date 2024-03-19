<!doctype html>
<html lang="en">
<head>
  <title>Webleb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/login-register.css">
</head>
<body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<form action="index.php?act=login" class="form" id="form" method="post">
												<h4 class="mb-4 pb-3">Log In</h4>
												<div class="form-group">
													<input type="text" name="user" class="form-style" placeholder="User" >
													
													<i class="input-icon uil uil-at"></i>
													
												</div>	
													<div class="form-group mt-2">
													<input type="password" name="pass" class="form-style" placeholder="Pass" >
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<input type="submit" value="Login" class="btn mt-4" name="dangnhap" disabled>
												<p class="mb-0 mt-4 text-center"><?php if (isset($thongbao)) {
													echo $thongbao;
												}else{
													$thongbao = "";
													echo $thongbao;
												}
												
												?></p>
												
												<p class="mb-0 mt-4 text-center"><a href="#" class="link">Forgot your password?</a></p>
											</form>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-3 pb-3">Sign Up</h4>
											<form action="index.php?act=signin" class="form" id="form" method="post">
											<div class="form-group">
												<input type="text" class="form-style" name="user" placeholder="User Name">
												<i class="input-icon uil uil-user"></i>
											</div>
											<div class="form-group mt-2">
												<input type="text" class="form-style" name="pass" placeholder="Pass">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<div class="form-group mt-2">
												<input type="email" class="form-style" name="email" placeholder="Email">
												<i class="input-icon uil uil-at"></i>
												<i></i>
											</div>	
											<input type="submit" value="Register" class="btn mt-4" name="dangky" >
											</form>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
	<script>
		const userField = document.querySelector('input[name="user"]');
		const passField = document.querySelector('input[name="pass"]');
		const submitBtn = document.querySelector('input[name="dangnhap"]');

		userField.addEventListener('input', function() {
		if (userField.value.trim() && passField.value.trim()) {
			submitBtn.disabled = false;
		} else {
			submitBtn.disabled = true;
		}
		});

		passField.addEventListener('input', function() {
		if (userField.value.trim() && passField.value.trim()) {
			submitBtn.disabled = false;
		} else {
			submitBtn.disabled = true;
		}
		});

	</script>
</body>
</html>

    <!-- footer -->
    <footer>
        <section class="footer__top">
            <div class="container">
                <div class="row">
                    <article class="footer__top-intro col-lg-5 col-md-4 col-sm-6">
                        <h4 class="footer__top-intro-heading">
                            Về chúng tôi
                        </h4>
                        <div class="footer__top-intro-content">
                            MagicBook là cửa hàng luôn cung cấp cho các bạn tìm tòi tri thức, đam mê 
                            đọc sách trên khắp cả nước.Chúng tôi sẽ liên tục cập 
                            nhật những cuốn sách hay nhất, mới nhất, chất lượng nhất 
                            giúp người đọc có những cuốn sách hay nhất để đọc! <br> <br>
                            Điện thoại: 0963898231 <br>
                            Email: hokagetai@gmail.com <br>
                            Zalo:  0585.245.989 <br>
                        </div>
                    </article>

                    <article class="footer__top-policy col-lg-3 col-md-4 col-sm-6">
                        <h4 class="footer__top-policy-heading">
                            Chính sách mua hàng
                        </h4>

                        <ul class="footer__top-policy-list">
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hình thức đặt hàng</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hình thức thanh toán</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Phương thức vận chuyển</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Chính sách đổi trả</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hướng dẫn sử dụng</a>
                            </li>
                        </ul>
                    </article>

                    <article class="footer__top-contact-wrap col-lg-4 col-md-4 col-sm-6">
                        <h4 class="footer__top-contact-heading">
                            Hotline liên hệ
                        </h4>

                        <div class="footer__top-contact">
                            <div class="footer__top-contact-icon">
                                <img src="../images/phone_top.png" class="footer__top-contact-img">
                            </div>

                            <div class="footer__top-contact-phone-wrap">
                                <div class="footer__top-contact-phone">
                                    039.882.3232
                                </div>
                                <div class="footer__top-contact-des">
                                    (Giải đáp thắc mắc 24/24)
                                </div>
                            </div>
                        </div>
                    
                        <h4 class="footer__top-contact-heading">
                            Kết nối với chúng tôi
                        </h4>

                        <div class="footer__top-contact-social">
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="../images/facebook.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="../images/youtube.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="../images/tiktok.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="../images/zalo.png">
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="footer__bottom">
            <div class="container">
                <div class="row">
                    <span class="footer__bottom-content">0585245989-Taitbtph35535@fpt.edu.vn </span>
                </div>
            </div>
        </section>
    </footer>
    <!-- end footer -->

    <div class="main__modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <!-- resgist form -->
            <div class="sale-off">
                <div class="sale-off__container">
                    <h2 class="sale-off__heading">
                        Nhận phiếu giảm giá <span class="sale-off__sp">30%</span>  khi mua <br> <span class="sale-off__name">Học tập qua dự án</span> 
                    </h2>
                    <div class="sale-off__img">
                        <img src="../images1/product/hoc-tap-qua-du-an-2-01-1.jpg" width="300">
                    </div>
                    
                    <a href="product.html" class="sale-off__link">
                        <button class="sale-off__btn">Mua ngay</button>
                    </a>
                </div>

                <div class="sale-off__close">
                    <!-- <svg class="sale-off__close-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg> -->
                    x
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../js/jq.js"></script>
    <script src="../js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>