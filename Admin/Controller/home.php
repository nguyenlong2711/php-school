<?php
    $action = 'home';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    switch($action){
        case 'home':
            include 'View/home.php';
            break;
        case 'updatesach':
            include 'View/editsach.php';
            break;
        case 'themsach':
            include 'View/editsach.php';
            break;
        case 'updatesach_action':
            $masach=$_POST['masach'];
            $tensach=$_POST['tensach'];
            $gia=$_POST['gia'];
            $hinh=$_FILES['image']['name'];
            $sotrang=$_POST['sotrang'];
            $soluong=$_POST['soluong'];
            $matg=$_POST['tacgia'];
            $matl=$_POST['theloai'];
            $manxb=$_POST['nhaxuatban'];
            $date=$_POST['namxuatban'];
            $namxuatban=date("Y-m-d", strtotime($date));
            $s=new Sach();
            $r=$s->updateBook($masach,$hinh,$tensach,$namxuatban,$gia,$sotrang,$soluong,$matg,$matl,$manxb);
             if($r==1){
                 echo "<script> alert('Cập nhật sách thành công') </script>";
                echo '<meta http-equiv=refresh content="0;url=../index.php?controller=home&acttion=home"/>';
            }else{
                 echo "<script> alert('Cập nhật sách thành công !! Vui lòng thử lại') </script>";
                echo '<meta http-equiv=refresh content="0;url=../index.php?controller=home&acttion=home"/>';
            }
            break;
        case 'themsach_action':
            $tensach=$_POST['tensach'];
            $gia=$_POST['gia'];
            $hinh=$_FILES['image']['name'];
            $sotrang=$_POST['sotrang'];
            $soluong=$_POST['soluong'];
            $matg=$_POST['tacgia'];
            $matl=$_POST['theloai'];
            $manxb=$_POST['nhaxuatban'];
            $date=$_POST['namxuatban'];
            $namxuatban=date("Y-m-d", strtotime($date));
            $s=new Sach();
           $r= $s->insertBook($hinh,$tensach,$namxuatban,$gia,$sotrang,$soluong,$matg,$matl,$manxb);
            //  echo "<script> alert('Thêm sách thành công') </script>";
            if($r==1){
                 echo "<script> alert('Thêm sách thành công') </script>";
                echo '<meta http-equiv=refresh content="0;url=../index.php?controller=home&acttion=home"/>';
            }else{
                 echo "<script> alert('Thêm sách không thành công !! Vui lòng thử lại') </script>";
                echo '<meta http-equiv=refresh content="0;url=../index.php?controller=home&acttion=home"/>';
            }
             break;
        case 'themtheloai':
            include 'View/addtheloai.php';
            break;
        case 'themnxb':
            include 'View/addnxb.php';
            break;
        case 'themtheloai_action':
            $tentl=isset($_POST['tentl'])?$_POST['tentl']:'null';
            $s=new sach();
            $r=$s->insertTheLoai($tentl);
            if($r==1){
                 echo "<script> alert('Thêm Thể loại thành công') </script>";
                echo '<meta http-equiv=refresh content="0;url=../index.php?controller=home&acttion=home"/>';
            }else{
                 echo "<script> alert('Thêm Thể loại không thành công !! Vui lòng thử lại') </script>";
                echo '<meta http-equiv=refresh content="0;url=../index.php?controller=home&acttion=home"/>';
            }
            break;
        case 'themnxb_action':
            $tentl=isset($_POST['tennxb'])?$_POST['tennxb']:'null';
            $s=new sach();
            $r=$s->insertNXB($tentl);
            if($r==1){
                 echo "<script> alert('Thêm Nhà Xuất Bản thành công') </script>";
                echo '<meta http-equiv=refresh content="0;url=../index.php?controller=home&acttion=home"/>';
            }else{
                 echo "<script> alert('Thêm Nhà Xuất Bản không thành công !! Vui lòng thử lại') </script>";
                echo '<meta http-equiv=refresh content="0;url=../index.php?controller=home&acttion=home"/>';
            }
            break;
        case 'themtacgia':
            include 'View/addtacgia.php';
            break;
        case 'themtacgia_action':
            $tentg=isset($_POST['tentg'])?$_POST['tentg']:'null';
            $s=new sach();
            $r=$s->insertTacGia($tentg);
            if($r==1){
                 echo "<script> alert('Thêm Tác giả thành công') </script>";
                echo '<meta http-equiv=refresh content="0;url=../index.php?controller=home&acttion=home"/>';
            }else{
                 echo "<script> alert('Thêm Tác giả không thành công !! Vui lòng thử lại') </script>";
                echo '<meta http-equiv=refresh content="0;url=../index.php?controller=home&acttion=home"/>';
            }
            break;
        case 'xoasach':
             $masach=isset($_GET['id'])?$_GET['id']:'0';
            $s=new sach();
            $r=$s->deleteBook($masach);
            if($r==1){
                 echo "<script> alert('Xoá Sách thành công') </script>";
                echo '<meta http-equiv=refresh content="0;url=../index.php?controller=home&acttion=home"/>';
            }else{
                 echo "<script> alert('Xoá Sách không thành công !! Vui lòng thử lại') </script>";
                echo '<meta http-equiv=refresh content="0;url=../index.php?controller=home&acttion=home"/>';
            }
            break;
        case 'thongke':
            include 'View/thongke.php';
            break;
    }


?>