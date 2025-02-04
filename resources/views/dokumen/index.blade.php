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
                    <h2>Data Master Dokumen</h2>
                </div>
                <div class="row mb-3">
                    <div class="d-flex justify-content-end">
                        <!-- <select name="" id="">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                        </select>                     -->
                        <a href="{{ route('dokumen.create') }}">
                            <button class="btn btn-primary">
                                Tambah
                            </button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-bordered justify-content-center" id="table-data">
                        <thead class="text-center">
                            <td>No</td>
                            <td>Prodi</td>
                            <td>Kategori</td>
                            <td>Sub Kategori</td>
                            <td>Nama Dokumen</td>
                            <td>Tautan</td>
                            <td>Kategori Dokumen</td>
                            <td>Action</td>
                        </thead>
                        <tbody>
                            @php $no = ($currentPage - 1) * $perPage + 1; @endphp
                            @foreach($dokumen as $item)
                                <tr>
                                    <td>{{ $no++}}</td>
                                    <td>
                                        @if( $item->id_prodi == 1)
                                            Teknik Industri
                                        @elseif ( $item->id_prodi == 2)
                                            Teknik Informatika
                                        @else
                                            Teknik Sipil
                                        @endif
                                    </td>
                                    <td>{{ $item->nama_kategori }}</td>
                                    <td>{{ $item->sub_kategori }}</td>
                                    <td>{{ $item->nama_dokumen }}</td>
                                    <td>{{ $item->tautan }}</td>
                                    <td>
                                        @if($item->is_private == "0")
                                            Public
                                        @else
                                            Private
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('dokumen.edit', $item->id)}}">
                                            <button class="btn btn-warning">Edit</button>
                                        </a>
                                        <a href="{{ route('dokumen.delete', $item->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $dokumen->links('pagination::simple-bootstrap-4', ['page' => $currentPage]) }}
                </div>
            </div>
        </section>
    <!-- </section> -->
    <!--End Skills One-->
@endsection

<!-- @section('js')
<script>
    $('#table-data').DataTable();
</script>
@endsection -->