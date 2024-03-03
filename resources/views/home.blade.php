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
                    
                    @if ($user->roles_id == 1)
                        Anda login sebagai Admin
                    @elseif ($user->roles_id == 2)
                        Anda login sebagai Dekan
                    @elseif ($user->roles_id == 3)
                        Anda login sebagai Prodi
                    @elseif ($user->roles_id == 4)
                        Anda login sebagai Alumni
                    @elseif ($user->roles_id == 5)
                        Anda login sebagai Mahasiswa
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
