<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/images/ssms_logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title> | SSMS LOGIN</title>
    <link rel="stylesheet" href="{{ asset('/css/landing.css') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="container-lg d-flex align-items-center justify-content-between min-vh-100">
            <div class="col col-md-6 wrapper_logos mb-1">
                <img src="{{ asset('assets/images/ssms_logo.png') }}" alt="main-logo" class="image-fluid">
                <img src="{{ asset('assets/images/cenro-logo.png') }}" alt="2nd-logo" class="image-fluid">
                <img src="{{ asset('assets/images/pc-logo.png') }}" alt="1st-logo" class="image-fluid me-3">
                <i class="fa-solid fa-location-dot me-1 text-black-50"></i>
                <span class="fs-6 fw-semibold mb-0 text-black-50">Panabo City Davao del Norte</span>
                <div class="title-txt d-inline">
                    <hr class="border border-black border-1 opacity-50 rounded-5 mb-1">
                    <h3 class="mb-2 fs-2 text-black fw-bold">Street Sweeper Management System</h3>
                    <p class="mb-0 text-black-50 fw-medium fs-6 text-start text-break">
                        The Street Sweeper Management System (SSMS) is a comprehensive web solution designed to optimize and streamline the operations of city street sweeping services. It offers real-time tracking of street sweeper personel, efficient scheduling and route planning, and detailed reporting tools to ensure clean and well-maintained streets.
                    </p>
                </div>
            </div>
            <div class="login-form card col col-lg-4 p-4">
                <div class="login-img d-inline-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/images/ssms_logo.png') }}" alt="main-logo" class="image-fluid">
                </div>
                <div class="d-inline">
                    <p class="text-center fs-5 fw-semibold text-black text-break mb-4">SSMS</p>
                    <p class="text-center fs-5 fw-semibold text-black text-break lh-1" style="letter-spacing: 2px">LOGIN HERE</p>
                </div>
                <form action="{{ route('login.index') }}" method="POST">
                    @csrf
                    <div class="login-wrapper container-md p-4 mb-3">
                        <div class="form-floating mb-2">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                                <div class="text-danger fw-medium"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="form-floating mb-0 input-icon d-flex align-items-center">
                            <input type="password" name="password" id="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            <i class="fa-regular fa-eye text-black-50" id="togglePassword"></i>
                        </div>
                        @error('password')
                            <div class="text-danger fw-medium"><small>{{ $message }}</small></div>
                        @enderror
                        <p class="text-sm-end mb-0"><a class="text-decoration-none text-black" href="#"><small class="fw-medium text-black-50">Forgot Password</small></a></p>
                    </div>
                    <div class="d-flex justify-content-center align-items center mb-5">
                        <button type="submit" class="btn btn-success">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wrapperLogos = document.querySelector('.wrapper_logos');
            wrapperLogos.classList.add('slide-in-left');
        });
    </script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
    
        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
