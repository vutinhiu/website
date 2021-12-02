

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-conten padding-y" style="min-height:84vh ">

    <!-- ============================ COMPONENT LOGIN   ================================= -->
  <?php
      if(isset($_POST['sbm1'])){
        $mail1 = $_POST['mail1'];
        $pass1 = md5($_POST['pass1']);
        $sql = "SELECT * from customer where cus_mail = '$mail1' AND cus_pass = '$pass1'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($query);
        if($row){
            $_SESSION['mail1'] = $mail1;
            $_SESSION['pass1'] = $pass1;
            header("location:index.php");
        }
        else{
            $erorr = '<div class="alert alert-danger">Tài khoản không hợp lệ !</div>';
        }
    }
 
  ?>
    <div class="card mx-auto" style="max-width: 380px; margin-top:100px; text-align:center;">
		<div class="text-center mt-4">
			<div class="login-panel panel panel-default">
            <h4 class="card-title mb-4">Đăng nhập</h4>
				<div class="panel-body">
					<?php 
						if(isset($erorr)){
							echo $erorr;
						}
					?>
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="mail1" type="email" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="pass1" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Nhớ tài khoản
								</label>
                                <a href="#" class="float-right">Quên mật khẩu?</a>
							</div>
							<button type="submit" name="sbm1" class="btn btn-primary">Đăng nhập</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
		<a href="#" class="btn btn-facebook btn-block mt-3"> <i class="fab fa-facebook-f"></i> &nbsp Sign in
                    with Facebook</a>
                <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp Sign in with
                    Google</a>
    </div>
    <p class="text-center mt-4">Chưa có tài khoản? <a href="index.php?page_layout=register">Đăng ký</a></p>
    <br><br>
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->


</section>

<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= FOOTER ========================= -->

