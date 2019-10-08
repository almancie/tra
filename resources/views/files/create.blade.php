@extends('layouts.main')

@section('content')

<div id="wrapper">

    @include('partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mt-4 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Add a new File</h1>
                    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                </div>
                <div class="row justify-content-center">

                    <div class="col-xl-6">
                        <div class="card o-hidden mb-4">
                            <div class="card-header text-black">Add File</div>
                            <div class="card-body pb-4">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <div class="mt-4">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="tra-input form-control @error('fileName') is-invalid @enderror" name="name" placeholder="File Name" value="{{ old('fileName') }}" required>

                                                    @error('fileName')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="tra-input form-control @error('fileUrl') is-invalid @enderror" name="url" placeholder="File Link (Dropbox, Google Drive, OneDrive, etc)" value="{{ old('fileUrl') }}" required>

                                                    @error('fileUrl')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="tra-input form-control @error('description') is-invalid @enderror" name="description" placeholder="Description" value="{{ old('description') }}" required></textarea>

                                                    @error('description')
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
                            <div class="card-header text-black">
                                <span>Files</span>
                                <a href="#" class="btn btn-sm btn-green"><i class="fas fa-plus"></i><span class="ml-2">Add New File</span></a>
                            </div>
                            <div class="card-body pb-4">
                                <div class="table-responsive">
                                    <table class="table mb-0" id="membersTable" width="100%" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td><i class="fas fa-file-alt"></i></td>
                                                <td>File 1</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-file-alt"></i></td>
                                                <td>File 2</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-file-alt"></i></td>
                                                <td>File 3</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-file-alt"></i></td>
                                                <td>File 4</td>
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
