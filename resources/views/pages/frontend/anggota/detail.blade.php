@extends('layouts.frontend.master2')
@section('content')
    @php
        $anim = 1;
    @endphp
    
    <!-- <section data-anim-wrap class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="breadcrumbs__content">

                        <div class="breadcrumbs__item " >
                            <a href="{{ route('home') }}">Utama</a>
                        </div>

                        <div class="breadcrumbs__item " data-anim-child="slide-left delay-{{ $anim++ }}">
                            <a href="{{ route('anggota') }}">Anggota</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a href="javascript:void(0)" data-anim-child="slide-left delay-{{ $anim++ }}">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
   
 <style>
    

        /* .body2 {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        } */

        .section2 {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .profile-card {
            /* background-color: #fff; */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            overflow: hidden;
            width: 100%;
            max-width: 500px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .profile-card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-card h1 {
            font-size: 24px;
            margin: 10px 0;
        }

        .profile-card .username {
            /* color: #666; */
        }

        .profile-card .bio {
            /* color: #555; */
            margin-top: 10px;
        }

        .profile-card .social-links {
            margin-top: 20px;
        }

        .profile-card .social-links a {
            display: inline-block;
            margin: 0 10px;
            font-size: 24px;
            /* color: #555; */
        }

        .profile-card .social-links a:hover {
            /* color: #007bff; */
        }

        @media (max-width: 768px) {
            .profile-card {
                padding: 20px;
            }
            .profile-card img {
                width: 120px;
                height: 120px;
            }
            .profile-card h1 {
                font-size: 20px;
            }
            .profile-card .bio {
                font-size: 14px;
            }
            .profile-card .social-links a {
                font-size: 20px;
            }
        }
         /* CSS untuk Struktur Konten */
         .container2 {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            /* background-color: #ffffff; */
            border: 1px solid #e9ecef;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .info-block {
            margin-bottom: 20px;
            padding: 10px;
            /* background-color: #f8f9fa; */
            border: 1px solid #ced4da;
            border-radius: 4px;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        /* .info-block h2 {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 24px;
            /* color: #007bff; 
        } */

        .info-block h3 {
            margin-top: 0;
            margin-bottom: 5px;
            font-size: 16px;
            color: #fff;
        }

        .info-block a {
            text-decoration: none;
            color: #007bff;
            word-wrap: break-word;
            
        }

        .info-block a:hover {
            /* text-decoration: underline; */
            word-wrap: break-word;
        }

        .ml-10 {
            margin-left: 10px;
        }

        .w-1/1 {
            width: 100%;
        }

        .border-top-light {
            border-top: 1px solid #ced4da;
        }

        .x-gap-20 {
            gap: 20px;
        }

        .y-gap-10 {
            margin-bottom: 10px;
        }

        .flex-wrap {
            display: flex;
            flex-wrap: wrap;
        }

        .button {
            display: inline-block;
            padding: 8px 16px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .button.-rounded {
            border-radius: 16px;
        }
        .container2 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

       
/* 
        .info-block h2 {
            margin-top: 0;
            font-size: 24px;
            color: #007bff;
        } */

        .info-block h3 {
            margin-top: 0;
            font-size: 16px;
            color: #343a40;
        }

        .info-block a {
            text-decoration: none;
            color: #007bff;
            word-wrap: break-word;
        }

        .info-block a:hover {
            /* text-decoration: underline; */
            word-wrap: break-word;
        }

        @media (max-width: 768px) {
            .container2 {
                flex-direction: column;
            }

            .info-block {
                flex: 1 1 100%; /* Menjadi 1 kolom saat layar kecil */
            }
        }
    </style>

    @php
        $anim = 1;
    @endphp
    <section class="section2">
        <div class=""></div>
        <div class="">
            <div class="">
                <div class="">
                <div class="profile-card widget2">
            <div class="profile-picture" data-anim-child="slide-left delay-{{ $anim++ }}">
                            <img onerror="this.src='{{ $anggota->fotoUrlDefault() }}';this.onerror='';"
                                src="{{ $anggota->fotoUrl() }}" alt="{{ $anggota->nama }}"
                                style="margin: auto;position: relative;margin: auto;width: 150px;height: 150px;max-height: 150px;border-radius: 150px;object-fit: cover; /* cover, contain, fill, scale-down */object-position: center;-webkit-border-radius: 150px;-moz-border-radius: 150px;">
                        </div>

                        <div class="profile-details" data-anim-child="slide-right delay-{{ $anim++ }}">
                            <h1 class="">{{ $anggota->nama }}</h1>
                            @if ($user->username)
                                <div class="username">{{ '@' . $user->username }}</div>
                            @endif
                            @if ($anggota->bio)
                                <div class="">
                                    <div class="">
                                    <span class="write">Bio :</span>
                                        <div class="bio">{{ $anggota->bio }}</div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="widget-content">
                          <ul class='share-links social social-color'>
                              @if ($anggota->whatsapp)
                              <div class="blog-pager">
                                  <a href="https://wa.me/+62{{ $anggota->whatsapp }}" class='blog-pager-older-link' >
                                      Whatsapp
                                    </a>
                                </div>
                              @elseif ($anggota->telepon)
                                <a href="tel:{{ $anggota->telepon }}" >
                                <span class="phone">Phone</span>
                                </a>
                              @else
                              <h5>Share Profile: </h5>
                              @endif
                              <br>
                                @php
                                    $user_link = $user->username ? url($user->username) : route('anggota.id', $user->id);
                                @endphp
                                <li class="facebook">
                                    <a target="_blank" href="https://www.facebook.com/sharer.php?u={{ $user_link }}"
                                    title="Share To Facebook" data-anim-child="slide-left delay-{{ $anim++ }}">
                                    <span class='facebook'></span>
                                </a>
                                </li>
                                <li class="whatsapp">
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send?text={{ $user_link }} {{ $user->name }}"
                                    title="Share To Whatsapp" data-anim-child="slide-left delay-{{ $anim++ }}">
                                    <span class="whatsapp"></span>
                                </a>
                                </li>
                                <li class="instagram">
                                    <a target="_blank"
                                    href="https://instagram.com/share?url={{ $user_link }}&text={{ $user->name }}"
                                    title="Share To Twitter" data-anim-child="slide-left delay-{{ $anim++ }}">
                                    <span class='instagram'></span></a>
                                </li>
                                <li class="linkedin">
                                    <a target="_blank"
                                    href="https://www.linkedin.com/shareArticle?mini=true&url={{ $user_link }}&title={{ $user->name }}&summary={{ $user->bio }}"
                                    title="Share To Linkedin" data-anim-child="slide-left delay-{{ $anim++ }}">
                                    <span class='linkedin'></span>
                                </a>
                                </li>
                                <li class="twitter">
                                    <a target="_blank"
                                    href="https://twitter.com/share/url?url={{ $user_link }}&text={{ $user->name }}"
                                    title="Share To Telegram" data-anim-child="slide-left delay-{{ $anim++ }}">
                                    <span class='twitter'></span>
                                </a>
                                </li>
                                <li class="email">
                                    <a target="_blank"
                                    href="mailto:?subject={{ $user->name }}&body=Check out this site: {{ $user_link }}"
                                    title="Share Via Email" data-anim-child="slide-left delay-{{ $anim++ }}">
                                    <span class='email'></span>
                                </a>
                                </li>
                            </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   
  <div class='clr'></div>
    <section>
    <div class="grid-container  container2 container">
            <div class=" info-block widget2">
            <div class=" ml-10 info-block">
                <h2>Tentang</h2>
           </div>
                @php $border_top = false; @endphp
                @if ($anggota->angkatan)
                    <div class="ml-10 info-block {{ $border_top ? 'border-top-light' : '' }}">
                        <h3>Angkatan (Masuk Tahun)</h3>
                        <div>
                            <div>
                                <div>
                                    <a href="{{ url('anggota?search=' . $anggota->angkatan) }}">
                                        {{ $anggota->angkatan }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $border_top = true; @endphp
                @endif
    
                @if ($anggota->profesi)
                    <div class="ml-10 info-block {{ $border_top ? 'border-top-light' : '' }}">
                        <h3>Profesi Sekarang</h3>
                        <div>
                            <div>
                                <div>
                                    <a href="{{ url('anggota?search=' . $anggota->profesi) }}">
                                        {{ $anggota->profesi }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $border_top = true; @endphp
                @endif
    
                @if ($anggota->jenis_kelamin)
                    <div class="ml-10 info-block {{ $border_top ? 'border-top-light' : '' }}">
                        <h3>Jenis Kelamin</h3>
                        <div>
                            <div>
                                <div>
                                    <a href="{{ url('anggota?search=' . $anggota->jenis_kelamin) }}">
                                        {{ $anggota->jenis_kelamin }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $border_top = true; @endphp
                @endif
    
                @if ($anggota->alamat_lengkap || $anggota->province_id || $anggota->regency_id || $anggota->district_id || $anggota->village_id)
                    <div class="ml-10 info-block {{ $border_top ? 'border-top-light' : '' }}">
                        <h3>Alamat</h3>
                        <div>
                            <div>
                                <div>
                                    @php
                                        $province = $anggota->province ? '<a href="' . url('anggota?search=' . $anggota->province->name) . '">' . $anggota->province->name . '</a>' : '';
                                        $regencie = $anggota->regencie ? '<a href="' . url('anggota?search=' . $anggota->regencie->name) . '">' . $anggota->regencie->name . '</a>' : '';
                                        $district = $anggota->district ? '<a href="' . url('anggota?search=' . $anggota->district->name) . '">' . $anggota->district->name . '</a>' : '';
                                        $village = $anggota->village ? '<a href="' . url('anggota?search=' . $anggota->village->name) . '">' . $anggota->village->name . '</a>' : '';
                                        
                                        $alamat_lengkap = '';
                                        $alamat_lengkap .= $alamat_lengkap == '' ? $anggota->alamat_lengkap : '';
                                        $alamat_lengkap .= $alamat_lengkap == '' ? $province : ($province == '' ? '' : ", $province");
                                        $alamat_lengkap .= $alamat_lengkap == '' ? $regencie : ($regencie == '' ? '' : ", $regencie");
                                        $alamat_lengkap .= $alamat_lengkap == '' ? $district : ($district == '' ? '' : ", $district");
                                        $alamat_lengkap .= $alamat_lengkap == '' ? $village : ($village == '' ? '' : ", $village");
                                    @endphp
                                    {!! $alamat_lengkap !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
    
            @if ($anggota->whatsapp || $anggota->telepon || $anggota->kontaks()->count() > 0)
                <div class="info-block widget2">
                    <div class="info-block">
                        <h2>Kontak</h2>
                    </div>
                    <div class="info-block">
                        @php $border_top = false; @endphp
    
                        @if ($anggota->telepon)
                            <div class="ml-10 w-1/1">
                                <h3><i class="fas fa-phone me-2"></i> Telepon</h3>
                                <div>
                                    <div>
                                        <div>
                                            <a href="tel:{{ $anggota->telepon }}" target="_blank">
                                                {{ $anggota->telepon }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php $border_top = true; @endphp
                        @endif
    
                        @if ($anggota->whatsapp)
                            <div class="ml-10 w-1/1 {{ $border_top ? 'border-top-light' : '' }}">
                                <h3><i class="fab fa-whatsapp me-2"></i> Whatsapp</h3>
                                <div>
                                    <div>
                                        <div>
                                            <a href="https://wa.me/+62{{ $anggota->whatsapp }}" target="_blank">
                                                +62{{ $anggota->whatsapp }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php $border_top = true; @endphp
                        @endif
    
                        @foreach ($anggota->kontaks()->with('jenis')->get() as $kontak)
                            <div class="ml-10 w-1/1 {{ $border_top ? 'border-top-light' : '' }}">
                                <h3>
                                    <i class="{{ $kontak->jenis->icon }} me-2"></i>
                                    {{ $kontak->jenis->nama }}
                                </h3>
                                <div>
                                    <div>
                                        <div>
                                            <a href="{{ $kontak->nilai }}" target="_blank">
                                                {{ $kontak->nilai }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php $border_top = true; @endphp
                        @endforeach
                    </div>
                </div>
            @endif
    
            @if ($anggota->anggotaKepengurusans()->count())
                <div class="info-block widget2">
                    <div class="info-block">
                        <h2>Riwayat Kepengurusan</h2>
                    </div>
                    <div class="info-block">
                        @foreach ($anggota->frontendDetailKepengurusans() as $k => $item)
                            <div class="ml-10 w-1/1 {{ $k > 0 ? 'border-top-light' : '' }}">
                                <div class="x-gap-20 y-gap-10 flex-wrap">
                                    <div>
                                        <div>
                                            <a href="{{ url('anggota?search=' . $item->sampai) }}">
                                                {{ $item->sampai }}
                                            </a>
                                            -
                                            <a href="{{ url('anggota?search=' . $item->dari) }}">
                                                {{ $item->dari }}
                                            </a>
                                            |
                                            @if ($item->bidang)
                                                <a href="{{ route('tentang.kepengurusan.bidang', $item->slug_bidang) }}">
                                                    {{ $item->jabatan }}
                                                    {{ $item->bidang ? '->' . ' ' . $item->bidang : '' }}
                                                </a>
                                            @else
                                                {{ $item->jabatan }}
                                            @endif
                                            |
                                            <a href="{{ route('tentang.kepengurusan.struktur.periode', $item->periode_slug) }}">
                                                {{ $item->periode }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
    
            @if ($anggota->pendidikans()->count())
                <div class="info-block widget2">
                    <div class="info-block">
                        <h2>Riwayat Pendidikan</h2>
                    </div>
                    <div class="info-block">
                        @foreach ($anggota->pendidikans()->orderBy('dari', 'desc')->get() as $k => $pendidikan)
                            <div class="ml-10 w-1/1 {{ $k > 0 ? 'border-top-light' : '' }}">
                                <h3>
                                    <a href="{{ url('anggota?search=') . $pendidikan->instansi }}">
                                        {{ $pendidikan->instansi }}
                                    </a>
                                </h3>
                                <div>
                                    <div>
                                        {{ $pendidikan->dari }} -
                                        {{ $pendidikan->sampai ? $pendidikan->sampai : 'sekarang' }}
                                    </div>
                                    @if ($pendidikan->jurusan)
                                        <div>{{ $pendidikan->jurusan }}</div>
                                    @endif
                                    @if ($pendidikan->keterangan)
                                        <div>{{ $pendidikan->keterangan }}</div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
    
            @if ($anggota->pengalamanOrganisasis->count())
                <div class="info-block widget2">
                    <div class="info-block">
                        <h2>Pengalaman Organisasi</h2>
                    </div>
                    <div class="info-block">
                        @foreach ($anggota->pengalamanOrganisasis as $k => $item)
                            <div class="ml-10 w-1/1 {{ $k > 0 ? 'border-top-light' : '' }}">
                                <h3>{{ $item->nama }}</h3>
                                <div>
                                    <div>
                                        {{ $item->dari }} -
                                        {{ $item->sampai ? $item->sampai : 'sekarang' }}
                                    </div>
                                    @if ($item->jabatan)
                                        <div>{{ $item->jabatan }}</div>
                                    @endif
                                    @if ($item->keterangan)
                                        <div>{{ $item->keterangan }}</div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
    
            @if ($anggota->pengalamanLains->count())
                <div class=" info-block widget2">
                    <div class="info-block">
                        <h2>Pengalaman Lain</h2>
                    </div>
                    <div class="info-block">
                        @foreach ($anggota->pengalamanLains as $k => $item)
                            <div class="ml-10 w-1/1 {{ $k > 0 ? 'border-top-light' : '' }}">
                                <div>{{ $item->pengalaman }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
    
            @if ($anggota->hobis->count())
                <div class="info-block widget2">
                    <div class="info-block">
                        <h2>Hobi</h2>
                    </div>
                    <div class="info-block">
                        @foreach ($anggota->hobis as $k => $item)
                            <a class="button -dark-1 -rounded" href="{{ url('anggota?search=' . $item->nama) }}" style="margin-left: 8px !important; margin-bottom: 8px;">
                                {{ $item->nama }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
    
        </div>
    </section>

@endsection
@section('stylesheet')
    <style>
        .card-main {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05), 0 1px 2px rgba(0, 0, 0, 0.1);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
        }

        .card-main:hover {
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.15), 0 10px 10px rgba(0, 0, 0, 0.20);
        }

        @media only screen and (max-width: 767px) {
            .social-media-container2 {
                margin-top: 16px;
                margin-left: 0 !important;
            }
        }

        .sosmed:hover {
            text: black !important;
        }
    </style>
@endsection

@section('javascript')
    {{-- mansory --}}
    <script src="{{ asset_admin('masonry/4.2.2/masonry.pkgd.min.js', name: 'sash') }}"></script>
    <script>
        $(document).ready(function() {
            var msnry = new Masonry(document.querySelector('.grid'), {
                itemSelector: '.grid-item',
                columnWidth: '.grid-sizer'
            });
        });
    </script>
@endsection
