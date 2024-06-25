<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />



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
        #scroll-Top {
            position: fixed;
            right: 30px;
            bottom: 30px;
            display: none;
            width: 40px;
            line-height: 40px;
            height: 40px;
            text-align: center;
            font-size: 20px;
            cursor: pointer;
            color: #fff;
            background: #00ca43;
            border: 1px solid #4e4ffa;
            border-radius: 50%;
            transition: .5s;
            z-index: 2;
        }

        #scroll-Top:hover {
            background: #fff;
            color: #4e4ffa;
            border: 1px solid #7a7aaa;
        }

        #scroll-Top i {
            position: relative;
            animation-name: example;
            animation-direction: alternate;
            animation-iteration-count: infinite;
            animation-duration: 1s;
        }

        @keyframes example {
            from { bottom: 0; }
            to { bottom: 10px; }
        }
    </style>

<body>

 <div class="" id="container" >
    <nav class="container d-flex justify-content-between align-items-center" style="
    height: 72px;
">
        <div  >
            <a href="" ><img src={{asset('assets/img/logo1.png')}} width="132x" alt="logo" /></a>
        </div>
        <div>
            <ul class="ul d-flex" >
                <li><a href="/">HOME</a></li>
                <li><a href="">ABOUT</a></li>
                <li><a href="">CONTACT US</a></li>
                <li><a href={{route('carstous')}}>CARS</a></li>
            </ul>
        </div>
        <button class="button" ><a href="#booknow"  style="color: black;">BOOK NOW</a></button>
    </nav>
    </div>
    <div>

        @yield('content')
    </div>

    <footer class="footer w-100">
      <div class="footer-row">
        <div class="footer-col">
          <h4>Info</h4>
          <ul class="links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Compressions</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Collection</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Explore</h4>
          <ul class="links">
            <li><a href="#">Free Designs</a></li>
            <li><a href="#">Latest Designs</a></li>
            <li><a href="#">Themes</a></li>
            <li><a href="#">Popular Designs</a></li>
            <li><a href="#">Art Skills</a></li>
            <li><a href="#">New Uploads</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal</h4>
          <ul class="links">
            <li><a href="#">Customer Agreement</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">GDPR</a></li>
            <li><a href="#">Security</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Media Kit</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Newsletter</h4>
          <p>
            Subscribe to our newsletter for a weekly dose
            of news, updates, helpful tips, and
            exclusive offers.
          </p>
          <form action="#">
            <input type="text" placeholder="Your email" required>
            <button type="submit">SUBSCRIBE</button>
          </form>
          <div class="icons">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-github"></i>
          </div>
        </div>
      </div>

      <div>
        <div id="scroll-Top" title="Chat with us on WhatsApp" class="return-to-top">
            <i class="fa fa-whatsapp"></i>
        </div>
    </div>



    </footer>
    <script>
        window.addEventListener('scroll', function() {
            const button = document.getElementById('scroll-Top');
            if (window.scrollY > 200) {
                button.style.display = 'block';
            } else {
                button.style.display = 'none';
            }
        });

        document.getElementById('scroll-Top').addEventListener('click', function() {
            const phoneNumber = '7777-543264';
            const message = encodeURIComponent('Hello, I would like to chat with you.');
            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${message}`;
            window.open(whatsappUrl, '_blank');
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>


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
