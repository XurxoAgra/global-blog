<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global Blog</title>
    
    <!-- Index Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" /> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- Main Navbar-->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('web.posts.index')}}">Home</a>
        </div>
    </nav>
    <!-- Page heading -->
    <div class="container">
        <div class="blog-header p-3 pb-md-4 mx-auto text-left">
            <h1 class="display-4 fw-normal" id="title">@yield('title')</h1>
            <p>@yield('subtitle')</p>
          </div>
    </div>

    <!-- Main Container -->
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
    <!-- Footer Container -->
    <div class="footer container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="{{ route('web.posts.index')}}">Home</a>
                </li>
            </ul>
            <p class="text-center text-muted">© 2021 Xurxo Agra</p>
        </footer>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>