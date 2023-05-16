<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laksana | Rent Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <form method="POST" action="{{route('register.post')}}" class="card py-4 px-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
  <div class="text-center">
            <h3>Form Register</h3>
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Name</label>
            <input class="form-control" type="text" name="name" placeholder="Enter Name">
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Email</label>
            <input class="form-control" type="email" name="email" placeholder="Enter Email">
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Password</label>
            <input class="form-control" type="password" name="password" placeholder="Enter Password">
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Phone Number</label>
            <input class="form-control" type="number" name="phone" placeholder="08**********">
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Address</label>
            <textarea class="form-control" type="text" name="address" placeholder="Enter Adderess"></textarea>
        </div>
        
        
        <div class=" mt-3 ">
        Already have an account?  <span><a href="/login" style="text-decoration: none;">Login here  </a></span>
            
        </div><br>
        <button type="submit" class="btn btn-primary">Create Account</button>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>