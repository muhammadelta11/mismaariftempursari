<?php
$page_attr = (object) [
    'title' => isset($page_attr['title']) ? $page_attr['title'] : '',
    'description' => isset($page_attr['description']) ? $page_attr['description'] : setting_get(set_admin('meta.description')),
    'keywords' => isset($page_attr['keywords']) ? $page_attr['keywords'] : setting_get(set_admin('meta.keyword')),
    'author' => isset($page_attr['author']) ? $page_attr['author'] : setting_get(set_admin('meta.author')),
    'image' => isset($page_attr['image']) ? $page_attr['image'] : asset(setting_get(set_admin('meta.image'))),
    'navigation' => isset($page_attr['navigation']) ? $page_attr['navigation'] : false,
    'loader' => isset($page_attr['loader']) ? $page_attr['loader'] : setting_get(set_admin('app.preloader')),
    'breadcrumbs' => isset($page_attr['breadcrumbs']) ? (is_array($page_attr['breadcrumbs']) ? $page_attr['breadcrumbs'] : false) : false,
];
$page_attr_title = ($page_attr->title == '' ? '' : $page_attr->title . ' | ') . setting_get(set_admin('app.title'), env('APP_NAME'));
?>

<!doctype html>
<html lang="en">

<head>
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
    <meta name="theme-color" content="#0191D7">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/icon-144x144.png') }}">

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!--google adsen-->
    <meta name="google-adsense-account" content="ca-pub-5378452149040789">
    <!--end-->

    <!-- SEO -->
    <!-- Primary Meta Tags -->
    <title>{{ $page_attr_title }}</title>
    <meta name="description" content="{{ $page_attr->description }}">
    <meta name="author" content="{{ $page_attr->author }}">
    <meta name="keywords" content="{{ $page_attr->keywords }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $page_attr_title }}">
    <meta property="og:description" content="{{ $page_attr->description }}">
    <meta property="og:image" content="{{ $page_attr->image }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('') }}">
    <meta name="twitter:title" content="{{ $page_attr_title }}">
    <meta name="twitter:description" content="{{ $page_attr->description }}">
    <meta name="twitter:image" content="{{ $page_attr->image }}">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $page_attr_title }}">
    <meta itemprop="description" content="{{ $page_attr->description }}">
    <meta itemprop="image" content="{{ $page_attr->image }}">

    <!--plugins-->
    <link href="{{ asset_admin('simplebar/5.1.0/simplebar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset_admin('metisMenu/3.0.6/metisMenu.min.css') }}" rel="stylesheet" />

    @if ($page_attr->loader)
        <!-- loader-->
        <link href="{{ asset_admin('css/pace.min.css') }}" rel="stylesheet" />
        <script src="{{ asset_admin('js/pace.min.js') }}"></script>
    @endif

    <!-- Bootstrap CSS -->
    <link href="{{ asset_admin('bootstrap/5.3.0-alpha1/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/templates/frontend/css/tambahan.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/templates/frontend/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/templates/frontend/css/icons.css') }}" rel="stylesheet">

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/templates/admin/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/templates/admin/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/templates/admin/css/header-colors.css') }}" />
    <link rel="stylesheet" href="{{ asset_admin('font-awesome/5.15.4/css/all.min.css') }}">

    <!-- Dark mode-->
    <script>
        const templateHasDarkMode = localStorage.getItem('dark-mode') == 'true';
        const templateTheme = localStorage.getItem('theme');
        if (localStorage.getItem('dark-mode') !== null) {
            if (templateHasDarkMode) {
                document.querySelector('html').setAttribute('class', 'dark-theme');
            } else {
                document.querySelector('html').classList.remove("dark-theme");
                if (templateTheme) {
                    document.querySelector('html').classList.add(templateTheme);
                }
            }
        }
    </script>

    @foreach (json_decode(setting_get(set_admin('meta_list'), '{}')) as $meta)
        <!-- custom {{ $meta->name }} -->
        {!! $meta->value !!}
    @endforeach
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="background-image:url('{{ asset('favicon/') }}')">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-4">
                                    <div class="mb-3 text-center">
                                        <img src="{{ asset(setting_get(set_admin('app.foto_dark_landscape_mode'))) }}"
                                            style="max-height: 65px;" alt="Logo" />
                                    </div>
                                    <div class="text-center mb-1">
                                        <p class="mb-0">Aplikasi Sekolah Madrasah<b>(ASM)</b></p>
                                    </div>
                                    @if (session('message'))
                                        <div class="alert alert-danger border-0">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    <div class="form-body">
                                        <form class="row g-3" action="javascript:void(0)" id="Loginform"
                                            name="Loginform" method="POST" enctype="multipart/form-data"
                                            autocomplete="true">
                                            <div class="col-12">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    id="email" placeholder="Email">
                                            </div>
                                            <div class="col-12">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0"
                                                        id="password" name="password"
                                                        placeholder="Masukan Password">
                                                    <a href="javascript:void;"
                                                        class="input-group-text bg-transparent">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ url('forgot-password') }}">Lupa Password ?</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid  gap-2">
                                                    <button type="submit" class="btn btn-primary">Masuk</button>
                                                    <a href="{{ route('login.socialite', 'google') . '?redirect=' . $redirect }}"
                                                        class="btn btn-light">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.16 12.1932C20.16 11.5905 20.1059 11.011 20.0055 10.4546H12V13.7425H16.5746C16.3775 14.8051 15.7786 15.7053 14.8784 16.308V18.4407H17.6255C19.2327 16.961 20.16 14.7819 20.16 12.1932Z" fill="#4285F4" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 20.5C14.2952 20.5 16.2193 19.7389 17.6257 18.4407L14.8786 16.3079C14.1175 16.8179 13.1439 17.1193 12.0002 17.1193C9.78635 17.1193 7.91248 15.6241 7.24407 13.615H4.4043V15.8173C5.80294 18.5952 8.67749 20.5 12.0002 20.5Z" fill="#34A853" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.24387 13.6151C7.07387 13.1051 6.97728 12.5604 6.97728 12.0001C6.97728 11.4399 7.07387 10.8951 7.24387 10.3851V8.18286H4.40409C3.82841 9.33036 3.5 10.6285 3.5 12.0001C3.5 13.3717 3.82841 14.6699 4.40409 15.8174L7.24387 13.6151Z" fill="#FBBC05" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 6.88069C13.2482 6.88069 14.3686 7.30955 15.2495 8.15183L17.6875 5.71387C16.2155 4.34227 14.2914 3.5 12.0002 3.5C8.67748 3.5 5.80294 5.40478 4.4043 8.18273L7.24407 10.385C7.91248 8.37592 9.78635 6.88069 12.0002 6.88069Z" fill="#EA4335" />
                              </svg> Masuk Dengan Google</a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center ">
                                                    <p class="mb-0">Kembali
                                                        <a href="{{ url('/') }}">Ke halaman utama</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 text-center">
                            <p>{!! str_parse(setting_get(set_admin('app.copyright')), [
                                ['search' => '__version__', 'replace' => get_version()],
                            ]) !!}</p>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    @include('layouts.frontend.body.footer-nav')
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="{{ asset_admin('bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js') }}"></script>

    <!--plugins-->
    <script src="{{ asset_admin('jquery/3.7.1/jquery.min.js') }}"></script>
    <script src="{{ asset_admin('simplebar/5.1.0/simplebar.min.js') }}"></script>
    <script src="{{ asset_admin('metisMenu/3.0.6/metisMenu.min.js') }}"></script>
    <script src="{{ resource_loader('app.js') }}"></script>

    <script src="{{ asset_admin('sweetalert2/11.10.3/sweetalert2.all.min.js') }}"></script>
    <script src="{{ resource_loader('pages/admin/auth/login.js', params: ['redirect' => $redirect]) }}"></script>

</html>
