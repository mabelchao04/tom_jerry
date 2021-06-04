@extends('layouts.app')

@section('content')
{{ Breadcrumbs::render('modify.user.pwd') }}
<div class="container">
    <div class="row justify-content-center mt-4 mb-4">
        <div class="col-md-8">
            @if ($hint === '1')
                <div class="alert alert-success">
                    <strong>會員密碼已修改完成！</strong>
                    <a href="{{ route('modify.user') }}" class="alert-link">點擊此處重新整理頁面</a>
                </div>
            @elseif ($hint === '2')
                <div class="alert alert-danger">
                    <strong>目前密碼輸入錯誤！</strong>
                </div>
            @elseif ($hint === '3')
                <div class="alert alert-danger">
                    <strong>密碼確認錯誤！</strong>
                </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('Edit Your New Password') }}</div>

                <div class="card-body">
                    <form class="was-validated" method="POST" action="{{ route('modify.user.pwd.data') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                        <div class="form-group">
                            <label for="password-old">Current Password</label>
                            <input type="password" class="form-control" id="password-old" placeholder="Enter Current Password" name="password-old" required>
                            <div class="valid-feedback">Completed</div>
                            <div class="invalid-feedback">Fields that are required</div>
                        </div>
                        <div class="form-group">
                            <label for="password-new">New Password</label>
                            <input type="password" class="form-control" id="password-new" placeholder="Enter New Password" name="password-new" required>
                            <div class="valid-feedback">Completed</div>
                            <div class="invalid-feedback">Fields that are required</div>
                        </div>
                        <div class="form-group">
                            <label for="password-conf">Confirm Password</label>
                            <input type="password" class="form-control" id="password-conf" placeholder="Enter New Password" name="password-conf" required autocomplete="password-new">
                            <div class="valid-feedback">Completed</div>
                            <div class="invalid-feedback">Fields that are required</div>
                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">{{ __('Submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
