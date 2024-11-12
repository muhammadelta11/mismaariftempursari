@extends('layouts.frontend.master2')
<style>
/* Reset dan gaya dasar */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
}

/* Breadcrumbs Style */
.breadcrumbs {
    background-color: #f4f4f4;
    padding: 20px 0;
}

.breadcrumbs__content {
    display: flex;
    gap: 10px;
}

.breadcrumbs__item a {
    color: #4CAF50;
    text-decoration: none;
    font-weight: 500;
}

.breadcrumbs__item a:hover {
    text-decoration: underline;
}

/* Page Header Style */
.page-header {
    padding: 40px 0;
    text-align: center;
}

.page-header__content {
    max-width: 800px;
    margin: 0 auto;
}

.header-img {
    max-width: 100%;
    border-radius: 10px;
}

.page-header__title {
    font-size: 24px;
    color: #333;
    margin: 20px 0 10px;
}

.page-header__subtitle {
    font-size: 20px;
    font-weight: 500;
    color: #4CAF50;
}

/* Struktur Table Style */
.organization-structure {
    padding: 40px 20px;
}
.structure-table {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    border-collapse: collapse;
}

.structure-role {
    width: 200px; /* Lebar default pada layar besar */
    font-size: 18px;
    font-weight: 500;
    padding: 10px;
}

/* Responsif untuk layar lebih kecil */
@media (max-width: 600px) {
    .structure-role {
        width: 150px; /* Menyesuaikan lebar kolom pada layar kecil */
        font-size: 16px;
    }

    .structure-name a {
        font-size: 16px;
    }
}

@media (max-width: 400px) {
    .structure-role {
        width: 120px; /* Lebar lebih kecil untuk layar sangat kecil */
        font-size: 14px;
    }

    .structure-name a {
        font-size: 14px;
    }
}


.separator {
    width: 10px;
    font-size: 18px;
    text-align: center;
    vertical-align: middle; /* Menyelaraskan separator di tengah vertikal */
}

.structure-name a {
    font-size: 18px;
    color: #4CAF50;
    text-decoration: none;
}

.structure-name a:hover {
    text-decoration: underline;
}

/* Responsif */
@media (max-width: 600px) {
    .page-header__title {
        font-size: 20px;
    }

    .page-header__subtitle {
        font-size: 18px;
    }

    .structure-role,
    .structure-name a {
        font-size: 16px;
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
                            <a href="javascript:void(0)">Struktur Kepengursan</a>
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
                        <div data-anim="slide-up delay-1 " class="mb-30">
                            <img src="{{ $periode->fotoUrl() }}" alt="{{ $periode->nama }}"
                                onerror="this.src='{{ $periode->fotoUrlDefault() }}';this.onerror='';"
                                class="rounded mx-auto d-block" style="max-width: 500px; width:100%">
                        </div>
                        <div data-anim="slide-up delay-2 ">
                            <h1 class="page-header__title text-24">
                                HIMPUNAN MAHASISWA JURUSAN TEKNIK INFORMATIKA UNWAHAS
                            </h1>
                        </div>
                        <div data-anim="slide-up delay-3">
                            <p class="text-20 fw-500 mt-15 ">PERIODE {{ $periode->dari }} - {{ $periode->sampai }}
                                {{ strtoupper($periode->nama) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container layout-pb-lg" data-anim-wrap>
        @php
            $anim_sequence = 2;
            $struktur = $periode->pengurus();
        @endphp
        <div class="d-flex justify-content-centers sm:pl-0 md:pl-20 xl:pl-40">
            <table class="table" style="width:100%" data-anim="slide-up delay-{{ $anim_sequence++ }}">
                @foreach ($struktur->utama as $utama)
                    <tr>
                        <td style="border: 0;  " class="py-10 px-3 text-18 fw-500" colspan="2">
                            {{ ucwords(strtolower($utama->jabatan->nama)) }}</td>
                        <td style="border: 0; max-width: 5px; " class="py-10 px-3 text-18 fw-500">:</td>
                        <td style="border: 0; " class="py-10 px-3 text-18 fw-500 text-purple-1">
                            @php
                                $url = $utama->pejabat->user->username ? url($utama->pejabat->user->username) : route('anggota.id', $utama->pejabat->id);
                            @endphp
                            <a href="{{ $url }}">{{ ucwords(strtolower($utama->pejabat->nama)) }}</a>
                        </td>
                    </tr>
                @endforeach

                @foreach ($struktur->bidang as $bidang)
                    <tr>
                        <td colspan="4" style="border: 0;" class="py-10 px-3 text-18 fw-500 text-purple-1">
                            <a href="{{ route('tentang.kepengurusan.bidang', $bidang->header->slug) }}">
                                {{ ucwords(strtolower($bidang->header->nama)) }}
                            </a>
                        </td>
                    </tr>






                    @foreach ($bidang->body as $body)
                        @if ($body->list)
                            <tr>
                                <td style="border: 0;" class="py-10 px-3 text-18 fw-500"></td>
                                <td style="border: 0;" class="py-10 px-3 text-18 fw-500">
                                    {{ ucwords(strtolower($body->jabatan->nama)) }}
                                </td>
                                <td style="border: 0;" class="py-10 px-3 text-18 fw-500">:</td>
                                <td style="border: 0;" class="py-10 px-3 text-18 fw-500 text-purple-1">
                                    @if (isset($body->pejabat[0]))
                                        @php
                                            $pejabat = $body->pejabat[0];
                                            $url = $pejabat->anggota->user->username ? url($pejabat->anggota->user->username) : route('anggota.id', $pejabat->anggota->id);
                                        @endphp
                                        <a href="{{ $url }}">
                                            {{ ucwords(strtolower($pejabat->anggota->nama)) }}
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            @foreach ($body->pejabat as $key => $pejabat)
                                @if ($key != 0)
                                    <tr>
                                        <td style="border: 0;" class="py-10 px-3 text-18 fw-500"></td>
                                        <td style="border: 0;" class="py-10 px-3 text-18 fw-500"></td>
                                        <td style="border: 0;" class="py-10 px-3 text-18 fw-500">:</td>
                                        <td style="border: 0;" class="py-10 px-3 text-18 fw-500 text-purple-1">
                                            @php
                                                $url = $pejabat->anggota->user->username ? url($pejabat->anggota->user->username) : route('anggota.id', $pejabat->anggota->id);
                                            @endphp
                                            <a href="{{ $url }}">
                                                {{ ucwords(strtolower($pejabat->anggota->nama)) }}
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @else
                            <tr>
                                <td style="border: 0;" class="py-10 px-3 text-18 fw-500"></td>
                                <td style="border: 0;" class="py-10 px-3 text-18 fw-500">
                                    {{ ucwords(strtolower($body->jabatan->nama)) }}
                                </td>
                                <td style="border: 0;" class="py-10 px-3 text-18 fw-500">:</td>
                                <td style="border: 0;" class="py-10 px-3 text-18 fw-500 text-purple-1">
                                    @php
                                        $pejabat = $body->pejabat;
                                        $url = $pejabat->anggota->user->username ? url($pejabat->anggota->user->username) : route('anggota.id', $pejabat->anggota->id);
                                    @endphp
                                    <a href="{{ $url }}">{{ ucwords(strtolower($pejabat->anggota->nama)) }}</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
            </table>
        </div>
        <div class="row justify-center text-center">
            <div class="col-auto">
                @if ($periode->visi)
                    <div data-anim="slide-up delay-{{ $anim_sequence++ }}" class=" pt-40">
                        <h1 class="page-header__title uppercase text-20 fw-500">Visi</h1>
                    </div>
                    <div data-anim="slide-up delay-{{ $anim_sequence++ }}">
                        {!! $periode->visi !!}
                    </div>
                @endif

                @if ($periode->misi)
                    <div data-anim="slide-up delay-{{ $anim_sequence++ }}" class=" pt-40">
                        <h1 class="page-header__title uppercase text-20 fw-500">Visi</h1>
                    </div>
                    <div data-anim="slide-up delay-{{ $anim_sequence++ }}" class="text-left">
                        {!! $periode->misi !!}
                    </div>
                @endif

                @if ($periode->filosofi_logo)
                    <div data-anim="slide-up delay-{{ $anim_sequence++ }}" class=" pt-40">
                        <h1 class="page-header__title uppercase text-20 fw-500">Filosofi Logo</h1>
                    </div>
                    <div data-anim="slide-up delay-{{ $anim_sequence++ }}">
                        {!! $periode->filosofi_logo !!}
                    </div>
                @endif

            </div>
        </div>
    </section> -->

    
<!-- Breadcrumbs Section -->
<section data-anim="fade" class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__content">
            <div class="breadcrumbs__item"><a href="#">Utama</a></div>
            <div class="breadcrumbs__item"><a href="#">Tentang Kami</a></div>
            <div class="breadcrumbs__item"><a href="#">Struktur Kepengurusan</a></div>
        </div>
    </div>
</section>

<!-- Page Header Section -->
<section class="page-header">
    <div class="container">
        <div class="page-header__content">
            <div class="img-container">
                <img src="{{ $periode->fotoUrl() }}" alt="{{ $periode->nama }}"
                                onerror="this.src='{{ $periode->fotoUrlDefault() }}';this.onerror='';" class="header-img">
            </div>
            <h1 class="page-header__title">MADRASAH IBTIDA'IYAH MA'ARIF TEMPURSARI</h1>
            <p class="page-header__subtitle">PERIODE {{ $periode->dari }} - {{ $periode->sampai }}
                                <!-- {{ strtoupper($periode->nama) }} -->
                            </p>
        </div>
    </div>
</section>

@php
            $anim_sequence = 2;
            $struktur = $periode->pengurus();
        @endphp
<!-- Struktur Table Section -->
<section class="organization-structure">
    <div class="container">
        @foreach ($struktur->utama as $utama)
        @php
                        $url = $utama->pejabat->user->username ? url($utama->pejabat->user->username) : route('anggota.id', $utama->pejabat->id);
                    @endphp
        <table class="structure-table">
            <!-- Contoh anggota struktur -->
            <tr>
                <td class="structure-role">{{ ucwords(strtolower($utama->jabatan->nama)) }}</td>
                <td class="separator">:</td>
                <td class="structure-name"><a href="{{ $url }}">{{ ucwords(strtolower($utama->pejabat->nama)) }}</a></td>
            </tr>
            @endforeach
            @foreach ($struktur->bidang as $bidang)
             <td class="structure-role">
                            <a href="{{ route('tentang.kepengurusan.bidang', $bidang->header->slug) }}">
                                {{ ucwords(strtolower($bidang->header->nama)) }}
                            </a>
                        </td>
                        @foreach ($bidang->body as $body)
                        @if ($body->list)
                         <tr>
                           <td class="structure-role">{{ ucwords(strtolower($body->jabatan->nama)) }}</td>
                           @if (isset($body->pejabat[0]))
                                        @php
                                            $pejabat = $body->pejabat[0];
                                            $url = $pejabat->anggota->user->username ? url($pejabat->anggota->user->username) : route('anggota.id', $pejabat->anggota->id);
                                        @endphp
                                        <td class="separator">:</td>
                                        
                                        <td class="structure-name"><a href="{{ $url }}">
                                            {{ ucwords(strtolower($pejabat->anggota->nama)) }}
                                        </a></td>
                                        @endif
                                    </tr>
                                    @foreach ($body->pejabat as $key => $pejabat)
                                @if ($key != 0)
                                    <tr>
                                        <td style="border: 0;" class="py-10 px-3 text-18 fw-500"></td>
                                        <td style="border: 0;" class="py-10 px-3 text-18 fw-500"></td>
                                        <td style="border: 0;" class="py-10 px-3 text-18 fw-500">:</td>
                                        <td style="border: 0;" class="py-10 px-3 text-18 fw-500 text-purple-1">
                                            @php
                                                $url = $pejabat->anggota->user->username ? url($pejabat->anggota->user->username) : route('anggota.id', $pejabat->anggota->id);
                                            @endphp
                                            <a href="{{ $url }}">
                                                {{ ucwords(strtolower($pejabat->anggota->nama)) }}
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                                
                            @endforeach
                        @else
                        <tr>
                                <td style="border: 0;" class="py-10 px-3 text-18 fw-500"></td>
                                <td style="border: 0;" class="py-10 px-3 text-18 fw-500">
                                    {{ ucwords(strtolower($body->jabatan->nama)) }}
                                </td>
                                <td style="border: 0;" class="py-10 px-3 text-18 fw-500">:</td>
                                <td style="border: 0;" class="py-10 px-3 text-18 fw-500 text-purple-1">
                                    @php
                                        $pejabat = $body->pejabat;
                                        $url = $pejabat->anggota->user->username ? url($pejabat->anggota->user->username) : route('anggota.id', $pejabat->anggota->id);
                                    @endphp
                                    <a href="{{ $url }}">{{ ucwords(strtolower($pejabat->anggota->nama)) }}</a>
                                </td>
                            </tr>
                        @endif

                                    @endforeach                
            @endforeach
            <!-- Tambahkan anggota lainnya -->
        </table>
    </div>
</section>
@endsection
