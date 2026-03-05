 <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <?php
            $aid=$_SESSION['odmsaid'];
            $sql="SELECT * from  tbladmin where ID=:aid";
            $query = $dbh -> prepare($sql);
            $query->bindParam(':aid',$aid,PDO::PARAM_STR);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            if($query->rowCount() > 0)
            { 
                foreach($results as $row)
                {
                    ?>
                    </br></br>
                    <a href="Admin.php" class="nav-link">
                        <div class="nav-profile-image">
                            <?php 
                            if($row->Photo=="avatar15.jpg")
                            { 
                                ?>
                                <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                <?php 
                            } else { 
                                ?>
                                <img class="img-avatar" src="profileimages/<?php  echo $row->Photo;?>" alt=""> 
                                <?php 
                            } ?>
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2"><?php  echo $row->FirstName;?> <?php  echo $row->LastName;?></span>                            <?php
                           ?>
                        </div>
                    
                    </a>
                    <?php 
                }
            } ?>
        </li>
        <?php if($row->AdminName=="Admin")
            {
                 ?>
                 
        <li class="nav-item">
            <a class="nav-link" href="Admin.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <?php } ?>
        <?php if($row->AdminName=="User")
            {
                 ?>
        <li class="nav-item">
            <a class="nav-link" href="Uprofile.php">
                <span class="menu-title">Profile</span>
                <i class="mdi mdi-account menu-icon"></i>
            </a>
        </li>
        <?php } ?>
        <?php if($row->AdminName=="Admin")
            {
                 ?>
        
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Product management</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-archive menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">  
                    <li class="nav-item"> <a class="nav-link" href="categry1.php">Manage Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="product2fruite1.php">Sell Product</a></li>
                </ul>
            </div>
        </li>
        <?php } ?>
        <?php if($row->AdminName=="User")
                  {
                    ?>
            <li class="nav-item">
            <a class="nav-link" href="product2fruite1.php">
                <span class="menu-title">Sell Product</span>
                <i class="mdi mdi-cart menu-icon"></i>
            </a>
        </li>
            <?php } ?>
         
        <li class="nav-item">
            <a class="nav-link" href="Histroy.php">
                <span class="menu-title">Invoices</span>
                <i class="mdi mdi-book menu-icon"></i>
            </a>
        </li>
       
        <?php
        $aid=$_SESSION['odmsaid'];
        $sql="SELECT * from  tbladmin where ID=:aid";
        $query = $dbh -> prepare($sql);
        $query->bindParam(':aid',$aid,PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {  
            foreach($results as $row)
            { 
                if($row->AdminName=="Admin"  )
                { 
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                            <span class="menu-title">User management</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-account-multiple menu-icon"></i>
                        </a>
                        <div class="collapse" id="general-pages">

                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="userinfo.php">Register user </a></li> <?php
                                $aid=$_SESSION['odmsaid'];
                                $sql="SELECT * from  tbladmin where ID=:aid";
                                $query = $dbh -> prepare($sql);
                                $query->bindParam(':aid',$aid,PDO::PARAM_STR);
                                $query->execute();
                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                $cnt=1;
                                if($query->rowCount() > 0)
                                {  
                                    foreach($results as $row)
                                    { 
                                        if($row->AdminName=="Admin" and $row->CompanyName=="compconsult" )
                                        { 
                                            ?>
                                            <li class="nav-item"> <a class="nav-link" href="user_permission.php"> User permissions</a></li>


                                            <?php 
                                        } 
                                    }
                                } ?> 
                            </ul>

                        </div>
                    </li>
                    <?php 
                } 
            }
        } ?>
    </ul>
</nav>