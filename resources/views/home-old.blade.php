@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if ($user->id_role == 1)
                        Anda login sebagai Admin
                    @elseif ($user->id_role == 2)
                        Anda login sebagai Dekan
                    @elseif ($user->id_role == 3)
                        Anda login sebagai Wakil Dekan
                    @elseif ($user->id_role == 4)
                        Anda login sebagai Prodi
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
