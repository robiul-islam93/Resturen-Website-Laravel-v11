<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Restaurant - HTML Teamplate</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!-- style css start  -->
    <!-- style css start  -->
    <link href="{{asset('userpanel/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('userpanel/assets/css/kitchen.css')}}" rel="stylesheet" />
    <link href="{{asset('userpanel/assets/css/menu.css')}}" rel="stylesheet" />
    <link href="{{asset('userpanel/assets/css/about.css')}}" rel="stylesheet" />
    <link href="{{asset('userpanel/assets/css/blog.css')}}" rel="stylesheet" />
    <link href="{{asset('userpanel/assets/css/contact.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/bootstrap.min.css')}}" />
    <!-- style css end  -->

    <!-- fontawesome link -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.0.9/css/glightbox.min.css"
    />

    <!-- Swiper start -->
    <link rel="stylesheet" href="{{asset('userpanel/assets/swiper/swiper.css')}}" />
    <!-- Swiper End -->
    <!-- Flickity CSS -->

    <!-- jQuery CDN Link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>




@yield('content')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- js file start -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.0.9/js/glightbox.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{asset('userpanel/assets/swiper/swiper.js')}}"></script>
    <script src="{{asset('userpanel/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('userpanel/assets/js/gsap-animation.js')}}"></script>
    <script src="{{asset('userpanel/assets/js/script.js')}}"></script>
    <script src="{{asset('userpanel/assets/js/navbar.js')}}"></script>
    <!-- js file end -->
  </body>
</html>
