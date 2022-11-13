<?php
    class theloai{
        var $matl=null;
        var $tentl=null;
        public function __construct(){}
        public function getListMenu(){          
            $db = new connect();
            $strQuery = "select * from theloai";
            $r = $db->getList($strQuery);
            return $r;
        }
    }
?>