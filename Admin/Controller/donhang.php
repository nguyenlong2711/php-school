<?php
    $action='qldonhang';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'danggiao':
            include 'View/Qldonhang.php';
            break;
        case 'dahuy':
            include 'View/Qldonhang.php';
            break;
        case 'dagiao':
            include 'View/Qldonhang.php';
            break;
        case 'settinhtrang':
            $mshd=$_GET['id'];
            $tinhtrang=$_GET['tinhtrang'];
            $dh=new DonHang();
            $r=$dh->setTinhTrang($mshd,$tinhtrang);
            if($r==1){
                echo "<script> alert('Cập nhật tình trạng giao hàng thành công') </script>";
                echo '<meta http-equiv=refresh content="0;url=../index.php?controller=donhang&action=danggiao"/>';
            }else{
                 echo "<script> alert('Cập nhật không thành công') </script>";
            }
            break;

    }


?>