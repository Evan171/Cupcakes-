<head>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="loginstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Raleway" rel="stylesheet">
<script>
    $(function() {
    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

</script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color:white;letter-spacing:2px;font-size: 25px;"><strong>Cupcakes</strong>
      <img src="https://s-media-cache-ak0.pinimg.com/originals/7c/c0/2d/7cc02d75f9ffa470bca561b9628eb157.jpg" alt="logo" class="img-responsive" style="width:50px;border-radius: 50%;margin-left:75px;">
       </a>
    </div>
    </div>
</nav>
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
          <center>
        <div class="col-lg-12">
            <img src="https://s-media-cache-ak0.pinimg.com/originals/7c/c0/2d/7cc02d75f9ffa470bca561b9628eb157.jpg" alt="logo" style="width:15%;height:15%">
        </div>
        </center>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form id="login-form" action="login_script.php" method="post" role="form" style="display: block;">
                <h2>LOGIN</h2>
                  <div class="form-group">
                    <input type="text" name="e-mail" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="on" required="true">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                  </div>
                  <div class="col-xs-6 form-group pull-left checkbox">
                    <input id="checkbox1" type="checkbox" name="remember">
                    <label for="checkbox1">Remember Me</label>   
                  </div>
                  <div class="col-xs-6 form-group pull-right">     
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-decor" value="Log In">
                  </div>
              </form>
              <form id="register-form" action="signup_script.php" method="post" role="form" style="display: none;">
                <h2>REGISTER</h2>
                  <div class="form-group">
                    <input type="text" name="name" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input type="email" name="e-mail" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input type="text" name="contact" id="phonenum" tabindex="2" class="form-control" placeholder="Contact Number" autocomplete="off" min="7000000000" max="9999999999" title="Please enter a valid phone number." required="true" >
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6 tabs">
              <a href="#" class="active" id="login-form-link"><div class="login">LOGIN</div></a>
            </div>
            <div class="col-xs-6 tabs">
              <a href="#" id="register-form-link"><div class="register">REGISTER</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--<footer>
    <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center">
            <h6 style="font-size:14px;font-weight:100;color: #fff;">Coded with <i class="fa fa-heart red" style="color: #BC0213;"></i> by <a href="http://hashif.com" style="color: #fff;" target="_blank">Hashif</a></h6>
        </div>   
    </div>
</footer>-->
</body>