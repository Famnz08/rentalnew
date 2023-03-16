<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes"><link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="{{ URL::asset('auth/coba.css');}}">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="panda">
  <div class="ear"></div>
  <div class="face">
    <div class="eye-shade"></div>
    <div class="eye-white">
      <div class="eye-ball"></div>
    </div>
    <div class="eye-shade rgt"></div>
    <div class="eye-white rgt">
      <div class="eye-ball"></div>
    </div>
    <div class="nose"></div>
    <div class="mouth"></div>
  </div>
  <div class="body"> </div>
  <div class="foot">
    <div class="finger"></div>
  </div>
  <div class="foot rgt">
    <div class="finger"></div>
  </div>
</div>
<form action="/admin/postlogin" method="post">
    @csrf
  <div class="hand"></div>
  <div class="hand rgt"></div>
  <h1>Login</h1>
  <div class="form-group">
    <input required="required" class="form-control" name="email" type="email">
    <label class="form-label">Email</label>
  </div>
  <div class="form-group">
    <input id="password" type="password" required="required" class="form-control" name="password">
    <label class="form-label">Password</label>
  </div>

  <div >
    <input type="checkbox" onclick="showPassword()">Show Password <br>
    </div>
  <div>
    
    <button class="btn" type="submit">Login </button>
  </div>
</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{{ URL::asset('auth/main.js');}}"></script>
  <script>
    function showPassword() {
      console.log('check')
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>
</body>
</html>