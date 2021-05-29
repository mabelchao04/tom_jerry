@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4 mb-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center mt-4 mb-4">
        <div class="col-md-6 col-lg-3 mt-2">
            <div class="card text-center p-5">
                <a href="{{ route('modify.user') }}" class="text-dark" style="cursor:pointer;">
                    <p><img src="/images/user.png" style="width:64px;height:64px;" /></p>
                    <h5>修改會員資料</h5>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mt-2">
            <div class="card text-center p-5">
                <a href="{{ route('modify.user.pwd') }}" class="text-dark" style="cursor:pointer;">
                    <p><img src="/images/writing.png" style="width:64px;height:64px;" /></p>
                    <h5>修改會員密碼</h5>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mt-2">
            <div class="card text-center p-5">
                <a href="{{ route('delete.user') }}" class="text-dark" style="cursor:pointer;">
                    <p><img src="/images/trash.png" style="width:64px;height:64px;" /></p>
                    <h5>刪除會員帳號</h5>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mt-2">
            <div class="card text-center p-5">
                <p><img src="/images/book.png" style="width:64px;height:64px;" /></p>
                <h5>閱讀會員權益</h5>
            </div>
        </div>
    </div>
</div>
@endsection
