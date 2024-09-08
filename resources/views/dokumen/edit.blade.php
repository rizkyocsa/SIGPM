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
                                    <form action="{{ route('dokumen.update', $dokumen->id )}}" method="POST"
                                        class="contact-page__form contact-form-validated">
                                        @csrf
                                        <!-- <div class="row mb-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                <select name="id_prodi" style="width: 100%;" required>
                                                    <option value="">Pilih Prodi</option> 
                                                    <option value="1" {{ $dokumen->id_prodi == 1 ? 'selected' : ''}} >Teknik Industri</option>
                                                    <option value="2" {{ $dokumen->id_prodi == 2 ? 'selected' : ''}} >Teknik Informatika</option>
                                                    <option value="3" {{ $dokumen->id_prodi == 3 ? 'selected' : ''}} >Teknik Sipil</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="row mb-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                <select name="kategori" style="width: 100%;" required>
                                                    <option value="">Pilih Kategori</option> 
                                                    @foreach($options as $option)
                                                        <option value="{{ $option->id }}" {{ $dokumen->kategori == $option->id  ? 'selected' : ''}} >{{ $option->nama_kategori }}</option>
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
                                                    <option value="Tahun" {{ $dokumen->kriteria == 'Tahun' ? 'selected' : ''}} >Per Tahun (Kegiatan Mutu)</option>                                                     
                                                    <option value="Semester" {{ $dokumen->kriteria == 'Semester' ? 'selected' : ''}} >Per Semester (Kegiatan Mutu)</option>                                                     
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                <select name="kriteria" style="width: 100%;">
                                                    <option value="">Pilih Kriteria</option>                                                     
                                                    <option value="1" {{ $dokumen->kriteria == 1 ? 'selected' : ''}} >Visi, Misi, dan Tujuan</option>                                                     
                                                    <option value="2" {{ $dokumen->kriteria == 2 ? 'selected' : ''}} >Tata Pamong, Tata Kelola, dan Kerjasama</option>                                                     
                                                    <option value="3" {{ $dokumen->kriteria == 3 ? 'selected' : ''}} >Mahasiswa</option>                                                     
                                                    <option value="4" {{ $dokumen->kriteria == 4 ? 'selected' : ''}} >Sumber Daya Manusia</option>                                                     
                                                    <option value="5" {{ $dokumen->kriteria == 5 ? 'selected' : ''}} >Keuangan, Sarana, dan Prasarana</option>                                                     
                                                    <option value="6" {{ $dokumen->kriteria == 6 ? 'selected' : ''}} >Pendidikan</option>                                                     
                                                    <option value="7" {{ $dokumen->kriteria == 7 ? 'selected' : ''}} >Penelitian</option>                                                     
                                                    <option value="8" {{ $dokumen->kriteria == 8 ? 'selected' : ''}} >Pengabdian Kepada Masyarakat</option>                                                     
                                                    <option value="9" {{ $dokumen->kriteria == 9 ? 'selected' : ''}} >Luaran dan Capaian Tridarma</option>                                                     
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                <select name="elemen" style="width: 100%;">
                                                    <option value="">Pilih Elemen</option>                                                     
                                                    <option value="1" {{ $dokumen->elemen == 1 ? 'selected' : ''}} >Penetapan</option>                                                     
                                                    <option value="2" {{ $dokumen->elemen == 2 ? 'selected' : ''}} >Pelaksanaan</option>                                                     
                                                    <option value="3" {{ $dokumen->elemen == 3 ? 'selected' : ''}} >Evaluasi</option>                                                     
                                                    <option value="4" {{ $dokumen->elemen == 4 ? 'selected' : ''}} >Pengedalian</option>                                                     
                                                    <option value="5" {{ $dokumen->elemen == 5 ? 'selected' : ''}} >Peningkatan</option>                                                     
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                    <input type="text" placeholder="Nama Dokumen" name="nama_dokumen" value="{{ $dokumen->nama_dokumen }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                    <input type="text" placeholder="Tautan Dokumen" name="tautan" value="{{ $dokumen->tautan }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                <select name="is_private" style="width: 100%;">
                                                    <option value="">Pilih Kategori Dokumen</option>                                                     
                                                    <option value="0" {{ $dokumen->is_private == 0 ? 'selected' : ''}} >Public</option>                                                     
                                                    <option value="1" {{ $dokumen->is_private == 1 ? 'selected' : ''}} >Private</option>                                                     
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