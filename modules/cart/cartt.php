<div class="widget-header  mr-3">
                                <a href="index.php?page_layout=cart" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
<span class="badge badge-pill badge-danger notify">
<?php 
        if(isset($_SESSION['cart'])){
            if(isset($_POST['qtt'])){
                $cart = $_POST['qtt'];
            }else{
                $cart = $_SESSION['cart'];
            }
            $total = 0;
            foreach($cart as $prd_id => $qtt){
                $total += $qtt;
            }
            echo $total;
        }else{
            echo 0;
        }
    ?></span>
                            </div>