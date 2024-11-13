<?php
$page_attr = (object) [
    'title' => isset($page_attr['title']) ? $page_attr['title'] : '',
    'description' => isset($page_attr['description']) ? $page_attr['description'] : settings()->get(set_front('meta.description')),
    'keywords' => isset($page_attr['keywords']) ? $page_attr['keywords'] : settings()->get(set_front('meta.keyword')),
    'author' => isset($page_attr['author']) ? $page_attr['author'] : settings()->get(set_front('meta.author')),
    'image' => isset($page_attr['image']) ? $page_attr['image'] : asset(settings()->get(set_front('meta.image'))),
    'navigation' => isset($page_attr['navigation']) ? $page_attr['navigation'] : false,
    'loader' => isset($page_attr['loader']) ? $page_attr['loader'] : settings()->get(set_front('app.preloader')),
    'breadcrumbs' => isset($page_attr['breadcrumbs']) ? (is_array($page_attr['breadcrumbs']) ? $page_attr['breadcrumbs'] : false) : false,
    'url' => isset($page_attr['url']) ? $page_attr['url'] : url(''),
    'type' => isset($page_attr['type']) ? $page_attr['type'] : 'website',
    'periode_id' => isset($page_attr['periode_id']) ? $page_attr['periode_id'] : false,
];
$page_attr_title = ($page_attr->title == '' ? '' : $page_attr->title . ' | ') . settings()->get(set_front('app.title'), env('APP_NAME'));
$search_master_key = isset($_GET['search']) ? $_GET['search'] : '';
$getSosmed_val = feSocialMedia();
$notifikasi = feTopNotification();
$compact = isset($compact) ? $compact : [];
$compact = array_merge($compact, compact('page_attr_title', 'search_master_key', 'getSosmed_val', 'notifikasi', 'page_attr'));
?>


<!DOCTYPE html>
<html lang="id">
<head>
<meta name="google-site-verification" content="wqP3f5bSppJ6UEIDLdO40Cp4AVpJCAPcBwiLYZtgl7c" />
<!-- Favicon -->
<link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="theme-color" content="#140342">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/icon-144x144.png') }}">

        <script async='async' crossorigin='anonymous' src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7408188783514066'></script>
        <meta charset='utf-8'/>
        <meta content='width=device-width, initial-scale=1' name='viewport'/>
        <meta content='blogger' name='generator'/>
        <link href='https://mismaariftempursari.sch.id/' hreflang='x-default' rel='alternate'/>
        <link href='http://www.blogger.com/openid-server.g' rel='openid.server'/>
        <link href='https://mismaariftempursari.sch.id/' rel='openid.delegate'/>
        <link href='https://mismaariftempursari.sch.id/' rel='canonical'/>
        <title>{{ $page_attr_title }}</title>
        <meta name="description" content="{{ $page_attr->description }}">
    <meta name="author" content="{{ $page_attr->author }}">
    <meta name="keywords" content="{{ $page_attr->keywords }}">

        <link href='https://mismaariftempursari.sch.id/feeds/posts/default' rel='alternate' title="MIS Ma'arif tempursari - Atom" type='application/atom+xml'/>
        <link href='https://mismaariftempursari.sch.id/feeds/posts/default?alt=rss' rel='alternate' title="MIS Ma'arif tempursari - RSS" type='application/rss+xml'/>
        <link href='http://www.blogger.com/feeds/6914196781153322292/posts/default' rel='alternate' title="MIS Ma'arif tempursari - Atom" type='application/atom+xml'/>
        <link href='https://mismaariftempursari.sch.id/' hreflang='x-default' rel='alternate'/>
        <link href='/favicon.ico' rel='icon' type='image/x-icon'/>
        <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
        <!-- Open Graph / Facebook -->
    <meta property="og:url" content="{{ $page_attr->url }}">
    <meta property="og:type" content="{{ $page_attr->type }}">
    <meta property="og:title" content="{{ $page_attr_title }}">
    <meta property="og:description" content="{{ $page_attr->description }}">
    <meta property="og:image" content="{{ $page_attr->image }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $page_attr->url }}">
    <meta name="twitter:title" content="{{ $page_attr_title }}">
    <meta name="twitter:description" content="{{ $page_attr->description }}">
    <meta name="twitter:image" content="{{ $page_attr->image }}">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $page_attr_title }}">
    <meta itemprop="description" content="{{ $page_attr->description }}">
    <meta itemprop="image" content="{{ $page_attr->image }}">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

        <meta content='en_US' property='og:locale'/>
        <meta content='en_GB' property='og:locale:alternate'/>
        <meta content='id_ID' property='og:locale:alternate'/>
        <meta content='summary' name='twitter:card'/>
        <meta content='MA Ulumul Qur&#39;an 2023' name='twitter:title'/>
        <meta content='USER-TWITTER' name='twitter:site'/>
        <meta content='USER-TWITTER' name='twitter:creator'/>
        <meta content='summary_large_image' name='twitter:card'/>
        <meta content='yes' name='apple-mobile-web-app-capable'/>
        <meta content='#f5f5f5' name='theme-color'/>
        <meta content='#f5f5f5' name='msapplication-navbutton-color'/>
        <link href='https://fonts.googleapis.com' rel='preconnect'/>
        <link crossorigin='' href='https://fonts.gstatic.com' rel='preconnect'/>
        @yield('stylesheet')

@foreach (json_decode(settings()->get(set_front('meta_list'), '{}')) as $meta)
    <!-- custom {{ $meta->name }} -->
    {!! $meta->value !!}
@endforeach
       
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
            <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/css2.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/css3.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/css4.css') }}">
            <meta name='google-adsense-platform-domain' content='blogspot.com'/>
        <meta name='google-adsense-platform-account' content='ca-host-pub-1556223355139109'/>
        <meta name='google-adsense-platform-domain' content='blogspot.com'/>
        
    </head>
    <body class='index home'>
    <div class='overlay' onclick='toggleMenu()'></div>
        <div class='custom-css section' id='custom-css' name='Custom CSS'>
            <div class='widget HTML' data-version='2' id='HTML99'></div>
        </div>
        <!-- Outer Wrapper -->
        <!-- <div class='outer-wrapper'> -->
 <!-- barba container start -->
 <!-- <div class="barba-container" data-barba="container">
        <main class="main-content "> -->
            @include('layouts.frontend.body2.header', $compact)
            <div class="content-wrapper  js-content-wrapper">
                @yield('content', '')
                @include('layouts.frontend.body2.footer', $compact)
            </div>
            <div style="display: none">
                <div id="back-to-top" class="span bg-dark-1 p-20">
                    <i class="fas fa-arrow-up" style="font-size: 1.5em"></i>
                </div>
            </div>
        </main>
    </div>
    <!-- barba container end -->



    <script src="{{ asset('assets2/js/js1.js') }}"></script>
    <script src="{{ asset('assets2/js/js2.js') }}"></script>
    <script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/3298326339-widgets.js"></script>

    
    @yield('javascript')

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FHJNB91XME"></script>
<script id="dsq-count-scr" src="//maariftempursari.disqus.com/count.js" async></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-FHJNB91XME');
</script>

{!! \App\Models\Tracker::hit(true) !!}
    
</body>
</html>
