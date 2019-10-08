@extends('layouts.main')

@include('partials.header')

@section('content')

<div class="container full-height">
    <div class="row justify-content-center full-height">
        <div class="col-12">
            <div class="card o-hidden">
                <div class="card-header text-pink">Registration</div>
                <div class="card-body pb-4">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <ul class="tra-nav-pills nav nav-pills nav-fill align-items-center pt-5 pb-5" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-form1-tab" data-toggle="pill" href="#pills-form1" role="tab" aria-controls="pills-form1" aria-selected="true">Individual</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-form2-tab" data-toggle="pill" href="#pills-form2" role="tab" aria-controls="pills-form2" aria-selected="false">Institution</a>
                                </li>
                            </ul>
                            <div class="tab-content pb-2" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-form1" role="tabpanel" aria-labelledby="pills-form1-tab">
                                    <div>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="tra-input form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <input type="password" class="tra-input form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <input type="password" name="password_confirmation" class="tra-input form-control" placeholder="Repeat Password">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-4">
                                                    <input type="text" class="tra-input form-control @error('firstName') is-invalid @enderror" name="firstName" placeholder="First Name" value="{{ old('firstName') }}" required>

                                                    @error('firstName')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <input type="text" class="tra-input form-control @error('middleName') is-invalid @enderror" name="middleName" placeholder="Middle Name" value="{{ old('middleName') }}" required>

                                                    @error('middleName')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <input type="text" class="tra-input form-control @error('lastName') is-invalid @enderror" name="lastName" placeholder="Surname" value="{{ old('lastName') }}" required>

                                                    @error('lastName')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="tra-input form-control @error('mobile') is-invalid @enderror" name="mobile" placeholder="Mobile Number" value="{{ old('mobile') }}" required>

                                                @error('mobile')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="tra-input form-control @error('dob') is-invalid @enderror" name="dob" placeholder="Date of Birth" value="{{ old('dob') }}" required>

                                                @error('dob')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="tra-input form-control @error('nationality') is-invalid @enderror" name="nationality" placeholder="Nationality" value="{{ old('nationality') }}" required>

                                                @error('nationality')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="tra-input form-control @error('residence') is-invalid @enderror" name="residence" placeholder="Place of Residence" value="{{ old('residence') }}" required>

                                                @error('residence')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group radioGroup">
                                                <div class="text-center">Education:</div>
                                                <div>
                                                    <input id="education1" type="radio" class="form-control" name="education" value="1">
                                                    <label class="form-check-label" for="education1">Intermediate</label>
                                                </div>
                                                <div>
                                                    <input id="education2" type="radio" class="form-control" name="education" value="2">
                                                    <label class="form-check-label" for="education2">Secondary</label>
                                                </div>
                                                <div>
                                                    <input id="education3" type="radio" class="form-control" name="education" value="3">
                                                    <label class="form-check-label" for="education3">University</label>
                                                </div>

                                                @error('education')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="tra-input form-control @error('schoolName') is-invalid @enderror" name="schoolName" placeholder="Name of School / University" value="{{ old('schoolName') }}" required>

                                                @error('schoolName')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group justify-content-end mt-3 text-right">
                                                <button type="submit" class="btn tra-btn-pink">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-form2" role="tabpanel" aria-labelledby="pills-form2-tab">
                                    <div>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <input type="text" class="tra-input form-control @error('firstName') is-invalid @enderror" name="firstName" placeholder="First Name" value="{{ old('firstName') }}" required>

                                                    @error('firstName')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="tra-input form-control @error('middleName') is-invalid @enderror" name="middleName" placeholder="Middle Name" value="{{ old('middleName') }}" required>

                                                    @error('middleName')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="tra-input form-control @error('lastName') is-invalid @enderror" name="lastName" placeholder="Surname" value="{{ old('lastName') }}" required>

                                                    @error('lastName')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="tra-input form-control @error('mobile') is-invalid @enderror" name="mobile" placeholder="Mobile Number" value="{{ old('mobile') }}" required>

                                                @error('mobile')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="tra-input form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required>

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="tra-input form-control @error('job') is-invalid @enderror" name="job" placeholder="Job Title" value="{{ old('job') }}" required>

                                                @error('job')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group justify-content-end mt-3 text-right">
                                                <button type="submit" class="btn .tra-btn-pink">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
