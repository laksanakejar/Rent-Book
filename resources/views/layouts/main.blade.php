<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laksana | Rent Book @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>
<body>
  <div class="main d-flex flex-column justify-content-between">
<!--Navbar-->
<nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
  <div class="container">
    <a class="navbar-brand" href="/dashboard">Laksana | Rent Book</a>
    <form action="/logout" method="post">
      @csrf
      <button type="submit" class="dropdown-item navbar-brand"><i class="bi bi-box-arrow-right"></i> Logout</button>
    </form>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#openclose" aria-controls="openclose" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<!--Akhir Navbar-->

<!--Content-->
  <div class="body-main h-100">
    <div class="row g-0 h-100">
      <div class="sidebar col-lg-2 collapse d-lg-block" id="openclose">
        <a href="/dashboard" @if(request()->route()->uri == 'dashboard')class='active' @endif><i class="bi bi-house p-2"></i>Dashboard</a>
        <a href="/user"@if(request()->route()->uri == 'user')class='active' @endif><i class="bi bi-person p-2"></i>User</a>
        <a href="/book"@if(request()->route()->uri == 'book')class='active' @endif><i class="bi bi-book p-2"></i> Books</a>
        <a href="/category"@if(request()->route()->uri == 'category')class='active' @endif><i class="bi bi-tags p-2"></i>Category</a>
        <a href="/rent-log"@if(request()->route()->uri == 'rent-log')class='active' @endif><i class="bi bi-bookmark p-2"></i>Rent Logs</a>
        <a href="/message"@if(request()->route()->uri == 'message')class='active' @endif><i class="bi bi-envelope p-2"></i>Message User</a>
      </div>
      <div class="content col-lg-10">
        @yield('content')
      </div>
    </div>
  </div>
<!--Akhir Content-->
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>