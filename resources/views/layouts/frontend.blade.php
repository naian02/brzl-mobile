<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/favicon.png">
        <title>BRZL Agencia</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="frontend/css/materialize.css">
        <link rel="stylesheet" href="frontend/css/loaders.css">
        <link rel="stylesheet" href="frontend/css/line-awesome.css">
        <link rel="stylesheet" href="frontend/css/line-awesome-font-awesome.css">
        <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
        <link rel="stylesheet" href="frontend/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="frontend/css/style.css">
    </head>
    <body>
        @include('frontend.common.preloader')
        @include('frontend.common.navbar')
        @include('frontend.common.sidebar')

        

        @include('frontend.common.footer')

        <script src="frontend/js/jquery.min.js"></script>
        <script src="frontend/js/materialize.js"></script>
        <script src="frontend/js/owl.carousel.min.js"></script>
        <script src="frontend/js/styleswitcher.js"></script>
        <script src="frontend/js/main.js"></script>
    </body>
</html>