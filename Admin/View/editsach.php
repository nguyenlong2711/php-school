<?php
    if ($_GET['action']=="updatesach"){
      $ac=1;
      $act='updatesach_action';
    }elseif ($_GET['action']=="themsach"){
      $ac=2;
      $act='themsach_action';
    }
    else{
      $ac=0;
    }
  

?>
<!-- hiển thị ra tiêu đề -->
<?php
  if($ac==1){
    echo '<div class="col-md-4 col-md-offset-4"> <h3><b>Cập nhật Sách</b></h3> </div>';
  }elseif($ac==2){
     echo '<div class="col-md-4 col-md-offset-4"> <h3><b>Thêm Sách</b></h3> </div>';
  }else{
    echo '<div class="col-md-4 col-md-offset-4"> <h3><b>Thêm Sách</b></h3> </div>';
  }
?>
<div class="row col-md-4 col-md-offset-4" >
  <?php 
  $dt=new Sach();
  if(isset($_GET['id'])){
    $masach=$_GET['id'];
    $result=$dt->getBookById($masach);
    $tensach=$result['tensach'];
    $namxuatban=$result['namxuatban'];
    $gia=$result['gia'];
    $hinh=$result['hinh'];
    $sotrang=$result['sotrang'];
    $soluong=$result['soluong'];
    $matg=$result['matg'];
    $matl=$result['matl'];
    $manxb=$result['manxb'];
  }
  ?>
  <form action="index.php?controller=home&action=<?php echo $act;?>" method="post" enctype="multipart/form-data">
    <table class="table" style="border: 0px;">

      <tr>
        <td>Mã Sách</td>
        <td> <input type="text" class="form-control" name="masach"  readonly value="<?php if(isset($masach)){ echo $masach;};?>"/></td>
      </tr>
      <tr>
        <td>Tên Sách</td>
        <td><input type="text" class="form-control" name="tensach"  maxlength="100px" value="<?php if(isset($tensach)){ echo $tensach;};?>"></td>
      </tr>
      <tr>
        <td>Đơn giá</td>
        <td><input type="text" class="form-control" name="gia" value="<?php if(isset($gia)){ echo $gia;};?>" ></td>
      </tr>
      <tr>
        <td>Hình</td>
        <td>
         
            <label><img width="50px" height="50px" src="/asset/IMG PHP/<?php if(isset($hinh)){ echo $hinh;};?>"></label>
            Chọn file để upload:
            <input type="file" name="image" id="fileupload">
         
        </td>
      </tr>
      <tr>
        <td>Số Trang</td>

        <td>
          <input type="number" class="form-control" name="sotrang" value="<?php if(isset($sotrang)){ echo $sotrang;};?>">
        </td>
      </tr>
       <tr>
        <td>Số Lượng </td>

        <td>
          <input type="number" class="form-control" name="soluong" value="<?php if(isset($soluong)){ echo $soluong;};?>">
        </td>
      </tr>
      <tr>
        <td>Tác Giả</td>
        <td>
          <select name="tacgia" class="form-control" style="width:150px;" >
            <?php
              $result=$dt->getListTG();
              while($set=$result->fetch()):
            ?>
            <option value="<?php echo $set['matg']?>" <?php if(isset($matg)&&$matg==$set['matg']){echo "selected";}?>  ><?php echo $set['tentacgia']?></option>
            <?php endwhile;?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Thể loại Sách</td>
        <td>
          <select name="theloai" class="form-control" style="width:150px;" >
            <?php
              $result=$dt->getListTL();
              while($set=$result->fetch()):
            ?>
            <option value="<?php echo $set['matl']?>" <?php if(isset($matl)&&$matl==$set['matl']){echo "selected";}?>  ><?php echo $set['tentheloai']?></option>
            <?php endwhile;?>
          </select>
        </td>
      </tr>
       <tr>
        <td>Nhà Xuất Bản</td>
        <td>
          <select name="nhaxuatban" class="form-control" style="width:150px;" >
            <?php
              $result=$dt->getListNXB();
              while($set=$result->fetch()):
            ?>
            <option value="<?php echo $set['manxb']?>" <?php if(isset($manxb)&&$manxb==$set['manxb']){echo "selected";}?>  ><?php echo $set['tennxb']?></option>
            <?php endwhile;?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Thời Gian Xuất Bản</td>
        <td><input type="date" class="form-control" name="namxuatban" value="<?php if(isset($namxuatban)){ echo $namxuatban;};?>">
        </td>
      </tr>
   

      <tr>
        <td colspan="2">
          <input type="submit" value="submit">
          

        </td>
      </tr>

    </table>
  </form>
</div>