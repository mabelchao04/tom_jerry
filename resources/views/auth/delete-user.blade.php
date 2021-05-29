@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4 mb-4">
        <div class="col-md-8">
            @if ($hint === '1')
                <div class="alert alert-success">
                    <strong>會員已刪除完成！</strong>
                    <a href="{{ route('home') }}" class="alert-link">點擊此處重新整理頁面</a>
                </div>
            @elseif ($hint === '2')
                <div class="alert alert-danger">
                    <strong>密碼錯誤！</strong>
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Delete User Account') }}</div>

                <div class="card-body">
                    <form class="was-validated" method="POST" action="{{ route('delete.user.data') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                        <div class="form-group">
                            <label for="password">Current Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Current Password" name="password" required>
                            <div class="valid-feedback">Completed</div>
                            <div class="invalid-feedback">Fields that are required</div>
                        </div>

                        <label class="text-danger">注意！刪除後將無法復原！</label>
                        <button type="submit" class="btn btn-outline-danger btn-lg btn-block">{{ __('Submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
