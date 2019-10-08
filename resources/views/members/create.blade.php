@extends('layouts.main')

@section('content')

<div id="wrapper">

    @include('partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mt-4 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Add a new member</h1>
                    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="card o-hidden mb-4">
                            <div class="card-header text-black">Add Member</div>
                            <div class="card-body pb-4">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <div class="mt-4">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
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
                                                    <label>Copy of CPR</label>
                                                    <input type="file" class="tra-input form-control @error('cprDocument') is-invalid @enderror" name="cprDocument" value="{{ old('cprDocument') }}" required>

                                                    @error('residence')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Parental Consent Form</label>
                                                    <input type="file" class="tra-input form-control @error('consentDocument') is-invalid @enderror" name="consentDocument"  value="{{ old('consentDocument') }}" required>

                                                    @error('residence')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group justify-content-end mt-3 text-right">
                                                    <button type="submit" class="btn tra-btn-pink">Add</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="card o-hidden tra-list mb-4">
                            <div class="card-header text-black">Members</div>
                            <div class="card-body pb-4">
                                <div class="table-responsive">
                                    <table class="table mb-0" id="membersTable" width="100%" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td><i class="fas fa-user text-blue"></i></td>
                                                <td>Hasan Aziz</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-user text-blue"></i></td>
                                                <td>Mohammed Salman</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-user text-pink"></i></td>
                                                <td>Fatima Ali</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-user text-pink"></i></td>
                                                <td>Sara Mohammed</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
