<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-store">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XMUM Office Document</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/icons/Xiamen_University_logo.png') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{--
    <link rel="stylesheet" href="{{ asset('assets/dist/boostrap/css/bootstrap.min.css') }}"> --}}

    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.js"></script>
    --}}
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.js"></script>

    {{-- @vite(['resources/js/file.js'])
    @vite(['resources/js/plugins.bundle.js'])
    @vite(['resources/js/scripts.bundle.js']) --}}

    <link rel="stylesheet" href="{{ asset('assets/styles/main_page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/plugins.bundle.css') }}" type="text/css" />
</head>



<body>





    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-white">
        <div class="container-fluid">
            <!-- Main Icon -->
            <div class="navbar-brand-div">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/icons/linc-logo.png') }}" class="xmu-icon">

                </a>
            </div>
            <!-- Profile Icon -->
            <div class="navbar-nav">
                <div class="d-inline-block dropdown">
                    <a href="/" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true">
                        <img class="navbar-login-icon" src="{{ asset('assets/icons/avatar.png') }}" alt="Login">
                    </a>
                    <ul class="login-menu-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item disabled user-id" href="/" disable>1212124</a>
                        </li>
                        <li>
                            <div class="btn-logout-container">
                                <a href="login.html" class="btn btn-logout">
                                    <img class="btn-icon" src="{{ asset('assets/icons/logout.png') }}">Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>





    <!-- Body Content -->
    <div class="container-fluid container-fluid-wrap">



        <div class="content-container">

            {{-- Side Menue --}}
            <x-sidemenu />

            {{-- Main Content --}}


            <main>

                {{ $slot }}

            </main>





        </div>
    </div>










    {{-- <script src="{{ asset('assets/script/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/script/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/script/file.js') }}"></script> --}}


    <!-- <script src="assets/dist/popper/popper.min.js"></script> -->
    <!-- <script src="assets/dist/jquery/jquery.slim.min.js"></script> -->
</body>

</html>
