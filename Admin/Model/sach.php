<?php
    class sach{
        var $masach=null;
        var $tensach=null;
        var $namsb=null;
        var $gia=null;
        var $sotrang=null;
        var $soluong=null;
        var $matacgia=null;
        var $matheloai=null;
        var $manhaxb=null;
        var $danhmuc=null;
        public function __construct(){}

        public function getBooks(){
        $db=new connect();
		$strQuery = "SELECT * FROM book ";
		$r=$db->getList($strQuery);
        return $r;
	}
     public function getBooksLimit($start,$limit){
        $db=new connect();
		$strQuery ="select * from book order by masach desc limit "."$start".","."$limit";
		$r=$db->getList($strQuery);
        return $r;
	}
        public function getBookById($id){
		$db = new connect();
        $strQuery = "select * from book where masach = '$id'";
        $r = $db->getInstance($strQuery);
        return $r;
	}
     public function getTheLoai($id){
        $strQuery="SELECT tentheloai from theloai,book where masach=$id and theloai.matl=book.matl";
        $db = new connect();
        $r = $db->getInstance($strQuery);
        return $r;
    }
    public function getTacGia($id){
        $strQuery="SELECT tentacgia from tacgia,book where masach =$id and tacgia.matg=book.matg";
        $db = new connect();
        $r = $db->getInstance($strQuery);
        return $r;
    }
    public function getNXB($id){
        $strQuery="SELECT tennxb from nhaxuatban,book where masach =$id and nhaxuatban.manxb=book.manxb";
        $db = new connect();
        $r = $db->getInstance($strQuery);
        return $r;
    }
    public function getListTL(){
        $strQuery="SELECT * from theloai ";
        $db = new connect();
        $r = $db->getList($strQuery);
        return $r;
    }
    public function getListNXB(){
        $strQuery="SELECT * from nhaxuatban ";
        $db = new connect();
        $r = $db->getList($strQuery);
        return $r;
    }
    public function getListTG(){
        $strQuery="SELECT * from tacgia ";
        $db = new connect();
        $r = $db->getList($strQuery);
        return $r;
    }
    public function insertBook($hinh,$tensach,$namxuatban,$gia,$sotrang,$soluong,$matg,$matl,$manxb){
        $strQuery="INSERT INTO `book` (`masach`, `hinh`, `tensach`, `namxuatban`, `gia`, `sotrang`, `soluong`, `matg`, `matl`, `manxb`) VALUES (NULL, '$hinh', '$tensach', '$namxuatban', '$gia', '$sotrang', '$soluong', '$matg', '$matl', '$manxb');  ";
        $db = new connect();
        $r = $db->exec($strQuery);
        return $r;
    }
    
    public function updateBook($masach,$hinh,$tensach,$namxuatban,$gia,$sotrang,$soluong,$matg,$matl,$manxb){
        $strQuery="UPDATE `book` SET `hinh` = '$hinh', `namxuatban` = '$namxuatban', `gia` = '$gia', `sotrang` = '$sotrang', `soluong` = '$soluong',`matg`='$matg', `matl` = '$matl', `manxb` = '$manxb' WHERE `book`.`masach` = $masach;  ";
        $db = new connect();
        $r = $db->exec($strQuery);
        return $r;
    }
    public function insertTheLoai($tentl){
        $strQuery="INSERT INTO `theloai` (`matl`,`tentheloai`) VALUES (NULL, '$tentl');  ";
        $db = new connect();
        $r = $db->exec($strQuery);
        return $r;
    }
    public function insertTacGia($tentg){
        $strQuery="INSERT INTO `tacgia` (`matg`,`tentacgia`) VALUES (NULL, '$tentg');  ";
        $db = new connect();
        $r = $db->exec($strQuery);
        return $r;
    }
    public function insertNXB($tennxb){
        $strQuery="INSERT INTO `nhaxuatban` (`manxb`, `tennxb`, `diachi`, `email`) VALUES (NULL, '$tennxb', 'diachi', 'diachi');  ";
        $db = new connect();
        $r = $db->exec($strQuery);
        return $r;
    }
    public function deleteBook($id){
         $strQuery="DELETE FROM `book` WHERE `book`.`masach` = $id  ";
        $db = new connect();
        $r = $db->exec($strQuery);
        return $r;
    }public function getListThongKe_SL_MatHang(){
        $strQuery="SELECT a.masach,a.tensach,sum(soluongmua) as soluongban from book a inner JOIN cthoadon b on a.masach=b.masach GROUP by a.masach,a.tensach ";
        $db = new connect();
        $r = $db->getList($strQuery);
        return $r;
    }


    




    }


?>