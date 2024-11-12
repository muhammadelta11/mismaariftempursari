@extends('layouts.frontend.master2')
@section('content')
    <section data-anim="fade" class="breadcrumbs" style="background-color: #f0f4f3;">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="breadcrumbs__content">
                        <div class="breadcrumbs__item">
                            <a href="{{ route('home') }}" style="color: #006400;">Beranda</a>
                        </div>
                        <div class="breadcrumbs__item">
                            <a href="{{ route('galeri') }}" style="color: #006400;">Galeri</a>
                        </div>
                        <div class="breadcrumbs__item">
                            <a href="javascript:void(0)" style="color: #006400;">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-header -type-1" style="background-color: #e9ecef;">
        <div class="container">
            <div class="page-header__content">
                <div class="row justify-center text-center">
                    <div class="col-auto">
                        <div data-anim="slide-up delay-1">
                            <h1 class="page-header__title" style="color: #006400;">
                                {{ settings()->get('setting.home.galeri_kegiatan.title') }}
                            </h1>
                        </div>
                        <div data-anim="slide-up delay-2">
                            <p class="page-header__text" style="color: #4b5320;">{{ $model->nama }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="layout-pb-lg">
            <iframe id="myframe" src="https://drive.google.com/embeddedfolderview?id={{ $model->id_gdrive }}#grid"></iframe>
            <div class="container-xl">
                <h2>Nama Kegiatan: Festival Seni 2024</h2>
                <p class="tanggal">Tanggal: 15 Mei 2024</p>
                <p class="deskripsi">
                    Deskripsi: Festival Seni 2024 adalah acara tahunan yang diadakan untuk menampilkan bakat dan kreativitas siswa-siswi Madrasah XYZ.
                </p>
                <h3>Bagikan Kegiatan:</h3>
                <ul class="d-flex">
                    @php
                        $social_links = [
                            'facebook' => 'https://www.facebook.com/sharer.php?u=',
                            'whatsapp' => 'https://api.whatsapp.com/send?text=',
                            'twitter' => 'https://twitter.com/share?url=',
                            'linkedin' => 'https://www.linkedin.com/shareArticle?mini=true&url=',
                            'pinterest' => 'https://pinterest.com/pin/create/button/?url=',
                            'telegram' => 'https://telegram.me/share/url?url=',
                            'email' => 'mailto:?subject=',
                        ];
                    @endphp

                    @foreach ($social_links as $key => $url)
                        <li class="list-inline-item list-style-none me-4">
                            <a href="{{ $url . route('artikel', $model->slug) }}&text={{ $model->nama }}"
                                title="Share to {{ ucfirst($key) }}" target="_blank">
                                <i class="fab fa-{{ $key }}"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <button class="back-button">Kembali ke Galeri</button>
        </section>
    </main>
@endsection

@section('stylesheet')
    <style>
     * {
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
}
.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.breadcrumbs {
    padding: 15px 0;
}

.breadcrumbs__content {
    display: flex;
    flex-wrap: wrap;
}

.breadcrumbs__item {
    margin-right: 10px;
}

.breadcrumbs__item a {
    text-decoration: none;
    font-weight: bold;
}

.page-header {
    padding: 40px 0;
    text-align: center;
}

.page-header__title {
    font-size: 2.5em;
    margin: 0;
}

.page-header__text {
    font-size: 1.2em;
    margin-top: 10px;
}
/* 
header {
    background-color: #4CAF50; /* Hijau */
    color: white;
    text-align: center;
    padding: 20px 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
} */

h1 {
    margin: 0;
    font-size: 2.5em;
}

main {
    padding: 20px;
}

.layout-pb-lg {
    background-color: white;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: auto;
}

#myframe {
    width: 100%; /* Memastikan lebar 100% dari container */
    height: 600px; /* Mengubah tinggi menjadi 600px */
    border: none;
    border-radius: 10px;
}

.galeri-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(400px, 1fr)); /* Memperbesar ukuran kolom */
    gap: 20px;
    margin-top: 15px;
}

.galeri-item img {
    width: 100%;
    border-radius: 10px;
    height: auto; /* Menjaga proporsi gambar */
}


.tanggal {
    font-weight: bold;
    color: #4CAF50;
}

.deskripsi {
    margin: 15px 0;
}

ul.d-flex {
    list-style: none;
    padding: 0;
}

ul.d-flex li {
    display: inline-block;
    margin-right: 15px;
}

.back-button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 20px;
    display: block;
    text-align: center;
}

.back-button:hover {
    background-color: #45a049;
}

footer {
    text-align: center;
    padding: 15px 0;
    background-color: #4CAF50;
    color: white;
    position: relative;
    bottom: 0;
    width: 100%;
    box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
}
    </style>
@endsection
