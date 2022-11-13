
<section id="examples" class="text-center">
                <?php
                   $search_key=isset($_POST['txtsearch'])?$_POST['txtsearch']:'';
                ?>
      <!-- Heading -->
      <div class="row">
          <div class=" col-lg-12 text-left">
              <h3 class="mb-5 font-weight-bold" style="color: red;">Từ Khoá :<?php echo $search_key;?></h3>
          </div>
      </div>
      <!--Grid row-->
       <div class="row">
                <?php
                    $s=new sach();
                    $result=$s->searchBook($search_key);
                   while($set = $result->fetch()):
                ?>
              <!--Grid column-->
                       <div class="col-lg-3 col-md-4 mb-3 text-center">
                           <a href="./index.php?action=chitietsach&id=<?php echo $set[0] ?>">
                               <div class="view overlay z-depth-1-half">
                                   <img src="./Content/IMG PHP/<?php echo $set[1];?>" class="img-fluid" alt="" style="max-height:250px;">
                                   <div class="mask rgba-white-slight"></div>
                               </div>
                               <h5 class="my-4 font-weight-bold" style="color: black;"><?php echo $set['tensach'] ?></br>
                                   <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo number_format( $set['gia']);?><u>VNĐ</u></br>
                            </a>
                                   </h5>
                                       <button class="btn btn-danger" id="may4" value="lap 4">Hot</button>
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
                                    </span> <br>
                           
                       </div>
          <?php endwhile;?>
      </div>
      

      <!--Grid row-->

  </section>
  <!-- end sp moi nhat -->
