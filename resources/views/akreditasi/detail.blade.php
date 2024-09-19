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
                                    @if((isset($user->id_role)) && ($user->id_role == 3 || $user->id_role == 4 || $user->id_role == 5))
                                        @foreach($akreditasi_prodi as $subKategori => $subRecords)
                                            <h4 style="margin-bottom: 10px;">
                                                <!-- {{ $subKategori }} -->
                                                @if($subKategori == 1)
                                                    Penetepatan
                                                @elseif($subKategori == 2)
                                                    Pelaksanaan
                                                @elseif($subKategori == 3)
                                                    Evaluasi
                                                @elseif($subKategori == 4)
                                                    Pengendalian
                                                @elseif($subKategori == 5)
                                                    Peningkatan
                                                @endif
                                            </h4>
                                            <ul>
                                                @foreach($subRecords as $record)
                                                <li style="margin-left: 20px;">
                                                    @guest
                                                        <a href="{{ $record->tautan }}" target="_blank">{{ $record->nama_dokumen }}</a>
                                                    @else
                                                        <a href="{{ $record->tautan }}" target="_blank">{{ $record->nama_dokumen }}</a>
                                                    @endguest

                                                    </li>
                                                @endforeach
                                            </ul>
                                            <br>
                                        @endforeach
                                    @else
                                        @foreach($groupedAkreditasis as $idProdi => $kategoris)
                                            @if($idProdi == 1)
                                                <h2>Teknik Industri</h2>
                                            @elseif($idProdi == 2)
                                                <h2>Teknik Informatika</h2>
                                            @elseif($idProdi == 3)
                                                <h2>Teknik Sipil</h2>
                                            @endif
                                            @foreach($kategoris as $namaKategori => $dokumens)
                                                <h4 style="margin-left: 30px;">
                                                    @if($namaKategori == 1)
                                                        Penetepatan
                                                    @elseif($namaKategori == 2)
                                                        Pelaksanaan
                                                    @elseif($namaKategori == 3)
                                                        Evaluasi
                                                    @elseif($namaKategori == 4)
                                                        Pengendalian
                                                    @elseif($namaKategori == 5)
                                                        Peningkatan
                                                    @endif
                                                </h4>
                                                <ul>
                                                    @foreach($dokumens as $dokumen)
                                                        @if(isset($user->id_role) && $user->id_role == 2)
                                                            <li>
                                                                <a href="{{ $dokumen->tautan }}" target="_blank" style="margin-left: 50px;">{{ $dokumen->nama_dokumen }}</a>
                                                            </li>
                                                        @else
                                                            <li style="margin-left: 50px;"> {{ $dokumen->nama_dokumen }}</li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            @endforeach
                                        @endforeach
                                    @endif
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- </div> -->
@endsection