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
        public function select4LatestBook(){
        $db=new connect();
		$strQuery = "SELECT * FROM book ORDER BY masach DESC limit 4";
		$r=$db->getList($strQuery);
        return $r;
	}
        public function getBookById($id){
		$db = new connect();
        $strQuery = "select * from book where masach = '$id'";
        $r = $db->getInstance($strQuery);
        return $r;
	}
        public function getBookByCategory($category,$start,$limit){
        $db = new connect();
        $strQuery="select distinct * from book where matl = '$category' limit "."$start".","."$limit";
        $r = $db->getList($strQuery);
        return $r;
    }
    public function getBookByCategory1($category){
        $db = new connect();
        $strQuery="select  * from book where matl = '$category' ";
        $r = $db->getList($strQuery);
        return $r;
    }
     public function getBookByCategoryLimit($category,$limit){
        $db = new connect();
        $strQuery="select  * from book where matl = '$category' limit $limit";
        $r = $db->getList($strQuery);
        return $r;
    }
    public function searchBook($key){
        $db = new connect();
        $strQuery="select * from book where tensach like '%$key%'";
        $r = $db->getList($strQuery);
        return $r;
    }
    public function getTop12SachMoiNhat(){
        $db=new connect();
        $strQuery="select * from book order by masach desc limit 12";
        $r=$db->getList($strQuery);
        return $r;
    }
    public function getListSachSapPhatHanh(){
        $db=new connect();
        $today = date("Y-m-d");
        $strtime=strtotime($today);
        $strQuery="SELECT * FROM `book` WHERE namxuatban > '$today'";
        $r=$db->getList($strQuery);
        return $r;
    }
    function getListSanPhamPage($start,$limit){
        $select="select * from hanghoa limit "."$start".","."$limit";
        $db=new connect();
        $result=$db->getList($select);
        return $result;
    }
    public function getTacGia($id){
        $strQuery="SELECT tentacgia from tacgia,book where masach =$id and tacgia.matg=book.matg";
        $db = new connect();
        $r = $db->getInstance($strQuery);
        return $r;
    }
     public function getBookByTacGia($id){
        $strQuery="SELECT * from book where matg=$id ";
        $db = new connect();
        $r = $db->getList($strQuery);
        return $r;
    }public function getTacGia1($matg){
        $strQuery="SELECT tentacgia from tacgia where matg=$matg ";
        $db = new connect();
        $r = $db->getList($strQuery);
        return $r;
    }
    public function getNXB($id){
        $strQuery="SELECT tennxb from nhaxuatban,book where masach =$id and nhaxuatban.manxb=book.manxb";
        $db = new connect();
        $r = $db->getInstance($strQuery);
        return $r;
    }
     public function getListBookHighRating(){
        $strQuery="SELECT * from book where rating >= 3 ORDER by rating desc limit 12";
        $db = new connect();
        $r = $db->getList($strQuery);
        return $r;
    }
    public function updateViews($id){
        $strQuery="UPDATE `book` SET `soluotxem` = soluotxem +1 WHERE `book`.`masach` =  $id";
        $db = new connect();
        $r = $db->exec($strQuery);
        return $r;
    } public function updateRating($id, $rating){
        $strQuery="UPDATE `book` SET `rating` = $rating WHERE `book`.`masach` =  $id";
        $db = new connect();
        $r = $db->exec($strQuery);
        return $r;
    }


    




    }


?>