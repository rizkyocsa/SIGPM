@extends('master.master')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
@endsection

@section('content')
    <!--Start Skills One-->
    <!-- <section class="skills-one"> -->
        <section class="get-in-touch-one" style="margin-top: -100px;">
            <div class="container" >
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h4></h4>
                    </div>
                    <h2>Akreditasi</h2>
                    <h3>({{ $subTitle }})</h3>
                </div>
                <div class="row mb-3">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('akreditasi.create', $kategori) }}">
                            <button class="btn btn-primary">
                                Tambah
                            </button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-bordered justify-content-center">
                        <thead class="text-center">
                            <td style="width: 50px;">No</td>
                            <td style="width: 100px;">No Urut</td>
                            <td style="width: 100px;">Elemen</td>
                            <td style="width: 100px;">Nama Dokumen</td>
                            <td>Tautan Dokumen</td>
                            <td style="width: 150px;">Action</td>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach($akreditasi as $item)
                                <tr>
                                    <td style="width: 50px;">{{ $no++}}</td>
                                    <td style="width: 100px;">{{ $item->no_urut }}</td>
                                    <td style="width: 100px;">{{ $item->elemen }}</td>
                                    <td style="width: 100px;">{{ $item->nama_dokumen }}</td>
                                    <td style="width: 100px;">{{ $item->tautan_dokumen }}</td>                                    
                                    <td style="width: 150px;">
                                        <a href="{{ route('akreditasi.edit', $item->id)}}">
                                            <button class="btn btn-warning">Edit</button>
                                        </a>
                                        <a href="{{ route('akreditasi.delete', $item->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $akreditasi->links('pagination::simple-bootstrap-4') }}
                </div>
            </div>
        </section>
    <!-- </section> -->
    <!--End Skills One-->
@endsection