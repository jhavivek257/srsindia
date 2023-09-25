
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Add Client</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('student/add/page') }}">Client</a></li>
                                <li class="breadcrumb-item active">Add Client</li>
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
                                        <h5 class="form-title student-info">Client Information
                                            <span>
                                                <a href="javascript:;"><i class="feather-more-vertical"></i></a>
                                            </span>
                                        </h5>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Title<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" placeholder="Enter Client Name" value="{{ old('full_name') }}">
                                            @error('full_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                  
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Home Page<span class="login-danger">*</span></label>
                                            <select class="form-control select  @error('homepage') is-invalid @enderror" name="homepage">
                                                <option selected disabled>Select option</option>
                                                <option value="yes" {{ old('homepage') == 'Yes' ? "selected" :""}}>Yes</option>
                                                <option value="no" {{ old('homepage') == 'No' ? "selected" :""}}>No</option>
                                            </select>
                                            @error('homepage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                  
                                   
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Service Page <span class="login-danger">*</span></label>
                                            <select class="form-control select @error('service') is-invalid @enderror" name="service">
                                                <option selected disabled>Please Select Group </option>
                                                <option value="Distribution Network" {{ old('service') == 'Distribution Network' ? "selected" :""}}>Distribution Network</option>
                                                <option value="Modern Trade" {{ old('service') == 'Modern Trade' ? "selected" :""}}>Modern Trade</option>
                                                <option value="Online Marketing" {{ old('service') == 'Online Marketing' ? "selected" :""}}>Online Marketing</option>
                                                <option value="CFA Operations" {{ old('service') == 'CFA Operations' ? "selected" :""}}>CFA Operations</option>
                                                <option value="Business Consultancy" {{ old('service') == 'Business Consultancy' ? "selected" :""}}>Business Consultancy</option>
                                                <option value="Brand Development" {{ old('service') == 'Brand Development' ? "selected" :""}}>Brand Development</option>
                                                <option value="none" {{ old('service') == 'none' ? "selected" :""}}>None</option>
                                            </select>
                                            @error('service')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>industries <span class="login-danger">*</span></label>
                                            <select class="form-control select @error('industries') is-invalid @enderror" name="industries">
                                                <option selected disabled>Please Select industries </option>
                                                <option value="Food & Beverages" {{ old('industries') == 'Food & Beverages' ? "selected" :""}}>Food & Beverages</option>
                                                <option value="Cosmetics & Personal Care" {{ old('industries') == 'Cosmetics & Personal Care' ? "selected" :""}}>Cosmetics & Personal Care</option>
                                                <option value="Mobile & Telecom" {{ old('industries') == 'Mobile & Telecom' ? "selected" :""}}>Mobile & Telecom</option>
                                                <option value="Electrical Appliances" {{ old('industries') == 'Electrical Appliances' ? "selected" :""}}>Electrical Appliances</option>
                                                <option value="Technology" {{ old('industries') == 'Mobile & Telecom' ? "selected" :""}}>Mobile & Telecom</option>
                                                <option value="none" {{ old('industries') == 'none' ? "selected" :""}}>None</option>
                                            </select>
                                            @error('industries')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group students-up-files">
                                            <label>Upload Student Photo (150px X 150px)</label>
                                            <div class="uplod">
                                                <label class="file-upload image-upbtn mb-0 @error('upload') is-invalid @enderror">
                                                    Choose File <input type="file" name="upload">
                                                </label>
                                                @error('upload')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
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
