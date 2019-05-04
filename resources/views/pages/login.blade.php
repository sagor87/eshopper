@include('partials.header')


	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
					@include('partials.message')
					@include('partials.danger_message')
						<h2>Login to your account</h2>
						<form action="{{route('customer.login')}}" method="post">
						@csrf
						
							<input type="email" name="customer_email"  placeholder="Email Address" />
							<input type="password" name="password" placeholder="Password" />
							
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
                        @include('partials.message')
						<form action="{{route('customer_registration')}}" method="post">
                        @csrf
							<input type="text" name="customer_name" placeholder="Full Name"/>
							<input type="email" name="customer_email" placeholder="Email Address"/>
							<input type="text" name="mobile_number" placeholder="Mobile Number"/>
							<input type="password" name="password" placeholder="Password"/>
							
                            <button type="submit" class="btn btn-default">Signup</button>
                            <button type="reset" class="btn">Cancel</button>
                            
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->


@include('partials.footer')