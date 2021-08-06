@extends('layouts.main')


@section('container')
<!-- Banner Section -->
<div id="banner-slider" class="banner-section">
    <div id="banner-carousel" class="carousel slide banner-slider" data-ride="carousel">	
        <ol class="carousel-indicators">
            <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#banner-carousel" data-slide-to="1"></li>
            <li data-target="#banner-carousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div id="dark-1" class="dark-shape">
                    <svg width="100%" height="100%">
                        <clipPath id="dark_shape-1" clipPathUnits="objectBoundingBox">
                            <polygon points="0.48 0, 1 1, 0 1, 0 0"></polygon>
                        </clipPath>
                    </svg>
                    <div id="triangle-1" class="triangle-shape">
                        <svg width="100%" height="100%">
                            <clipPath id="triangle_shape-1" clipPathUnits="objectBoundingBox">
                                <polygon points="1 0, 1 1, 0 1, 0.45 0"></polygon>
                            </clipPath>
                        </svg>
                    </div>
                </div>
                <img src="images/slider1.jpg" alt="banner-img">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="col-md-5 col-sm-5 banner-content">
                            <h3>Redefining Your investment law</h3>
                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question.</p>
                            <a href="#" title="Read More">Read More<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div id="dark-2" class="dark-shape">
                    <svg width="100%" height="100%">
                        <clipPath id="dark_shape-2" clipPathUnits="objectBoundingBox">
                            <polygon points="0.48 0, 1 1, 0 1, 0 0"></polygon>
                        </clipPath>
                    </svg>
                    <div id="triangle-2" class="triangle-shape">
                        <svg width="100%" height="100%">
                            <clipPath id="triangle_shape-2" clipPathUnits="objectBoundingBox">
                                <polygon points="1 0, 1 1, 0 1, 0.45 0"></polygon>
                            </clipPath>
                        </svg>
                    </div>
                </div>
                <img src="images/slider1.jpg" alt="banner-img">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="col-md-5 col-sm-5 banner-content">
                            <h3>Redefining Your investment law</h3>
                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question.</p>
                            <a href="#" title="Read More">Read More<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div id="dark-3" class="dark-shape">
                    <svg width="100%" height="100%">
                        <clipPath id="dark_shape-3" clipPathUnits="objectBoundingBox">
                            <polygon points="0.48 0, 1 1, 0 1, 0 0"></polygon>
                        </clipPath>
                    </svg>
                    <div  id="triangle-3" class="triangle-shape">
                        <svg width="100%" height="100%">
                            <clipPath id="triangle_shape-3" clipPathUnits="objectBoundingBox">
                                <polygon points="1 0, 1 1, 0 1, 0.45 0"></polygon>
                            </clipPath>
                        </svg>
                    </div>
                </div>
                <img src="images/slider1.jpg" alt="banner-img">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="col-md-5 col-sm-5 banner-content">
                            <h3>Redefining Your investment law</h3>
                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question.</p>
                            <a href="#" title="Read More">Read More<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Banner Section /- -->

<!-- About Section -->
<div id="about-section" class="about-section container-fluid no-padding">
    <div class="section-padding"></div>
    <!-- Container -->
    <div class="container">
        <div class="row">			
            <div class="section-header">
                <h5>Kisworo & Partners Law Firm Group</h5>
                <h3>Advokat  - Likuidator   -  Konsultan Hukum Pajak
                    Konsultan Hukum Perusahaan & Hubungan Industrial
                </h3>
            </div>
            <div class="col-md-6 col-sm-6 about-testimonial-section">	
                
                    <img  class="text-center" src="images/kisworo.jpg" alt="service" style="width:300px"/>
                
                {{-- <div id="about-testimonial-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="testimonial-right">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testimonial-left">
                                <div class="testimonial-content">
                                    <p>Master Firm has provided excellent advice, communication and follow through. I would highly recommend the Master Law Firm.</p>
                                    <span>Katy Esterline, Former Principal</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-right">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testimonial-left">
                                <div class="testimonial-content">
                                    <p>Master Firm has provided excellent advice, communication and follow through. I would highly recommend the Master Law Firm.</p>
                                    <span>Katy Esterline, Former Principal</span>
                                </div>
                            </div>
                        </div>
                    </div>				
                </div> --}}
            </div>
            <div class="col-md-6 col-sm-6 about-right">
                <p>Dengan Surat Keputusan Ketua Pengadilan Tinggi  Jakarta, Nomor : PTJ.PANKUM.975/PH/2002 sebagai izin Pengacara Praktek kemudian dengan lahirnya Undang undang Nomor 18 tahun 2003 tentang Advokat dan terbentuknya Perhimpunan Advokat Indonesia (PERADI)  dengan No. 02.10554. Kisworo, SH. berkiprah dalam profesi   Advokat di mulai dengan aktif di Pos Bantuan Hukum Pengadilan Negeri Bekasi, mendirikan LBH Patriot Bangsa, sebagai partner dan tim di beberapa kantor Advokat Senior kemudian pada tahun 2007 mendirikan Kisworo & Partners beralamat di Ruko Sentra Niaga Kalimalang B4/36, Jl. Jend. A. Yani, Kota Bekasi yang baru di aktakan sebagai badan Hukum Firma. </p>
                <p>Keberadaan Kantor Advokat Kisworo & Partners dikuatkan dalam Akta Persekuan Perdata Nomor : 31 Tanggal 27 Oktober 2011 yang dibuat dihadapan Aristiawan Dw Putranto, SH. MKn Notaris di Kota Bekasi, sekarang beralamat di Jl. Inspeksi Kalimalang No. 36B, Setiadarma, Tambun Selatan, Kabupaten Bekasi, Jawa Barat – 17510</p>
            </div>
        </div>
    </div><!-- Container /- -->
</div><!-- About Section /- -->

<!-- Service Section -->
<div id="service-section" class="service-section container-fluid no-padding">
    <img src="images/icon/service-bg.png" alt="service-bg"/>	
    <div class="section-padding"></div>
    <div class="row">
        <!-- Container -->
        <div class="container">
            <div class="service-heading">
                <div class="col-md-8">
                    <div class="section-header">
                    <h5>Kisworo & Partners telah terakreditasi melalui Pendidikan dan Pelatihan serta ketrampilan khusus dengan akreditasi BNSP (Badan Nasional Sertifikasi Profesi)</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <img  class="pull-right" src="images/icon/service-ic.png" alt="service"/>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-4 col-sm-4 col-xs-6 service-block">
                <img src="images/icon/service-ic-1.png" alt="service-icon"/>
                <h3>Likuidator</h3>
                <p>dengan mendapat sertifikasi Certified Liquidator Indonesia / CLI, dengan Nomor Anggota : CLI-00290, yang di keluarkan oleh PPLI ( Perkumpulan Profesi Likuidator Indonesia).</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 service-block">
                <img src="images/icon/service-ic-2.png" alt="service-icon"/>
                <h3>Konsultan Hukum Perusahaan dan Hubungan Internasional</h3>
                <p>Certified Industrial Relation Practitie / CIRP, dengan sertifikasi Nomor : 1233/PPT/VI/2021.</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 service-block">
                <img src="images/icon/service-ic-3.png" alt="service-icon"/>
                <h3>Konsultan Hukum Perpajakan</h3>
                <p>Certified Tax Legal Consultant / CTLC, dengan sertfikasi Nomor : 076/SK.PKHPKI/X/2020.</p>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div>
<!-- Service Section /- -->

<!-- Team Section -->
<div id="team-section" class="container-fluid no-padding team-section">
    <div class="section-padding"></div>
    <!-- Container -->
    <div class="container">
        <div class="section-header">
            <h5>Personil and Partners</h5>
            <h3>Briefly Speaking, We’re the Best</h3>
        </div>
        <!-- Team Carousel -->
        <div class="team-carousel">
            <div class="col-md-12 team-type">
                <img src="images/team1.jpg" alt="team-1"/>
                <div class="member-content">
                    <div class="member-name">
                        <h6 style="font-size: 14px">AZMI MAHATIR BASWEDAN, SH.</h6>
                        <p></p>
                    </div>
                    <p><br></p>
                </div>
            </div>
            <div class="col-md-12 team-type">
                <img src="images/team2.jpg" alt="team-1"/>
                <div class="member-content">
                    <div class="member-name">
                        <h6 style="font-size: 14px">ADHI BANGKIT SAPUTRA, SH.</h6>
                        <p></p>
                    </div>
                    <p><br></p>
                </div>
            </div>
            <div class="col-md-12 team-type">
                <img src="images/team3.jpg" alt="team-1"/>
                <div class="member-content">
                    <div class="member-name">
                        <h6 style="font-size: 14px">HUTOMO NUR UBAY, SH.</h6>
                        <p></p>
                    </div>
                    <p><br></p>
                </div>
            </div>
        </div><!-- Team Carousel /- -->
    </div><!-- Container /- -->
    <div class="section-padding"></div>
</div>
<!-- Team Section -->

<!-- Call Out -->
<div id="call-out" class="container-fluid no-padding call-out">
    <!-- Container -->
    <div class="container">
        <!-- Call Out Content -->
        <div class="call-out-content">
            <div class="col-md-10 col-sm-9 col-xs-12 no-padding">
                <h3>Need some legal assistance? <span>Let’s have a chat!</span></h3>
                <p>Blanditiis praesentium voluptatum deleniti atque  soluta nobis est eligendi optio cumque nihil.</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-12 contsult-now">
                <a href="#" title="Consult now!">consult now!</a>
            </div>
        </div><!-- Call Out Content /- -->
    </div><!-- Container /- -->
</div>
<!-- Call Out /- -->
@endsection