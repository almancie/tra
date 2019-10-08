@extends('layouts.main')

@section('content')

<div id="wrapper">

    @include('partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mt-4 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Home</h1>
                    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card o-hidden tra-list mb-4">
                            <div class="card-header text-black">
                                <span>Members</span>
                                <a href="{{ url('members/create') }}" class="btn btn-sm btn-green"><i class="fas fa-plus"></i><span class="ml-2">Add New Member</span></a>
                            </div>
                            <div class="card-body pb-4">
                                <div class="table-responsive">
                                    <table class="table mb-0" id="membersTable" width="100%" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td><i class="fas fa-user text-blue"></i></td>
                                                <td>Hasan Aziz</td>
                                                <td class="text-right"><i class="fas fa-edit icon-btn"></i> <i class="fas fa-trash-alt icon-btn text-red"></i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-user text-blue"></i></td>
                                                <td>Mohammed Salman</td>
                                                <td class="text-right"><i class="fas fa-edit icon-btn"></i> <i class="fas fa-trash-alt icon-btn text-red"></i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-user text-pink"></i></td>
                                                <td>Fatima Ali</td>
                                                <td class="text-right"><i class="fas fa-edit icon-btn"></i> <i class="fas fa-trash-alt icon-btn text-red"></i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-user text-pink"></i></td>
                                                <td>Sara Mohammed</td>
                                                <td class="text-right"><i class="fas fa-edit icon-btn"></i> <i class="fas fa-trash-alt icon-btn text-red"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
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
                                                <td class="text-right"><i class="fas fa-edit icon-btn"></i> <i class="fas fa-trash-alt icon-btn text-red"></i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-file-alt"></i></td>
                                                <td>File 2</td>
                                                <td class="text-right"><i class="fas fa-edit icon-btn"></i> <i class="fas fa-trash-alt icon-btn text-red"></i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-file-alt"></i></td>
                                                <td>File 3</td>
                                                <td class="text-right"><i class="fas fa-edit icon-btn"></i> <i class="fas fa-trash-alt icon-btn text-red"></i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-file-alt"></i></td>
                                                <td>File 4</td>
                                                <td class="text-right"><i class="fas fa-edit icon-btn"></i> <i class="fas fa-trash-alt icon-btn text-red"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card o-hidden tra-list mb-4">
                            <div class="card-header text-black">
                                <span>Courses</span>
                            </div>
                            <div class="card-body pb-4">
                                <div class="table-responsive">
                                    <table class="table mb-0" id="membersTable" width="100%" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td><i class="fas fa-video"></i></td>
                                                <td>Course 1</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-video"></i></td>
                                                <td>Course 2</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-video"></i></td>
                                                <td>Course 3</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-video"></i></td>
                                                <td>Course 4</td>
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
