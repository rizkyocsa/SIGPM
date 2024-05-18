@extends('master.master')

@section('content')
        <section class="blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-page__content">
                            <div class="blog-page__single">
                                <div class="blog-page__single-img">
                                @if($berita->header !== null)
                                    <img src="{{ asset('storage/header_berita/'.$berita->header) }}" alt="Gambar" style="max-width: 900px; max-height: 450px; object-fit: contain;">
                                @else
                                    [Gambar Tidak Ada]
                                @endif
                                </div>
                                <div class="blog-page__single-content">
                                    <div class="meta-box">
                                        <ul class="meta-info">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-calendar"></span>
                                                </div>
                                                <p>{{ $berita->created_at_formatted}}</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="title-box">
                                        <h3>
                                                {{ $berita->judul }}
                                        </h3>
                                    </div>
                                    <div class="">
                                        {!! $berita->content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection