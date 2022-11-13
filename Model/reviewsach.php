<?php
    class reviewsach{
        var $id=null;
        var $nguoidang=null;
        var $noidung=null;
        var $hinh=null;
        public function __construct(){}
    
        public function getAll(){
		$db = new connect();
        $strQuery = "select * from reviewsach";
        $r = $db->getList($strQuery);
        return $r;
        
	}
        public function getReview($id){
            $db = new connect();
            $strQuery = "select * from reviewsach where id=$id";
            $r = $db->getInstance($strQuery);
             return $r;
        }


    




    }


?>