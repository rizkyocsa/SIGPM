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
                            @if((isset($user->id_role)) && ($user->id_role == 3 || $user->id_role == 4 || $user->id_role == 5))
                                @foreach($dokumen_prodi as $subKategori => $subRecords)
                                <h4 style="margin-bottom: 10px;">{{ $subKategori }}</h4>
                                <ul>
                                    @foreach($subRecords as $record)
                                    <li style="margin-left: 20px;">
                                        @guest
                                            {{ $record->nama_dokumen }} 
                                        @else
                                            @if(isset($user->id_role) && $user->id_role == 2)
                                                <a href="{{ $record->tautan }}" target="_blank">{{ $record->nama_dokumen }}</a>
                                            @else
                                                {{ $record->nama_dokumen }} 
                                            @endif
                                        @endguest
                                        </li>
                                    @endforeach
                                </ul>
                                @endforeach
                            @else
                                @foreach($groupedDokumens as $idProdi => $kategoris)
                                    @if($idProdi == 1)
                                        <h2>Teknik Industri</h2>
                                    @elseif($idProdi == 2)
                                        <h2>Teknik Informatika</h2>
                                    @elseif($idProdi == 3)
                                        <h2>Teknik Sipil</h2>
                                    @endif
                                    <!-- <h2>Prodi ID: {{ $idProdi }}</h2> -->
                                    @foreach($kategoris as $namaKategori => $dokumens)
                                        <h4 style="margin-left: 30px;">{{ $namaKategori }}</h4>
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