<style>

.notification-banner {
    background-color: #05490b; /* Dark background */
    color: #ffffff; /* White text */
    padding: 10px 0;
    font-size: 12px;
    position: -webkit-sticky; /* Untuk Safari */
    position: sticky; /* Menjadikan elemen sticky */
    top: 0; /* Menempel di atas saat scrolling */
    z-index: 9999; /* Agar notifikasi berada di atas konten lain */
    margin-top: 0; /* Hapus margin-top untuk menghindari ruang kosong di atas */
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.notification-text {
    margin: 0;
    display: inline-block;
    max-width: 80%;
    line-height: 1.5;
}

.notification-link {
    color: #7ff292; /* Purple link color */
    font-weight: bold;
    text-decoration: none;
}

.notification-link:hover {
    text-decoration: underline;
}

.notification-close {
    position: absolute;
    top: 50%;
    right: 55px;
    transform: translateY(-50%);
    font-size: 20px;
    font-weight: bold;
    color: white;
}

.notification-banner .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
</style>
@if ($notifikasi)
    @foreach ($notifikasi as $v)
        <div class="notification-banner">
            <div class="container d-flex justify-between align-center">
                <p class="notification-text">
                    {{ $v->deskripsi }}
                    @if ($v->link)
                        <a href="{{ $v->link }}" class="notification-link">{{ $v->link_nama }}</a>
                    @endif
                </p>
                <span class="notification-close" style="cursor: pointer" onclick="$(this).closest('.notification-banner').fadeOut()">x</span>
            </div>
        </div>
    @endforeach
@endif
<div class='outer-wrapper'> 
<header class='header-wrapper'>

                <div class='container'>
                    <div class='topwrapper'>
                        <div class='topbox section' id='topbox' name='Marquee'>
                            <div class='widget HTML' data-version='2' id='HTML1'>
                                <div class='widget-content'>
                                    <marquee class='marquee' scrollamount='4'>Assalamualaikum... Selamat Datang di MIS Ma'arif Tempursari Mantingan Ngawi</marquee>
                                </div>
                            </div>
                        </div>
                        <div class='social-top section' id='social-top' name='Social Header'>
                            <div class='widget LinkList' data-version='2' id='LinkList65'>
                                <div class='widget-content'>
                                    <ul class='social-counter social'>
                                        <li class='facebook'>
                                            <a href='https://web.facebook.com/ma.ulumulqurankotaserang/' rel='noopener nofollow' target='_blank' title='facebook'>
                                                <span class='facebook'></span>
                                            </a>
                                        </li>
                                        <li class='twitter'>
                                            <a href='https://twitter.com/ma_ulumulquran' rel='noopener nofollow' target='_blank' title='twitter'>
                                                <span class='twitter'></span>
                                            </a>
                                        </li>
                                        <li class='instagram'>
                                            <a href='mimaariftempursari?igsh=bzBrajdhYTc2N3l6' rel='noopener nofollow' target='_blank' title='instagram'>
                                                <span class='instagram'></span>
                                            </a>
                                        </li>
                                        <li class='youtube'>
                                            <a href='https://web.facebook.com/ma.ulumulquran?_rdc=1&_rdr' rel='noopener nofollow' target='_blank' title='youtube'>
                                                <span class='youtube'></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id='header-wrap'>
                        <div class='header'>
                        {{-- logo white --}} 
                            <div class='header-logo section' id='header-logo' name='Tajuk'>
                                <div class='widget Header' data-version='2' id='Header1'>
                                    <div class='header-widget'>
                                        <a href='https://mismaariftempursari.sch.id/' title="Ma'arif Tempursari">
                                            <img alt="Ma'arif Tempursari" class='lazyload' data-src="{{ asset(settings()->get(set_front('app.foto_dark_landscape_mode'))) }}" style="max-height: 80px;"   title="MIS MA'ARIF TEMPURSARI" />
                                        
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='header'>
                            <div class='menu'>
                                <div class='menu-wrapper'>
                                    <div class='header-menu'>
                                        <div class='khususmenu'>
                                            <div class='socialmobile'></div>
                                             <div class='menuhide btnmenu' onclick='toggleMenu()'>
                                                <i class='fal fa-times'></i>
                                            </div>
                                        </div>
                                        <div class='mobile-menu'></div>
                                        <div class='main-menu section' id='main-menu' name='Menu'>
                                            
                                            <div class='widget LinkList' data-version='2' id='LinkList113'>
                                                <ul id='main-menu-nav'>
                                                {!! navbar_menu_front($page_attr->navigation) !!}
                                                
                          
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='header header-box'>
                            <div class='sch-search'>
                                <div class='searchscl'>
                                    <button class='dropdown-toggle'>
                                        <i class='fas fa-search'></i>
                                        <span>search</span>
                                    </button>
                                    <div class='dropdown-content'>
                                        <form action='https://mauq.madrasahku.sch.id/search' id='search' target='_top'>
                                            <input autocomplete='off' id='search-terms' name='q' placeholder='Search...' required='required' type='search' value=''/>
                                            <button class='search-action' type='submit'>Search</button>
                                        </form>
                                    </div>
                                </div>
                                @if (auth()->user())
                                <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                                    <a href="{{ route('dashboard') }}" class="text-dark-1 ml-30">Halaman Admin</a>
                                </div>
                            @else
                                <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                                    <a href="{{ route('login') }}" class="text-dark-1 ml-30">Masuk</a>
                                </div>
                            @endif
                                <div class='btndark'>
                                    <button class='light-button' hidden='hidden'>
                                        <i class='far fa-sun-bright'></i>
                                        <span class='text-indent'>light</span>
                                    </button>
                                    <button class='dark-button'>
                                        <i class='far fa-moon'></i>
                                        <span class='text-indent'>dark</span>
                                    </button>
                                    
                                </div>
                                <div class='menushow btnmenu' onclick='toggleMenu()'>
                                    <i class='fa fa-bars'></i>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </header>