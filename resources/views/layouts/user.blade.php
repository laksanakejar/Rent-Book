<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laksana | Rent Book @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<!--Navbar-->
  <nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
    <div class="container">
    <a class="navbar-brand" href="/dashboard-user">
        <img src="{{ asset('assets/img/gura.jpg')}}" alt="Logo" width="40" height="30" class="d-inline-block align-text-top">
        Laksana | Rent Book
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard-user">Home</a>
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
            @endauth
           </ul>
        </ul>
      </div>
    </div>
  </nav>
<!--End Navbar-->

<!---->

<!--Card-->
<section style="background-color: #434242;;">
  <div class="container mt-5">
    <div class="row text-center text-white">
      <h2>Buku atau Komik hari ini</h2>
      <hr class="solid">
    </div>
    <div class="row my-4 ms-4">
<div class="col-md-4 mb-3">
  <div class="card" style="width: 18rem;">
    <img src="https://d2lzb5v10mb0lj.cloudfront.net/covers/600/30/3005158.jpg" class="card-img-top" alt="..." style="max-height: 400px">
     <div class="card-body">
      <h5 class="card-title">God Of War|Fallen God</h5>
      <p class="card-text">God of War: Fallen God adalah seri mini buku komik 4 bagian baru yang diatur antara God of War 3 dan God of War 2018 yang di-reboot. Serial ini, oleh Chris Roberson, Tony Parker, dan Dan Jackson, akan memperhitungkan waktu antara dua game dan pertunjukan bagaimana Kratos berjalan dari Mesir Kuno ke Midgar. Edisi pertama, dirilis 10 Maret, mengungkapkan beberapa detail tentang kehidupan Kratos setelah God of War 3, serta beberapa kejutan kedepannya.</p>
      <a href="#" class="btn btn-dark w-100">Read</a>
      <a href="#" class="btn btn-primary w-100">Download</a>
     </div>
  </div>
</div>

<div class="col-md-4 mb-3">
  <div class="card" style="width: 18rem;">
    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgRFRUYGBgYGRkZGBgYGBgYGBkYGBgaGRgYGBgcIS4lHB4rHxgYJjgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QGhISHDQrISQ0MTQ0NDQ0MTQ0NDQ0NDQ0NDQ0NDU0NDQ0NDE0NDQ0NDQ0NDQ0NTE0NDQ0NDQ0NDY0NP/AABEIARwAsQMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAAAQIDBAYFB//EAEUQAAICAQIDBAcEBggEBwAAAAECABEDEiEEBTEiQVFhBhMycYGRoRQjUrEHQnKCssEVM2JzdJLR4SQ0osIlNkNTY4PS/8QAGgEBAQEBAQEBAAAAAAAAAAAAAAECAwQFBv/EACURAQEAAgIBBQEAAgMAAAAAAAABAhEDEiEEEzFBURRhoQUiMv/aAAwDAQACEQMRAD8A8rAi1HgQqbcjKhUkqFQhgEWo6otQhlQqPqKuMmqBNmhQO7bdkeJ3G3mPGBFUKk3qW3OlqWtRo9m+mrwvuuD4WHVWGwbcEdk1Tb9xsb+cCGolSYYWPRWNCzsdh4ny841kIANEA9DWxo0a8dxUCIiJUmGNtuye1dbHeuteMTQaujV1dGr8L8fKBCRCpO3DuCwKMCntgqwK93aFdnqOvjISIU0iJUcRAiFMqJUfUSpFMIiVH1EIhTahFqEC8BCpJphU0zajqGmSVCoY2ZUWo+oumDaOpdw8wKpjQIPu8gyg2bZgd77hYCDb8Hf3VqiVGja7n5kX9daC83q7omlKCrAre9/CvOR5uNDM5K1rxpjNMBuhxkNejffGux33PalaoERo2u8PzNk1gKDrw+pO/dpoN07jTV5CV+J4rWmPHpAGMOAbJLayGN307QJ2/FISIlRo2uY+ZafUDQKw6+jEF9ZBNkghd76DvkWPjdONcQXZcwyglvwqVCkV59fpK5EbUaXa/l5oWbK+mvWgCtV6axti3Ontdl28N69x5ZElIiESaNoqgWNae4EnoOpAB369AI8iJULtERCpJGGDZtRCI4iFQplQjqhC7dKoVJAsUJNOWyq50Muo0XTazR7OS9vl9JLS+r/taPKv69fjdSLTDTLpNpMoOhPb00b3Oi9eTu6aukZwy9tP21/iENMXTGjaTgQuhg1VaNv36A7N/wBOv5x6vT5XLMN2Nr1P3yGgbHXf/eQaYaI0bScPZVyoYE1shIoW2236sXgmAVxZFkAAGgexl2Yd43HxqQlIaY0bOVqxsLYWw2BoEV+sO8RSD6oVqrW11ejpjrUPHwuR6YhSNG0j6inXs0dXhq1/LVVfC5Ezn1YXUa1ns2a6Du99xCkQrJpdpsda8XT2R89T18bqLrK5Ax3YY7YNdlvUm1a+89D75XKxhWNLtOw05aQ2AqgUaJHqlqiOj94/tVK/Fg62s2b60AT39qv1vHziFY0rIbT4L0GidP3mrw3RdGr97pffdSJn+6C227saB7J2T2h3nwjCsaVjS7RERCJKVjSJNLtHUI+oRodfTALJ9MUJOjkh0RdMmKyFMoZtKg7C2JBFX02O5v8AlB5R5VbooFWLN7130P8AeS6ZNpgUhNuLxGZRlssSAAVC0bY7V750MaMd2of2RvXvPeY5uBUMMi0pHteBH8j5xWp+yr1XUqA3wvoJmRq2XWhpjGZQaLCz3WL+UZxHBOR2cjEd6mlseAKjaWMPDKooKF23rf69TKeP0wpFy4Spo+Cn/MoYfQiTFJ0lOLMio7+ryINKuVZkdB7KvoBKsvQMAQQADVWazHEKxpSXuJ4UJtrR/wBjUR8yonO4ri1QbmyegG5P+gkWS3wUrGlZR/pgfgP+b/aTYeYoxo2vv6fOTtG+uU+kpWIVk9XvGlZWNq5WNKycrGlZGtoCsQrJisaVhdoqhJNMINu9oijHLAxxQk05INMNMshIoSBTycPq/WYfsmo5cYUeA7/9SZb9XKXM+BOVVUGhrBYeKjrCzz8uFzbjhkBxopIDWzdRt0qr2na4XGoVVQggAAEEG9upIl7DwyqNKqFHgBURcSrdAC9z0F+Zkk+2rlLNRQGRi2jQw7ySRpryIuz5RvF8QEKLVl2CgeV7n6yzi4gMqkDZhYtgNvH8vnOXz/Mq6W6ZFYFSN1I7wW+H0i3wY47ul4PbFV30jtHwJ9lff1Py8Y5wACSQAOpOwE5XCczXHjFtbMWZqFsCTZAXw8yZzOL4/Xd6ie7UaVfClGxPmZOzU47a6HE8arajq7C7Ko9rI3n/AGZwcjliSepjCYs527d8cZCQhCRXT5ZxhUhG9k7A+BP8p2SkygmxVdh7hOmNceWSeVcpIyktFIwpNuSsVjSsslIwrIIdMJJohGjbTBI4JLASOGOE0rjHFGOWAkcEjZpW0Q0S1oi+rl2aUnwg9QD7wP5yjxwwqvbSlPUhDXxZRVe8y/x2ZE9o1Y3BGxB8zXu6/CYvmPMEdgRgJUbtb5CGG9HuobiZyum8MNu62fCnfjo76ewp371ujv5/WZ3nPMUyMuhAFXrsBq38RvVD6mcs0T4AnzND8zGGYuW3bHCS7OY72BXl4RkITLYhCEAhCEAmu5Rl14lPevZPw6fSpkZZ4PjHxHUp94O4PvE1jdVnPHtGvZIxklPhOeIwp+yfiQfdQ2l/DlRxasG9x/Md06SyvNcbPlCUkZSXGSRlJWVbRCT+rhC+WtCRwxywEjhjmdumlYJHDHLISKEk2aVvVxdEtaIvq5dppxeacsGUAhijr7D9dPS7U7EbTEcXw/EJeHQrE7q6qAWW6tL7thsACNvET0fmOYYsT5CL0qSB+Juir7yaHxkfMOVLnQJlW+h22II8JmzbeN08vfPpXR6hA3TURqPyPfKDZm8asb1tY8/GbDnfKsKakx+sbKKGjSihQfZLOEF7dBdn4TOcVwWPH2WdtY9oKikA7bWXB28ambHWWOZAyRq6DfzIo/IEyMmRRCEIBCEIBCEIBLHBcQUdXB6EX5jvErwgehNjkbJLWEakVvFVPzAMGSd3jVNMSWtEIRrgkcEkoWOCzlt6NIgkUJJgsULGzSLRDRJtMNMbNOXxfKMeU3k1NuCoLEBCDYKBao+fXzlxMYACgUAKA8ANhLGmBEqWOXzTlGPiF0ZF/ZcUHQ7G1bu3A8jUynFegKBbTI7Hfakvod9yL3qb0xrQstnw8h4j0dyLk0aMgUjZzjega6NpU9/hfUbxV9Fcx/Wx3daS4v3mrA913PWWkZk012rzx/QTJoBXIrPe4IKrVfqk7nfxA/1xxE9yyNSsfAE/ITwySxcbaITo5+CIwY8wRgGZwWNaWIOwXezQDWaqc6RpKm/ZseRY7Dv28LkUlRCQW2oVd34Ej8qkRhRCEIR6hwmOsaDwRB/0iOZJaxYqVR4KB9BEZJ2jy35VPVwlj1cITTTAR4ERZIonLb06IBFqOAgRG16mwikRJU0IhjqhUHVGRGlZNpjahOqErE0SbTDTBpzebHTgyt4Y3PyQzw+e3ek23CZz/wDG4+LCh+c8X4fFqdU/EwX5mpKuM03npFgOPleBACN8Zbp1ZWc3e/tHunns2Hp5zwZX+zYyDixHcjozVXyHT335THyLEqnskaiLI27iN9yb7vd3mRSRHq9huK3F1uDY8Dt198jhXS5FwoyZCGXUq48rkfs42Kn/ADaZzZqPQnGrNxA31/Z3CjuINBvj7PzMy8D2ZFtQR3gflGMkOTNq4fCx3Jxpfv0C5YZJ0lee4qumEs6IS7HVBkgaQrHCcnqTAzE+hGcjM+Mk06Fls/gev5t8ptFmF5N2DwmbuOXNib989kfMmETemeZjxCICaRVJo97v/oom3qYPnPbbiM3d9pxYx/8AWjA18SJvjGzTK+kXDDJxfDYmLBXVwdJo7Anr8J1OX+j+LC4yIX1AEdp9Q3FHapy/SNnHGcKcQVn0vpDGlJo3Z91ztcqycSS32hMaCho0EmzvquyfKDS/Uw/KMxXmL2Tpd8yddrB119B85u5gM/YbJxA/9Lj7J/sNYb8gPjGyxd9PsprHjW/13ajVBdKr9WM03Lh91j/u0/gEyvpOdb8U3UYcGLH+8+VH/Ka3lv8AU4/7tP4BGzR/pJzhuA5e3F4lU5XyKilhqCgk3tfgp+JHhMbz/jf6Q5QvNXRF4nh+IGI5EXTrXskWP31PkVNVc736UB/4Qn+IX8nmV5f/AOW+I/xi/lghHnJM9l576W5+X8Byz1C4m9bwwLesQt7CYqqiPxmeNT2jnXJ+E4ngeVfa+MHDaeGUICurXaYtW90tUvX8UDOfpPw43w8BzFMSY24rExyqgpSyjGQa8e2wvrQEwXA8U2LImZfaxurr+0jBh9RPQP0qg4jwfCBD9mw4COHyB1Y5rVQXJAoeym1d9jqJ5vA9b9LEC8z4Lj8O2Pj8aUAK1MwVNJHubF8Zwf0s8Qi8Ti4DF/V8HhTEPHUQGYk9506B7wZsP0ccVi4jgMWTO2/K8r5N6P3Zxuy3fQAsa/uhPNfTkl+KbiN64hVyj96xX/TA9B9HV/4XB/dp+UvOsh9HVH2Xh/7pP4RL7Y5qZJ02qaYSx6qEvZOiQRwkStJFM4dnp6pVmJRD/R/rB7WPP6wfB6/7vpNoDGLwyBSgRAhu0CqFN9bWqMsrGWLHcQh+wY3PtZOI9YfezPX0Am6JlZ+GQqEKIVWtKlVKiulCqEmuaZZvn3EKnG8K7sFVVyWx6DYj8yJ2uF5vgyNoTKrMbNC726yTPwiOQXRHI6F0Vq91iGHgsSHUmJFbxVFU7+YEqLQMx6YNeHmKdfvcjD3p2x/DNfcYmBF1aUUaiS1KBqJ6lvE++BicRZ+A4riG9rI6b+SMij63Nny0/c4/2E/gEUcImj1ehNH4NC6Ot+zVdd5KigAAAAAUANgAOgEgr+mfK8vF8sOHh01umVXKCtRXtezfU9r6GZLmfAPwPITw3EDRm4jidaYyRqCgJZIB8Md+WtR1nQ9P+PzYOHR8GR8betUFsbsjVpfa1IsE1tPKeP5hlztrzZcmRqrU7s5A8ASdh5SxFSei/pI/5Hk/+FP8GCedS1xPHZciomTI7rjGlFZmZUXYaUBNKNhsPAQPQfTzGW5ZyihZONlB964xVnp0HynnbKSoYkHfSBfaAABuvDfr5GSZuYZXRcLZcjY09hGdiiX10qTQ6np4xWIZWY6QQdRO4LaiBpVR2aFk923ykqyeG5/Rt/yHOP8ACr/BnnF9L6PD8Af1vUUfGgEq/mZn+F4/LjV0x5XRcg0uqOyh13GlwDTDc7HxMTjeNbKVLdFRUUdyqooAfU+8mVHr/otlD8HgYdyKvxTsn6qZ02lH0cSuE4cD/wBpD81BP1M6BWTbUlR3COqEbi6qouWSLlnMXNJVzTzdq99446a5I8OJzVyR65ZqZOWWDpBhHAyguWTpkm5k5ZcazFkSvHgzUyc7hTooMbcYXl2nVNcUGVhljxkjaaY39KeSsGJL65Cf8qn/APU8wnrX6QuBObhdai2xNr266CKf+R/dnkssSiEI5BZA8xKhskxKCaJoUd6J3AJA28TQ+Ma3WNhfs4DunV5nwij1GJBeQ4xrA6l3dtK+8AqPhHcu5XkZkbF2yx0gDY6tGptj3CyNXSxN36Peia4nXis7asoNqo9hT3ebEePT39Zi5x09u6+PLS8s4Y4sOLETZREQnxKqAa+UsGRNnEjbOJzuTrjxrEJV9ePGEnZr22d1yVMk4oz+clXiPOcvL3Xq7S5JIrzjLxB8ZIvFEd8ltSYyu8jyZHnEx8btJk5iJjvk1eCX7jto8mV5w15iPGMycc3cZZyVzy4I0DZBKfEZ6nCbmT+MhfjWPfNzPJz9iV1zxW8evF+c4Y4rxkicSJfds+knpd/btrxc8u9KuAXDnIUUjDWoHRbsFfgQfhU3f2oTI+muQM2Mj8J/MTpx8vbLWnLm9N0xuW2XgDCE9DxFnWx8rU8K3FHKoIYKMf6zX179qG/ToJzAtmvGOzYmQlGBVh1BBBHvBky861W8fEts22f6OMNHNl8AqA++y35LNq+SZn0GUJw1/ict8qX/ALTO8+YeInk5OT/tX0ODgtxl/TmcyNsshfiB4ym/FiZme3W8Nx+XR9dFnK+1CLLup0jJfaj4wHFHxnMPERh4iejo8Hu39dgcWfGOHGnxnDOc+MY+cnvjpD38v1ohxx8Yo5h5zMLmYdDD1zdLj24f0ZNSOY+cX+kZlFykd8lXiT3x7UWeoyaQ8wuH2vzmdHExDxZ7pPbi/wBFd88wrvMT+kfOZtnJNxBkPjNe3Gf6Mmhfm4Bq5zua8WMmkg2RY+df6TnGJLMJPLGXLllLKIQhNuTU8l4leExNmy4dTZB9yx0kWPHvFWDt1nD5nx758jZnq2rYbAACgAPAACSZOIy5lCs1rjFKDsAO+qHl1M585YccmVzvzXo5eW3GYY76z43+/bT8t48riVQaofzJlg8xPjMqnEMBQi/aWi8c3sx9RlJI055ifGM/pAzO/a28o37U0e3Gv6cv1pPt58oTN/am8fyix0T+jL9V4QhOrzC4QhA6nIuETIzhxYCoRuRuc+JD0/su07PG8qwLxqYlA9U2NslMzED7vI6hip1bUoNb7GpDw3JML9PWD/h0ye0p7bAmz2PYFdOu/URuTk2JVDsWr7MuXdqtz6nYVjJC/emhR6DtDegu8Nyjhn9XkVScb5yoLM9FNXEnSaN3ox4Sa3384ZeRYSCFUC+NOEOXawhZAqAHskaWZrJDUOpAMo8DyfDlOMW6asSOxLA2zcSuEhaTaxdXe5FmhH8FyXA2RMZZxeHFkYh6OvK2EAC8dD+sNAE3tbLvQPfl2AZHx6F0HieGVH1sSmHOHcgMG0tSqo1EHqfKpuK5VhXBnyHEFyJ6pghbIChZOHbIgBPQHI4Ia26b7GcblXLUy4s2RmIOMWoH633eV69k96L1I2vvqS835UmJHKjJaZ3xlmIrSDkC0NI1E+rO4PVWBA7JIRekXB48eZlxKwxigGNnUxVWIvpY1gUO4A987fNuSYMaZzjXWUBo1lbSPX8UhPZIoquJBqa17J66hObj5OhxByXv1frKsUCcXEv0roTgx/AnyrsZPRPAuVMZbIVbX+soNB8KILCHf7xr2o9npuYHP5ZybDk4ZHJrI+RUuzsGyol79nYMYvM+V4kTiXRPYdGRtZZVx5BjZUVlJDEesrte0NweywNTFyvHszFq+zDMe1XaLhasIxrfwO/UgbiLmfLUTHhyJq1PWrUQQSceJ7UBRQBcit+ggXuV8DiccMDhDs44ksA2TVkONGZFIDbdqvZAJkWDg8CjjC/aXGxTE1kmyMoxkadiSyY7J2rV31L3M/RvBh1Eu5ATK4tgNhlxLiBKoxsplBO3WugjH9HMS4seYnI2pFfSCosDhnyuoOk1boQDvQPeYE6coxBgoQ6Txj4mN5PYVcbImoHSNRZhv2jex2nO5vy5UwF1xaW+0Ojbu+gDGjDHrvSKZmFMC3nsZbPo5h2Gp79e+M9pb0K2ZQa0bH7sb2dydhtKeHlOJnGMB2J4dMnZaryOqHSScdKO0aFkElRqFmppd+NM7COZSOo8D8CLH0jZUEIQgEIQgEIQgEIQgSrnYdGYWuk7ndfw+7yj14twbGRgdOgEMfY/D19ny6SvCBKMzDoxFAAUTsAdQHz398eeLfYa27Ipe0eyLBob7CwD8BK8IEiZSAQCQD1AJF7Eb/AkfExXzMRpLEiy1EkjUeprxNdZFCBMeIbftN2gA253C1pB8QKFe6PXi8gNh3B3F6mum9ode/a5WhAspxuQadORxpBC0zDSG9oLvsD3yPJmZgoLEhRSgkkAeA8BIoQLeDismoEZHBNiwzA0asXffQ+Qk/FMVClWYEEFdztp9kjfYjunOjmYnc7yWXcu25ZJZryf69vxN49T133+p+ZjvteTbttspQdo7Ieqjf2fLpK86XJuEGXIFIseEZZTHG5X6OPjvJlMcfmqDMTuST0HwAoD5ARs7/P+TaMlYlYjSCaBNN3gfT5zgETOGeOclxa5eHPiyuOU+CQhCbchCEIBCEIBCX+AyqA2qtiCAe/VasPPZgf3ZNzAhlXtAsC+o6lvcjT39rs0NulVA5UJ18GUgJ2l2XV7SAH2PuxZ26AtdX2uvU8iAQhCAQhCAQhCAQkqYWPRSa8ATIo2tlhZJhxFiFA3MjlzlbgZFJNC5nK2S2N8WMyzmN+LVni+RZcaetIBXvIN175zsOZlNqSD4g0Zved8zx4+HZAwZnXSAN+vUn3Tz6cPTcmfLjbnPt6/W8OHByScd868/wCK2Xo/zNdLPlyCwN9R3+XfMrxuYPkZwKDMSB4AmQAxBN8fDjhlcp9ufP6vLmwxwv1/skIQnZ5BCEIBCEIBCEIBCEIBCEIBCEBAWS8OmpgviZFJMTUQfOS/DeH/AKm3pPJeHVUAUVtM36bcCqMmRQAXvUB3kVvXxmn5RkPqg3ftMP6S8W2TM2o+zsB3AT4/pJlfUZXfxvb9H/yPWelk186040IQn2X5ktxIQgEIQgEIQgEIQgf/2Q==" class="card-img-top" alt="..." style="max-height: 400px">
     <div class="card-body">
      <h5 class="card-title">Memory</h5>
      <p class="card-text">Andelina Alido adalah seorang gadis dengan rencana: lulus di atas kelasnya dan keluar dari kota kecilnya secepat mungkin. Tidak ada yang akan menghalanginya - bahkan kelainan genetik langka yang dikatakan dokter perlahan akan mencuri ingatannya dan kemudian kesehatannya. Tujuan dari Buku Memori adalah untuk memberikan catatan sejarah pribadi individu. Ini bisa sangat membantu saat penyakit berkembang dan kehilangan ingatan meningkat dalam perasaaan.</p>
      <a href="#" class="btn btn-dark w-100">Read</a>
      <a href="#" class="btn btn-primary w-100">Download</a>
     </div>
  </div>
</div>

<div class="col-md-4 mb-3">
  <div class="card" style="width: 18rem;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbQaxOMvlqKRQ1Ib7m110Qu-nJkL07JarYiA&usqp=CAU" class="card-img-top" alt="..." style="max-height: 400px">
     <div class="card-body">
      <h5 class="card-title">Modern Spaces</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sequi laudantium iste ad debitis cum officia, alias beatae vitae nostrum optio et, accusamus, tenetur dolorum nulla. Dolorum incidunt minima harum! Debitis culpa praesentium quasi, harum obcaecati possimus officiis, deleniti iure ratione saepe repellendus aliquam. Perferendis ipsa repudiandae maxime sed rem iure adipisci temporibus veniam voluptatem aperiam alias, praesentium maiores cum.</p>
      <a href="#" class="btn btn-dark w-100">Read</a>
      <a href="#" class="btn btn-primary w-100">Download</a>
     </div>
  </div>
</div>

<div class="col-md-4 mb-3">
  <div class="card" style="width: 18rem;">
    <img src="https://static.wikia.nocookie.net/fnaf-the-novel/images/d/d9/FNAFTheSilverEyes.jpg" class="card-img-top" alt="..." style="max-height: 400px">
     <div class="card-body">
      <h5 class="card-title">The Silver Eyes</h5>
      <p class="card-text">Sepuluh tahun setelah pembunuhan mengerikan di Freddy Fazbear's Pizza yang menghancurkan kota mereka, Charlie, yang ayahnya memiliki restoran tersebut, dan teman masa kecilnya bersatu kembali pada peringatan tragedi tersebut dan menemukan diri mereka di tempat pizza tua yang telah dikurung dan ditinggalkan. Empat maskot animatronik berukuran dewasa yang pernah menghibur pelanggan telah berubah. Mereka sekarang memilik i agenda pembunuhan.</p>
      <a href="#" class="btn btn-dark w-100">Read</a>
      <a href="#" class="btn btn-primary w-100">Download</a>
     </div>
  </div>
</div>

    </div>
  </div>
</section>
<!--End Card-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>