@extends('master.master')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
@endsection

@section('content')
    <!--Start Skills One-->
    <!-- <section class="skills-one"> -->
        <div class="container mt-5" >
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h4></h4>
                </div>
                <h2>Data Survey</h2>
            </div>
            <div class="row">
                <table class="table table-bordered text-center justify-content-center">
                    <thead>
                        <td>No</td>
                        <td>Nama Survey</td>
                        <td>Tautan</td>
                        <td>Action</td>
                    </thead>
                    @php $no=1; @endphp
                    @foreach($survey as $item)
                    <tbody>
                        <td>{{ $no++}}</td>
                        <td>{{ $item->nama_survey }}</td>
                        <td>{{ $item->tautan_survey }}</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    <!-- </section> -->
    <!--End Skills One-->
@endsection