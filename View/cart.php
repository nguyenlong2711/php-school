<div class="table-responsive">
    <?php
    if(!isset($_SESSION['cart'])|| count($_SESSION['cart'])==0):
      echo '<script> alert("Giỏ hàng chưa có sản phẩm") </script>'; 
      echo "<meta http-equiv='refresh' content='0; url=../index.php'/>";
    ?>
    <?php else: ?>
   
    <form action="index.php?controller=giohang&action=updateqty" method="post">
      <table class="table table-bordered">
        <thead>
          <tr><td colspan="5"><h2 style="color: red;">THÔNG TIN GIỎ HÀNG</h2></td></tr>
          <tr class="table-success">
            <th>Số TT</th>
            <th>Thông Tin Sản Phẩm</th>
            <th>Tùy Chọn Của Bạn</th>
            <th colspan="2">Giá</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $j=0;
            $thanhtien=0;
            foreach($_SESSION['cart'] as $key => $item):
            $cost=number_format($item['gia'],2);
            $total=number_format($item['total'],2);
            $thanhtien+=$item['total'];
            $j++; 
            ?>
            
            <tr>
              <!-- hien thi stt -->
              <td><?php echo $j;?></td>
              <td><img width="50px" height="50px" src="../Content/IMG PHP/<?php echo $item['hinh']?>"><?php echo $item['tensach']?></td>
              <td> - Số Lượng: <input type="text" name="newqty[<?php echo $key;?>]" value="<?php echo $item['soluong']?>" /><br />
                <p style="float: right;"> Thành Tiền<?php echo $total;?> <sup><u>đ</u></sup></p>
              </td>
              <td>Đơn Giá:<?php echo $cost?></td>
              <td><a href="index.php?controller=giohang&action=xoa&id=<?php echo $item['masach']?>"><button type="button" class="btn btn-danger">Xóa</button></a>

                <button type="submit" class="btn btn-secondary">Sửa</button>

              </td>
            </tr>
            <?php endforeach;?>
          <tr>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">
              <b> <sup><u><?php echo number_format($thanhtien,2);?>đ</u></sup></b>
            </td>
            <td><a href="index.php?controller=order&action=oder_detail">Thanh toán</a></td>
          </tr>
        </tbody>
      </table>
    </form>
 <?php endif;?>
</div>
</div>