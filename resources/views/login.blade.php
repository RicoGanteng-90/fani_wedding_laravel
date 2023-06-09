<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- Logo Title Bar -->
   <link rel="icon" href="../images/logofanny.png" type="image/x-icon" class="LOGO">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- font google -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all"/>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC%3A400%2C700%7CLato%3A400%2C700%2C400italic%2C700italic&amp;ver=4.9.8" type="text/css" media="screen"/>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">

</head>
<body>

<!-- admin login form section starts  -->

<section class="form-container">
   <form action="{{ route('login') }}" method="POST">
    @csrf
      <h3>Login</h3>
      @error('email')
            <div class="text-danger"><h2>{{ $message }}</h2></div>
        @enderror

      <input type="text" name="email" maxlength="50" required placeholder="Masukkan email anda" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="password" maxlength="20" required placeholder="Masukkan kata sandi anda" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="Login" name="submit" class="btn">
   </form>
</section>

<!-- admin login form section ends -->

</body>
</html>
