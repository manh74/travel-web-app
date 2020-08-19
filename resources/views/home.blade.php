@extends('master')
@section('content')
<div class="container">
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Hi <b>{{ Auth::user()->name }}</b>! {{ __('Bạn đã đăng nhập vào website!') }}
                </b>
                </div>
        </div>
    </div>
    </div>
    <br>
</div>
@endsection

