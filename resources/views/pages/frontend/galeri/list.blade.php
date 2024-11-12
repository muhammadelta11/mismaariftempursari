@extends('layouts.frontend.master2')
@section('content')
    

    <style>
        .halaman {
    font-family: Arial, sans-serif;
    /* background-color: #ffffff; */
    margin: 0;
    padding: 0;
}

.icon-calendar-2,
.icon-location {
    display: inline-block;
}

.container3 {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.pb-30 {
    padding-bottom: 30px;
}

.search-field {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
}

.search-field input {
    flex: 1;
    padding: 10px;
    border-radius: 25px;
    border: 1px solid #ccc;
    outline: none;
}

.search-field button {
    background: none;
    border: none;
    position: relative;
    right: 30px;
    cursor: pointer;
}

.row {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
}

.col-lg-4,
.col-md-6 {
    flex: 0 0 calc(33.3333% - 30px);
    max-width: calc(33.3333% - 30px);
}

@media (max-width: 992px) {
    .col-lg-4,
    .col-md-6 {
        flex: 0 0 calc(50% - 30px);
        max-width: calc(50% - 30px);
    }
}

@media (max-width: 768px) {
    .col-lg-4,
    .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}

.eventCard {
    /* background: #fff; */
    border-radius: 10px;
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

.card-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-bottom: 1px solid #ddd;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}



.eventCard__title {
    margin: 0 0 10px 0;
    font-size: 17px;
    font-weight: 500;
}

.d-flex {
    display: flex;
}

.x-gap-15 {
    gap: 15px;
}

.pt-10 {
    padding-top: 10px;
}

.items-center {
    align-items: center;
}

.icon-calendar-2,
.icon-location {
    width: 16px;
    height: 16px;
    background-color: #ccc;
    border-radius: 50%;
    display: inline-block;
    margin-right: 8px;
}

.text-14 {
    font-size: 14px;
}

.eventCard__button {
    padding: 15px;
    text-align: center;
}

.button {
    display: inline-block;
    padding: 10px 25px;
    border-radius: 25px;
    text-decoration: none;
    color: #fff;
    background-color: #6200ea;
}

.button:hover {
    background-color: #3700b3;
}

.no-data {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 200px;
    width: 100%;
}

/* New CSS */
/* .eventCard__bg {
    padding: 20px;
    border-top: 1px solid #ddd;
    background: #fff;
} */
.eventCard__content {
    padding: 15px;
    background-color: #15ab5d;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;

}

.y-gap-20 {
    /* margin-bottom: 20px; */
    margin-top: -10px;
    margin-bottom: -10px;
}

.eventCard.-type-1 .eventCard__bg {
    z-index: 5;
    position: relative;
    width: calc(100% - 10px);
    /* box-shadow: 0px 6px 15px 0px #404F680D; */
    border-radius: 8px;
    padding: 20px;
    margin: 0 auto;
    margin-top: -45px;
    transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.eventCard__title {
    font-size: 1.25rem;
    font-weight: 600;
    margin: 0;
    color: #ffffff;
}

.eventCard__button a {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1rem;
    color: #fff;
    background-color: #0c6008;
    border-radius: 25px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.eventCard__button a:hover {
    background-color: #3700b3;

}
.mr-8 {
    margin-right: 8px;
}

.eventCard__inner{
    color: #ffffff;
}
.gallery-header {
    text-align: center;
    /* background-color: #f5f5f5; Light gray background */
}


.header-content {
   
}

.gallery-title {
    font-size: 36px;
    font-weight: 700;
    color: #333; /* Dark gray */
    margin: 0 0 10px;
}

.gallery-subtitle {
    font-size: 18px;
    color: #666; /* Medium gray */
    margin: 0;
}

@media (max-width: 768px) {
    .gallery-title {
        font-size: 28px;
    }

    .gallery-subtitle {
        font-size: 16px;
    }
}

    </style>
  <div class='postparallax'>
                <div class='bannerpost section' id='bannerpost' name='Cover Post Image'>
                    <div class='widget Image' data-version='2' id='Image13'>
                        <div class='widget-content'>
                            <div class='rcimg'>
                                <div class='rec-image'>
                                    <img alt='' class='lazyload' data-sizes='auto' data-src="{{ asset('assets2/home/pramuka2.jpg') }}" height='400' id='Image13_img' src="{{ asset('assets2/home/pramuka2.jpg') }}" width='950'/>
                                </div>
                            </div>
                            <div class='sch-box2'>
                                <div class='sch-content'>
                                    <h3></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<section class="gallery-header">
    <div class="">
        <div class="">
            <div class="">
                <div class="header-content text-center">
                    <div>
                        <h1 class="gallery-title">{{ settings()->get('setting.home.galeri_kegiatan.title') }}</h1>
                    </div>
                    <div>
                        <p class="gallery-subtitle">{{ settings()->get('setting.home.galeri_kegiatan.sub_title') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="layout-pt-md layout-pb-lg halaman">
    <div data-anim-wrap class="container3">
        <div class="pb-30" data-anim="slide-up delay-4">
            <form class="search-field h-50" action="">
                <input class="bg-light-3 pr-50" type="search" placeholder="Poesaka..." value="{{ $filters->search }}" name="search" id="search">
                <button class="" type="submit">
                    <i class="icon-search text-20"></i>
                </button>
            </form>
        </div>

        <div class="row y-gap-30 pt-30">
            @foreach ($galeries as $k => $galery)
            <div class="col-lg-4 col-md-6">
                <div class="eventCard -type-1" data-anim="slide-left delay-{{ $k + 5 }}">
                    <div class="eventCard__img">
                        <img src="{{ "https://lh3.google.com/u/0/d/{$galery->foto_id_gdrive}" }}" alt="{{ $galery->nama }}" class="card-img">
                    </div>

                    <div class="eventCard__bg bg-white">
                        <div class="eventCard__content y-gap-20">
                            <div class="eventCard__inner">
                                <h4 class="eventCard__title text-17 fw-500">
                                    {{ $galery->nama }}
                                </h4>
                                <hr>
                                <br>
                                <!-- <div class="d-flex x-gap-15 pt-10"> -->
                                    <div class="d-flex ">
                                        <i class="fas fa-calendar-alt text-16 mr-8"> <span></span></i>
                                        <div class="text-14 eventCard__inner">{{ $galery->tanggal_str }}</div>
                                    </div>
                                    <div class="d-flex ">
                                        <i class="fas fa-map-marker-alt text-16 mr-8"> </i>
                                        <div class="text-14 eventCard__inner">{{ $galery->lokasi }}</div>
                                    <!-- </div> -->
                                </div>
                            </div>

                            <div class="eventCard__button">
                                <a href="{{ route('galeri.detail', $galery->slug) }}" class="button -sm -rounded -purple-1 text-white px-25">Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @if (!$galeries)
            <div class="d-flex justify-content-center align-items-center">
                <h6>Data Tidak Tersedia</h6>
            </div>
            @endif
            {!! $galeries->links() !!}
        </div>
    </div>
</section>

@endsection

@section('stylesheet')
    <style>
        .card-main {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
            margin: 3px;
        }

        .card-main:hover {
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }
    </style>
@endsection
