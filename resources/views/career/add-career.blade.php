
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Add Career</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('student/add/page') }}">Career</a></li>
                                <li class="breadcrumb-item active">Add Career</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                            <form action="{{ route('client/add/save') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Career Information
                                            <span>
                                                <a href="javascript:;"><i class="feather-more-vertical"></i></a>
                                            </span>
                                        </h5>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Job Position<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('job_position') is-invalid @enderror" name="job_position" placeholder="Enter Job Position" value="{{ old('job_position') }}">
                                            @error('job_position')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Experience<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" placeholder="Enter Experience" value="{{ old('experience') }}">
                                            @error('experience')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Job Type<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('job_type') is-invalid @enderror" name="job_type" placeholder="Enter Job Type" value="{{ old('job_type') }}">
                                            @error('job_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Location<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" placeholder="Enter Location" value="{{ old('location') }}">
                                            @error('location')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Location<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('qualification') is-invalid @enderror" name="qualification" placeholder="Enter Qualification" value="{{ old('qualification') }}">
                                            @error('qualification')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Location<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('skills') is-invalid @enderror" name="skills" placeholder="Enter Skills" value="{{ old('skills') }}">
                                            @error('skills')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>working Days<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('working_days') is-invalid @enderror" name="working_days" placeholder="Enter working days" value="{{ old('skills') }}">
                                            @error('working_days')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group ">
                                        <textarea id="content" name="editordata"> </textarea>
                                        </div>
                                    </div>
                                  
                                    

                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
