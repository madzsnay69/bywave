<!DOCTYPE html>
<html>
 <head>
  <title>login</title>
 
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">login</h3><br />

   @if(isset(Auth::user()->email))
    <div class="alert alert-danger success-block">
     <strong>Welcome {{ Auth::user()->email }}</strong>
     <br />
     <a href="{{ url('/main/logout') }}">Logout</a>
    </div>
   @else
    <script>window.location = "/main";</script>
   @endif
   
   <br />
  </div>
 </body>
</html>
