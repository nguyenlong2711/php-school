<?php
    class Menu{
        var $idmenu = null;
        var $name = null;
        var $link = null;

        public function __construct(){
            if(func_num_args() == 3){
                $this->idmenu = func_get_arg(0);
                $this->name = func_get_arg(1);
                $this->link = func_get_arg(2);
            }
        }

        public function getListMenu(){          
            $db = new connect();
            $strQuery = "select * from menu";
            $r = $db->getList($strQuery);
            return $r;
        }
    }
?>