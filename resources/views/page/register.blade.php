<!DOCTYPE html>
<html lang="en">
<!--/head-->
@include('page.layout.head')
@include('page.layout.header')
<body>
	<!--/header-->
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1" >
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng ký</h2>
						<form action="#">
							<input type="text" placeholder="Tên"/>
							<input type="email" placeholder="Email"/>
							<input type="address" placeholder="Địa chỉ"/>
							<input type="phonenumber" placeholder="Số điện thoại"/>
							<input type="password" placeholder="Mật khẩu"/>
							<button type="submit" class="btn btn-default">Đăng ký</button>
						</form>
					</div><!--/sign up form-->
				</div>
                <div class="col-sm-4"><!-- Image -->
                    <img src="user/images/home/logocam.png" width="400" height="400" /> 
			</div>
		</div>
	</section><!--/form-->
	<!--/Footer-->
	@include('page.layout.footer')
    @include('page.layout.script')
</body>
</html>