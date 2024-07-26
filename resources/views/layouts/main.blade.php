<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloggerin | {{ $title }}</title>
    <link rel="icon" href="/img/user/logo/loader.png" type="image/png">
    {{-- My style --}}
    <link rel="stylesheet" href="/css/style.css">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- All CSS -->
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/odometer.css">
    <link rel="stylesheet" href="/css/venobox.min.css">
    <link rel="stylesheet" href="/css/spacing.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    @include('partials.navbar')
    <div class="container-fluid">
        @yield('container')
    </div>
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/odometer.min.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/jquery-ui-slider-range.js"></script>
    <script src="/js/jquery.appear.js"></script>
    <script src="/js/venobox.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>
