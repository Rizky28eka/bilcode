<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billcode @yield('title')</title>

    <!--========== FAVICON ==========-->
    <link rel="shortcut icon" href="/img/Logo.png" type="image/x-icon">

    <!--========== BOXICONS ==========-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--========== SWIPER CSS ==========-->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="/css/main.css">

    <style>
        .swiper {
          width: 100%;
          height: 100%;
        }

        .swiper-slide {
          text-align: center;
          font-size: 18px;
          background: #fff;

          /* Center slide text vertically */
          display: -webkit-box;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;
        }

        .swiper-slide img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        .swiper {
          width: 100%;
          height: 300px;
          margin: 20px auto;
        }
        .append-buttons {
          text-align: center;
          margin-top: 20px;
        }

        .append-buttons button {
          display: inline-block;
          cursor: pointer;
          border: 1px solid #007aff;
          color: #007aff;
          text-decoration: none;
          padding: 4px 10px;
          border-radius: 4px;
          margin: 0 10px;
          font-size: 13px;
        }
      </style>

</head>
<body>

    @include('partials/navbar')

    <div>
        @yield('content')
    </div>

    @include('partials/footer')




    <!--=============== CURSOR ===============-->
    {{-- <div class="following__cursor"></div> --}}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--========== SCROLL REVEAL ==========-->
    <script src="/js/scrollreveal.min.js"></script>

    <!--========== SWIPER JS ==========-->
    <script src="/js/swiper-bundle.min.js"></script>

    <!--========== MAIN JS ==========-->
    <script src="/js/main.js"></script>

    <!--========== HOME JS ==========-->
    <script src="/js/home.js"></script>

    <script>
        var swiper = new Swiper(".swiper_menu", {
          slidesPerView: 3,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            type: "fraction"
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
          }
        });
    </script>

</body>
</html>
