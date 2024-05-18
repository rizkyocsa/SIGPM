    @extends('master.master')

    @section('css')
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
    @endsection

    @section('content')
    <section class="get-in-touch-one" style="margin-top: -200px;">
        <div class="contact-page__bottom">                    
            <div class="contact-page__bottom-form">
                <div class="container">
                    <div class="contact-page__bottom-form-inner">
                        <div class="title-box">
                            <h2>Form Tambah Kriteria  <p>({{ $subTitle }})</p> </h2>
                        </div>
                        <div class="contact-page__bottom-form-inner-box">
                            <form action="{{ route('akreditasi.store')}}" method="POST" class="contact-page__form contact-form-validated">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <select name="elemen" style="width: 100%;" id="elemenSelect" required>
                                                <option value="">Pilih Elemen</option> 
                                                @foreach($options as $option)
                                                    <option value="{{ $option->elemen }}">{{ $option->elemen }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="No Urut" name="no_urut_display" id="noUrut" disabled>
                                        </div>
                                    </div>
                                </div>
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
                                            <input type="text" placeholder="Tautan Dokumen" name="tautan_dokumen" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="hidden" name="kategori" value="{{ $kategori }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="hidden" placeholder="No Urut" name="no_urut" id="noUrutValue">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="btn btn-block btn-danger" type="button" onclick="window.history.back();">
                                            <span class="txt">Batal</span>
                                        </button>
                                        <button class="btn btn-block btn-primary" type="submit">
                                            <span class="txt">Simpan</span>
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
    @endsection
