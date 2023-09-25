
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Edit Client</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('student/add/page') }}">Client</a></li>
                                <li class="breadcrumb-item active">Edit Client</li>
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
                            <form action="{{ route('client/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" name="id" value="{{ $clientEdit->id }}" readonly>
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
                                            <label>First Name <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ $clientEdit->full_name }}">
                                            @error('full_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>homepage <span class="login-danger">*</span></label>
                                            <select class="form-control select  @error('homepage') is-invalid @enderror" name="homepage">
                                                <option selected disabled>Home Page</option>
                                                <option value="yes" {{ $clientEdit->homepage == 'yes' ? "selected" :""}}>Yes</option>
                                                <option value="no" {{ $clientEdit->homepage == 'no' ? "selected" :""}}>No</option>
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
                                                <option value="Distribution Network" {{ $clientEdit->service == 'Distribution Network' ? "selected" :""}}>Distribution Network</option>
                                                <option value="Modern Trade" {{ $clientEdit->service == 'Modern Trade' ? "selected" :""}}>Modern Trade</option>
                                                <option value="Online Marketing" {{ $clientEdit->service == 'Online Marketing' ? "selected" :""}}>Online Marketing</option>
                                                <option value="CFA Operations" {{ $clientEdit->service == 'CFA Operations' ? "selected" :""}}>CFA Operations</option>
                                                <option value="Business Consultancy" {{ $clientEdit->service == 'Business Consultancy' ? "selected" :""}}>Business Consultancy</option>
                                                <option value="Brand Development" {{ $clientEdit->service == 'Brand Development' ? "selected" :""}}>Brand Development</option>
                                                <option value="none" {{ $clientEdit->service == 'none' ? "selected" :""}}>none</option>
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
                                                <option value="Food & Beverages" {{ $clientEdit->industries == 'Food & Beverages' ? "selected" :""}}>Food & Beverages</option>
                                                <option value="Cosmetics & Personal Care" {{ $clientEdit->industries == 'Cosmetics & Personal Care' ? "selected" :""}}>Cosmetics & Personal Care</option>
                                                <option value="Mobile & Telecom" {{ $clientEdit->industries == 'Mobile & Telecom' ? "selected" :""}}>Mobile & Telecom</option>
                                                <option value="Electrical Appliances" {{ $clientEdit->industries == 'Electrical Appliances' ? "selected" :""}}>Electrical Appliances</option>
                                                <option value="Technology" {{ $clientEdit->industries == 'Technology' ? "selected" :""}}>Technology</option>
                                                <option value="none" {{ $clientEdit->industries == 'none' ? "selected" :""}}>None</option>
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
                                                <h2 class="table-avatar">
                                                    <a class="avatar avatar-sm me-2">
                                                        <img class="avatar-img rounded-circle" src="{{ Storage::url('clients/'.$clientEdit->upload) }}" alt="User Image">
                                                    </a>
                                                </h2>
                                                <label class="file-upload image-upbtn mb-0 @error('upload') is-invalid @enderror">
                                                    Choose File <input type="file" name="upload">
                                                </label>
                                                <input type="hidden" name="image_hidden" value="{{ $clientEdit->upload }}">
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
                                            <button type="submit" class="btn btn-primary">Update</button>
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
