<?php
    class Star{
        var $user =null;
        var $product=null;
        var $rating=null;
        function __construct(){}
        //tinh gia tri trung binh cac san pham
        public function avg(){
            $select = "select masach,round(avg(rating),2) avg from star_rating group by masach";
            $db = new connect();
            $result = $db->getList($select);
            $average = [];
            while ($row = $result->fetch()) {
                $average[ $row['masach']] = $row['avg'];
            }

        }
        function get($user,$id){
            $select = "select rating from star_rating where username=$user and masach=$id";
            $db = new connect();
            $result = $db->getInstance($select);
            return $result[0];
        }
    }

?>