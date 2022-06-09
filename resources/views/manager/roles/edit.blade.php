@extends('layouts.manager')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline mr-5">
                        <!--begin::Page     Title-->
                        <h2 class="subheader-title text-dark font-weight-bold my-2 mr-3">Real Estate</h2>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">roles</a>
                            </li>


                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->

            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!--begin::Card-->
                        <div class="card card-custom example example-compact">
                            <div class="card-header">
                                <h3 class="card-title"> Update Role - {{$role->name}}</h3>
                            </div>

                            <!--begin::Form-->
                            <form method="post" enctype="multipart/form-data"
                                  action="{{route('manager.roles.update' , $role->id)}}">
                                @method('PATCH')
                                @csrf

                                <div class="card-body">
                                    <div class="form-group mb-8">
                                        @if ($errors->any())
                                            <div class="alert alert-custom alert-danger" role="alert">

                                                <div class="alert-icon">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                            </div>
                                        @endif
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label for="example-date-input" class="col-form-label">Role Name</label>
                                            {!! Form::text('name', $role->name , array('placeholder' => 'Name','class' => 'form-control')) !!}
                                            @error('name')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-6">
                                                <label for="example-date-input" class="col-form-label">Permission


                                                    @foreach($permission as $value)
                                                        <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                            {{ $value->name }}</label>
                                                        <br/>
                                                    @endforeach
                                                    @error('permission')
                                                    <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror

                                            </div>
                                        </div>

                                    </div>


                                </div>


                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-10">
                                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                        <!--end::Card-->
                    </div>

                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>

    @push('custom-scripts')


    @endpush

@endsection
