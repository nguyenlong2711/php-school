<?php
if(isset($_GET['action'])){
    $action=$_GET['action'];
}else{
    $action="home";
}
switch($action){
    case "home":
        include "View/home.php";
        break;
    case "xemthem":
        include "View/sanpham.php";
        break;
    case "sanpham":
        include "View/sanpham.php";
        break;
    case "khuyenmai":
        include "View/sanpham.php";
        break;
    case "chitietsach":
        include "View/chitietsach.php";
        break;
    case"comment":
        $makh = $_SESSION['makh'];
        $masach = $_POST["txtmasach"];
        $noidung = $_POST['comment'];
        $rating=$_POST['star'];
        $cmt = new comment();
        $s=new Sach();
        $cmt->insertComment($makh, $masach, $noidung,$rating);  
        $countComment=$cmt->countCommentNoDistinct($masach);
        $listCmt=$cmt->getListComment($masach);
        $SumRating=0;
        while($set=$listCmt->fetch()){
            $SumRating+=$set['rating'];
        }
        $newRating=$SumRating/$countComment[0];
        $s->updateRating($masach, $newRating);
        include "./View/chitietsach.php";
        break;
    default:
        include "View/home.php";
        break;  
}


?>