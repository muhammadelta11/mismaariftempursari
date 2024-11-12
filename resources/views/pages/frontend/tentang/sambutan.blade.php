@extends('layouts.frontend.master2')

@section('content')

<div class='clr'></div>
            <div class='postparallax'>
                <div class='bannerpost section' id='bannerpost' name='Cover Post Image'>
                    <div class='widget Image' data-version='2' id='Image13'>
                        <div class='widget-content'>
                            <div class='rcimg'>
                                <div class='rec-image'>
                                    <img alt='' class='lazyload' data-sizes='auto' data-src='https://blogger.googleusercontent.com/img/a/AVvXsEjsUcNDM2lflqQs6P8rqjqIBO9XlkiS4Izrig6sDjCyPDqzS-GEIV4-4sDI3vcypSuMdE2KMSMiLCItUfhED3iW99q6BXDZhTL2H6bSvQySOsG-NyHhFchGpezU1BPY1x3-V6QDszPtDxC9uxHko7oEda1hxfSu-EQarM3CSuWa5NaLuf5-4TqDn3OR=s950' height='400' id='Image13_img' src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' width='950'/>
                                </div>
                            </div>
                            <div class='sch-box'>
                                <div class='sch-content'>
                                    <h3></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='container'>
                <div class='contpost'>
                    <!-- Main Wrapper -->
                    <main class='main-wrapper' id='posts'>
                        <div class='main section' id='main' name='Main Posts'>
                            <div class='widget Blog' data-version='2' id='Blog1'>
                                <div class='blog-posts hentry hfeed '>
                                    <article class='blog-post '>
                                     
                                        <h1 class='seo-title'>Sambutan Kepala Madrasah Ibtida'iyah Ma'arif Tempursari</h1>
                                        <div class='post-meta'></div>
                                        <div class='post-body'>
                                            <div style="text-align: left;">
                                                <h3 style="text-align: left;">&nbsp;Assalamu &#8216;Alaikum Warahmatullahi Wabarakatuh</h3>
                                                &nbsp;<br/>
                                                <div class="separator" style="clear: both; text-align: center;">
                                                    <a href="{{ asset('assets2/home/ks.png') }}" imageanchor="1" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;">
                                                        <img border="0" data-original-height="375" data-original-width="375" height="200" src="{{ asset('assets2/home/ks.png') }}" width="200"/>
                                                    </a>
                                                </div>
                                                {!! settings()->get('sejarah.html') !!}
                                       
                                                <h4 style="text-align: left;">Wassalamu &#8216;Alaikum Warahmatullahi Wabarakatuh</h4>
                                                Kepala Madrasah<br/>
                                                ttd<br/>
                                                <h3 style="text-align: left;">KH. RUSWANTO, M.Pd.I</h3>
                                                <div>
                                                    <br/>
                                                </div>
                                            </div>
                                            <div id="gtx-trans" style="left: 411px; position: absolute; top: 344.719px;">
                                                <div class="gtx-trans-icon"></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <div class='clr'></div>
            </div>
            <div class='clr'></div>
    

            @endsection