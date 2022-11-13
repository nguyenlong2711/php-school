	<div class="container padding-bottom-3x mb-2 mt-5">
	    <div class="row justify-content-center">
	        <div class="col-lg-8 col-md-10">
	            <div class="forgot">
	                <h2>Quên Mật Khẩu?</h2>
	                <p>Change your password in three easy steps. This will help you to secure your password!</p>
	                <ol class="list-unstyled">
	                    <li><span class="text-primary text-medium">1. </span>Nhập Email Vào Bên Dưới.</li>
	                    <li><span class="text-primary text-medium">2. </span>Kiểm Tra Email</li>
	                    <li><span class="text-primary text-medium">3. </span>Dùng Link đi kèm Để thay đổi mật khẩu</li>
	                </ol>
	            </div>
	            <form class="card mt-4" method="post" action="index.php?controller=login&action=reset_password">
	                <div class="card-body">
	                    <div class="form-group"> <label for="email-for-pass">Enter your email address</label> <input class="form-control" type="text" id="email-for-pass" name='txtEmail' required=""><small class="form-text text-muted">Enter the email address you used during the registration on BBBootstrap.com. Then we'll email a link to this address.</small> </div>
	                </div>
	                <div class="card-footer"> <button class="btn btn-success" type="submit">Get New Password</button> <button class="btn btn-danger" ><a href="index.php?controller=login" >Back To Login</a></button> </div>
	            </form>
	        </div>
	    </div>
	</div>