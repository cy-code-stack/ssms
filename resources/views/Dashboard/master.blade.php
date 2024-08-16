<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
        <title>Admin Dashboard</title>
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel= "stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/png" href="{{ asset('assets/images/ssms_logo.png') }}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        @vite('resources/sass/app.scss')
    </head>
    <body>
        <div class="wrapper" id="app">
            <nav class="navbar navbar-expand-lg sticky-md-top">
                <div class="header-nav container-fluid w-100">
                    <div class="d-flex justify-content-start align-items-center w-100">
                        <router-link to="/api/admin/index" class="navbar-brand d-flex align-items-center text-decoration-none me-2">
                            <img src="{{ asset('assets/images/ssms_logo.png') }}" alt="logo-img" class="d-inline-block align-top" height="40">
                            <span class="ms-2 text-black fw-semibold">SSMS</span>
                        </router-link>
                        <div class="links">
                            <div class="navbar-nav">
                                <router-link to="/api/admin/index" class="nav-link ms-4 me-1"><span class="text-black fw-medium fs-6">Dashboard</span></router-link>
                                <router-link to="/api/admin/employee" class="nav-link ms-4 me-1"><span class="text-black fw-medium fs-6">Employee Directory</span></router-link>
                                <router-link to="/api/admin/schedule" class="nav-link ms-4"><span class="text-black fw-medium fs-6">Schedule</span></router-link>
                                <router-link to="/api/admin/mapping" class="nav-link ms-4 me-1"><span class="text-black fw-medium fs-6">Personel Navigation</span></router-link>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end col col-lg-4 me-3">
                    <ul class="navbar-nav">
                        <li class="nav-item d-none d-sm-inline-block">
                            <div class="d-flex align-items-center">
                                <span class="fw-medium me-3">Juan dela Cruz</span>
                                <div class="dropstart" role="button">
                                    <img src="{{ asset('assets/images/avatar.png') }}" alt="profile-img" class="profile-img img-fluid img-circle rounded-5 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" class="dropdown-item"><span class="name">Profile</span></a>
                                            <a href="#" class="dropdown-item"><span class="name">Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content-wrapper">
                <router-view></router-view>
            </div>
        </div>

        @vite('resources/js/app.js')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>