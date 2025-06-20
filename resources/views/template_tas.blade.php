<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nama : NRP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        .jumbotron {
            background-color: #f0f8cd;
            height: auto;
            padding: 2rem 1rem;
        }

        .profile-pic {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center">
        <!-- FOTO DI SINI -->
<img src="{{ asset('tas_profile.jpg') }}" alt="Profile" class="profile-pic mx-auto d-block mb-3">
        <!-- GANTI FOTO SESUAI PATH -->
        <h1>5026231065 : Beh Siu Li</h1>
    </div>

<nav class="navbar navbar-expand-sm bg-white navbar-light">
    <div class="container justify-content-between">
        <ul class="navbar-nav w-100 d-flex justify-content-between">
            <li class="nav-item"><a class="nav-link" href="/home">All Front End</a></li>
            <li class="nav-item"><a class="nav-link" href="/pegawai">Pegawai</a></li>
            <li class="nav-item"><a class="nav-link" href="/kursi">Tugas CRUD</a></li>
            <li class="nav-item"><a class="nav-link" href="/eas">EAS</a></li>
            <li class="nav-item"><a class="nav-link" href="/lat1">Latihan 1</a></li>
            <li class="nav-item"><a class="nav-link" href="karyawanlat2">Latihan 2</a></li>
            <li class="nav-item"><a class="nav-link" href="karyawanlat3">Latihan 3</a></li>
        </ul>
    </div>
</nav>


    <br>
    <div class="container">
        @yield('content')
    </div>

</body>
</html>
