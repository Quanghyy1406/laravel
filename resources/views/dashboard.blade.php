<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    <style>
        body {
            background-color:rgb(67, 137, 207);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color:rgb(247, 74, 74) ;
        }
        .nav-link {
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s ease;
            position: relative;
        }
        .nav-link:hover {
            color:rgb(0, 0, 0) ;
        }
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background:rgb(158, 29, 29);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }
        .nav-link:hover:after {
            width: 100%;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: none;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-header {
            background-color:rgb(131, 21, 21);
            color: white;
            border-radius: 10px 10px 0 0 ;
            padding: 15px;
        }
        .btn-dark {
            background-color:rgb(177, 11, 11);
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .btn-dark:hover {
            background-color:rgb(204, 28, 28);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(204, 18, 18, 0.3);
        }
        .form-control {
            border-radius: 5px;
            padding: 12px;
            border: 1px solid #e1e1e1;
        }
        .form-control:focus {
            border-color:rgb(148, 16, 16);
            box-shadow: 0 0 0 0.2rem rgba(74, 108, 247, 0.25);
        }
        table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        table thead {
            background-color:rgb(187, 26, 26);
            color: white;
        }
        table th, table td {
            padding: 15px;
        }
        .container {
            padding: 20px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg mb-5" style="background-color: white;">
    <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-home me-1"></i> Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt me-1"></i> Đăng Nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.createUser') }}"><i class="fas fa-user-plus me-1"></i> Đăng Ký</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}"><i class="fas fa-sign-out-alt me-1"></i> Đăng Xuất</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
