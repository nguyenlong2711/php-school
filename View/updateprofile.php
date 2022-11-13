<?php
    $kh=new KhachHang();
    $r=$kh->getUser($_SESSION['makh']);
?>
<div class="container">
    <div class="row" style="font-size:24px;">
        <div class="col-md-12">
            <h3 class="text-primary">Thay Đổi Thông Tin</h3>
            <form method="POST"  id="formUpdateProfile" action="index.php?controller=user&action=update_profile_action">
                <div class="form-group">
                    <label for="user_signin">Tên Khách Hàng</label>
                    <input type="text" class="form-control " id="txttenkh" name="txttenkh" placeholder="<?php echo $r['tenkh']?>" value="<?php echo $r['tenkh']?>">
                </div>
               <div class="form-group">
                    <label for="user_signin">Số Điện Thoại</label>
                    <input type="text" class="form-control " id="txtsdt" name="txtsdt" placeholder="<?php echo $r['sodt']?>" value="<?php echo $r['sodt']?>">
                </div>
                <div class="form-group">
                    <label for="user_signin">Địa Chỉ</label>
                    <input type="text" class="form-control " id="txtdiachi" name="txtdiachi" placeholder="<?php echo $r['diachi']?>" value="<?php echo $r['diachi']?>">
                </div>
                <div class="form-group">
                    <label for="user_signin">Email</label>
                    <input type="text" class="form-control " id="txtemail" name="txtemail" placeholder="<?php echo $r['email']?>" value="<?php echo $r['email']?>">
                </div>
                <a href="index.php" class="btn btn-default">
                    <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                </a>
                <button class="btn btn-primary" id="submit_change_pass">
                    <span class="glyphicon glyphicon-ok"></span> Cập Nhật
                </button>
                <br><br>
                <div class="alert alert-danger hidden"></div>
            </form>
        </div>
    </div>
</div>