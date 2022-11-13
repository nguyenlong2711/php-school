<?php
class comment{
    var $mabl = null;
        var $masach = null;
        var $makh = null;
        var $ngaybl = null;
        var $noidung = null;
        public function __construct(){

        }
        public function getListComment($masach){
            $db = new connect();
            $sql = "SELECT * FROM binhluan where masach = $masach order by mabl desc ";
            $r = $db->getList($sql);
            return $r;
        }
        public function countComment($masach){
            $db = new connect();
            $sql = "SELECT COUNT(DISTINCT masach) FROM binhluan where masach = $masach";
            $r = $db->getList($sql);
            return $r->fetch();
        }
         public function countCommentNoDistinct($masach){
            $db = new connect();
            $sql = "SELECT COUNT( masach) FROM binhluan where masach = $masach";
            $r = $db->getList($sql);
            return $r->fetch();
        }
        public function insertComment($makh, $masach, $noidung,$rating){
            $db = new connect();
            $date = new DateTime("now");
            $dateFormat = $date->format("Y-m-d");
            $query = "INSERT INTO binhluan(mabl, masach, makh, ngaybl, noidung,rating) VALUES(null, $masach, $makh, '$dateFormat', '$noidung','$rating')";
            $db->exec($query);
        }
        public function getUser($mabl){
            $db = new connect();
            $query = "SELECT tenkh from khachhang,binhluan where mabl=$mabl and khachhang.makh=binhluan.makh";
            $r= $db->getInstance($query);
           return $r[0];
        }
        public function getTime($mabl){
            $db = new connect();
            $query = "SELECT ngaybl from binhluan where mabl=$mabl ";
            $r= $db->getInstance($query);
           return $r[0];
        }

    }



?>