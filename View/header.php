<header class="row no-gutters">
    <!-- nav san pham -->
    <section class="col-12 col-sm-12" style="height:40px;">
        <div class="col-12" >
            <div class="row">

                <!-- test -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top scrolling-navbar" style="margin-bottom: 0px;">

                    <div class="collapse navbar-collapse" id="basicExampleNav">
                        <!-- Links -->
                        <ul class="navbar-nav mr-auto smooth-scroll">
                                         <?php
                                            $mn=new menu(); // lấy bảng danhmuctheloai từ database
                                            $r=$mn->getListMenu();
                                            while($set=$r->fetch()):// fetch từng dòng
                                        ?>
                                        <li class="nav-item">
                                            <a href="<?php echo $set[2] ?>" class="nav-link"><?php echo $set[1] ?></a>
                                        </li>
                                        <?php endwhile;?>
                        </ul>
                        
                    </div>
                </nav>
                <!-- end test -->
            </div>
        </div>

    </section>
    <!-- dang ky -->
    <section class="col-12 col-sm-12">
       
            <div class="col-12">
                <div class="row">
                    <nav class="navbar navbar-expand-lg n navbar-light bg-light" style="margin-bottom: 0px; ">

                        <!-- Right -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item mt-3 nav-link">
                                <div class="dropdown">
                                <span>Danh Mục</span>
                                    <div class="dropdown-content">
                                        <?php
                                            $mn=new theloai(); // lấy bảng danhmuctheloai từ database
                                            $r=$mn->getListMenu();
                                            while($set=$r->fetch()):// fetch từng dòng
                                        ?>
                                        <a href="index.php?controller=danhmuc&id=<?php echo $set['matl'];?>&tentl=<?php echo $set['tentheloai'];?>" class="nav-link"><?php echo $set['tentheloai'];?></a>
                                        <?php endwhile;?>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <form class="form-inline" action="index.php?controller=search" method="post" >
                                    <div class="input-group">
                                        <div class="input-group-prepend">
            
                                            <!-- <span class="input-group-text">@</span> -->
                                            <input type="text" name="txtsearch" class="mt-3" placeholder="Bạn muốn tìm sách gì ..."/>
                                            <a href="index.php?controller=search"> 
                                                <input class="input-group-text mt-3" style="height: 35px;" type="submit" id="btsearch" value="Tìm Kiếm"/>
                                            </a>
                                        </div>

                                </form>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?controller=registration" class="nav-link">Đăng Ký</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?controller=login" class="nav-link <?php if(isset($_SESSION['makh'])){echo 'disabled';}?>" >Đặng Nhập</a>
                            </li>
                            <li class="nav-item" >
                                <a href="index.php?controller=login&action=logout" class="nav-link <?php if(!isset($_SESSION['makh'])){echo 'disabled';}?>">Đặng Xuất</a>
                            </li>
                            <li>
                                <a href="index.php?controller=giohang&action=cart" class="nav-link"><img src="Content/imagetourdien/cartx2.png" width="30px" height="30px" alt=""></a>

                            </li>
                            <li>
                                <p style="color: red; margin-top: 20px; margin-left: 0px;">(<?php if(isset($_SESSION['cart'])){echo count($_SESSION['cart']);}else{echo 0;} ?>)</p>

                            </li>
                            
                            <li>
                                <?php if (isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['tenkh'])) {
                                $tenkh = $_SESSION['tenkh'];
                                // echo '<p style="color: red; margin-top: 20px; margin-left: 0px;">Xin chao!' . $tenkh . '</p>';
                                echo '<div class="dropdown" style="margin-top: 20px; margin-left: 0px;color:RED">
                                        <span> Xin Chào' . $tenkh . '</span>
                                            <div class="dropdown-content">
                                                <a href="index.php?controller=user&action=changepass" class="nav-link">Đổi Mật Khẩu</a> <br>
                                                <a href="index.php?controller=user&action=updateprofile" class="nav-link">Cập Nhật Thông Tin</a>
                                            </div>
                                        </div>';
                            }
                            else{
                                echo '<p style="color: red; margin-top: 20px; margin-left: 0px;">Xin chao!' . '</p> </li>';
                            }
                            ?>
                                    
                                
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
       
    </section>


</header>
<!-- dang ky -->

<!-- hinh dộng -->
<div class="row">

    <div class="col-md-9 col-xs-12">
        <div class="row">
            <div class="col-12">
                <img src="Content/imagetourdien/banner.jpg" class="img-responsive"alt="">
            </div>
        </div>
    </div>
    <!-- hien thi 4 sach moi nhat -->

    <div class="col-md-3 col-xs-12  justify-content-center align-items-center bg-light ">
        <h3 class="text-center">Sách Mới Nhất</h3>
        <?php 
        $s=new sach();
        $r=$s->select4LatestBook();
        while($set=$r->fetch()):
        ?>
        <div class="row mb-1 ">
            <a href="index.php?action=chitietsach&id=<?php echo $set['masach']?>" >
                <div class="col-md-4 ">
                    <div class="card" style="width: 7rem; height:10rem;">
                    <img class="card-img-top" src="./Content/IMG PHP/<?php echo $set['hinh']?>" alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-8 text-left">
                    <div class="card-body">
                        <h5 class="card-title " style="color:black;"><?php echo $set['tensach']?></h5>
                        <span class="rating_star card-text">  
                        <?php
                            for($i=1;$i<=$set['rating'];$i++):                                
                        ?>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <?php
                            endfor;
                         ?>
                         <?php
                            for($i=1;$i<=5-$set['rating'];$i++):                                
                        ?>
                         <i class="fa fa-star-o" aria-hidden="true"></i>
                         <?php
                            endfor;
                         ?>
                    </span>
                        <p class="card-text"><?php echo number_format($set['gia'])?>đ</p>
                    </div>
                </div>
            </a>
        </div>
        <?php endwhile;?>
    </div>
</div>