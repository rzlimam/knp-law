@extends('layouts.main')

@section('container')
<!-- Page Banner -->
<div class="page-banner service-banner container-fluid no-padding">
    <!-- Container -->
    <div class="container">
        <div class="col-md-5 no-padding">
            <h3>Jasa Kami</h3>
        </div>
        <div class="col-md-3 breadcrumb-shape pull-right no-padding">			
            <ol class="breadcrumb">
                <li><a href="#">home</a></li>				
                <li class="active">Services</li>
            </ol>
        </div>
    </div><!-- Container /- -->
</div><!-- Page Banner /- -->	

<!-- Service Section -->
<div id="service-section" class="service-section service-center container-fluid no-padding">
    <div class="section-padding"></div>
    <div class="row">
        <!-- Container -->
        <div class="container">
            <div class="section-header">
                <h5>We give the best</h5>
                <h3>We offer many services regarding your legal needs</h3>
            </div>
        </div>
        <div class="container">
            <div class="col-md-4 col-sm-4 service-block">
                <img src="images/icon/service-ic-1.png" alt="service-icon"/>
                <h3>Likuidator</h3>
                <p style="margin-top: 50px">dengan mendapat sertifikasi Certified Liquidator Indonesia / CLI, dengan Nomor Anggota : CLI-00290, yang di keluarkan oleh PPLI ( Perkumpulan Profesi Likuidator Indonesia).</p>
            </div>
            <div class="col-md-4 col-sm-4 service-block">
                <img src="images/icon/service-ic-2.png" alt="service-icon"/>
                <h3>Konsultan Hukum Perusahaan dan Hubungan Internasional</h3>
                <p>Certified Industrial Relation Practitie / CIRP, dengan sertifikasi Nomor : 1233/PPT/VI/2021.</p>
            </div>
            <div class="col-md-4 col-sm-4 service-block">
                <img src="images/icon/service-ic-3.png" alt="service-icon"/>
                <h3>Konsultan Hukum Perpajakan</h3>
                <p style="margin-top: 30px">Certified Tax Legal Consultant / CTLC, dengan sertfikasi Nomor : 076/SK.PKHPKI/X/2020.</p>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div>
<!-- Service Section /- -->

<!-- Guidance Section -->
<div id="guidance-section" class="container-fluid no-padding guidance-section">
    <div class="section-padding"></div>
    <!-- Container -->
    <div class="container">
        <div class="section-header">
            <h3>Jasa Kami</h3>
        </div>			
        <div class="guidance-tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li><a>Hukum Pidana</a></li>
                <li><a>Hukum Perdata</a></li>
                <li><a>Hukum Investasi dan Penanaman Modal</a></li>
                <li><a>Hukum Perusahaan</a></li>
                <li><a>Hukum Acara Perdata</a></li>
                <li><a>Hukum Administrasi Negara</a></li>
                <li><a>Hukum Konstitusi</a></li>
            </ul>
            <ul class="nav nav-tabs">
                <li><a>Hukum Pers</a></li>
                <li><a>Hukum Media dan Informasi</a></li>
                <li><a>Hukum Hak Cipta, Paten, dan Rahasia Dagang</a></li>
                <li><a>Hukum Teknologi dan Telekomunikasi</a></li>
                <li><a>Hukum Pertahanan</a></li>
                <li><a>Hukum Pertambangan dan Sumber Daya Alam</a></li>
                <li><a>Hukum Minyak dan Gas</a></li>
            </ul>
            <ul class="nav nav-tabs">
                <li><a>Hukum Lingkungan</a></li>
                <li><a style="font-size: 12px">Hukum Kepailitan dan Penundaan Kewajiban Pembayaran Hutang</a></li>
                <li><a>Hukum Ketenagakerjaan</a></li>
                <li><a>Hukum Kepegawaian dan Aparatur Sipil Negara</a></li>
                <li><a>Hukum Keluarga, Perceraian, dan Waris</a></li>
                <li><a>Hukum Imigrasi dan Bea Cukai</a></li>
                <li><a>Hukum Perbankan dan Keuangan</a></li>
            </ul>
            <ul class="nav nav-tabs">
                <li><a>Hukum Asuransi</a></li>
                <li><a>Hukum Pengangkutan</a></li>
                <li><a>Hukum Konstruksi</a></li>
                <li><a>Hukum Pasar Modal</a></li>
                <li><a>Hukum Pajak</a></li>
                <li><a>Likuidasi</a></li>
                <li><a>Arbitrasi</a></li>
            </ul>
            <ul class="nav nav-tabs">
                <li><a>Penyelesaian Sengketa Alternatif </a></li>
                <li><a>Hubungan Masyarakat dan antar Lembaga</a></li>
                <li><a>Transaksi Properti</a></li>
                <li><a>Pengurusan Izin Lokasi</a></li>
                <li><a>Merger, dan Akuisisi</a></li>
                <li><a>Perjanjian Lisensi dan Waralaba</a></li>
                <li><a>Perjanjian Teknologi</a></li>
            </ul>
            <ul class="nav nav-tabs">
                <li><a>Pengurusan Hak Kekayaan Intelektual</a></li>
                <li><a>Uji Tuntas / <i>Due Dilligence</i></a></li>
                <li><a>Pengurusan sertifikasi pangan (MUI, BPOM, dll)</a></li>
                <li><a>Pengurusan Izin tetap terbatas dan Permanen</a></li>
                <li><a>Pengurusan PPH, PPN, dll</a></li>
            </ul>
        </div>
    </div>
    <div class="section-padding"></div>
</div>
<!-- Guidance Section /- -->
    
@endsection