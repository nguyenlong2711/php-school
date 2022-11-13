<?php
    $action = 'order';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    switch($action){
        case 'order':
            include "View/Order.php";
            break;
        case 'oder_detail':
            $hd=new HoaDon();
            $sohdid=$hd->insertOrder($_SESSION['makh']);
            $_SESSION['sohd']=$sohdid;
            $total=0;
            foreach($_SESSION['cart'] as $key=>$item){
                $hd->insertOrderDetail($sohdid,$item['masach'],$item['soluong'],$item['total'],0);
                $total+=$item['total'];
            }
            $hd->updateOrderTotal($sohdid,$total);
            include "View/Order.php";
            // foreach($_SESSION['cart'] as $key=>$item){
            //     echo '<script> alert ("'.$item['masach'].'")</script>';
            //     echo '<script> alert ("'.$item['soluong'].'")</script>';
            //     echo '<script> alert ("'.$item['total'].'")</script>';
            //     $total+=$item['total'];
            // }
            break;
    }

?>