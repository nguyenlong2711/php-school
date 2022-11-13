<?php
$action="login";
if(isset($_GET['action'])){
    $action=$_GET['action'];

}
switch($action){
    case "login":
        include 'view/login.php';
        break;
    case "login_action":
        $username=isset($_POST['txtusername']) ? $_POST['txtusername'] : '';
        $password=isset($_POST['txtpassword']) ? $_POST['txtpassword'] : '';
        if($username==''||$password==''){
             echo'<script> alert("Lỗi!!! Vui Lòng Kiểm Tra Lại Tên Đăng Nhập Và Mật Khẩu")</script>';
             echo "<meta http-equiv='refresh' content='0; url=../index.php?controller=login'/>";
             break;
        }else{
            $crypt=md5($password,false);
            $user=new khachhang();
            $u=$user->login($username,$crypt);
            if($u!=false){
                $_SESSION['makh']=$u[0];
                $_SESSION['tenkh']=$u[1];
                // $_SESSION['sodt']=$u[2];
                $_SESSION['user']=$u[3];
                $_SESSION['pass']=$u[4];
                // $_SESSION['diachi']=$u[5];
                // $_SESSION['email']=$u[6];
                // $_SESSION['vaitro']=$u[7];
                echo'<script> alert("dang nhap thanh cong")</script>';
                echo "<meta http-equiv='refresh' content='0; url=../index.php'/>";
            }
            else{
                echo'<script> alert("Tên đăng nhâp hoặc mật khẩu không đúng")</script>';
                echo "<meta http-equiv='refresh' content='0; url=../index.php?controller=login'/>";
            }
        }
       
        break;
    case 'logout':
        if (isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['makh'])) {
             unset($_SESSION['tenkh']);
            unset($_SESSION['user']);
            unset($_SESSION['pass']);
            unset($_SESSION['makh']);
            unset($_SESSION['sohd']);
            unset($_SESSION['cart']);

            echo "
                <script>
                    alert(`Dang xuat thanh cong`);
                </script>
            ";
        echo "<meta http-equiv='refresh' content='0; url=../index.php'/>";
        }else{
            echo "<meta http-equiv='refresh' content='0; url=../index.php'/>";
        }
        break;
    case 'changepass':
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
    case 'forget_password':
        include 'view/resetpass.php';
        break;
    case 'reset_password':
        if(isset($_POST['txtEmail'])){
        require './Model/class.phpmailer.php';
		$mail = new PHPMailer;
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = 587;								//Sets the default SMTP server port 587, 465
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'netproem@gmail.com';					//Sets SMTP username
		$mail->Password = 'ko0lzsmile123';					//Sets SMTP password
		$mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = 'netproem@gmail.com';					//Sets the From email address for the message
		$mail->FromName = 'Ebook.vn';				//Sets the From name of the message
		$mail->AddAddress($_POST["txtEmail"], $_POST["name"]);		//Adds a "To" address
		//$mail->AddCC($_POST["email"], $_POST["name"]);	//Adds a "Cc" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML	// khai báo nội dung email hiển thị định dạng HTML			
		$mail->Subject = "Forgot Password";
        $kh= new khachhang();
        $timestamp = time();
        $token=md5(rand(1, 100));
        $kh->createResetPassword($_POST["txtEmail"],$token,$timestamp);
        $bodycontent='<a href="localhost/index.php?controller=login&action=reset_password_action&email='.$_POST['txtEmail'].'&token='.$token.'">Nhấn vào đây để tiến hành đặt lại mật khẩu</a>';				//Sets the Subject of the message
		$mail->Body = $bodycontent;				//An HTML or plain text message body
		if($mail->Send())								//Send an Email. Return true on success or false on error
		{
			echo '
                    <script>
                        alert(`Gửi Email Thành Công!!Vui Lòng Kiểm Tra Emaiil !!`);
                    </script>
                ';
            echo "<meta http-equiv='refresh' content='0; url=../'/>";
		}
		else
		{
			echo '
                    <script>
                        alert(` Gửi Email  Không Thành Công.Vui Lòng Kiểm Tra Emaiil !!`)`);
                    </script>
                ';
		}
		$name = '';
		$email = '';
		$subject = '';
		$message = '';
        };
        break;
    case 'reset_password_action':
        $user = new Khachhang();
        $email=isset($_GET['email']) ? $_GET['email'] : '';
        $token=isset($_GET['token']) ? $_GET['token'] : '';
        $timestamp= time();
        $result=$user->RegResetPassword($email,$token);
        if($result!=false){
            if($timestamp-$result['m_time']>=360){
                    echo '
                    <script>
                        alert(` Đã Quá Hạn Thời Gian `);
                    </script>
                ';
                 echo "<meta http-equiv='refresh' content='0; url=../index.php'/>";
                return;
            }else{
                include 'view/resetpass1.php';
            }
            break;
        }else{
             echo '
                    <script>
                        alert(` Không Tồn Tại tài khoản `);
                    </script>
                ';
        }
        break;
     case 'update_password':
        $email=$_POST['txtEmail'];
        $password=$_POST['txtPassword'];
        $Repassword=$_POST['txtRePassword'];
        if ($password != $Repassword)
            {   
                 echo " <script> alert(` Nhập lại mật khẩu mới không khớp, đảm bảo đã tắt caps lock. !!`); </script> ";
            }// Ngược lại nếu độ dài mật khẩu mới nhỏ hơn 8 ký tự
            else if (strlen($password) < 8)
            {
                echo " <script> alert(` Mật khẩu quá ngắn, hãy thử với mật khẩu khác an toàn hơn. !!`); </script> ";
            }
            // Ngược lại
            else
            {
                $password = md5($password); // Mã hoá mật khẩu sang MD5
                // Lệnh SQL đổi mật khẩu
                $sql_change_pass = "UPDATE khachhang SET pass = '$password' WHERE email = '$email'";
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
                  echo "<meta http-equiv='refresh' content='0; url=../index.php'/>";
            }
        break;   


    }



?>