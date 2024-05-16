@extends('master.master')

@section('content')
        <section class="blog-page">
            <div class="container">
                <div class="row">
                    @foreach($beritaPaginated as $item )
                    <div class="col-xl-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-page__content">
                            <div class="blog-page__single">
                                <div class="blog-page__single-img">
                                @if($item->header !== null)
                                    <img src="{{ asset('storage/header_berita/'.$item->header) }}" alt="Gambar" style="max-width: 900px; max-height: 450px; object-fit: contain;">
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
                                                <p>{{ $item->created_at_formatted}}</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="title-box">
                                        <h3>
                                                {{ $item->judul }}
                                        </h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('berita.detail', $item->id)}}">
                                            Read More
                                            <i class="icon-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $beritaPaginated->links('pagination::simple-bootstrap-4') }}
            </div>
        </section>
@endsection