<?php 
include_once('index.php');
$keyword = $_POST['keyword']; // aa bb cc 
$arr_key = explode(" ", $keyword); // => [aa] [bb] [cc]
$new_key = "%".implode("%", $arr_key)."%"; // => %aa%bb%cc%

$sql = "SELECT * FROM product WHERE prd_name LIKE '$new_key' ";
$query = mysqli_query($conn,$sql);
?>
<div class="container">

<!--	List Product	-->
<div class=" products">
<h2 class="title-page">Kết quả tìm kiếm với sản phẩm : <?php echo $keyword; ?></h2>
  <div class="product-list row">
        <?php 
            while($row = mysqli_fetch_array($query)){
        ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mx-product w-100">
                <div class="product-item card text-center">
                    <a href="index.php?page_layout=product&&prd_id=<?php echo $row['prd_id']; ?>"><img src="admin/images/<?php echo $row['prd_image']; ?>"></a>
                    <h4><a href="index.php?page_layout=product&&prd_id=<?php echo $row['prd_id']; ?>"><?php echo $row['prd_name']; ?></a></h4>
                    <p>Giá Bán: <span><?php echo number_format($row['prd_price']); ?>đ</span></p>
                </div>
            </div>
        <?php        
            }
        ?>
        
    </div>
</div>
<!--	End List Product	-->

<div  id="pagination">
    <ul class="pagination">
         <!-- echo $list_page;  -->
    </ul>
</div>
<nav class="mt-4" aria-label="Page navigation sample">
  <ul class="pagination">
    <li class="page-item disabled"><a class="page-link" href="">Trước</a></li>
    <li class="page-item active"><a class="page-link" href="">1</a></li>
    <li class="page-item"><a class="page-link" href="">Kế tiếp</a></li>
  </ul>
</nav>
</div>
