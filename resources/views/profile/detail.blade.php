@extends('master.master')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
@endsection

@section('content')
        <!-- <div class="container"> -->
            <section class="get-in-touch-one" style="margin-top: -200px;">
                <div class="contact-page__bottom">                    
                    <div class="contact-page__bottom-form">
                        <div class="container">
                            <div class="contact-page__bottom-form-inner">
                                <div class="title-box">
                                    <h2>{{ $profile->judul }}</h2>
                                </div>
                                <div class="contact-page__bottom-form-inner-box">
                                    <p>
                                        {{ $profile->content }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- </div> -->
@endsection