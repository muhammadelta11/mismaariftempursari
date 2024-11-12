<div class='clr'></div>
            <!-- Footer Wrapper -->
            <footer id='footer'>
                <div class='container'>
                    <div class='footer-wrapper'>
                        <div class='footer section' id='footer1' name='Footer (1)'>
                            <div class='widget HTML' data-version='2' id='HTML12'>
                                <div class='widget-title'>
                                <div class="footer-header__logo" >
                        <img class="lazy" alt="logo" style="width: 230px" src="{{ asset(settings()->get(set_front('app.foto_light_landscape_mode'))) }}">
                    </div>
                                    <h3 class='title'>MIS MA'ARIF TEMPURSARI</h3>
                                </div>
                                <div class='widget-content'>
                                  
</p>
                                    <p>NPSN : 60717885</p>
                                </div>
                            </div>
                        </div>
                        <div class='footer section' id='footer2' name='Footer (2)'>
                            <div class='widget HTML' data-version='2' id='HTML7'>
                                <div class='widget-title'>
                                    <h3 class='title'>Alamat Sekolah</h3>
                                </div>
                                <div class='widget-content'>Jl. Raya Mantingan Sine Km 6,5 Tempursari, Kab. Ngawi.</div>
                            </div>
                        </div>
                        <div class='footer section' id='footer3' name='Footer (3)'>
                            <div class='widget HTML' data-version='2' id='HTML13'>
                                <div class='widget-title'>
                                    <h3 class='title'>Kontak</h3>
                                </div>
                                <div class='widget-content'>
                                    <p>Tlp. 086647121046(admin web)</p>
                                    <p>email : muhammadsmas998@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class='footer section' id='footer4' name='Footer (4)'>
                            <div class='widget LinkList' data-version='2' id='LinkList75'>
                                <div class='widget-title'>
                                    <h3 class='title'>Social Media</h3>
                                </div>
                                <div class='widget-content'>
                                    <ul class='share-links social social-color'>
                                    @foreach ($getSosmed_val as $sosmed)
                                        <li class="{{ $sosmed['nama'] }}" title="{{ $sosmed['nama'] }}">
                                            <a href="{{ $sosmed['url'] }}" rel='noopener nofollow' target='_blank' title="{{ $sosmed['nama'] }}">
                                                <span class="{{ $sosmed['icon'] }}"></span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id='credit'>
                    <div class='container'>
                        Copyright &#169;<a href='https://mauq.madrasahku.sch.id/' title='MA Ulumul Qur&#39;an 2023'>MIS Ma'arif Tempursari 2024</a>
                        |  
                        <span class='creator'>
                            <a href='http://www.madrasahebat.com' title='Free GPL'>Madrasah Hebat Bermartabat</a>
                        </span>
                    </div>
                </div>
                <div class='backtop'>
                    <i class='fal fa-angle-up'></i>
                    Back to Top
                </div>
            </footer>
        </div>
        <div class='clr'></div>