@section('header')

<div class="container-fluid">
    <header class="d-flex flex-wrap justify-content-center py-3  text-bg-warning">
        <h1 class="fw-bold">
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
                    <a class="nav-link " aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $cat)
                        <li><a class="dropdown-item" href="/category/{{$cat['id']}}">{{$cat['category']}}</a></li>
                      
                        @endforeach
                    </ul>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/publishers">Publisher</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-   current="page" href="/contact">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
</div>
    
@endsection