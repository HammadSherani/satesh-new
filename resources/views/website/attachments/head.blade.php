<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Extraffairs</title>
    {{-- <meta name="title" content="{{ $data->meta_title }}">
    <meta name="description" content="{{ $data->meta_description }}">
    <meta name="keywords" content="{{ $data->meta_keywords }}">
    <meta name="robots" content="index, follow"> --}}

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('website/images/favicon.webp') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('website/images/favicon.webp') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('website/images/favicon.webp') }}">
    <link rel="canonical" href="{{ url(isset($data->canonical_url) ? $data->canonical_url : url()->current()) }}">
    <link rel="shortcut icon" href="{{ asset('website/images/favicon.png') }}" type="image/x-icon">

    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" crossorigin="anonymous">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    </noscript>

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" crossorigin="anonymous">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous">
    </noscript>
<!--    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ asset('newUi/assets/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('newUi/css/style1.css') }}">

    @if( request()->is('contact.html') )
        <link rel="stylesheet" href="{{ asset('newUi/assets/css/style.css') }}">
    @endif
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @stack('external')
</head>