@extends('layouts.frontend.master2')
@section('content')
 
    @php
        $p = 'setting.home';
        $k = "$p.hero";
        $filter = [['search' => '__periode_nama__', 'replace' => $periode->nama], ['search' => '__periode_dari__', 'replace' => $periode->dari], ['search' => '__periode_sampai__', 'replace' => $periode->sampai]];
        $anim = 1;
    @endphp
    @if (settings()->get("$k.visible"))


    <div class='clr'></div>
            <div class='sliderhome section' id='sliderhome' name='Slider Image'>
                <div class='widget Image' data-version='2' id='Image16'>
                    <div class='widget-content'>
                        <a href=''>
                            <div class=''>
                                <div class='rec-image'>
                                    <img alt="mi ma'arif tempursari" class='lazyload' data-sizes='auto' data-src="{{ asset('assets2/home/guru.jpg') }}" height='700' id='Image16_img' src="{{ asset('assets2/home/guru.jpg') }}" width='1280'/>
                                </div>
                            </div>
                        </a>
                        <div class='sch-box'>
                            <div class='sch-content'>
                                <h3>MI Ma'arif Tempursari</h3>
                                <p>Madrasah Ibtidaiyah swasta ini didirikan pertama kali pada tahun 1946. Saat sekarang MIS Ma'arif Tempursari memakai panduan kurikulum belajar pemerintah yaitu . MIS Ma'arif Tempursari ditangani oleh seorang operator yang bernama Almar'atus Sholihah.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='widget Image' data-version='2' id='Image4'>
                    <div class='widget-content'>
                        <div class=''>
                            <div class='rec-image'>
                                <img alt='السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ' class='lazyload' data-sizes='auto' data-src="{{ asset('assets2/home/bacg.jpg') }}" height='700' id='Image4_img' src="{{ asset('assets2/home/bacg.jpg') }}" width='1280'/>
                            </div>
                        </div>
                        <div class='sch-box'>
                            <div class='sch-content'>
                                <h3>الس &#1614;&#1617;لا &#1614;م &#1615;ع &#1614;ل &#1614;ي &#1618;ك &#1615;م &#1618;و &#1614;ر &#1614;ح &#1618;م &#1614;ة &#1615;الله &#1616;و &#1614;ب &#1614;ر &#1614;ك &#1614;ات &#1615;ه &#1615;</h3>
                                <p>Selamat Datang di Website Madrasah Ibtidaiyah Ma'arif Tempursari</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='widget Image' data-version='2' id='Image3'>
                    <div class='widget-content'>
                        <div class='rcimg'>
                            <div class='rec-image'>
                                <img alt="Mi Ma'arif tempursari" class='lazyload' data-sizes='auto' data-src="{{ asset('assets2/home/pramuka.jpg') }}" height='700' id='Image3_img' src="{{ asset('assets2/home/pramuka.jpg') }}" width='1280'/>
                            </div>
                        </div>
                        <div class='sch-box'>
                            <div class='sch-content'>
                                <h3>MI Ma'arif Tempursari</h3>
                                <p>Madrasah Ibtidaiyah Ma'arif Tempursari Berupaya untuk dapat mengembangkan seluruh potensi siswa secara optimal dan mencapai puncak prestasi madrasah dengan cara yang baik (bermartabat)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='widget Image' data-version='2' id='Image19'>
                    <div class='widget-content'>
                        <div class='rcimg'>
                            <div class='rec-image'>
                                <img alt='Literasi Digital' class='lazyload' data-sizes='auto' data-src="{{ asset('assets2/home/kompeten.jpg') }}" height='700' id='Image19_img' src="{{ asset('assets2/home/kompeten.jpg') }}" width='1280'/>
                            </div>
                        </div>
                        <div class='sch-box'>
                            <div class='sch-content'>
                                <h3>Literasi Digital</h3>
                                <p>Belajar menggunakan teknologi dan internet secara aktif dan teratur Serta Mencari sumber informasi yang terpercaya dan melakukan verifikasi terhadap informasi yang ditemukan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='widget Image' data-version='2' id='Image5'>
                    <div class='widget-content'>
                        <div class='rcimg'>
                            <div class='rec-image'>
                                <img alt='Keterampilan Belajar yang harus dikembangan di madrasah' class='lazyload' data-sizes='auto' data-src="{{ asset('assets2/home/uparaca2.jpg') }}" height='700' id='Image5_img' src="{{ asset('assets2/home/uparaca2.jpg') }}" width='1280'/>
                            </div>
                        </div>
                        <div class='sch-box'>
                            <div class='sch-content'>
                                <h3>Keterampilan Belajar yang harus dikembangan di madrasah</h3>
                                <p>Berfikir Kritis, Kreatifitas dan Inovasi, Kolaborasi, Kemampuan Berkomunikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='clr'></div>
            <div class='container'>
                <div id='slotbanner'>
                    <div class='banner no-items section' id='banner-home1' name='Slot Ads'></div>
                </div>
            </div>
            <div class='clr'></div>
            <div class='guru-wrapper'>
                <div class='container'>
                    <div class='guru section' id='guru1' name='Principal'>
                        <div class='widget Image' data-version='2' id='Image2'>
                            <div class='widget-content'>
                                <div class='rcimg'>
                                    <div class='rec-image'>
                                        <img alt='kepala Madrasah' class='lazyload' data-sizes='auto' data-src="{{ asset('assets2/home/ks.png') }}" height='375' id='Image2_img' src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' width='375'/>
                                    </div>
                                </div>
                                <div class='sch-box'>
                                    <div class='sch-content'>
                                        <h3>kepala Madrasah</h3>
                                        <h4 style="color: white;">KH. RUSWANTO, M.Pd.I</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='guru section' id='guru2' name='About School'>
                        <div class='widget HTML' data-version='2' id='HTML2'>
                            <div class='widget-title'>
                                <h3 class='title'>MIS MA'ARIF TEMPURSARI</h3>
                            </div>
                            <div class='widget-content'>
                                <p> {!! settings()->get("$k.sub_title") !!}</p>
                                <h3>Visi</h3>
                                <p>{!! $periode->visi !!}</p>
                                <h3>Misi</h3>
                                <p>{!! $periode->misi !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='clr'></div>
            <div class='container'>
                <div id='slotbanner'>
                    <div class='banner no-items section' id='banner-home2' name='Slot Ads'></div>
                </div>
            </div>
            <div class='clr'></div>
            <div class='all-wrapper'>
                <div class='container'>
                    <div class='text-wrapper section' id='text-wrapper1' name='Text Widget Teacher'>
                        <div class='widget HTML' data-version='2' id='HTML4'>
                            <div class='widget-title'>
                                <h3 class='title'>Guru dan Staff</h3>
                            </div>
                            <div class='widget-content'>
                                <p>Mutu madrasah sangat ditentukan oleh keberadaan guru yang berkualitas yang mencakup dan menekankan pada 4 kompetensi, yaitu kompetensi profesional, pedagogik, sosial, dan kompetensi kepribadian</p>
                            </div>
                        </div>
                    </div>
                    <div class='teacherslider section' id='teacherslider' name='All Teacher'>
                    {{-- pengurus item --}}
                        @foreach ($pengurus as $a)
                        <div class='widget Image' data-version='2' id='Image17'>
                            <div class='widget-content'>
                                <div class='rcimg'>
                                    <div class='rec-image'>
                                        <img class='lazyload' data-src="{{ $a->anggota->fotoUrl() }}" alt="image" data-sizes='auto'  height='375' id='Image17_img'  width='375'/>
                                    </div>
                                </div>
                                <div class='sch-box'>
                                    <div class='sch-content'>
                                        <h3>{{ $a->anggota->nama }}</h3>
                                        <p>{{ $a->jabatan->nama }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class='clr'></div>
            <div class='rc-wrapper'>
                <div class='container'>
                    <div class='text-wrapper section' id='text-wrapper2' name='Text Widget Announcement'>
                        <div class='widget HTML' data-version='2' id='HTML5'>
                            <div class='widget-title'>
                                <h3 class='title'>Info Madrasah</h3>
                            </div>
                            <div class='widget-content'>
                                <p>&#8220;Madrasah hebat adalah madrasah yang dapat mengembangkan seluruh potensi siswa secara optimal dan mencapai puncak prestasi madrasah dengan cara yang baik (bermartabat)"</p>
                            </div>
                        </div>
                    </div>
                    <div class='rcbox'>
                        <div class='rcwrapper section' id='rcwrapper1' name='Recent Cover Image'>
                            <div class='widget Image' data-version='2' id='Image6'>
                                <div class='widget-content'>
                                    
                                    <a href="#">
                                        <div class='rcimg'>
                                            <div class='rec-image'>
                                                <img alt='' class='lazyload' data-sizes='auto' data-src="{{ asset('assets2/home/info.jpg') }}" height='1080' id='Image6_img' src="{{ asset('assets2/home/info.jpg') }}" width='1080'/>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class='rcwrapper section' id='rcwrapper2' name='Recent List'>
                            <div class='widget HTML' data-version='2' id='HTML10'>
                                <div class='widget-content'>
                                    <span data-type="rcsimple" data-label="Activity"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='clr'></div>
                <div class='container'>
                    <div id='slotbanner'>
                        <!-- <div class='banner no-items section' id='banner-home3' name='Slot Ads'></div> -->
                        
                    </div>
                </div>
            </div>
            <div class='clr'></div>
            <div class='rec-gallery'>
                <div class='container'>
                    <div class='text-wrapper section' id='text-wrapper3' name='Text Widget Gallery'>
                        <div class='widget HTML' data-version='2' id='HTML8'>
                            <div class='widget-title'>
                                <h3 class='title'>Student Activity</h3>
                            </div>
                            <div class='widget-content'>
                                <p>
                                    Madrasah Hebat dan Bermartabat adalah madrasah yang menampilkan sesuatu yang unik, maju dan berbeda. &#8220;Hebat bukan berarti harus &#8216;besar &#8217;, tetapi sesuatu yang tidak biasa bagi madrasah atau sekolah di sekitarnya. Memiliki keunggulan lokal atau keunikan-keunikan tertentu, dengan demikian madrasah akan menjadi pilihan masyarakat. <b>( Dr. H.A. Umar ) </b>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class='recentid section' id='recentid' name='Recent Gallery'>
                        <div class='widget HTML' data-version='2' id='HTML9'>
                            <div class='widget-title'>
                                <h3 class='title'>Gallery</h3>
                            </div>
                            <div class='widget-content'>
                                <span data-type="rcgallery" data-label="profil" data-no="6"></span>
                            </div>
                        </div>
                    </div>
                    <div class='clr'></div>
                    <div id='slotbanner'>
                        <div class='banner no-items section' id='banner-home4' name='Slot Ads'></div>
                    </div>
                </div>
            </div>
            <div class='clr'></div>
            <div class='data-wrapper'>
                <div class='bg bgopacity'>
                    <div class='container'>
                        <div class='dataschool section' id='dataschool1' name='Static Text'>
                            <div class='widget HTML' data-version='2' id='HTML15'>
                                <div class='widget-title'>
                                    <h3 class='title'>Temporary Static School Data</h3>
                                </div>
                                <div class='widget-content'>"Tidak semua input siswa di madrasah bagus. Namun jika ada beberapa yang unggul dan memang kita asah dengan serius, maka mereka akan mengangkat nama baik madrasah untuk lebih mengukuhkan bahwa madrasah memang hebat dan bermartabat,"</div>
                            </div>
                        </div>
                        <div class='dataschool section' id='dataschool2' name='Static School'>
                            <div class='widget HTML' data-version='2' id='HTML16'>
                                <div class='widget-title'>
                                    <h3 class='title'>Add JavaScript</h3>
                                </div>
                                <div class='widget-content'>
                                    <div class="element-counter">
                                        <div class="counter">
                                            <span class="icon-counter">
                                                <i class="fas fa-user-graduate"></i>
                                            </span>
                                            <div class="counter-box">
                                                <span class='timer' data-speed='10000' data-to="1304" id='count'></span>
                                                <span class="counter-plus">+</span>
                                            </div>
                                            <span class="counter-title">Alumni</span>
                                        </div>
                                    </div>
                                    <div class="element-counter">
                                        <div class="counter">
                                            <span class="icon-counter">
                                                <i class="fas fa-chalkboard-user"></i>
                                            </span>
                                            <div class="counter-box">
                                                <span class='timer' data-speed='5000' data-to='{{ $attr->total }}' id='count'></span>
                                            </div>
                                            <span class="counter-title">Guru</span>
                                        </div>
                                    </div>
                                    <div class="element-counter">
                                        <div class="counter">
                                            <span class="icon-counter">
                                                <i class="fas fa-users"></i>
                                            </span>
                                            <div class="counter-box">
                                                <span class='timer' data-speed='5000' data-to='157' id='count'></span>
                                                <span class="counter-plus">+</span>
                                            </div>
                                            <span class="counter-title">Siswa</span>
                                        </div>
                                    </div>
                                    <div class="element-counter">
                                        <div class="counter">
                                            <span class="icon-counter">
                                                <i class="fas fa-memo-pad"></i>
                                            </span>
                                            <div class="counter-box">
                                                <span class='timer' data-speed='5000' data-to='5' id='count'></span>
                                                <span class="counter-plus">+</span>
                                            </div>
                                            <span class="counter-title">Extra Curricular</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='container'>
                <div id='slotbanner'>
                    <div class='banner no-items section' id='banner-home5' name='Slot Ads'></div>
                </div>
                <div class='clr'></div>
                <div class='contpost'>
                    <!-- Main Wrapper -->
                    @php
        $k = "$p.artikel";
        $anim = 1;
    @endphp
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
                        @if (settings()->get("$k.visible"))
                        <div class='main section' id='main' name='Main Posts'>
                            <div class='widget Blog' data-version='2' id='Blog1'>
                                <div class='blog-posts hfeed container'>
                               
                                @foreach ($articles as $k => $a)
                        @if ($k > 1)
                            @continue
                        @endif
                                    <article class='blog-post hentry mediapost'>
                                        <div class='rcimg'>
                                            <div class='rec-image'>
                                                <a href="">
                                                    <img alt="" class='lazyload' data-sizes='auto' data-src="{{ $a->fotoUrl() }}" height='202' src="{{ $a->fotoUrl() }}" title='Program dan Layanan SIMPATIKA dan Intergrasi EMIS, PUSAKA, SIMPEG Serta Dukcapil' width='360'/>
                                                    <div class='img-overlay'>
                                                        <i class='fat fa-plus-large fa-fw'></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class='post-info'>
                                        <div class="scinfo">
                        <div class="scdate">
                        <span class="day">{{ \Carbon\Carbon::parse($a->dateFormat())->format('d') }}</span>
                           <span class="month">{{ \Carbon\Carbon::parse($a->dateFormat())->format('F') }}</span>
                           <span class="year">{{ \Carbon\Carbon::parse($a->dateFormat())->format('Y') }}</span>
                                </div>
                                   <span class="byline post-timestamp">
                                   <meta content=""/>
                                 <a class="timestamp-link" href="" rel="bookmark" title="permanent link">
                                    <time class="published" datetime="{{ \Carbon\Carbon::parse($a->dateFormat()) }}" title="{{ $a->dateFormat() }}">{{ $a->dateFormat() }}</time>
                                    </a>
                                          </span>
                              <div class="jumlah-comments">
                                                   0<i class="fas fa-comment"></i>
                                              </div>
                                       </div>

                                            <div class='boxinfo'>
                                                <h2 class='seo-title'>
                                                    <a href='' title='Program dan Layanan SIMPATIKA dan Intergrasi EMIS, PUSAKA, SIMPEG Serta Dukcapil'>{{ $a->nama }}</a>
                                                </h2>
                                                <div class='post-meta'></div>
                                                <p class='post-snippet'>{{ $a->excerpt }}</p>
                                            </div>
                                        </div>
                                    </article>
                                    @endforeach
                                </div>
                                <div class='blog-pager' id='blog-pager'>
                                    <a class='blog-pager-older-link' href="{{ route('artikel') }}" id='Blog1_blog-pager-older-link' title='Postingan Lama'>Postingan Lengkap</a>
                                </div>
                            </div>
                        </div>
                    </main>
                    @endif
                </div>
                <div class='clr'></div>
                <div class='container'>
                    <div id='slotbanner'>
                        <div class='banner no-items section' id='banner-home6' name='Slot Ads'></div>
                    </div>
                </div>
            </div>
            <div class='clr'></div>
            <div class='dena-wrapper'>
                <div class='container'>
                    <div class='text-wrapper section' id='text-wrapper5' name='Text Widget Map'>
                        <div class='widget HTML' data-version='2' id='HTML11'>
                            <div class='widget-content'>
                                <p>"Madrasah hebat adalah madrasah yang memiliki keunikan, maju, dan berbeda dengan sekolah umum,"</p>
                            </div>
                        </div>
                    </div>
                    <div class='dena section' id='dena' name='School Map'>
                        <div class='widget HTML' data-version='2' id='HTML3'>
                            <div class='widget-content'>
                                <div class='iframe-maps'>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.0032987555946!2d111.12373606828545!3d-7.410225949693702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79f974a1f43845%3A0x59035e351e861c51!2sMIS%20MA&#39;ARIF%20TEMPURSARI!5e0!3m2!1sid!2sid!4v1721567736688!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
        $k = "$p.instagram";
        $instagram_visible = settings()->get("$k.visible");
        $anim = 1;
    @endphp
    <div class="" >
    @if ($instagram_visible)
    <section class="">
            <div class="">
                          <style>.center{ position: absolute;}</style>
                                <div class='widget-title'>
                                <center>  <h1 class="title ">{{ settings()->get("$k.title") }}</h1></center> 
                            </div>

                            <div class="is-in-view">
                              <center>  <p class="">
                                    {{ settings()->get("$k.sub_title") }}
                                </p></center> 
                                <br>
                            </div>
                      
                </div>

                <style>
                    .instagram-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px; /* Jarak antar kolom */
}

.instagram-item {
    /* Tambahkan gaya tambahan untuk item Instagram jika diperlukan */
    border: 1px solid #ddd; /* Contoh border */
    padding: 8px; /* Contoh padding */
    box-sizing: border-box; /* Pastikan padding dan border tidak mempengaruhi lebar elemen */
}

                </style>
                <div class="instagram-grid grid-container container">
    @foreach ($instagrams as $item)
        <div class="instagram-item">
            {!! str_replace('<script async src="//www.instagram.com/embed.js"></script>', '', $item->keterangan) !!}
        </div>
    @endforeach
    @if ($instagrams->count() > 0)
        <script async src="//www.instagram.com/embed.js"></script>
    @endif
</div>
<br>

        </section>
    @endif
                                    </div>

            @endsection