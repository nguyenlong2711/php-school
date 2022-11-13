<?php 
    class Page{
        //phuong thuc tìm start
        //cho $litmit=8 là 8 sản phẩm trên 1 trang
        function findStart($litmit){
            //kt thu trang hien tai tren url co ton tai hay khong
            if(!isset($_GET['page'])||$_GET['page']==1){
                $start=0;
                $_GET['page']=1;
            }else{
                $start=( $_GET['page']-1 )*$litmit;
            }
            return $start;
        }
        //pthuc tim tong so page
        function findPage($count,$litmit){
            $page=(($count%$litmit)==0) ?($count/$litmit):floor($count/$litmit)+1;
            return $page;
        }
    }

?>