<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta property="og:url"                content="URL::current()" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="2H2K PhoneStore " />
<meta property="og:description"        content="Hệ thống bán lẻ điện thoại, phụ kiện chính hãng | Giá rẻ, thanh toán trực tuyến, giao hàng miễn phí, nhanh tay để nhận được nhiều ưu đãi hấp dẫn, liên hệ ngay với chúng tôi qua số điện thoại 0909090998 để được hỗ trợ trực tiếp." />
<meta property="og:image"              content="https://2h2k.xyz/storage/images/advertises/1577093814_slider_2.jpg" />

    <meta name="description"
content="Hệ thống bán lẻ điện thoại, phụ kiện chính hãng | Giá rẻ, thanh toán trực tuyến, giao hàng miễn phí, nhanh tay để nhận được nhiều ưu đãi hấp dẫn, liên hệ ngay với chúng tôi qua số điện thoại 0909090998 để được hỗ trợ trực tiếp.">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@ghuy" />
<meta name="twitter:creator" content="@thuy" />
<meta property="og:url" content="URL::current()" />
<meta property="og:title" content="2H2K PhoneStore " />
<meta property="og:description" content="Hệ thống bán lẻ điện thoại, phụ kiện chính hãng | Giá rẻ, thanh toán trực tuyến, giao hàng miễn phí, nhanh tay để nhận được nhiều ưu đãi hấp dẫn, liên hệ ngay với chúng tôi qua số điện thoại 0909090998 để được hỗ trợ trực tiếp." />
<meta property="og:image" content="https://2h2k.xyz/storage/images/advertises/1577093814_slider_2.jpg" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S1KD3BC8H9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S1KD3BC8H9');
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title> @yield('title') - {{ config('app.name') }} </title>
  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Embed CSS -->
  <link rel="stylesheet" href="{{ asset('common/css/normalize.min.css') }}">
  <link rel="stylesheet" href="{{ asset('common/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('common/css/bootstrap-theme.min.css') }}">
  <link rel="stylesheet" href="{{ asset('common/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('common/css/fontawesome/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('common/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('common/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('common/css/sweetalert2.min.css') }}">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @if(Request::route()->getName() != 'show_cart')
  <link rel="stylesheet" href="{{ asset('css/minicart.css') }}">
  @endif
  @yield('css')
  <!-- Share this -->
  <!-- <div class="sharethis-sticky-share-buttons"></div> -->
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=60f2d023d2455f00191cee78&product=sticky-share-buttons" async="async">
  </script>

<!-- Schema.org -->

  <script type=”application/ld+json”>
{
        "@context": "http://schema.org",
        "@type": "WebSite",
        "url": "https://2h2k.xyz/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://2h2k.xyz/",
            "query-input": "required name=search_term"
        },
        "name": "My shop",
        "description": "The best technology all over the world!",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Ho Chi Minh City, VN",
            "streetAddress": "280 An Dương Vương, Quận 5, Thành phố Hồ Chí Minh Việt Nam"
        },
        "openingHours": [
            "Mo-Sa 07:00-22:30",
            "Su 09:00-23:00"
        ],
        "telephone": "+84901395356",
        "image": "https://2h2k.xyz/storage/images/advertises/1577093814_slider_2.jpg",
        "priceRange": "100"
    }

</script>

</head>
<body>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

 <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
</div>

 <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "104184915275241");
    chatbox.setAttribute("attribution", "biz_inbox");

     window.fbAsyncInit = function() {
    FB.init({
    xfbml : true,
    version : 'v11.0'
    });
    };

     (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


    <!-- Header -->
    @include('layouts.header')

    <div class="container">
      <!-- Site Content -->
      <div class="site-content">
        @yield('content')
      </div>
    </div>

    @if(Request::route()->getName() != 'show_cart')
    <!-- MiniCart display -->
    @include('layouts.minicart')
    @endif

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Embed Scripts -->
    <script src="{{ asset('common/js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('common/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('common/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('common/js/sweetalert2.min.js') }}"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('js/custom.js') }}"></script>
    @if(Request::route()->getName() != 'show_cart')
    <script src="{{ asset('js/minicart.js') }}"></script>
    @endif
    @yield('js')
</body>
</html>
