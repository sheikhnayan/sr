<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('login/css/login.css') }}">
  </head>
  <body>
    <div class="login">
      <div class="login__left-side">
        <img class="login__img" src="{{ asset('login/assets/img/Illustration.png') }}" />
      </div>
      <div class="login__right-side">
        <h2 class="login__title">Sign In to Admin Account</h2>
        <p class="login__description">Welcome back! please enter your detail</p>
        <form action="">
          <input class="login__email" type="email" placeholder="hello@gmail.com" />
          <input class="login__password" type="password" placeholder="Password" />
          <div class="login__forgot-container">
            <div class="login__checkbox-container">
              <input class="login__checkbox" type="checkbox" name="remember" />
              <label class="login__remmeber" for="remember"> Remember me</label><br />
            </div>
            <span class="login__forgot-password">Forgot Password?</span>
          </div>
          <button class="login__btn">LOGIN</button>
        </form>
      </div>
    </div>
  </body>
</html>
