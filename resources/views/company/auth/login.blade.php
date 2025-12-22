<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login / Register</title>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

  <div class="container" id="container">

    <!-- Login -->
    <div class="form-box login">
      <form>
        <h1>Login</h1>

        <div class="input-box">
          <input type="text" placeholder="Username" />
          <i class="fa-solid fa-user"></i>
        </div>

        <div class="input-box">
          <input type="password" placeholder="Password" />
          <i class="fa-solid fa-lock"></i>
        </div>

        <button class="btn">Login</button>

        <div class="forgot-link">
          <a href="#">Forgot Password?</a>
        </div>

        <!-- <p>or login with social platforms</p>
      <div class="social-icons">
        <a href="#"><i class="fa-brands fa-google"></i></a>
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-github"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
      </div> -->
      </form>
    </div>

    <!-- Register -->
    <div class="form-box register">
      <form>
        <h1>Registration</h1>

        <div class="input-box">
          <input type="text" placeholder="Username" />
          <i class="fa-solid fa-user"></i>
        </div>

        <div class="input-box">
          <input type="email" placeholder="Email" />
          <i class="fa-solid fa-envelope"></i>
        </div>

        <button class="btn">Register</button>

        <div class="input-box">
          <input type="password" placeholder="Password" />
          <i class="fa-solid fa-lock"></i>
        </div>


        <!-- 
      <p>or register with social platforms</p>
      <div class="social-icons">
        <a href="#"><i class="fa-brands fa-google"></i></a>
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-github"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
      </div> -->
      </form>
    </div>

    <!-- Toggle -->
    <div class="toggle-box">

      <div class="toggle-panel toggle-left">
        <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">

        <h2>Welcome to Smart Bus System </h2>
        <p>Company Admin Access </p>
        <button class="btn register-btn">Register</button>
      </div>

      <div class="toggle-panel toggle-right">
        <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
        <h2>Welcome to Smart Bus System </h2>
        <p>Company Admin Access </p>
        <button class="btn login-btn">Login</button>
      </div>

    </div>

  </div>

  <!-- JS بسيط للتبديل -->
  <!-- <script>

</script> -->

  <script src="{{ asset('js/login.js') }}"></script>
</body>


</html>