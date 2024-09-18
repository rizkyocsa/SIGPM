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
                    <h2>Data Profile</h2>
                </div>
                <div class="row">
                    <table class="table table-bordered justify-content-center">
                        <thead class="text-center">
                            <td>No</td>
                            <td>Sub Menu</td>
                            <td>Judul</td>
                            <td>Content</td>
                            <td>Action</td>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach($profile as $item)
                                <tr>
                                    <td>{{ $no++}}</td>
                                    <td>{{ $item->sub_menu }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{!! $item->content !!}</td>
                                    <td>
                                        <a href="{{ route('profil.edit', $item->id)}}">
                                            <button class="btn btn-warning">Edit</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $profile->links('pagination::simple-bootstrap-4') }}
                </div>
            </div>
        </section>
    <!-- </section> -->
    <!--End Skills One-->
@endsection