<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log-in</title>
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/log.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Preahvihear&family=Readex+Pro:wght@160..700&family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&family=Vazirmatn:wght@100..900&family=Ysabeau+Infant:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.css') }}">
</head>
<style>
  body{
    background-color: rgba(4, 66, 4, 0.29);
  }
</style>
<body>
  <div class="container py-5">
    <div class="login">
      <h1>Sign In </h1>
      <div class="form">
        @if (session('error'))
          <script>
            alert('{{ session('error') }}');
          </script>
        @endif
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <input type="email" name="email" placeholder="البريد الالكتروني" class="form-input-1" required>
          <i class="fa-solid fa-envelope"></i>
          <br>
          <input type="password" name="password" placeholder="كلمة السر" class="form-input-1" required>
          <i class="fa-solid fa-lock"></i>
          <br>
          <button type="submit" class="button">دخول</button>
        </form>
      </div>
      <h5 class="text">لا تمتلك حساب؟ <a href="{{ route('register') }}">تسجيل</a></h5>
      <div class="icons">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-google"></i>
      </div>
    </div>
  </div>
</body>
</html>
