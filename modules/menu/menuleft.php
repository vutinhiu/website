<aside class="col-md-3">
            <!--  XEM XÉT cột hàng bên trái -->
                <nav class="card">
                    <ul class="menu-category">
                    <li><a href="#">Danh mục</a></li>
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
                </nav>
            </aside> <!-- col.// -->