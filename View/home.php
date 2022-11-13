  
  <!--Section: Examples-->
  <section id="examples" class="text-center">
    <div class="row mt-2">
        <label for="" style="width:150px;height:50px;line-height:50px;font-size:18px;">Sắp Xếp :</label>
        <a href="#tieuthuyetmoinhat" class="btn btn-default float-left" style="width:150px;height:50px;line-height:50px;font-size:18px;">Mới Nhất</a>
        <a href="#tieuthuyetchonloc" class="btn btn-default float-left" style="width:150px;height:50px;line-height:50px;font-size:18px">Chọn Lọc</a>
        <a href="#tieuthuyetsapphathanh" class="btn btn-default float-left" style="width:150px;height:50px;line-height:50px;font-size:18px">Sắp Phát Hành</a> <br>
    </div>
      <!-- Heading -->
      <div class="row">
          <div class="col-lg-12 text-center">
              <h3 class="my-5 font-weight-bold" style="color: red;">TIỂU THUYẾT MỚI NHẤT</h3>
          </div>
      </div>
      <!--Grid row-->
      <div class="row" id="tieuthuyetmoinhat">
                <?php
                    $n=new Sach();
                    $r=$n->getTop12SachMoiNhat();
                   while($set = $r->fetch()):
                ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-center ">
                <a href="./index.php?action=chitietsach&id=<?php echo $set[0] ?>" >
                    <div class="view overlay z-depth-1-half">
                        <img src="./Content/IMG PHP/<?php echo $set[1];?>" class="img-fluid" alt="" style="max-height:250px;">
                        <div class="mask rgba-white-slight"></div>
                    </div>
                        <h5 class="my-4 font-weight-bold" style="color: black;"><?php echo $set['tensach'] ?><button class="btn btn-danger" id="may4" value="lap 4">New</button></br>
                    <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo number_format( $set['gia']);?><u>VNĐ</u></br>
                </a>
                    </h5>
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
              </div>

         <?php endwhile;?>
      </div>

      <!--Grid row-->

  </section>
  <!-- end sản phẩm mới nhất -->
  <section>
      <div class="row">
          <div class="col-lg-12 text-center">
              <h3 class="my-5 font-weight-bold" style="color: red;">TIỂU THUYẾT CHỌN LỌC</h3>

          </div>
      </div>
      <div class="row" id="tieuthuyetchonloc">
                <?php
                    $r=$n->getListBookHighRating();
                   while($set2 = $r->fetch()):
                ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-center">
                  <a href="./index.php?action=chitietsach&id=<?php echo $set2[0] ?>">
                    <div class="view overlay z-depth-1-half">
                        <img src="./Content/IMG PHP/<?php echo $set2[1];?>" class="img-fluid" alt="" style="max-height:250px;">
                        <div class="mask rgba-white-slight"></div>
                    </div>
                        <h5 class="my-4 font-weight-bold" style="color: black;"><?php echo $set2['tensach'] ?><button class="btn btn-danger" id="may4" value="lap 4">Hot</button></br>
                    <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo number_format( $set2['gia']);?><u>VNĐ</u></br>
                  </a>
                  </h5>
                   <span class="rating_star card-text">  
                        <?php
                            for($i=1;$i<=$set2['rating'];$i++):                                
                        ?>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <?php
                            endfor;
                         ?>
                         <?php
                            for($i=1;$i<=5-$set2['rating'];$i++):                                
                        ?>
                         <i class="fa fa-star-o" aria-hidden="true"></i>
                         <?php
                            endfor;
                         ?>
                    </span>
                  
              </div>

         <?php endwhile;?>
      </div>
  </section>
   <section>
      <div class="row">
          <div class="col-lg-12 text-center">
              <h3 class="my-5 font-weight-bold" style="color: red;">SÁCH SẮP PHÁT HÀNH</h3>

          </div>
      </div>
      <div class="row" id="tieuthuyetsapphathanh">
                <?php
                    $r=$n->getListSachSapPhatHanh();
                  if($r->rowCount()==0){
                      echo('<h3 class="my-5 font-weight-bold" style="color: Blue;">TẠM THỜI CHƯA CÓ SÁCH SẮP PHÁT HÀNH</h3>');
                  }
                   while($set2 = $r->fetch()):
                ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-center">
                  <a href="./index.php?action=chitietsach&id=<?php echo $set2[0] ?>">
                    <div class="view overlay z-depth-1-half">
                        <img src="./Content/IMG PHP/<?php echo $set2[1];?>" class="img-fluid" alt="" style="max-height:250px;">
                        <div class="mask rgba-white-slight"></div>
                    </div>
                        <h5 class="my-4 font-weight-bold" style="color: black;"><?php echo $set2['tensach'] ?><button class="btn btn-danger" id="may4" value="lap 4">Hot</button></br>
                    <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo number_format( $set2['gia']);?><u>VNĐ</u></br>
                  </a>
                  </h5>
                   <span class="rating_star card-text">  
                        <?php
                            for($i=1;$i<=$set2['rating'];$i++):                                
                        ?>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <?php
                            endfor;
                         ?>
                         <?php
                            for($i=1;$i<=5-$set2['rating'];$i++):                                
                        ?>
                         <i class="fa fa-star-o" aria-hidden="true"></i>
                         <?php
                            endfor;
                         ?>
                    </span>
                  
              </div>

         <?php endwhile;?>
      </div>
  </section>
  