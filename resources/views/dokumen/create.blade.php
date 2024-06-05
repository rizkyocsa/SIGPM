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
                                    <h2>Form Tambah Dokumen</h2>
                                </div>
                                <div class="contact-page__bottom-form-inner-box">
                                    <form action="{{ route('dokumen.store')}}" method="POST"
                                        class="contact-page__form contact-form-validated">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                <select name="kategori" style="width: 100%;" required>
                                                    <option value="">Pilih Kategori</option> 
                                                    @foreach($options as $option)
                                                        <option value="{{ $option->kategori }} - {{ $option->sub_kategori }}">{{ $option->kategori }} - {{ $option->sub_kategori }}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                    <input type="text" placeholder="Nama Dokumen" name="nama_dokumen" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                    <input type="text" placeholder="Tautan Dokumen" name="tautan" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <button class="btn btn-block btn-danger" type="button" onclick="window.history.back();">
                                                    <span class="txt">Batal</span>
                                                </button>
                                                <button class="btn btn-block btn-primary" type="submit">
                                                    <span class="txt">
                                                        Simpan
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div style="display:block; height: 200px;"></div>
        <!-- </div> -->
@endsection