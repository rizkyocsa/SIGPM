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
                                    <h1 class="text-center"> {{ $title }} </h1>
                                    <h3 class="text-center">( {{ $subTitle }} )</h3>
                                @foreach($akreditasi as $subKategori => $subRecords)
                                    <h4 style="margin-bottom: 10px;">{{ $subKategori }}</h4>
                                    <ul>
                                        @foreach($subRecords as $record)
                                        <li style="margin-left: 20px;">
                                            @guest
                                                <a href="{{ $record->tautan_dokumen }}" target="_blank">{{ $record->nama_dokumen }}</a>
                                            @else
                                                <a href="{{ $record->tautan_dokumen }}" target="_blank">{{ $record->nama_dokumen }}</a>
                                            @endguest

                                            </li>
                                        @endforeach
                                    </ul>
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- </div> -->
@endsection