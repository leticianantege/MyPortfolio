<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>My Portfolio</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->

<div class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</div>

<!-- Navigation Section -->

@include('navbar')

<!-- Home Section -->

@include('home')

<!-- About Section -->

@include('about')


<!-- Experience Section -->

@include('experience')

<!-- projects Section -->

@include('projects')

<!-- Education Section -->

@include('education')

<!-- Quotes Section -->

@include('quotes')

<!-- Contact Section -->

@include('contact')

<!-- Footer Section -->

@include('footer')

<!-- SCRIPTS -->

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.parallax.js') }}"></script>
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
