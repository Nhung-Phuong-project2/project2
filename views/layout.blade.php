<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @section('header')
    <header class="navbar navbar-expand-md navbar-dark bg-dark" >
  <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
  <a class="cl_logo hidden-lg hidden-md " href="/"
                title="Bkacad">
      <h4 class="title-head" style="color:#006182;"> BKACAD LIBRARY</h4>
  </a>
    <div class="collapse navbar-collapse" id="bdNavbar">
      <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
        <li class="nav-item col-6 col-md-auto">
          <a class="nav-link p-2" href="{{url('/book')}}" >Sach</a>
        </li>
        <li class="nav-item col-6 col-md-auto">
          <a class="nav-link p-2" href="#" >Doc gia</a>
          
        </li>
        <li class="nav-item col-6 col-md-auto">
          <a class="nav-link p-2" href="#" >Thong tin muon sach</a>
        </li>
        
      <hr class="d-md-none text-white-50">
    </div>
    <div style="float:right;">
        <a class="btn btn-bd-download nav-link p-2 active" href="#">ADMIN</a>
      </div>
  </nav>
</header>

<nav class="bd-subnavbar py-2" aria-label="Secondary navigation">
  <div class="container-xxl d-flex align-items-md-center">
    <form class="bd-search position-relative me-auto">
      <input type="search" class="form-control" id="search-input" placeholder="Search docs..." aria-label="Search docs for..." autocomplete="off" data-bd-docs-version="5.0">
    </form>
</div>


    <button class="btn bd-sidebar-toggle d-md-none py-0 px-1 ms-3 order-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-expand" fill="currentColor" viewBox="0 0 16 16">
  <title>Expand</title>
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10z"/>
</svg>

      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-collapse" fill="currentColor" viewBox="0 0 16 16">
  <title>Collapse</title>
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zm7-8a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 4.293V.5A.5.5 0 0 1 8 0zm-.5 11.707l-1.146 1.147a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 11.707V15.5a.5.5 0 0 1-1 0v-3.793z"/>
</svg>

    </button>
  </div>
</nav>
@show
   <div>
     @yield('content')

@section('footer')  
<footer class="bd-footer py-3 mt-3 bg-dark">
  <div class="container py-3" >
    <div class="row">
      <div class="col-lg-3 mb-3" style="width:60%;">
        
        <ul class="list-unstyled small text-muted">
          <li class="mb-2">
            <a class="cl_logo hidden-lg hidden-md " href="/"
                title="Bkacad">
                  <img class="img-responsive" src="https://www.bkacad.com/images/config/logo_1591255072.png" alt="Bkacad">
            </a> 
          </li>
          <li class="mb-2"><h3 class="title-head"> HỌC VIỆN CÔNG NGHỆ BKACAD</h3></li>
          <li class="mb-2"><p style="font-size: 18px;margin-bottom: 15px"><span style="color:#006182;">Hệ chứng chỉ Quốc tế</span></p></li>
          <li class="mb-2">
            <p>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
          </svg>
          P214, Tòa nhà A17 Bách Khoa, 17 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội
            </p>
          </li>
          <li>
            <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
            ĐT: 036 779 1116
            </p>
          </li>
        </ul>
      </div>
      
      <div class="col-5 col-lg-2 mb-3" style="width:40%;">
        <ul class="list-unstyled small text-muted">
          <li class="mb-2"><p style="font-size: 18px;margin-bottom: 15px"><span style="color:#006182;">Hệ chuyên gia Quốc tế</span></p></li>
          <li class="mb-2">
            <p>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
          </svg>
          P214, Tòa nhà A17 Bách Khoa, 17 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội
            </p>
          </li>
          <li>
            <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
            ĐT: 036 779 1116
            </p>
          </li>          
          <li class="mb-2"><p style="font-size: 18px;margin-bottom: 15px"><span style="color:#006182;">Cơ sở TP.Hồ Chí Minh</span></p></li>
          <li class="mb-2">
            <p>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
          </svg>
          Số 15, Đường Chợ Lớn, Phường 11, Quận 6, TP. Hồ Chí Minh
            </p>
          </li>
          <li>
            <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
            ĐT: 0283 755 9979 - 0918 55 46 55
            </p>
          </li>                
        </ul>
      </div>
     
      
    </div>
  </div>
</footer>
 @show
</body>
</html>