<?php
    class khachhang{
        var $manv=null;
        var $tennv=null;
        var $ngaysinh=null;
        var $sodt=null;
        var $user=null;
        var $pass=null;
        public function __construct(){
    
    }
        public function getUser($id){
        $query = "SELECT * FROM khachhang WHERE makh = $id LIMIT 1";
        $db = new connect();
        $result = $db->getList($query);
        $set = $result->fetch();
        return $set;
    }
    public function login($username,$password){
        $select="select * from khachhang where user='$username' and pass='$password'";
        $db=new connect();
        $result=$db->getList($select);
        //tra ve 1 row tong khachhang1
        $set = $result->fetch();
        return $set;
    }
    public function xylyReg(){
        $tenkh =isset($_POST['txttenkh']) ? $_POST['txttenkh'] : '';;
        $username = isset($_POST['txtusername']) ? $_POST['txtusername'] : '';
        $password = isset($_POST['txtpass']) ? $_POST['txtpass'] : '';
        $retypepassword = isset($_POST['retypepassword']) ? $_POST['retypepassword']:'';
        $email = $_POST['txtemail'];
        $strcheckemail="select email from khachhang ";
        $db = new connect();
        $listemail= $db->getList($strcheckemail);
        $emailcheck=false;
        foreach($listemail as $value){
            if($value['email']==$email){
                $emailcheck=true;
            }
        }
        $diachi = $_POST['txtdiachi'];
        $dt = $_POST['txtsodt'];
        $usernamecheck=$this->getUserName();
        while($usn=$usernamecheck->fetch()){
            if($username==$usn[0]){
                 echo " <script> alert(`Tên đăng nhập đã tồn tại`); </script> ";
                 echo "<meta http-equiv='refresh' content='0; url=../index.php?controller=registration'/>";
            return;
            }
        }
        if(strlen($dt)!=10){
            echo " <script> alert(`Số Điện Thoại Phải có 10 số !!`); </script> ";
            echo "<meta http-equiv='refresh' content='0; url=../index.php?controller=registration'/>";
            return;
        }
        elseif ($emailcheck== true) {
             echo " <script> alert(`Email Đã Tồn Tại !!`); </script> ";
             echo "<meta http-equiv='refresh' content='0; url=../index.php?controller=registration'/>";
             return;
        }
        elseif (strlen($password) <= '8') {
             echo " <script> alert(`Mật Khẩu phải ít nhất 8 kí tự !!`); </script> ";
             echo "<meta http-equiv='refresh' content='0; url=../index.php?controller=registration'/>";
             return;
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            echo " <script> alert(`Mật khẩu phải ít nhất 1 số!`); </script> ";
            echo "<meta http-equiv='refresh' content='0; url=../index.php?controller=registration'/>";
            return;
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            echo " <script> alert(`Phải viết hoa 1 chữ!`); </script> ";
            echo "<meta http-equiv='refresh' content='0; url=../index.php?controller=registration'/>";
            return;
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
             echo " <script> alert(`Phải viết thường 1 chữ!!`); </script> ";
             echo "<meta http-equiv='refresh' content='0; url=../index.php?controller=registration'/>";
             return;
        }elseif($password!=$retypepassword){
             echo " <script> alert(`Nhập lại mật khẩu sai !!`); </script> ";
             echo "<meta http-equiv='refresh' content='0; url=../index.php?controller=registration'/>";
             return;
        }
         else {
            $crypt = md5($password, false);
            $this->insertUserP($tenkh, $username, $crypt, $email, $diachi, $dt);
            echo "
            <script>
                alert(`Dang ky thanh cong`);
            </script>
        ";
        }
        
    }
        public function insertUserP($tenkh, $user, $pass, $email, $diachi, $dt)
        {
            //b1: cau lenh truy van

            // $query = "INSERT INTO khachhang1(makh, tenkh, username, matkhau, email, diachi, sodienthoai, vaitro) VALUES(null,?, ?, ?, ?, ?, ?, default)";

            $query = "INSERT INTO khachhang(makh, tenkh, user, pass, email, diachi, sodt,vaitro) VALUES(null,:tenkh, :user, :pass, :email, :diachi, :sodienthoai, default)";

            //b2: prepare
            $db = new connect();
            $stm = $db->execP($query);
            //muon prepare duoc phai execute

            // $stm->execute([$tenkh, $username, $matkhau, $email, $diachi, $dt]);

            $stm->bindParam(":tenkh", $tenkh);
            $stm->bindParam(":user", $user);
            $stm->bindParam(":pass", $pass);
            $stm->bindParam(":email", $email);
            $stm->bindParam(":diachi", $diachi);
            $stm->bindParam(":sodienthoai", $dt);

            $stm->execute();
        }
        public function getUserName() {
        $select="select tenkh from khachhang";
        $db=new connect();
        $result=$db->getList($select);
        //tra ve 1 row tong khachhang1
        return $result;
        }
        public function RegResetPassword($email,$token) {
        $select="SELECT * FROM `reset_pass` WHERE `m_email` = '$email' AND `m_token` = '$token'";
        $db=new connect();
        $result=$db->getInstance($select);
        return $result;
        }
        public function createResetPassword($email,$token,$time) {
        $select="INSERT INTO `reset_pass` (`id`, `m_email`, `m_token`, `m_time`, `m_numcheck`) VALUES (NULL, '$email', '$token', '$time', '0');";
        $db=new connect();
        $result=$db->execP($select);
        $result->execute();
        return $result;
        }
        
}


?>