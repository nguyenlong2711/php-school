
<div>
    <?php
    $n = new Sach();
    if (isset($_GET["id"])) {
        $r = $n->getBookById($_GET["id"]);
    }
    ?>
</div>
<section class="col-12">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold">CHI TIẾT SÁCH</h3>

            
        </div>

    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?controller=giohang&action=add_cart" method="post">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->

                    <div class="preview col-md-6">
                        <div class="tab-content">
                            <div class="tab-pane active" id="<?php echo $r['0'] ?>">

                                <img src="./Content/IMG PHP/<?php echo $r['hinh'] ?>" alt="" width="100%">
                            </div>

                            <?php
                            $res = $n->getBookByCategory1($r['matl']);
                            while ($setImg = $res->fetch()) :
                            ?>
                                <div class="tab-pane" id="<?php echo $setImg['hinh'] ?>">
                                    <img src="./Content/IMG PHP/<?php echo $setImg['hinh'] ?>" alt="">
                                </div>
                            <?php
                            endwhile;
                            ?>

                        </div>
                        <h3>Các tác phẩm cùng thể loại</h3>
                        <ul class="preview-thumbnail nav nav-tabs ">
                            <?php
                            $res = $n->getBookByCategory1($r['matl']);
                            while ($setImg = $res->fetch()) :
                            ?>
                                <li class="active">
                                    <a href="#<?php $r['hinh'] ?>" data-toggle="tab" id="<?php echo $setImg['hinh'] ?>">
                                        <img src="./Content/IMG PHP/<?php echo $setImg['hinh'] ?>" alt="">
                                    </a>
                                </li>
                            <?php
                            endwhile;
                            ?>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $r['masach'] ?>" />
                        <h3 class="product-title"><?php echo $r['tensach'] ?></h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="product-description">
                            
                        </p>
                        <h4 class="price">Giá bán: Miễn Phí</h4>

                        <h5 class="colors">Màu:

                            <input type="hidden" name="size" id="size" value="0" />

                            </br></br>
                            Số Lượng:

                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />


                        </h5>

                        <div class="action">

                            <button class="add-to-cart btn btn-default" type="submit" data-toggle="modal" data-target="#myModal">MUA NGAY
                            </button>

                            <a href="http://hocwebgiare.com/" target="_blank"> <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
</section>
<section>
    <?php
    // $cmt = new Comment();
    // $user = new User();
    // $res4 = $cmt->countComment($r['mahh']);
    ?>
    <p><b>Bình luận  ?></b></p>
    <hr>
    </div>
    <form action="./index.php?controller=index&action=comment&id=<?php echo $r['mahh']; ?>" method="post">
        <div class="row">

            <input type="hidden" name="txtmahh" value="<?php echo $r['mahh'] ?>" />
            <img src="Content/imagetourdien/people.png" width="50px" height="50px" ; />
            <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
            <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />

        </div>

    </form>

    <div class="row">
        <p class="float-left"><b>Các bình luận</b></p>
        <hr>
    </div>
    <?php
        if (isset($_SESSION['manv'])):
    ?>
    <div class="row">
        <?php

        $res4 = $cmt->getListComment($r['mahh']);
        while ($set = $res4->fetch()) :
        ?>
            <div class="col-12 m-3">
                <img style="display: inline;" src="Content/imagetourdien/people.png" width="50px" height="50px" ; />
                <p style="display: inline;">
                    <strong>
                        <?php
                        $userInfo = $user->getUser($set['makh']);
                        echo $userInfo["tenkh"];
                        ?>
                    </strong>:
                    <span>
                        <?php
                        echo $set['noidung'];
                        ?>
                    </span>
                </p>
            </div>
        <?php
        endwhile;
        ?>
    </div>
    <?php
        endif;
    ?>
</section>