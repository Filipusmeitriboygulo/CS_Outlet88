<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CS_Outlet88</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    {{-- Font   --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@700;900&family=Lato:ital,wght@0,400;1,700;1,900&display=swap" rel="stylesheet"> 

    {{-- icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    </head>

    <body>
      <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand " href="#">CS_Outlet88</a>
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link me-4 active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  me-4 active" href="#">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  me-4 active" href="promo">Promo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  me-4 active" href="#">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 active">About US</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <form class="search-form d-flex me-4" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <a href="#" class="search-icon nav-link">
                    <i class='bx bx-search'></i>
                  </a>
                </form>                          
              <li class="nav-item">
                <a href="#" class="nav-link me-4">
                  <i class='bx bx-shopping-bag ms-3 shopping-icon'></i>
                </a>
              </li>
              <li >
                <a href="login" class="btn border-dark border-3 me-4 mb-2">Login</a>
              </li>
              <li>
                <a href="signup" class="btn border-dark border-3 me-4">Sign UP</a>
              </li>
            </ul>
            
          </div>
        </div>
        
         
        
       
          </div>
        </div>
      </nav>
      {{-- Home --}}
      <div class="home">
        <!-- Content here -->
        <div class="row">
          <div class="col lg-6 d-flex justifiy-content-start py-5">
             <h1>Temukan fashion Yang Paling cocok Denganmu</h1>
            <p class="subheading py-3 mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Laboriosam a cupiditate, hic repellendus rem beatae quisquam corrupti repudiandae aliquam sint?</p>
            <div class="btn-home">
              <a href="#" class="btn btn-shop btn-brown text-white border border-3">SHOP NOW</a>
            </div>
          </div>
          
          <div class="col lg-6 d-flex justify-content-end ms-3 position-relative  py-lg-0  ">
            
               <img src="{{ asset('asset/img/kaos2-removebg-preview.png') }}" alt="" height="500px" width="500px" class="img-fluid position-absolute end-0" style="border:'none'">
            
          </div>
        </div>
        
      </div>
        
      
      
      

        <script src="{{ asset('asset/css/script.css') }}"></script>
    </body>

</html>