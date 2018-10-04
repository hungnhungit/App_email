<html>
  <head>
	<title>Login</title>
  	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
  </head>
<body id="LoginForm">
	<div class="container">
		<div class="login-form">
			<div class="main-div">
			    <div class="panel">
				   <h2>S M C</h2>
				   </div>
					    <form  action="{{ route('admin.login') }}" id="Login" method="POST">
					    	@csrf
					        <div class="form-group">
					            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address">
					        </div>
					        <div class="form-group">
					            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
					        </div>
					        <button type="submit" class="btn btn-primary">Login</button>
							<div class="forgot">
					        	<a href="reset.html">Forgot password?</a>
							</div>
					    </form>
				    </div>
			</div>
		</div>
	</div>
</body>
</html>