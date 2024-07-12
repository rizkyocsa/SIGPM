@extends('master.master')

@section('content')
    <!--Start Banner One-->
    <section class="banner-one">
        <div class="container">
            <div class="banner-one__inner">
                <div class="banner-one__content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="sub-title">
                        <h5>Sistem Informasi</h5>
                    </div>
                    <div class="big-title">
                        <h2>GUGUS PENJAMIN MUTU <br>FAKULTAS TEKNIK</h2>
                    </div>
                </div>
                <img src="{{ asset('assets/img/resource/slider1.jpg')}}" alt="banner">
            </div>
        </div>
    </section>
    <!--End Banner One-->
    
    <!--Start Skills One-->
    <section class="skills-one">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h4></h4>
                </div>
                <h2>Dokumen SPMI</h2>
            </div>
            <div class="row">
                <!--Start Single Skills One-->
                <div class="col-xl-6 col-lg-6 wow animated fadeInLeft" data-wow-delay="0.1s">
                    <div class="skills-one__single">
                        <div class="skills-one__single-inner">
                            <div class="skills-one__single-left-box">
                                <!-- <div class="skills-one__single-icon">
                                    <img src="assets/img/icon/skills/skills1-1.png" alt="#">
                                </div> -->
                                <div class="skills-one__single-title">
                                    <h3>STANDAR SPMI</h3>
                                    <!-- <p>Senior Web Developer</p> -->
                                </div>
                            </div>
                            <div class="skills-one__single-right-box">
                                <div class="skills-one__single-btn-box">
                                    <a href="{{ route('dokumen.get_list_sub', 1) }}"><span class="icon-up-right-arrow"></span></a>
                                </div>
                                <div class="skills-one__single-date-box">
                                    <!-- <p>November 2022</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Skills One-->
                <!--Start Single Skills One-->
                <div class="col-xl-6 col-lg-6 wow animated fadeInRight" data-wow-delay="0.1s">
                    <div class="skills-one__single">
                        <div class="skills-one__single-inner">
                            <div class="skills-one__single-left-box">
                                <!-- <div class="skills-one__single-icon">
                                    <img src="assets/img/icon/skills/skills1-2.png" alt="#">
                                </div> -->
                                <div class="skills-one__single-title">
                                    <h3>FORMULIR SPMI</h3>
                                    <!-- <p>Senior Web Developer</p> -->
                                </div>
                            </div>
                            <div class="skills-one__single-right-box">
                                <div class="skills-one__single-btn-box">
                                    <a href="{{ route('dokumen.get_list_sub', 2) }}"><span class="icon-up-right-arrow"></span></a>
                                </div>
                                <div class="skills-one__single-date-box">
                                    <!-- <p>November 2022</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Skills One-->
                <!--Start Single Skills One-->
                <div class="col-xl-6 col-lg-6 wow animated fadeInLeft" data-wow-delay="0.2s">
                    <div class="skills-one__single">
                        <div class="skills-one__single-inner">
                            <div class="skills-one__single-left-box">
                                <!-- <div class="skills-one__single-icon">
                                    <img src="assets/img/icon/skills/skills1-3.png" alt="#">
                                </div> -->
                                <div class="skills-one__single-title">
                                    <h3>MANUAL SPMI</h3>
                                    <!-- <p>Senior Web Developer</p> -->
                                </div>
                            </div>
                            <div class="skills-one__single-right-box">
                                <div class="skills-one__single-btn-box">
                                    <a href="{{ route('dokumen.get_list_sub', 3) }}"><span class="icon-up-right-arrow"></span></a>
                                </div>
                                <div class="skills-one__single-date-box">
                                    <!-- <p>November 2022</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Skills One-->
                <!--Start Single Skills One-->
                <div class="col-xl-6 col-lg-6 wow animated fadeInRight" data-wow-delay="0.2s">
                    <div class="skills-one__single">
                        <div class="skills-one__single-inner">
                            <div class="skills-one__single-left-box">
                                <!-- <div class="skills-one__single-icon">
                                    <img src="assets/img/icon/skills/skills1-4.png" alt="#">
                                </div> -->
                                <div class="skills-one__single-title">
                                    <h3>KEBIJAKAN SPMI</h3>
                                    <!-- <p>Senior Web Developer</p> -->
                                </div>
                            </div>
                            <div class="skills-one__single-right-box">
                                <div class="skills-one__single-btn-box">
                                    <a href="{{ route('dokumen.get_list_sub', 4) }}"><span class="icon-up-right-arrow"></span></a>
                                </div>
                                <div class="skills-one__single-date-box">
                                    <!-- <p>November 2022</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Skills One-->
            </div>
        </div>
    </section>
    <!--End Skills One-->

    <!--Start Blog One-->
    <section class="blog-one">
        <div class="container">
            <div class="sec-title text-center">
                <!-- <div class="sub-title">
                    <h4>Berita</h4>
                </div> -->
                <h2>Berita</h2>
            </div>
            <div class="row">
                @foreach($berita as $item)
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img-box">
                            <!-- <img src="assets/img/blog/blog-one-1.jpg" alt="#"> -->
                            @if($item->header !== null)
                                <img src="{{ asset('storage/header_berita/'.$item->header) }}" alt="Gambar" style="max-width: 410px; max-height: 330px; object-fit: contain;">
                            @else
                                [Gambar Tidak Ada]
                            @endif
                        </div>
                        <div class="blog-one__single-content">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <!-- <li>
                                        <div class="line"></div>
                                        <p><a href="#">{{ $item->judul }}</a></p>
                                    </li> -->
                                    <li>
                                        <div class="icon">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <p>{{ $item->created_at_formatted}}</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-one__single-content-meta-box-title-box">
                                <h3><a href="{{ route('berita.detail', $item->id) }}">{{ $item->judul }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </section>
    <!--End Blog One-->
@endsection