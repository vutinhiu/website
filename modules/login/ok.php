<?php
if(isset($_SESSION['mail1']) && isset($_SESSION['pass1'])){
	if(isset($_GET['cus_id'])){
		$cus_id = $_GET['cus_id'];
		$sql = "SELECT * FROM customer WHERE cus_id = $cus_id";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($query);
	}
	if(isset($_POST['sbm1'])){
		$cus_name = $_POST['cus_name'];
		$cus_mail = $_POST['cus_mail'];
		$cus_pass = md5($_POST['cus_pass']);
		$cus_re_pass = md5($_POST['cus_re_pass']);
		if($cus_pass===$cus_re_pass){
			$sql_cus = "UPDATE customer SET cus_name = '$cus_name', cus_mail = '$cus_mail', cus_pass = '$cus_pass' WHERE cus_id = $cus_id";
			$query_cus = mysqli_query($conn,$sql_cus);
			header("location: index.php");
		}else{
			echo '<script language="javascript">';
			echo 'alert("Mật khẩu không khớp! Hãy nhập lại")';
			echo '</script>';
		}
	}
}
?>
<div class="container">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-8">
							<div class="alert alert-danger">Đây là tài khoản thông tin của bạn!</div>
						<form role="form" method="post">
							<div class="form-group">
								<label>Họ & Tên</label>
								<input type="text" name="cus_name" required class="form-control" value="" placeholder="">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="cus_mail" required value="" class="form-control" autofocus>
							</div>                       
							<div class="form-group">
								<label>Mật khẩu</label>
								<input type="password" name="cus_pass" required  class="form-control">
							</div>
							<div class="form-group">
								<label>Nhập lại mật khẩu</label>
								<input type="password" name="cus_re_pass" required  class="form-control">
							</div>
							<button type="submit" name="sbm1" class="btn btn-primary">Cập nhật</button>
							<button type="reset" class="btn btn-default">Làm mới</button>
						</div>
					</form>
					</div>
				</div>
			</div>