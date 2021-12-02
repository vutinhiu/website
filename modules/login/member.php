
<div class="widget-header icontext">
    <a href="" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>

</div>

<?php 

if(isset($_SESSION['mail1']) && isset($_SESSION['pass1'])){
    echo $_SESSION['mail1'];
}else{
  echo '<a href="index.php?page_layout=login">Đăng nhập</a>';
}

?>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <span class="text-muted">Xin chào!</span>
  
  <?php 

if(isset($_SESSION['mail1']) && isset($_SESSION['pass1'])){
  
    echo $_SESSION['mail1'];
}

?>
  </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php
  $sql = "SELECT * FROM customer WHERE cus_id ";
  $query = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($query);
?>
     <a class="dropdown-item" href="index.php?page_layout=ok&&cus_id=<?php echo $row['cus_id'];?>">Hồ sơ</a>
    <a class="dropdown-item" href="index.php?page_layout=logout">Đăng xuất</a>
  </div>
</div>

</span>

		