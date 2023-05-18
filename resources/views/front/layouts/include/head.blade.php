<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') {{ __('| ' . $allsettings['app_title']) }}</title>
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="{{ $allsettings['meta_author'] }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- fonts file -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- css file  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/extra.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/cookie-consent.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset(IMG_FAVICON_PATH . $allsettings['favicon']) }}" type="image/x-icon">
    {{-- toastr --}}
<link rel="stylesheet" href="{{ asset('admin/css/toastr.min.css') }}">

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    #story {
        height: 300px;
    }
    .swiper-container {
    max-width: 100%;
    overflow: hidden;
    position: relative;
  }
    
    .swiper-slide {
        width: 20%;
        padding: 5px; 
        margin-right: -50px;/* Adjust the padding as needed */
    }
    
    .swiper-slide img {
        height: 280px;
        width: 155px;
        border-radius: 5%; /* Make the image rounded */
        object-fit: cover; /* Ensure the image covers the entire space */
    }
    .swiper-slide video {
        height: 280px;
        width: 155px;
        border-radius: 5%; /* Make the image rounded */
        object-fit: cover; /* Ensure the image covers the entire space */
    }
    
  .image-container {
    position: relative;
    display: inline-block;
  }

  .image-text {
    position: absolute;
    bottom: 10px;
    left: 10px;
    color: #fff;
    font-size: 12px;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 5px;
  }
  .image-button {
    position: absolute;
    bottom: 10px;
    right: 10px;
    padding: 10px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
    
    

  .swiper-button-next,
  .swiper-button-prev {
    position: absolute;
    top: 50%;
    transform: translate(6%,31%);
    width: 40px;
    height: 40px;
    background-color: #333;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    cursor: pointer;
  }

  .swiper-button-next {
    right: 10px;
  }

  .swiper-button-prev {
    left: 10px;
  }

  .swiper-button-next-icon,
  .swiper-button-prev-icon {
    font-size: 10px; /* Customize the font-size as needed */


    /* Modal Styling */
.modal {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.9);
}

.modal-content {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.close {
    color: #fff;
    font-size: 30px;
    font-weight: bold;
    position: absolute;
    top: 20px;
    right: 30px;
    cursor: pointer;
}

/* Additional CSS styling as per your requirements */

  }
</style>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
