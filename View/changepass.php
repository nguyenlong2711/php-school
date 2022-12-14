<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary">Đổi mật khẩu</h3>
            <form method="POST"  id="formChangePass" action="index.php?controller=login&action=change_password_action">
                <div class="form-group">
                    <label for="user_signin">Mật khẩu cũ</label>
                    <input type="password" class="form-control" id="old_pass" name="old_pass" placeholder="">
                </div>
                <div class="form-group">
                    <label for="user_signin">Mật khẩu mới</label>
                    <input type="password" class="form-control" id="new_pass" name="new_pass" placeholder="">
                </div>
                <div class="form-group">
                    <label for="user_signin">Nhập lại mật khẩu mới</label>
                    <input type="password" class="form-control" id="re_new_pass" name="re_new_pass" placeholder="">
                </div>
                <a href="index.php" class="btn btn-default">
                    <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                </a>
                <button class="btn btn-primary" id="submit_change_pass">
                    <span class="glyphicon glyphicon-ok"></span> Thay đổi
                </button>
                <br><br>
                <div class="alert alert-danger hidden"></div>
            </form>
        </div>
    </div>
</div>