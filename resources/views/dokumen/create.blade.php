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
                                        <div class="row mb-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                <select name="kategori" style="width: 100%;" required>
                                                    <option value="">Pilih Kategori</option> 
                                                    @foreach($options as $option)
                                                        <option value="{{ $option->id }}">{{ $option->nama_kategori }}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                <select name="sub_kategori" style="width: 100%;">
                                                    <option value="">Pilih Sub Kategori</option>                                                     
                                                    <option value="Per Tahun">Per Tahun (Kegiatan Mutu)</option>                                                     
                                                    <option value="Per Semester">Per Semester (Kegiatan Mutu)</option>                                                     
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                <select name="kriteria" style="width: 100%;">
                                                    <option value="">Pilih Kriteria</option>                                                     
                                                    <option value="1">Visi, Misi, dan Tujuan</option>                                                     
                                                    <option value="2">Tata Pamong, Tata Kelola, dan Kerjasama</option>                                                     
                                                    <option value="3">Mahasiswa</option>                                                     
                                                    <option value="4">Sumber Daya Manusia</option>                                                     
                                                    <option value="5">Keuangan, Sarana, dan Prasarana</option>                                                     
                                                    <option value="6">Pendidikan</option>                                                     
                                                    <option value="7">Penelitian</option>                                                     
                                                    <option value="8">Pengabdian Kepada Masyarakat</option>                                                     
                                                    <option value="9">Luaran dan Capaian Tridarma</option>                                                     
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                <select name="elemen" style="width: 100%;">
                                                    <option value="">Pilih Elemen</option>                                                     
                                                    <option value="1">Penetapan</option>                                                     
                                                    <option value="2">Pelaksanaan</option>                                                     
                                                    <option value="3">Evaluasi</option>                                                     
                                                    <option value="4">Pengedalian</option>                                                     
                                                    <option value="5">Peningkatan</option>                                                     
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
                                        <div class="row mb-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                <select name="is_private" style="width: 100%;">
                                                    <option value="">Pilih Kategori Dokumen</option>                                                     
                                                    <option value="0">Public</option>                                                     
                                                    <option value="1">Private</option>                                                     
                                                </select>
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