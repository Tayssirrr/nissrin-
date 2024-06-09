<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">


       <!--font-awesome.min.css-->
       <link rel="stylesheet" href="assets/css/font-awesome.min.css">





       <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
       <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">




       <link rel="stylesheet" href="assets/css/style.css">

</head>
<style>
    a{
        text-decoration: none;
    }
</style>
<body>

 <div class="" id="container" >
    <nav class="container d-flex justify-content-between align-items-center" >
        <div>
            <a href=""><img src={{asset('assets/img/logo1.jpeg')}} width="132x" alt="logo" /></a>
        </div>
        <div>
            <ul class="ul d-flex" >
                <li><a href="">HOME</a></li>
                <li><a href="">ABOUT</a></li>
                <li><a href="">CONTACT US</a></li>
                <li><a href="">CARS</a></li>
            </ul>
        </div>
        <button class="button" ><a href="#booknow"  style="color: black;">BOOK NOW</a></button>
    </nav>
    </div>
    <div>

        @yield('content')
    </div>

    <script src="assets/js/jquery.js"></script>

        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
		<script src="assets/js/animations.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
