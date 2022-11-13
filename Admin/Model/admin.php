<?php
    class admin{
        var $makh=null;
        var $tenkh=null;
        var $ngaysinh=null;
        var $sodt=null;
        var $user=null;
        var $pass=null;
        var $email=null;
        var $vaitro=null;
        public function __construct(){
    
    }
        public function getAdmin($id){
        $query = "SELECT * FROM khachhang WHERE makh = $id and vaitro=1 LIMIT 1";
        $db = new connect();
        $result = $db->getList($query);
        $set = $result->fetch();
        return $set;
    }
    public function loginAdmin($username,$password){
        $select="select user from khachhang where user='$username' and pass='$password' and vaitro=1 LIMIT 1";
        $db=new connect();
        $result=$db->getList($select);
        //tra ve 1 row tong khachhang
        $set = $result->fetch();
        return $set;
    }
}


?>