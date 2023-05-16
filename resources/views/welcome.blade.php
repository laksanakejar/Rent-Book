<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laksana | Rent Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
  <!--Navbar-->
<nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
  <div class="container">
  <a class="navbar-brand" href="/">
      <img src="{{ asset('assets/img/gura.jpg')}}" alt="Logo" width="40" height="30" class="d-inline-block align-text-top">
      Laksana | Rent Book
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Horror</a></li>
            <li><a class="dropdown-item" href="#">Comedy</a></li>
          </ul>
        </li>
         <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, {{Auth::user()->name}}
            </a>
              <li>
                <form action="/logout" method="post" class="btn btn-primary">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </li>
          @else
          <li class="nav-item">
          <a class="nav-link btn btn-primary" href="/login">Login</a>
          </li>
          @endauth
         </ul>
      </ul>
    </div>
  </div>
</nav>
<!--Akhir Navbar-->

<!--Carousel-->
<div id="carouselExampleInterval" class="carousel slide" style="max-height: 300px; max-widht: 100%" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="https://img.freepik.com/free-vector/creative-coming-soon-teaser-background_23-2148894969.jpg?t=st=1674713342~exp=1674713942~hmac=8cd0977fc1c17686269145844325c2a2a8c232d5d0c7367dc56bcfe350e9c9c3" class="d-block w-100" alt="..." style="max-height: 325px">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://img.freepik.com/free-psd/mockup-two-books-dark-gray-background_125540-1473.jpg?t=st=1674713414~exp=1674714014~hmac=6c3a7e8c08c7809418053088be6188bc9d3285115559ce35e59a789bf5a2dafc" class="d-block w-100" alt="..." style="max-height: 325px">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://img.freepik.com/free-psd/super-sale-banner_1393-365.jpg?1&t=st=1674713414~exp=1674714014~hmac=9a3d6fe80331f1fd8a3b843954d86c11a1de411a7583a2eeffea13c18598cd36" class="d-block w-100" alt="..." style="max-height: 325px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Akhir Carousel-->

<!--Jumbotron-->
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4 mb-3">
        <h2>Laksana | Rents Book</h2>
        <a href="/register" class="btn btn-outline-primary">Daftar Sekarang</a>
      </div>
      <div class="col-8">
        <h5>Ada banyak buku yang lucu di rental ini salah satunya komik, action, horror, romance, novel, dan koran. Ada juga komik yang paling di sukai oleh admin website ini di Indonesia bagian Galaxy timur tengah yaitu God of War: Fallen God, The Capybara, dan The Silver Eyes. Series terbaru akan admin upload kalo orangnya ngga males buat lanjutin website ini.</h5>
      </div>
    </div>
  </div>
<!--Akhir Jumbotron-->

<!--Card Populer Book-->
<section style="background-color: #434242;;">
  <div class="container mt-5">
    <div class="row text-center text-white">
      <h2>Komik/Buku yang disukai Admin</h2>
      <hr class="solid">
    </div>
    <div class="row my-4 ms-4">

    <!--Card 1-->

  <div class="col-md-4 mb-3">
    <div class="card" style="width: 18rem;">
      <img src="https://d2lzb5v10mb0lj.cloudfront.net/covers/600/30/3005158.jpg" class="card-img-top" alt="..." style="max-height: 400px">
       <div class="card-body">
        <h5 class="card-title">God Of War|Fallen God</h5>
        <p class="card-text">God of War: Fallen God adalah seri mini buku komik 4 bagian baru yang diatur antara God of War 3 dan God of War 2018 yang di-reboot. Serial ini, oleh Chris Roberson, Tony Parker, dan Dan Jackson, akan memperhitungkan waktu antara dua game dan pertunjukan bagaimana Kratos berjalan dari Mesir Kuno ke Midgar. Edisi pertama, dirilis 10 Maret, mengungkapkan beberapa detail tentang kehidupan Kratos setelah God of War 3, serta beberapa kejutan kedepannya.</p>
        <a href="#" class="btn btn-dark w-100">Read</a>
       </div>
    </div>
  </div>

    <!--Card 2-->

  <div class="col-md-4 mb-3">
      <div class="card" style="width: 18rem;">
       <img src="https://motiska.id/wp-content/uploads/2023/02/photo1675398476-1.webp" class="card-img-top" alt="..." style="max-height: 400px">
        <div class="card-body">
         <h5 class="card-title">The Capybara/The MasBro</h5>
         <p class="card-text">The Capybara atau bisa disebut dengan The MasBro adalah Salah satu hewan yang dijadikan meme oleh orang-orang Indonesia karena hewan ini tidak hanya imut tapi juga hewan ini kalem saat di kelilingi oleh puluhan buaya darat yang suka ngegombalin betina.</p>
         <a href="#" class="btn btn-dark w-100">Read</a>
      </div>
    </div>
  </div>

      <!--Card 3-->

    <div class="col-md-4 mb-3">
      <div class="card" style="width: 18rem;">
       <img src="https://static.wikia.nocookie.net/fnaf-the-novel/images/d/d9/FNAFTheSilverEyes.jpg" class="card-img-top" alt="..." style="max-height: 400px">
        <div class="card-body">
         <h5 class="card-title">The Silver Eyes</h5>
         <p class="card-text">Sepuluh tahun setelah pembunuhan mengerikan di Freddy Fazbear's Pizza yang menghancurkan kota mereka, Charlie, yang ayahnya memiliki restoran tersebut, dan teman masa kecilnya bersatu kembali pada peringatan tragedi tersebut dan menemukan diri mereka di tempat pizza tua yang telah dikurung dan ditinggalkan. Empat maskot animatronik berukuran dewasa yang pernah menghibur pelanggan telah berubah. Mereka sekarang memiliki rahasia kelam... dan agenda pembunuhan.</p>
         <a href="#" class="btn btn-dark w-100">Read</a>
        </div>
      </div>
    </div>
    
    </div>
  </div>
</section>
<!--Akhir Card-->

<!--Message-->
  <div class="container">
    <div class="row text-center">
      <h2>Message</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-7">
      <form method="POST" action="{{ route('validate.store')}}">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
      <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea name="message" class="form-control"  id="Message"></textarea>
    </div>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
      </div>
    </div>
  </div>
<!--Akhir Message-->

<!--Footer-->
<footer class="mt-5 bg-secondary text-center" style="height: 35px;">
  <p>Created By : <a href="" style="text-decoration: none; color: white;" target="_blank">Laksana Nuur Adi Candra</a> orang paling dingin di Indonesia</p>
</footer>
<!--Footer-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>