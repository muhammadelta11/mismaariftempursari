
@extends('layouts.frontend.master2')
<style>
      body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        
        h1 {
            margin: 0;
            font-size: 2.5em;
        }
        
        main {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        
        .periode {
            background-color: #fff;
            border: 2px solid #4CAF50;
            border-radius: 10px;
            margin: 20px 0;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
            text-align: center;
        }
        
        h2 {
            color: #4CAF50;
            margin-top: 0;
        }
        
        ul {
            list-style-type: none;
            padding-left: 0;
            text-align: left;
        }
        
        li {
            margin: 10px 0;
        }
        
        .periode img {
            width: 100%;
            max-width: 200px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #4CAF50;
            color: white;
            width: 100%;
        }
        /* Tombol */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 5px;
            font-size: 1em;
            color: white;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }
        
        .btn:hover {
            background-color: #45a049; /* Warna lebih gelap untuk efek hover */
        }
        
        /* Responsive adjustments */
        @media (max-width: 600px) {
            h1 {
                font-size: 2em;
            }
            
            .periode {
                padding: 15px;
            }
        }
</style>
@section('content')
    <!-- <section data-anim="fade" class="breadcrumbs ">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="breadcrumbs__content">

                        <div class="breadcrumbs__item ">
                            <a href="{{ route('home') }}">Utama</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a href="javascript:void(0)">Tentang Kami</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a href="javascript:void(0)">Periode Kepengursan</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-header -type-1">
        <div class="container">
            <div class="page-header__content">
                <div class="row justify-center text-center">
                    <div class="col-auto">
                        <div data-anim="slide-up delay-1">
                            <h1 class="page-header__title">Periode Kepengurusan</h1>
                        </div>

                        <div data-anim="slide-up delay-2">
                            <p class="page-header__text">Daftar Semua Periode Kepengurusan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="layout-pt-md layout-pb-lg">
        <div data-anim-wrap class="container">
            <div class="row y-gap-30 justify-center">

                @foreach ($periodes as $i => $periode)
                    <div data-anim="slide-up delay-{{ $i + 1 }}" class="col-lg-10 col-md-11">
                        <div class="blogCard -type-3">
                            <div class="row pb-60 items-center">
                                <div class="col-lg-5">
                                    <div class="blogCard__image">
                                        <img class="rounded-8" src="{{ $periode->fotoUrl() }}"
                                            onerror="this.src='{{ $periode->fotoUrlDefault() }}';this.onerror='';"
                                            alt="{{ $periode->nama }}" style="max-height: 400px; width: auto">
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="blogCard__content pl-60 lg:pl-40 md:pl-0">
                                        <a href="{{ route('tentang.kepengurusan.struktur.periode', $periode->slug) }}"
                                            class="blogCard__category text-14 lh-1 text-purple-1 fw-500">{{ $periode->dari }}-{{ $periode->sampai }}</a>
                                        <h4 class="blogCard__title text-24 lh-15 text-dark-4 fw-500 mt-15">
                                            {{ $periode->nama }}
                                        </h4>
                                        <p class="blogCard__text mt-20">{{ $periode->slogan }}</p>
                                        <div class="blogCard__button d-inline-block mt-20">
                                            <a href="{{ route('tentang.kepengurusan.struktur.periode', $periode->slug) }}"
                                                class="button -sm -purple-3 text-purple-1">
                                                Lihat struktur kepengurusan
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            {!! $periodes->links() !!}
        </div>
    </section> -->

    <header>
        <h1>Periode Tahunan Madrasah</h1>
    </header>
    <main>
    @foreach ($periodes as $i => $periode)
        <section class="periode">
            <img src="{{ $periode->fotoUrl() }}" onerror="this.src='{{ $periode->fotoUrlDefault() }}';this.onerror='';" alt="{{ $periode->nama }}">
            <hr>
            <a href="{{ route('tentang.kepengurusan.struktur.periode', $periode->slug) }}">{{ $periode->dari }}-{{ $periode->sampai }}
            <h2>{{ $periode->nama }}</h2></a>
            <ul>
                <li>
                    <strong>Slogan :</strong>{{ $periode->slogan }}
                </li>
               
            </ul>
            <!-- <a href="{{ route('tentang.kepengurusan.struktur.periode', $periode->slug) }}" class="btn">Lihat Jadwal</a> -->
            <a href="{{ route('tentang.kepengurusan.struktur.periode', $periode->slug) }}"
                                                class="btn">
                                                Lihat struktur kepengurusan
                                            </a>
        </section>
        @endforeach
        <!-- <section class="periode">
            <h2>Periode 2023-2024</h2>
            <ul>
                <li>
                    <strong>Semester 1:</strong> Agustus 2023 - Januari 2024
                </li>
                <li>
                    <strong>Ujian Akhir Semester 1:</strong> Desember 2023
                </li>
                <li>
                    <strong>Semester 2:</strong> Februari 2024 - Juli 2024
                </li>
                <li>
                    <strong>Ujian Akhir Semester 2:</strong> Juni 2024
                </li>
            </ul>
        </section> -->
    </main>
    @endsection
