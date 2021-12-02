<?php
	session_start();
 include('../db/connect.php'); 
?>
<?php
	// session_destroy();
	// unset('dangnhap');
	if(isset($_POST['dangnhap'])) {
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		if($taikhoan=='' || $matkhau ==''){
			echo '<p>Xin nhập đủ</p>';
		}else{
			$sql_select_admin = mysqli_query($con,"SELECT * FROM tbl_admin WHERE email='$taikhoan' AND password='$matkhau' LIMIT 1");
			$count = mysqli_num_rows($sql_select_admin);
			$row_dangnhap = mysqli_fetch_array($sql_select_admin);
			if($count>0){
				$_SESSION['dangnhap'] = $row_dangnhap['admin_name'];
				$_SESSION['admin_id'] = $row_dangnhap['admin_id'];
				header('Location: dashboard.php');
			}else{
				echo '<p>Tài khoản hoặc mật khẩu sai</p>';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập Admin</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<style>
		body {
			font-size: 14px;
			font-family: Arial, Helvetica, sans-serif;
			line-height: 23px;
			background-color: #029ef3;
		}

		#post-tile {
			font-size: 18px;
			padding: 0px 0px 0px 20px;
		}

		#wp-form-login {
			width: 265px;
			background-color: #fdfdfd;
			margin: 150px auto;
			border-radius: 3px;

			padding: 30px 20px 20px 20px;
			text-align: center;


		}



		#form-login #username,
		#form-login #password {
			display: block;
			padding: 10px 10px 10px 0px;
			width: 100%;
			margin-bottom: 9px;
			background-color: #f7f7f7;
			border: none;
		}

		#form-login #bt_lg {
			display: block;
			width: 100%;
			background-color: #029ef3;
			border: none;
			color: #fff;
			padding: 10px 0px;
			margin: 15px 0px 10px;

		}
		p{
			color: red;
		}
	</style>
	<div id="wp-form-login">
		<h1 id="post-tile">Đăng Nhập</h1>
		<form method="post" action="" id="form-login">

			<input type="text" name="username" id="username" placeholder="Username"/>

			<input type="password" name="password" id="password" placeholder="Password"/>


			<input type="submit" name="dangnhap" value="Đăng nhập" id="bt_lg">

		</form>
	</div>
</body>
</html>