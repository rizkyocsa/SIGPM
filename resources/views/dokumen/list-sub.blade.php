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
                                    @foreach($dokumen_prodi as $dokumen)
                                        <li style="margin-left: 20px;">
                                            @guest
                                                {{ $dokumen->nama_dokumen }} 
                                            @else
                                                @if(isset($user->id_role) && $user->id_role == 2)
                                                    <a href="{{ $dokumen->tautan }}" target="_blank">{{ $dokumen->nama_dokumen }}</a>
                                                @else
                                                    {{ $dokumen->nama_dokumen }} 
                                                @endif
                                            @endguest
                                            </li>
                                    @endforeach
                                @else
                                    <ul>
                                        @foreach($groupedDokumens as $idProdi => $datas)
                                            @if($idProdi == 1)
                                                <h3>Teknik Industri</h3>
                                            @elseif($idProdi == 2)
                                                <h3>Teknik Informatika</h3>
                                            @elseif($idProdi == 3)
                                                <h3>Teknik Sipil</h3>
                                            @endif
                                                @foreach($datas as $data)
                                                    @if(isset($user->id_role) && $user->id_role == 2)
                                                        <li>
                                                            <a href="{{ $data->tautan }}" target="_blank" style="margin-left: 50px;">{{ $data->nama_dokumen }}</a>
                                                        </li>
                                                    @else
                                                        <li style="margin-left: 50px;"> {{ $data->nama_dokumen }}</li>
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </ul>
                                    <br>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- </div> -->
@endsection