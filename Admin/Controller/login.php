<?php
$action='login';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
switch($action){
    case 'login':
        include 'View/Login.php';
        break;
    case 'login_action':
         if($_SERVER['REQUEST_METHOD']=='POST'){
                $user = $_POST['txtusername'];
                $password = $_POST['txtpassword'];
                $crypt=md5($password,false);
                $dt=new admin();
                $result = $dt->loginAdmin($user,$crypt);
                if($result!=false){
                    $_SESSION['admin']=$result[0];
                    echo "<script> alert('dang nhap thanh cong') </script>";
                    echo '<meta http-equiv=refresh content="0;url=../index.php?controller=home&acttion=home"/>';
                }else{
                     echo "<script> alert('Vui lòng kiểm tra lại tải khoản hoặc mật khẩu') </script>";
                    echo '<meta http-equiv=refresh content="0;url=../index.php?controller=login"/>';
                }
            }
             break;
    case 'logout':
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
             echo'<script> alert("Đăng Xuất Thành Công")</script>';
            echo "<meta http-equiv='refresh' content='0; url=../index.php'/>";
        }
        break;
}
?>