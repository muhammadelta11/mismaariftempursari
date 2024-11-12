
@extends('layouts.frontend.master2')
@section('content')
<div class="outer-wrapper">
<!-- Header Wrapper -->
<!-- <header class="header-wrapper">

</header> -->

<div class="clr"></div><div class="postparallax">
  <div class="bannerpost section" id="bannerpost" name="Cover Post Image">
    <div class="widget Image" data-version="2" id="Image13">
<div class="widget-content">
<div class="rcimg"><div class="rec-image"><img class="lazyautosizes lazyloaded" data-sizes="auto" data-src="{{ asset('assets2/home/pramuka3.jpg') }}" alt="mi ma'arif" height="400" id="Image13_img" src="{{ asset('assets2/home/pramuka3.jpg') }}" width="950" sizes="383px"></div></div>
<div class="sch-box">
<div class="sch-content">
<h3>
</h3>
</div>
</div>
</div>
</div></div>
</div>
<div class="container">
<div class="contpost container">
<!-- Main Wrapper -->
<main class="main-wrapper container" id="posts">
<div class="main section " id="main" name="Main Posts"><div class="widget Blog" data-version="2" id="Blog1">
<div class="blog-posts hfeed ">
<nav id="breadcrumb">
<div class="left-breadcrumb">
<a href="{{ route('home') }}">Home</a>
</div>
<div class="breaddown">
<span class="breadtitle">submenu</span>
<button class="dropdown-toggle"><i class="far fa-angle-down fa-fw"></i></button>
<ul class="dropdown-content">
<li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem">
<a href="#" itemprop="item" title="Activity">
<span itemprop="name">Activity</span>
</a>
<meta content="2" itemprop="position">
</li>
<li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem">
<a href="#" itemprop="item" title="Profile">
<span itemprop="name">Profile</span>
</a>
<meta content="3" itemprop="position">
</li>
</ul>
</div>
</nav>
<h1 class="seo-title">
{{ $model->nama }}
@php
                            $user = $model->user;
@endphp
</h1>

<div class='post-meta'>
      <div class='photos'>
     </div>
     <img src="{{ $user->anggota->fotoUrl() }}" onerror="this.src='{{ $user->anggota->fotoUrlDefault() }}';this.onerror='';"
                                        class="lazyautosizes lazyloaded" 
                                        sizes="15px" style="width: 30px; margin: 10px; height: 30px; object-fit: cover; border-radius: 50%;"
                                        alt="{{ $user->name }}" /> 
              <span class="post-author">
                          {{ $user->name }}
                        </span>
               <div class="byline post-timestamp">
                    <meta content="{{ route('artikel', $model->slug) }}&title={{ $model->nama }}&summary={{ $model->excerpt }}">
                  <time class="published">
                    {{ $model->dateFormat() }}
                  </time>
              </div>
             </div>
          
          <div class="post-body">
 {!! $model->detail !!}<br>
</div>
<div class="post-footer">
<div class="social-posts show">
<ul class="share-links social social-color">
<li class="share-icon"><span class="s-icon"></span></li>
       <li class="facebook"><a class="facebook" href="https://www.facebook.com/sharer.php?u={{ route('artikel',$model->slug) }}" rel="noopener nofollow" target="_blank"><span>facebook</span></a></li>
          <li class="twitter"><a class="twitter" href="https://twitter.com/share?url={{ route('artikel', $model->slug) }}&text={{ $model->nama }}" rel="noopener nofollow" target="_blank"><span>twitter</span></a></li>
<li class="whatsapp whatsapp-desktop"><a class="whatsapp" href="https://api.whatsapp.com/send?text={{ route('artikel', $model->slug) }} {{ $model->nama }}" rel="noopener nofollow" target="_blank"><span>whatsapp</span></a></li>

<li class="pinterest"><a class="pinterest" href="https://pinterest.com/pin/create/button/?url={{ route('artikel', $model->slug) }}&media={{ asset($model->foto) }}&description={{ $model->nama }}" rel="noopener nofollow" target="_blank"><span>pinterest</span></a></li>
<!-- <li class="copy-d"><span class="copy-clipboard"></span><textarea id="select-link"></textarea> -->
<!-- <span class="copy-link" id="clickClipboard" title="Copy link"></span></li> -->
<li class="email"><a class="email" href="mailto:?subject={{ $model->nama }}&body=Check out this site: {{ route('artikel', $model->slug) }}" rel="nofollow" target="_blank" title=""><span>Email</span></a></li>
<li class="show-hid"><a href="javascript:" rel="nofollow"></a></li>
</ul>
</div>


<div class="row justify-center pt-30">
                    <div class="col-xl-8 col-lg-9 col-md-11 border-top-light pt-30">
                        <!-- post comments -->
                        <div id="disqus_thread"></div>
                        <script>
                            /**
                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

                            var disqus_config = function() {
                                this.page.url = '{{ Request::url() }}'; // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier =
                                    '{{ $model->slug }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };

                            (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://maariftempursari.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                    })();
                                </script>
                                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                    </div>
                </div>

<div class="related-posts">
<div class="title-wrap">
<h3>Anda mungkin menyukai postingan ini</h3>
</div>
<div id="related-posts">
  <ul>
    
    
    @foreach ($top_article as $k => $a)
            <li>
            <div class="rcimg">
              <div class="rec-image">
                <a href="{{ route('artikel', $a->slug) }}" title="">
                  @php
                     $foto = $a->foto ? asset($a->foto) : 'https://i.ytimg.com/vi/' . check_image_youtube($a->detail) . '/sddefault.jpg';
                        @endphp
                  <img class="lazyautosizes ls-is-cached lazyloaded" data-sizes="auto" alt="{{ $a->nama }}" data-src="{{ $foto }}" src="{{ $foto }}" title=" {{ $a->nama }}" sizes="296px">
                  <div class="img-overlay">
                    <i class="fat fa-plus-large fa-fw"></i>
                  </div>
                </a>
              </div>
            </div>
            <div class="post-info">
              <h4 class="seo-title"><a href="{{ route('artikel', $a->slug) }}" title="{{ $a->nama }}">{{ $a->nama }}</a></h4><div class="post-meta"><span class="post-date">{{ date_format(date_create($a->date), 'd F Y') }}</span>
            </div>
            </div>
          </li>
          @endforeach
          
          
        </ul>
      </div>
              </div>
           </div>


</div>
</section>
</div>
</div>
</article>
</div>
</div></div>
<div id="ads-posts-widget">
<div class="Ad-Slots section" id="top-Ad-Slots" name="Top Ads"><div class="widget HTML" data-version="2" id="HTML76">
<div class="widget-content margin">
</div>
</div></div>
<div class="Ad-Slots section" id="Middle-Ad-Slot" name="Central Advertising"><div class="widget HTML" data-version="2" id="HTML77">
<div class="widget-content margin">
</div>
</div></div>
<div class="Ad-Slots section" id="Ad-Slots-below" name="Bottom Ad"><div class="widget HTML" data-version="2" id="HTML79">
<div class="widget-content margin-top">
</div>
</div></div>
</div>
</main>
</div>
<div class="clr"></div>
</div>
<div class="clr"></div>

            @endsection