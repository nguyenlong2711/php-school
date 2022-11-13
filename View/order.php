<div class="table-responsive">
 <?php
  if(!isset($_SESSION['makh'])||count($_SESSION['cart'])==0):
  
    echo '<script> alert("Bạn chưa đăng nhập");</script>';
    include "login.php";
  
 ?>
 <?php
 else:
 ?>
    <form action="" method="post">
      <table class="table table-bordered" border="0">
      <?php
        $hd=new HoaDon();
        $result=$hd->getOrder($_SESSION['sohd']);
        $sohd=$result[0];
        $tenkh=$result[1];
        $diachi=$result[2];
        $sodt=$result[3];
        $ngaydat=$result[4];
        $d=new DateTime($ngaydat);
     
                        
       echo '<tr>
          <td colspan="4">
            <h2 style="color: red;">HÓA ĐƠN</h2>
          </td>
        </tr>';
       echo '<tr>
          <td colspan="2">Số Hóa đơn:'.$sohd.'</td>
          <td colspan="2"> Ngày lập:'.$d->format('d/m/Y').'</td>
        </tr>';
       echo '<tr>
          <td colspan="2">Họ và tên:</td>
          <td colspan="2">'.$tenkh.'</td>
        </tr>';
       echo '<tr>
          <td colspan="2">Địa chỉ:  </td>
          <td colspan="2">'.$diachi.'</td>
        </tr>';
        echo '<tr>
          <td colspan="2">Số điện thoại: </td>
          <td colspan="2">'.$sodt.'</td>
        </tr>';
      ?>
      </table>
      <!-- Thông tin sản phầm -->
      <table class="table table-bordered">
        <thead>
       
          <tr class="table-success">
            <th>Số TT</th>
            <th>Thông Tin Sản Phẩm</th>
            <th>Tùy Chọn Của Bạn</th>
            <th>Giá</th>
          </tr>
        </thead>
        <tbody> 
        <?php
        $j=0;
        $subtotal=0;
          $result=$hd->getOrderDetail($_SESSION['sohd']);
          while($set= $result->fetch()):
            $j++;
            $subtotal+=($set['gia']*$set['soluongmua']);
        ?>
            <tr>
              <td><?php echo $j;?></td>
              <td><?php echo $set['tensach'];?></td>
              <td>Đơn Giá: <?php echo  number_format($set['gia']);?> - Số Lượng:<?php echo $set['soluongmua'];?> <br />
              </td>
              <td><?php echo  number_format($set['gia']*$set['soluongmua']);?> VND</td>
            </tr>

          <tr>
            <?php
            endwhile;
            ?>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td >
              <?php echo number_format($subtotal);?> VNĐ
            </td>
           
          </tr>
        </tbody>
      </table>
    </form>
  <?php
  endif;
  ?>
</div>
</div>