<div>
    <?php
    $n = new Sach();
    if (isset($_GET["id"])) {
        $r = $n->getBookById($_GET["id"]);
        $tentacgia=$n->getTacGia($_GET["id"]);
        $nhaxuatban=$n->getNXB($_GET["id"]);
        $n->updateViews($_GET["id"]);
    }
    $cmt = new Comment();
    $kh = new khachhang();
    $res4 = $cmt->countComment($r['masach']);
    ?>
</div>
<div class="row bg-light my-5  py-5" style="line-height:40px;">
    <div class="col-md-3">
        <img src="./Content/IMG PHP/<?php echo $r['hinh']?>" alt="" class="img-responsive img-centered" style="width:250px;">
    </div>
    <div class="col-md-4 ml-5 ">
        <form action="index.php?controller=giohang&action=add_cart" method="post">
        <input type="hidden" name="masach" value="<?php echo $r['masach']?>" />
        <h1 class="font-weight-bold"><?php echo $r['tensach']?></h1>
        <h3 >Tác giả : <a href="index.php?controller=search?matg=<?php echo $r['matg']?>"><?php echo $tentacgia[0]?></a> </h3>
        <h3>Số Lượt Xem:<?php echo $r['soluotxem']?></h3>
        <!-- hiển thị rating -->
        <span class="rating_star card-text">  
            <?php
                            for($i=1;$i<=$r['rating'];$i++):                                
                        ?>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <?php
                            endfor;
                         ?>
                         <?php
                            for($i=1;$i<=5-$r['rating'];$i++):                                
                        ?>
                         <i class="fa fa-star-o" aria-hidden="true"></i>
                         <?php
                            endfor;
                         ?>
                    </span> (<?php echo $res4[0] ?>)Đánh giá
        <h3 style="font-weight:bold;">Giá: <?php echo number_format($r['gia'])?> VNĐ</h3>
        Số Lượng :<input type="number" name="txtsoluong" value=1 size="10" min="1" max="50" class="my-3"> <br>
        <button class="btn btn-primary " type="submit" style="width: 150px;" ><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size:24px;"></i><span style="line-height:35px;font-size:15px;font-weight:bold;">Mua Ngay</span></button>
        </form>
    </div>
    <div class="col-md-3 justify-content-center align-items-center mt-5">
        <table class="table" border="2" cellspacing="1">
            <tr>
                <th>Nhà Xuất Bản</th>
                <td><?php echo $nhaxuatban[0]?></td>
            </tr>
            <tr>
                <th>Thời gian xuất bản</th>
                <td><?php echo $r['namxuatban'];?></td>
            </tr>
             <tr>
                <th>Số Trang</th>
                <td><?php echo $r['sotrang']?></td>
            </tr>
        </table>
    </div>
</div>
<div class="">
  <h3 class="font-weight-bold">Các tác phầm cùng thể loại</h3>
  <hr>
     <div class="card-deck my-5 ">
          <?php
            $res = $n->getBookByCategoryLimit($r['matl'],6);
            while ($setImg = $res->fetch()) :
            ?>
            <a href="index.php?action=chitietsach&id=<?php echo $setImg['masach']?>">
            <div class="card border-light mb-3"style="width: 150px;height: 320px;">
                <img src="./Content/IMG PHP/<?php echo $setImg['hinh']?>" class="card-img-top img-fluid" alt="..." style="height: 220px;">
                <div class="card-body " style="justify-content: center;align-items: center;">
                    <h5 class="card-title" ><?php echo $setImg['tensach']?></h5>
                     <span class="rating_star card-text">
                        <?php
                            for($i=1;$i<=$setImg['rating'];$i++):                                
                        ?>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <?php
                            endfor;
                         ?>
                         <?php
                            for($i=1;$i<=5-$setImg['rating'];$i++):                                
                        ?>
                         <i class="fa fa-star-o" aria-hidden="true"></i>
                         <?php
                            endfor;
                         ?>
                    </span> <br>
                    <span class="card-text"><?php echo number_format($setImg['gia'])?> VNĐ</span>
                </div>
            </div>
            </a>
            <?php endwhile;?>
     </div>
</div>
</div>
<hr>
<!-- hien binh luan -->
<section>
    <p><b>Bình luận (<?php echo $res4[0] ?>)</b></p>
    <hr>
    <?php
        if (isset($_SESSION['makh'])):
    ?>
    <form action="">
        <div class="stars">
              <input class="star star-5"id="star-5"  type="radio" name="star"checked="checked" value="5" />
              <label class="star star-5" for="star-5"></label>
              <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
              <label class="star star-4" for="star-4"></label>
              <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
              <label class="star star-3" for="star-3"></label>
              <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
              <label class="star star-2" for="star-2"></label>
              <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
              <label class="star star-1" for="star-1"></label>
        </div>
         <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Đánh Giá" />
    </form>
    <form action="./index.php?controller=indexController&action=comment&id=<?php echo $r['masach']; ?>" method="post">
        <div class="row">

            <input type="hidden" name="txtmasach" value="<?php echo $r['masach'] ?>" />
            <img src="Content/imagetourdien/people.png" width="50px" height="50px" ; />
            <div class="stars">
              <input class="star star-5"id="star-5"  type="radio" name="star"checked="checked" value="5" />
              <label class="star star-5" for="star-5"></label>
              <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
              <label class="star star-4" for="star-4"></label>
              <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
              <label class="star star-3" for="star-3"></label>
              <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
              <label class="star star-2" for="star-2"></label>
              <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
              <label class="star star-1" for="star-1"></label>
            </div>
            <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
            <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />

        </div>

    </form>
        <?php else:?>
            <p><b>Vui lòng đăng nhập để có thể bình luận  <a href="index.php?controller=login">đăng nhập</a></b></p>

    <?php   
        endif;
    ?>
    <div class="row">
        <p class="float-left"><b>Các bình luận</b></p>
        <hr>
    </div>

   

        <?php
        $res5 = $cmt->getListComment($r['masach']);
        while ($set = $res5->fetch()) :
        ?>
        <div class="row">
            <div class="col-12 m-3">
                <img style="display: inline;" src="Content/imagetourdien/people.png" width="50px" height="50px" ; />
                <p style="display: inline;">
                    <strong>
                        <?php
                        $tenkh=$cmt->getUser($set['mabl']);
                        echo $tenkh;
                        ?>
                        
                    </strong>:
                    <span>
                        <?php
                        echo $set['noidung'];
                        ?>
                    </span> <br>
                    <span class="rating_star">
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
                    </span> <br>

                    <span>
                        <?php
                            $time=$cmt->getTime($set['mabl']);
                            $today=new DateTime('Now');
                            $dateFormat = $today->format("Y-m-d");                          
                            $datediff = abs(strtotime($dateFormat) - strtotime($time));
                            echo floor($datediff / (60*60*24));
                            ?> ngày trước.
                    </span>
                </p>
            </div>
        </div>
        <?php
        endwhile;
        ?>
</section>