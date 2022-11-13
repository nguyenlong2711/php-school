	<div class="container padding-bottom-3x mb-2 mt-5">
	    <div class="row justify-content-center">
	        <div class="col-lg-8 col-md-10">
	            <div class="forgot">
	                <h2>Thay Đổi Mật Khẩu?</h2>
	                <p>Change your password in three easy steps. This will help you to secure your password!</p>
	            </div>
	            <form class="card mt-4" method="post" action="index.php?controller=login&action=update_password">
	                <div class="card-body">
						<input type="hidden" value="<?php echo $_GET['email']; ?>" name="txtEmail">
	                    <div class="form-group"> <label for="for-pass">Nhập Mật Khẩu Mới</label> <input class="form-control" type="password" id="for-pass" name='txtPassword' required=""> </div>
						<div class="form-group"> <label for="for-repass">Nhập Lại Mật Khẩu Mới</label> <input class="form-control" type="password" id="for-repass" name='txtRePassword' required=""> </div>
	                </div>
	                <div class="card-footer"> <button class="btn btn-success" type="submit">Cập Nhật Mật Khẩu</button> <button class="btn btn-danger" ><a href="index.php?controller=login" >Back To Login</a></button> </div>
	            </form>
	        </div>
	    </div>
	</div>