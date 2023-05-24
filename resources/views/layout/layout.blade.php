<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@vite(['resources/js/app.js'])
<body>
    <div class="container-fluid">
        <header class="d-flex flex-wrap justify-content-center py-3  text-bg-warning">
            <h1>
                <img src="/logo/GiantLogo.png" alt="GiantLogo" class="logo" style="max-width: 5vw" >
                Giant Book Supplier
            </h1>
        </header>
        <div class="d-flex justify-content-center">

            <nav class="navbar navbar-expand-lg bg-body-tertiary ">
                <div class="container-fluid ">                          
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                      
                      <li class="nav-item ">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Category
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $cat)
                            <li><a class="dropdown-item" href="#">{{$cat['category']}}</a></li>
                                
                            @endforeach
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Publisher</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" aria-   current="page" href="#">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
            @yield('content')
    </div>
    
    
    @yield('footer')
</body>
</html>