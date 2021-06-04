@extends('layouts.app')

@section('content')
{{ Breadcrumbs::render('modify.user') }}
<div class="container">
    <div class="row justify-content-center mt-4 mb-4">
        <div class="col-md-8">
            @if ($hint === '1')
                <div class="alert alert-success">
                    <strong>會員資料已修改完成！</strong>
                    <a href="{{ route('modify.user') }}" class="alert-link">點擊此處重新整理頁面</a>
                </div>
            @elseif ($hint === '2')
                <div class="alert alert-danger">
                    <strong>密碼錯誤！</strong>
                </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('Edit Your Profile') }}</div>

                <div class="card-body">
                    <form class="was-validated" method="POST" action="{{ route('modify.user.data') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                        <div class="form-group">
                            <label for="uname">E-MAIL</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ Auth::user()->name }}" required>
                            <div class="valid-feedback">Completed</div>
                            <div class="invalid-feedback">Fields that are required</div>
                        </div>
                        <div class="form-group">
                            <label for="sex">Sex</label>
                            <select class="form-control" id="sex" name="sex">
                                @if (Auth::user()->sex === 'M')
                                    <option value="M" selected>Male</option>
                                    <option value="W">Female</option>
                                @else
                                    <option value="M">Male</option>
                                    <option value="W" selected>Female</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="telephone">Telephone</label>
                            <input type="text" class="form-control" id="telephone" placeholder="Enter Telephone" name="telephone" value="{{ Auth::user()->telephone }}" required>
                            <div class="valid-feedback">Completed</div>
                            <div class="invalid-feedback">Fields that are required</div>
                        </div>
                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" value="{{ explode(' ', Auth::user()->birthday, 2)[0] }}" required>
                            <div class="valid-feedback">Completed</div>
                            <div class="invalid-feedback">Fields that are required</div>
                        </div>
                        <div class="form-group">
                            <label for="memo">Memo</label>
                            <textarea id="memo" name="memo" class="form-control" maxlength="255">{{ Auth::user()->memo }}</textarea>
                            <div class="valid-feedback">Completed</div>
                            <div class="invalid-feedback">Fields that are required</div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Current Password" name="password" required>
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
