<script>
    function buyNow(){
        document.getElementById('buyNow').submit()
    }
</script>

<?php 
    include "PHPMailer-master/src/PHPMailer.php";
    include "PHPMailer-master/src/Exception.php";
    include "PHPMailer-master/src/OAuth.php";
    include "PHPMailer-master/src/POP3.php";
    include "PHPMailer-master/src/SMTP.php";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;	
    
    if(isset($_SESSION["cart"])){
        if(isset($_POST['sbm'])){
            $qtt = array();
            foreach($_POST['qtt'] as $prd_id => $qtt){
                $_SESSION['cart'][$prd_id] = $qtt;
            }
        }
        $arr_id = array();
        foreach($_SESSION["cart"] as $prd_id => $qtt){
            $arr_id[] = $prd_id;
        }
        $str_id = implode(", ", $arr_id);
        $sql = "SELECT * FROM product WHERE prd_id IN ($str_id)";
        $query = mysqli_query($conn,$sql);
?>
<!--	Cart	-->
<div class="container"id="my-cart">
<table class="table table-borderless table-shopping-cart">
    <div class="row">
        <div class="cart-nav-item col-lg-7 col-md-7 col-sm-12"><h2>Thông tin sản phẩm</h2></div>
        <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12"><h2>Số lượng </h2></div>
        <div class="cart-nav-item col-lg-3 col-md-3 col-sm-12"><h2>Giá</h2></div>
    </div>
    <form method="post">
        <?php 
        $total_price_all = 0;
        while($row = mysqli_fetch_array($query)){
            $total_price = $_SESSION['cart'][$row['prd_id']] * $row['prd_price'];
            $total_price_all += $total_price;
        ?>
            <div class="cart-item row">
                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                    <img src="admin/images/<?php echo $row['prd_image']; ?>">
                    <h4><?php echo $row['prd_name']; ?></h4>
                </div>
                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                    <input type="number" name="qtt[<?php echo $row['prd_id'] ?>]" id="quantity" class="form-control form-blue quantity" value="<?php echo $_SESSION['cart'][$row['prd_id']]; ?>" min="1">
                </div>
                <div class="cart-price col-lg-3 col-md-3 col-sm-12 "><b><?php echo number_format($total_price) ; ?>đ</b>
                <a class="btn btn-light" href="modules/cart/cart_del.php?prd_id=<?php echo $row['prd_id']; ?>"> Xóa</a></div>
            </div>
        <?php        
            }
        ?>

        <div class="row">
            <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                <button id="update-cart" class="btn btn-success" type="submit" name="sbm"> Cập nhật giỏ hàng</button>
            </div>
            <div class=" cart-total col-lg-2 col-md-2 col-sm-12"><b> Tổng tiền : </b></div>
            <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b><?php echo number_format($total_price_all); ?>đ</b></div>
        </div>
    </form>
</table>
</div>
<div class=" container card-body border-top">
<?php
    if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['mail']) && isset($_POST['add'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['mail']; 
        $add = $_POST['add'];

        $str_body = '';
        $str_body .= '
            <p>
                <b>Khách hàng:</b> '.$name.'<br>
                <b>Điện thoại:</b> '. $phone .'<br>
                <b>Địa chỉ:</b>'.$add.'<br>
            </p>
            
        ';
        $str_body .= '
            <table border="1" cellspacing="0" cellpadding="10" bordercolor="#305eb3" width="100%">
                <tr bgcolor="#305eb3">
                    <td width="70%"><b><font color="#FFFFFF">Sản phẩm</font></b></td>
                    <td width="10%"><b><font color="#FFFFFF">Số lượng</font></b></td>
                    <td width="20%"><b><font color="#FFFFFF">Tổng tiền</font></b></td>
                </tr>
        ';
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){
            $str_body.= '        
                <tr>
                    <td width="70%">'.$row['prd_name'].'</td>
                    <td width="10%">'.$_SESSION['cart'][$row['prd_id']].'</td>
                   
                </tr>
            ';    
        }
        $str_body .= '
            <tr>
                <td colspan="2" width="70%"></td>
                <td width="20%"><b><font color="#FF0000">'.number_format($total_price_all).' đ</font></b></td>
            </tr>
        </table>';
        
        $str_body .= '
            <p>Cám ơn quý khách đã mua hàng tại Shop của chúng tôi, bộ phận giao hàng sẽ liên hệ với quý khách để xác nhận sau 5 phút kể từ khi đặt hàng thành công và chuyển hàng đến quý khách chậm nhất sau 24 tiếng.</p>
        ';
        $mail = new PHPMailer(true);   
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'vutienhieu91100@gmail.com';                 // SMTP username
            // $mail->Password = 'vietpr0sh0p';                           // SMTP password
                $mail->Password = ' Hieupanda911';                           // SMTP password
            $mail->SMTPSecure = 'tls'; 
            $mail->Port = 587;                                    // TCP port to connect to
        
            //Recipients
            $mail->CharSet = 'UTF-8';
            $mail->setFrom('vutienhieu91100@gmail.com', 'Web bán quần áo');				// Gửi mail tới Mail Server
            $mail->addAddress($email);               
            $mail->addCC('vutienhieu9110@gmail.com');
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Xác nhận đơn hàng từ Web bán quần áo';
            $mail->Body    = $str_body;
            $mail->AltBody = 'Mô tả đơn hàng';
        
            $mail->send();
            header('location:index.php?page_layout=success');
        } catch (Exception $e) {
            echo 'Không thể xác định được Xin hãy thử lại: ', $mail->ErrorInfo;
        }
    }
?>
<!--	Customer Info	-->
<div id="customer">
    <form id="buyNow" method="post">
        <div class="row">
            <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Họ và tên (bắt buộc)" type="text" name="name" class="form-control" required>
            </div>
            <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone" class="form-control" required>
            </div>
            <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Email (bắt buộc)" type="text" name="mail" class="form-control" required>
            </div>
            <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12 mt-4">
                <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text" name="add" class="form-control" required>
            </div>
        </div>
    </form>
</div></div>
<div class="container">
<div class=" card-body border-top">
                        <a onclick="buyNow();" class="btn btn-success float-md-right" style="color:aliceblue;"> Đặt hàng<i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
              

                <div class="alert alert-success mt-3">
                    <p class="icontext"><i class="icon text-success fa fa-truck"></i> Giao hàng miễn phí trong vòng 1-2
                        ngày
                    </p>
                </div>
</div>
<?php        
    }else{
        echo '<div class="alert alert-danger mt-4">Giỏ hàng của bạn hiện tại không có sản phẩm nào!</div>';
    }
?>



    
