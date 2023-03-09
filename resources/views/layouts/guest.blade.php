<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="app">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
    <link rel="stylesheet" href="css/app.css" type="text/css" />
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="font-sans text-gray-900 antialiased">
    {{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div> --}}
    <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
        <br><br><br><br><br>
        <div class="container aside-xxl">
            <a class="navbar-brand block" href="index.html">
                <img src="images/logo.png" class="m-r-lg">SIBAGEN</a>
            <header class="text-center">SISTEM INFORMASI BUKU AGENDA</header>
            <section class="panel panel-default m-t-lg bg-white">
                {{ $slot }}
                {{-- <header class="panel-heading text-center">
                    <strong>Sign up</strong>
                </header> --}}
                {{-- <form action="index.html" class="panel-body wrapper-lg">
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input type="text" placeholder="eg. Your name or company" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" placeholder="test@example.com" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input type="password" id="inputPassword" placeholder="Type a password"
                            class="form-control input-lg">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Agree the <a href="#">terms and policy</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign up</button>
                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>Already have an account?</small></p>
                    <a href="signin.html" class="btn btn-default btn-block">Sign in</a>
                </form> --}}
            </section>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="text-center padder clearfix">
            <p>
                <small>BKPSDA KAB. MAMBERAMO RAYA<br>&copy; 2023</small>
            </p>
        </div>
    </footer>
    <!-- / footer -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.js"></script>
    <!-- App -->
    <script src="js/app.js"></script>
    <script src="js/app.plugin.js"></script>
    <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
</body>

</html>
