<?php 
     if(isset($_POST['sbm'])){
        $cus_name = $_POST['cus_name'];
        $cus_mail = $_POST['cus_mail'];
        $cus_pass = md5($_POST['cus_pass']);
        $cus_re_pass = md5($_POST['cus_re_pass']);
        if($cus_pass===$cus_re_pass){
            $sql = "INSERT INTO customer (cus_name, cus_mail, cus_pass) VALUES ('$cus_name','$cus_mail','$cus_pass')";
            $query = mysqli_query($conn,$sql);
            header("location: index.php?page_layout=login");
        }else{
			echo '<script language="javascript">';
			echo 'alert("Mật khẩu không khớp! Hãy nhập lại")';
			echo '</script>';
		}
    }
?>
		
	<div class="card mx-auto" style="max-width: 380px; margin-top:100px; text-align:center;">			
		<div class=" container row">
			<div class="col-lg-12">
				<h1 class="page-header">Đăng ký</h1>
			</div>
        </div><!--/.row-->
        <div class="">
                <div class="">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center mt-4">
                            	<div class="alert alert-danger">Chào mừng bạn !</div>
                                <form role="form" method="post">
                                <div class="form-group">
                                    <label>Họ & Tên</label>
                                    <input name="cus_name" required class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="cus_mail" required type="text" class="form-control">
                                </div>                       
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input name="cus_pass" required type="password"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu</label>
                                    <input name="cus_re_pass" required type="password"  class="form-control">
                                </div>
                                <button name="sbm" type="submit" class="btn btn-primary">Đăng ký </button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
                <a href="#" class="btn btn-facebook btn-block mt-3"> <i class="fab fa-facebook-f"></i> &nbsp Sign up
                    with Facebook</a>
                <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp Sign up with
                    Google</a>
            </div><!-- /.row -->
            <p class="text-center mt-4">Đã có tài khoản? <a href="index.php?page_layout=login">Đăng nhập</a></p>
	</div>	<!--/.main-->	