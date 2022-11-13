<?php
 $action=isset($_GET["action"])?$_GET["action"]:"";
            $dh=new DonHang();
            if($action=="danggiao"){
                 $r=$dh->getListDonHangDangGiao();
                 $header="Đơn Hàng Đang Giao";
            }elseif($action=="dahuy"){
                $r=$dh->getListDonHangDaHuy();
                $header="Đơn Hàng Đã Huỷ";
            }elseif($action=="dagiao"){
                $r=$dh->getListDonHangDaGiao();
                $header="Đơn Hàng Đã Giao";
            }
            else{
                 $r=$dh->getListDonHang();
            }
?>
<h2 ><?php echo $header; ?></h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Mã Số Hoá Đơn</th>
            <th>Mã Số Khách Hàng</th>
            <th>Tên Khách Hàng</th>
            <th>Ngày Mua</th>
            <th>Tổng Tiền</th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($set=$r->fetch()):
        ?>
        <tr>
                <td><?php echo $set['mshd']?></td>
                <td><?php echo $set['makh']?></td>
                <td><?php echo  $dh->getTenKH($set['mshd']) ?></td>
                <td><?php echo $set['ngaymua']?></td>
                <td><?php echo $set['tongtien']?></td>
                <td><a href="index.php?controller=donhang&action=settinhtrang&id=<?php echo $set['mshd']?>&tinhtrang=1" class="btn btn-primary">Đã Giao Hàng</a></td>
                <td><a href="index.php?controller=donhang&action=settinhtrang&id=<?php echo $set['mshd']?>&tinhtrang=2" class="btn btn-primary">Huỷ Đơn Hàng</a></td>
        </tr>
        <?php endwhile;?>
    </tbody>
</table>