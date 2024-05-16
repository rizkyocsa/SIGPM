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
                                @foreach($dokumen as $subKategori => $subRecords)
                                    <h4 style="margin-bottom: 10px;">{{ $subKategori }}</h4>
                                    <ul>
                                        @foreach($subRecords as $record)
                                        <li style="margin-left: 20px;">
                                            @guest
                                                {{ $record->nama_dokumen }} 
                                            @else

                                                @if($user->id_role == 2)
                                                    <a href="{{ $record->tautan }}" target="_blank">{{ $record->nama_dokumen }}</a>
                                                @else
                                                    {{ $record->nama_dokumen }} 
                                                @endif
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