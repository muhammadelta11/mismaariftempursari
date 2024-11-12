@extends('layouts.frontend.master2')
@section('content')
<div class='container'>
                <div id='slotbanner'>
                    <div class='banner no-items section' id='banner-home5' name='Slot Ads'></div>
                </div>
                <div class='clr'></div>
                <div class='contpost'>
                    <!-- Main Wrapper -->
                    <main class='main-wrapper' id='posts'>
                        <div class='text-wrapper section' id='text-wrapper4' name='Text Widget Posts'>
                            <div class='widget HTML' data-version='2' id='HTML6'>
                                <div class='widget-title'>
                                    <h3 class='title'>Latest from the Blog</h3>
                                </div>
                                <div class='widget-content'>
                                    <p>Berfikir Kritis, Kreatifitas dan Inovasi, Kolaborasi, Kemampuan Berkomunikasi Lewat Digitalisasi Madrasah</p>
                                </div>
                            </div>
                        </div>
                        <div class='main section' id='main' name='Main Posts'>
                            <div class='widget Blog' data-version='2' id='Blog1'>
                                <div class='blog-posts hfeed container'>
                                @foreach ($articles as $a)
                                    <article class='blog-post hentry mediapost'>
                                        <div class='rcimg'>
                                            <div class='rec-image'>
                                                <a href="{{ route('artikel.detail', $a->slug) }}">
                                                    <img  class='lazyload' data-sizes='auto' data-src='{{ $a->fotoUrl() }}' height='202' src='{{ $a->fotoUrl() }}' title='Program dan Layanan SIMPATIKA dan Intergrasi EMIS, PUSAKA, SIMPEG Serta Dukcapil' alt="{{$a->nama}}" width='360'/>
                                                    <div class='img-overlay'>
                                                        <i class='fat fa-plus-large fa-fw'></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class='post-info'>
                                            <div class='scinfo'>
                                                <div class='scdate'>
                                                    <span class='day'></span>
                                                    <span class='month'></span>
                                                    <span class='year'></span>
                                                </div>
                                                <span class='byline post-timestamp'>
                                                    <meta content=''/>
                                                    <a class='timestamp-link' href='' rel='bookmark' title='permanent link'>
                                                        <time class='published' datetime="{{ $a->dateFormat() }}" title="{{ $a->dateFormat() }}">{{ $a->dateFormat() }}</time>
                                                    </a>
                                                </span>
                                                <div class='jumlah-comments'>
                                                    0<i class='fas fa-comment'></i>
                                                </div>
                                            </div>
                                            <div class='boxinfo'>
                                                <h2 class='seo-title'>
                                                    <a href="{{ route('artikel.detail', $a->slug) }}" title="{{ $a->nama }}">{{ $a->nama }}</a>
                                                </h2>
                                                <div class='post-meta'></div>
                                                <p class='post-snippet'>{{ $a->excerpt }}</p>
                                            </div>
                                        </div>
                                    </article>
                                    @endforeach
                                    <!-- <article class='blog-post hentry mediapost'>
                                        <div class='rcimg'>
                                            <div class='rec-image'>
                                                <a href=''>
                                                    <img alt='PPDB MA Ulumul Quran Kota Serang ' class='lazyload' data-sizes='auto' data-src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiaN6RntkCdmD2UTVBFz7FwCHOrcEf_D6w502FUSRtSs-fiNzJspy4SbSkB9V0HEcwo6rlNTCKZAqlvGmowJNniwu4YMAVrdoCHe1p3tVoGJxPkOfWgSNLuSZbQRETnhTht0_6gJcIAquYlsz4sKr3BFumGP4FK8XeIrAUNg6V1v0H-93gW9BhmZQEY/w290-h163-p-k-no-nu/Selamat%20Datang%20Calon%20Siswa%20Baru.jpg' height='202' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAJCAYAAAA7KqwyAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAD6AAAA+gBtXtSawAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAAYSURBVCiRY0xISOBgoAAwUaJ51IBhYwAAuQABOsYCprwAAAAASUVORK5CYII=' title='PPDB MA Ulumul Quran Kota Serang ' width='360'/>
                                                    <div class='img-overlay'>
                                                        <i class='fat fa-plus-large fa-fw'></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class='post-info'>
                                            <div class='scinfo'>
                                                <div class='scdate'>
                                                    <span class='day'></span>
                                                    <span class='month'></span>
                                                    <span class='year'></span>
                                                </div>
                                                <span class='byline post-timestamp'>
                                                    <meta content=''/>
                                                    <a class='timestamp-link' href='' rel='bookmark' title='permanent link'>
                                                        <time class='published' datetime='2023-02-02T07:26:00-08:00' title='2023-02-02T07:26:00-08:00'>Februari 02, 2023</time>
                                                    </a>
                                                </span>
                                                <div class='jumlah-comments'>
                                                    0<i class='fas fa-comment'></i>
                                                </div>
                                            </div>
                                            <div class='boxinfo'>
                                                <h2 class='seo-title'>
                                                    <a href='' title='PPDB MA Ulumul Quran Kota Serang '>PPDB MA Ulumul Quran Kota Serang </a>
                                                </h2>
                                                <div class='post-meta'></div>
                                                <p class='post-snippet'>Dalam persaingan era globalisasi sekarang ini, manusia dituntut untuk siap pakai, mahir dalam segala bidang, serta dibutuhkan Sumber Daya Ma...</p>
                                            </div>
                                        </div>
                                    </article>
                                    <article class='blog-post hentry mediapost'>
                                        <div class='rcimg'>
                                            <div class='rec-image'>
                                                <a href='.html'>
                                                    <img alt='Download Kalender Pendidikan Propinsi banten' class='lazyload' data-sizes='auto' data-src='https://1.bp.blogspot.com/-Km0_8Uygfdo/XACqso1HbhI/AAAAAAAAoVs/Qu6ECFHu5dITwdMIRnxoQB_VoXfm4NQVgCLcBGAs/w290-h163-p-k-no-nu/586abf6db6fc1117b60b2753.png' height='202' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAJCAYAAAA7KqwyAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAD6AAAA+gBtXtSawAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAAYSURBVCiRY0xISOBgoAAwUaJ51IBhYwAAuQABOsYCprwAAAAASUVORK5CYII=' title='Download Kalender Pendidikan Propinsi banten' width='360'/>
                                                    <div class='img-overlay'>
                                                        <i class='fat fa-plus-large fa-fw'></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class='post-info'>
                                            <div class='scinfo'>
                                                <div class='scdate'>
                                                    <span class='day'></span>
                                                    <span class='month'></span>
                                                    <span class='year'></span>
                                                </div>
                                                <span class='byline post-timestamp'>
                                                    <meta content='.html'/>
                                                    <a class='timestamp-link' href='.html' rel='bookmark' title='permanent link'>
                                                        <time class='published' datetime='2018-11-29T19:13:00-08:00' title='2018-11-29T19:13:00-08:00'>November 29, 2018</time>
                                                    </a>
                                                </span>
                                                <div class='jumlah-comments'>
                                                    0<i class='fas fa-comment'></i>
                                                </div>
                                            </div>
                                            <div class='boxinfo'>
                                                <h2 class='seo-title'>
                                                    <a href='.html' title='Download Kalender Pendidikan Propinsi banten'>Download Kalender Pendidikan Propinsi banten</a>
                                                </h2>
                                                <div class='post-meta'></div>
                                                <p class='post-snippet'>Kalender Pendidikan adalah pengaturan waktu untuk kegiatan pembelajaran peserta didik mulai dari setahun dalam waktu pelajaran efektif dan...</p>
                                            </div>
                                        </div>
                                    </article> -->
                                </div>
                                <div class='' id='blog-pager'>
                                    <a class='blog-pager-older-link' href="" id='Blog1_blog-pager-older-link' title='Postingan Lama'>{!! $articles->links() !!}</a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <div class='clr'></div>
                <div class='container'>
                    <div id='slotbanner'>
                        <div class='banner no-items section' id='banner-home6' name='Slot Ads'></div>
                    </div>
                </div>
            </div>
            <div class='clr'></div>
            @endsection