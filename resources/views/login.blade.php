<!DOCTYPE html>
<html class="no-js sidebar-large">
 <head>
<head>
   <meta charset="utf-8">
    <title>Bywave</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/plugins.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="#" rel="stylesheet" id="theme-color">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="assets/css/animate-custom.css" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
  <title></title>
  
 </head>
 <body class="login fade-in" data-page='login'>
  <br />
  	<div class="container" id="login-block">
  		<div class="row">
  			<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
   				<div class="login-box clearfix animated flipInY">
  					<div class="page-icon animated bounceInDown">
         <img src="assets/img/account/user-icon.png" alt="Key icon">
           </div>
              <div class="login-logo">
                  <a href="#?login-theme-3">
           <img src="assets/img/account/login-logo.png" alt="Company Logo">
                    </a>
              </div>

  
   <h3 align="center"></h3><br />

   @if(isset(Auth::user()->email))
    <script>window.location="/main/successlogin";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <form method="post" action="{{ url('/main/checklogin') }}">
    {{ csrf_field() }}
    <div class="login-form">
   
     <input type="email" name="email" class="input-field form-control user" placeholder="ID Number">
    </div>
    <div class="login-form">
     
     <input type="password" name="password" class="input-field form-control password" placeholder="Password" >
    </div>
    <div class="login-form">
     <input type="submit" name="login" class="btn btn-login ladda-button" value="Login" data-style="expand-left">
    </div>
   </form>
   </div>
   </div>
    </div>
  </div>
  <script src="assets/plugins/jquery-1.11.js"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/backstretch/backstretch.min.js"></script>
    <script src="assets/plugins/bootstrap-loading/lada.min.js"></script>
    <script src="assets/js/account.js"></script>
 </body>
</html>