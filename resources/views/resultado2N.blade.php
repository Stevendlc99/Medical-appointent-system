<!DOCTYPE html>
<html lang="en" dir="ltr"><head>
    <meta charset="utf-8">
    <title>Doctris - Doctor Appointment Booking System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template">
    <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health">
    <meta name="author" content="Shreethemes">
    <meta name="email" content="support@shreethemes.in">
    <meta name="website" content="https://shreethemes.in">
    <meta name="Version" content="v1.4.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    
    <!-- Css -->
    <link href="assets/vendor/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="assets/vendor/libs/js-datepicker/datepicker.min.css" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="assets/vendor/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/vendor/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/vendor/libs/remixicon/fonts/remixicon.css" rel="stylesheet" type="text/css">
    <link href="assets/vendor/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
    <!-- Style Css-->
    <link href="../assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css">

     <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
</head>

<body>
   
        <main class="page-content bg-light">
         
            <header id="header" class="fixed-top">
                <div class="container d-flex align-items-center">
            
                  <h1 class="logo me-auto"><a href="index.html">Yachay Tech</a></h1>
            
                  <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                    <li><a class="nav-link scrollto active" href="/welcomenurse">Back</a></li>
                     
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                  </nav>
            
                  
            
                </div>
            </header>
            <!-- End Header -->


            <div class="container-tabla">
                <div class="layout-specing">                   
                    <div class="row">
                        <div class="col-12 mt-4">
                            <div class="table-responsive bg-white shadow rounded">
                                <table class="table mb-0 table-center">
                                    <thead>
                                        <tr>
                                            
                                            <th class="border-bottom p-3" style="min-width: 180px;">ID</th>
                                            <th class="border-bottom p-3" style="min-width: 150px;">Date</th>
                                            <th class="border-bottom p-3">Weight</th>
                                            <th class="border-bottom p-3">Height</th>
                                            <th class="border-bottom p-3">Temperature</th>
                                            <th class="border-bottom p-3" style="min-width: 150px;">Pressure</th>
                                            <th class="border-bottom p-3">Pulse</th>
                                            <th class="border-bottom p-3" style="min-width: 220px;">Observation</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
    @foreach ($registros as $registro)
      <tr>
      <td>{{ $registro->id }}</td>
        <td>{{ $registro->date }}</td>
        <td>{{ $registro->weight }}</td>
        <td>{{ $registro->height }}</td>
        <td>{{ $registro->temperature }}</td>
        <td>{{ $registro->pressure }}</td>
        <td>{{ $registro->pulse }}</td>
        <td>{{ $registro->message }}</td>

      </tr>
    @endforeach
  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> 
                <footer class="bg-footer-color shadow py-3">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-sm-start text-center">
                                <p class="mb-0 text-muted"><script>document.write(new Date().getFullYear())</script> Web programming course -  by Yachay Tech University</p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </footer><!--end footer-->
            <!-- End -->
           </main>
        </div>
         
</body>
</html>
<!-- <html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<div class="container">
<table class="custom-table table table-bordered table-striped">
  <thead>
    <tr class="text-center">
      <th>ID</th>
      <th>Date</th>
      <th>Weight</th>
      <th>Height</th>
      <th>Temperature</th>
      <th>Pressure</th>
      <th>Pulse</th>
      <th>Observations</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($registros as $registro)
      <tr>
        <td>{{ $registro->id }}</td>
        <td>{{ $registro->date }}</td>
        <td>{{ $registro->weight }}</td>
        <td>{{ $registro->height }}</td>
        <td>{{ $registro->temperature }}</td>
        <td>{{ $registro->pressure }}</td>
        <td>{{ $registro->pulse }}</td>
        <td>{{ $registro->message }}</td>
        
      </tr>
    @endforeach
  </tbody>
</table>

</div>
</html> -->