<?php
$action="update";
if(isset($_GET['action'])){
    $action=$_GET['action'];

}
switch($action){
    case 'changepass';
        include 'view/changepass.php';
        break;
    case 'change_password_action':
        // Nhận dữ liệu và gán vào các biến đồng thời xử lý chuỗi
            $makh=$_SESSION['makh'];
            $old_pass = md5($_POST['old_pass'],false);
            $new_pass = $_POST['new_pass'];
            $re_new_pass = $_POST['re_new_pass'];
            // Nếu mật khẩu cũ nhậ đúng
            if ($old_pass != $_SESSION['pass'])
            {   
                echo " <script> alert(`".$_SESSION['pass']." !!`); </script> ";
                echo " <script> alert(`".$old_pass." !!`); </script> ";
                echo " <script> alert(` Mật khẩu cũ nhập không chính xác, đảm bảo đã tắt caps lock. !!`); </script> ";
            }// Ngược lại nếu độ dài mật khẩu mới nhỏ hơn 6 ký tự
            else if (strlen($new_pass) < 8)
            {
                echo " <script> alert(` Mật khẩu quá ngắn, hãy thử với mật khẩu khác an toàn hơn. !!`); </script> ";
            }
            // Ngược lại nếu mật khẩu mởi nhập lại không khớp
            else if ($new_pass != $re_new_pass)
            {
                echo " <script> alert(` Nhập lại mật khẩu mới không khớp, đảm bảo đã tắt caps lock. !!`); </script> ";
            }
            // Ngược lại
            else
            {
                $new_pass = md5($new_pass); // Mã hoá mật khẩu sang MD5
                // Lệnh SQL đổi mật khẩu
                $sql_change_pass = "UPDATE khachhang SET pass = '$new_pass' WHERE makh = '$makh'";
                // Thực hiện truy vấn
                $db=new connect();
               $result=$db->execP($sql_change_pass); 
                // Giải phóng kết nối
                $result->execute();
                
                // Hiển thị thông báo và tải lại trang
                echo '
                    <script>
                        alert(` Đổi Mật Khẩu Thành Công.Vui Lòng Đăng Nhập Lại !!`);
                    </script>
                ';
                 echo "<meta http-equiv='refresh' content='0; url=../controller=login&action=logout'/>";
            }
            break;
    case 'updateprofile';
        include 'view/updateprofile.php';
        break;
    case 'update_profile_action':
        $makh= $_SESSION['makh'];
        $tenkh=$_POST['txttenkh'];
        $sodt=$_POST['txtsodt'];
        $diachi=$_POST['txtdiachi'];
        $email=$_POST['txtemail'];
         echo " <script> alert(`".$tenkh."`); </script> ";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo " <script> alert(` Email Không Hợp Lệ. !!`); </script> ";
        }else{
            
        }
        break;


    }



?>