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
                    <h2>Data Kategori</h2>
                </div>
                <div class="row mb-3">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('kategori.create') }}">
                            <button class="btn btn-primary">
                                Tambah
                            </button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-bordered justify-content-center">
                        <thead class="text-center">
                            <td>No</td>
                            <td>Kategori</td>
                            <td>Action</td>
                        </thead>
                        <tbody>
                        @php $no = ($currentPage - 1) * $perPage + 1; @endphp
                            @foreach($kategori as $item)
                                <tr>
                                    <td>{{ $no++}}</td>
                                    <td>{{ $item->nama_kategori }}</td>
                                    <td style="width: 15%;">
                                        <a href="{{ route('kategori.edit', $item->id)}}">
                                            <button class="btn btn-warning">Edit</button>
                                        </a>
                                        <a href="{{ route('kategori.delete', $item->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $kategori->links('pagination::simple-bootstrap-4', ['page' => $currentPage]) }}
                </div>
            </div>
        </section>
    <!-- </section> -->
    <!--End Skills One-->
@endsection