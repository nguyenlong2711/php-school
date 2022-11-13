

  <?php 
  $p=new Page();
  $limit=8;
  $start=$p->findStart($limit);
  $hh=new Sach();
  $result=$hh->getBookByCategory1($_GET['id']);
  $count=$result->rowCount();
// tinh xem so row
  $page=$p->findPage($count,$limit);
//   echo '<script type="text/javascript"> alert('.$start.')</script>';

  $currentPage=isset($_GET['page'])?$_GET['page'] :1;
    // echo '<script type="text/javascript"> alert('.$currentPage.')</script>';

  ?>
  

  <!--Section: Examples-->
   <section id="examples" class="text-center">
                <?php
                    $idcategory=$_GET['id'];
//                    echo '<script> alert('.$currentPage.')</script>';
//                echo '<script> alert('.$page.')</script>';
                    $header=isset($_GET['tentl'])?$_GET['tentl']:'';
                ?>
      <!-- Heading -->
      <div class="row">
          <div class=" col-lg-12 text-left">
              <h3 class="mb-5 font-weight-bold" style="color: red;">Danh Mục: <?php echo $header;?></h3>
          </div>
      </div>
      <!--Grid row-->
       <div class="row">
                <?php
                    $s=new sach();
                    $r=$s->getBookByCategory($idcategory,$start,$limit);
                   while($set = $r->fetch()):
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
                                    </span>
                           </a>
                       </div>
          <?php endwhile;?>
      </div>
      

      <!--Grid row-->

  </section>
  <!-- end sp moi nhat -->
  <!-- hien thi so trang -->
  <div class="col-md-6 div col-md-offset-3">
                    <ul class="pagination">
                        <?php
                        if($currentPage > 1 && $page >1){
                            echo '<li> <a href="index.php?controller=danhmuc&id='.$idcategory.'&tentl='.$header.'&page='.($currentPage-1).'">Prev</a> </li>';
                            
                        }
                        for($i=1;$i<=$page;$i++){
                        ?>
                        <li> <a href="index.php?controller=danhmuc&page=<?php echo $i;?>&id=<?php echo $idcategory?>&tentl=<?php echo $header?>"><?php echo $i;?></a> </li>
                        <?php 
                        }
                        if($currentPage < $page && $page >1){
                            echo '<li> <a href="index.php?controller=danhmuc&id='.$idcategory.'&tentl='.$header.'&page='.($currentPage+1).'">Next</a>  </li>';
                        }
                        ?>
                    </ul>
  </div>
 
  