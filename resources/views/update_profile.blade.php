<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Profil</title>


   <!-- Logo Title Bar -->
   <link rel="icon" href="../images/logofanny.png"
   type="image/x-icon" class="LOGO">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- font google -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      type="text/css" media="all"/>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC%3A400%2C700%7CLato%3A400%2C700%2C400italic%2C700italic&amp;ver=4.9.8"
      type="text/css" media="screen"/>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">

</head>
<body>

@include('components.admin_header')

<!-- admin profile update section starts  -->

<section class="form-container">

   <form action="/update_profile/{{$edit->id}}" method="POST" enctype="multipart/form-data">
    @csrf
      <h3>Edit Profil</h3>
      <input type="text" name="name" placeholder="masukkan nama" class="box" value="{{$edit->name}}">
      <input type="number" name="number" placeholder="masukkan nomor" class="box" value="{{$edit->number}}">
      <input type="text" name="address" placeholder="masukkan alamat" class="box" value="{{$edit->address}}">
      <input type="password" name="password" maxlength="20" placeholder="masukkan kata sandi baru" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="Perbarui" name="submit" class="btn">
   </form>
</section>
<!-- admin profile update section ends -->

<!-- custom js file link  -->
<script src="{{asset('js/admin_script.js')}}"></script>

</body>
</html>

