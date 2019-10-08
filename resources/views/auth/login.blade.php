@extends('layouts.main')

@include('partials.header')

@section('content')

<div class="container full-height">
    <div class="row justify-content-center full-height">
        <div class="col-12">
            <div class="card o-hidden">
                <div class="card-header text-pink">Login</div>
                <div class="card-body pb-4">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Email or CPR" value="{{ old('username') }}" required autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group justify-content-end mt-3 text-right">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
