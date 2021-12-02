
<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
            aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar menu -->
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                    <a class="nav-link" href="index.php">Trang chủ</a>
                </ul>
            <ul class="navbar-nav">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </ul>
            <ul class="navbar-nav">
            <?php 
               $sql = "SELECT * FROM category ORDER BY cat_id ASC";
               $query = mysqli_query($conn,$sql);
               while($row = mysqli_fetch_array($query)){
            ?>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="index.php?page_layout=category&&cat_id=<?php echo $row['cat_id'];?>"><?php echo $row['cat_name'];?></a>
                </li>
                <?php
               }
               ?>
            </ul>
            <ul class="navbar-nav">
                    <a class="nav-link" href="#">Liên hệ</a>
                </ul>
        </div> <!-- collapse .// -->
    </div> <!-- container .// -->
</nav>