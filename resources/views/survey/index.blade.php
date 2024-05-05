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
                    <h2>Data Survey</h2>
                </div>
                <div class="row mb-3">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('survey.create') }}">
                            <button class="btn btn-primary">
                                Tambah
                            </button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-bordered text-center justify-content-center">
                        <thead>
                            <td>No</td>
                            <td>Nama Survey</td>
                            <td>Tautan</td>
                            <td>Action</td>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach($survey as $item)
                                <tr>
                                    <td>{{ $no++}}</td>
                                    <td>{{ $item->nama_survey }}</td>
                                    <td>{{ $item->tautan_survey }}</td>
                                    <td>
                                        <a href="{{ route('survey.edit', $item->id)}}">
                                            <button class="btn btn-warning">Edit</button>
                                        </a>
                                        <a href="{{ route('survey.delete', $item->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $survey->links('pagination::simple-bootstrap-4') }}
                </div>
            </div>
        </section>
    <!-- </section> -->
    <!--End Skills One-->
@endsection