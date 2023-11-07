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
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập</h2>
						<form action="{{ route('login')}}" method="POST">
							@csrf
							<input type="email" name="email" placeholder="Email" />
							<input type="password" name="password" placeholder="Mật khẩu" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Giữ đăng nhập
							</span>
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng ký</h2>
						<form action="#">
							<input type="text" placeholder="Tên"/>
							<input type="email" placeholder="Email"/>
							<input type="address" placeholder="Địa chỉ"/>
							<input type="phonenumber" placeholder="Số điện thoại"/>
							<input type="password" placeholder="Mật khẩu"/>
							<button type="submit" class="btn btn-default">Sign Up</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<!--/Footer-->
	@include('page.layout.footer')

    @include('page.layout.script')
</body>
</html>