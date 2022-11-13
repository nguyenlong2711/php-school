<?php
$action="registration";
if(isset($_GET['action'])){
    $action=$_GET['action'];
} //lấy thông tin từ form đăng ký khi ta nhan dang ky
switch($action){
    case "registration":
        include 'View/registration.php';
        break;
    case "registration_action":
        //nhận những giá trị của post từ trang registration
        $kh=new khachhang();
        $u=$kh->xylyReg();

        include "View/home.php";
        break;
}
?>