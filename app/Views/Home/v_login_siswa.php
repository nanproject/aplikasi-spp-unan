<!DOCTYPE html>
<html lang="en">

<head>
  <title>Aplikasi SPP :: Login Siswa</title>
  <meta charset="utf-8">
  <link href="/css/bootstrap.css" rel="stylesheet" />
  <link href="/css/signin.css" rel="stylesheet" />

  <link href="/fontawesome/css/all.min.css" rel="stylesheet" />

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

</head>

<body class="text-center">
  <form class="form-signin" method="POST" action="/siswa/login">
    <img class="mb-4" src="/icon.png" class="img-thumbnail" width="160">
    <h1 class="h3 mb-3 font-weight-normal"> Login Siswa</h1>
    <!-- flash data validasi gagal login -->
    <?= session()->getFlashData('gagal-login'); ?>
    <label for="inputUser" class="sr-only">Username</label>
    <input type="text" name="txtUsername" id="inputUser" class="form-control" placeholder="Username" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="txtPassword" id="inputPassword" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-block btn-success" type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
    <p class="text-center mt-2">Petugas login <a href="/petugas"><u>disini</u></a></p>

  </form>


  <body>

</html>