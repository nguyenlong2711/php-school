<!--tạo sp thì tất cả sp đc lưu vào session,session phải là array-->
<?php
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=array();
    }
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'add_cart':
            $masach=$_POST['masach'];
            $soluong=$_POST['txtsoluong'];
            // vì addItem ko phải là lớp nên gọi bình thường
            addItem($masach,$soluong);
            include "View/cart.php";
            break;
        case 'cart':
            include "View/cart.php";
            break;
        case 'updateqty':
        if (isset($_POST['newqty'])) {
            foreach ($_SESSION['cart'] as $key => $item) {
                foreach ($_POST['newqty'] as $k => $i) {
                    if ($key == $k) {
                        if ($i[$k] != $item['soluong']) {
                            update_item($item[masach],$i);
                            echo "<meta http-equiv='refresh' content='0; url=../index.php?controller=giohang&action=cart'/>";
                        }
                    }
                }
            }
        }
        break;
        case "xoa":
            if(isset($_GET['id'])){
                unset($_SESSION['cart'][$_GET['id']]);
            }
            echo "<meta http-equiv='refresh' content='0; url=../index.php?controller=giohang&action=cart'/>";
            break;
    }
?>