<?php
    class donhang{
        var $mshd=null;
        var $makh=null;
        var $ngaymua=null;
        var $tongtien=0;
        public function __construct(){}

        public function getListDonHang(){
            $db=new connect();
            $strQuery = "SELECT * FROM hoadon ";
            $r=$db->getList($strQuery);
            return $r;
        }
        public function getListDonHangDangGiao(){
            $db=new connect();
            $strQuery = "SELECT * FROM hoadon where tinhtrang=0";
            $r=$db->getList($strQuery);
            return $r;
        }
        public function getListDonHangDaHuy(){
            $db=new connect();
            $strQuery = "SELECT * FROM hoadon where tinhtrang=2";
            $r=$db->getList($strQuery);
            return $r;
        } 
        public function getListDonHangDaGiao(){
            $db=new connect();
            $strQuery = "SELECT * FROM hoadon where tinhtrang=1";
            $r=$db->getList($strQuery);
            return $r;
        }
        public function getTenKH($makh){
            $db=new connect();
            $strQuery = "SELECT tenkh from khachhang where makh=$makh ";
            $r=$db->getInstance($strQuery);
            return $r[0];
        }
        public function setTinhTrang($mshd,$tinhtrang){
            $db=new connect();
            $strQuery = "UPDATE `hoadon` SET `tinhtrang` = '$tinhtrang' WHERE `hoadon`.`mshd` = $mshd;";
            $r=$db->exec($strQuery);
            return $r;
        }


    




    }


?>