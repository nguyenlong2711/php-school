<?php
     function addItem($masach,$soluong){
        $pros=new Sach();
        $res=$pros->getBookById($masach);
        // lay gia
        $cost=$res['gia'];
        $total=$cost*$soluong;
        $item=array('masach'=>$masach,
         'hinh'=>$res['hinh'],
         'tensach'=>$res['tensach'],
         'gia'=>$cost,
         'soluong'=>$soluong,
         'total'=>$total,
        );
        $_SESSION["cart"][$masach]=$item;
    }
    function update_item($masach, $soluong){
        $soluong = (int)$soluong;
        if ($soluong<=0) {
            unset($_SESSION['cart'][$masach]);
        }else{
            $_SESSION['cart'][$masach]['soluong'] = $soluong;
            $total = $_SESSION['cart'][$masach]['gia']*$_SESSION['cart'][$masach]['soluong'];
            $_SESSION['cart'][$masach]['total'] = $total;
        }
    }

?>