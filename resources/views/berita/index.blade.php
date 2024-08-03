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
                    <h2>Data Berita</h2>
                </div>
                <div class="row mb-3">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('berita.create') }}">
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
                            <td style="width: 100px;">Header</td>
                            <td style="width: 100px;">Judul</td>
                            <td>Content</td>
                            <td style="width: 150px;">Action</td>
                        </thead>
                        <tbody>
                            @php $no = ($currentPage - 1) * $perPage + 1; @endphp
                            @foreach($berita as $item)
                                <tr>
                                    <td style="width: 50px;">{{ $no++}}</td>
                                    <td style="width: 100px;">{{ $item->header }}</td>
                                    <td style="width: 100px;">{{ $item->judul }}</td>
                                    <td>{!! $item->content !!}</td>
                                    <td style="width: 150px;">
                                        <a href="{{ route('berita.edit', $item->id)}}">
                                            <button class="btn btn-warning">Edit</button>
                                        </a>
                                        <a href="{{ route('berita.delete', $item->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $berita->links('pagination::simple-bootstrap-4', ['page' => $currentPage]) }}
                </div>
            </div>
        </section>
    <!-- </section> -->
    <!--End Skills One-->
@endsection