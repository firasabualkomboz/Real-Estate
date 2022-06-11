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
                                <a href="" class="text-muted">Contracts</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">Add Contract</a>
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

                <div class="row">
                    <div class="col-md-7">

                        <!--begin::Card-->
                        <div class="card card-custom example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">Add Contract</h3>

                            </div>


                            <!--begin::Form-->
                            <form method="post" enctype="multipart/form-data"
                                  action="{{route('manager.contracts.store')}}">
                                @csrf
                                <div class="card-body">


                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">Select
                                            Estate</label>
                                        <div class="col-8">

                                                <select name="estate_id" class="form-control" id="estate">
                                                    @foreach($estates as $estate)
                                                        <option value="{{$estate->id}}">{{$estate->name}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">Select
                                            Apartment</label>
                                        <div class="col-8">
                                            <select name="apartment_id" class="form-control" id="apartment">
                                                <option value="">No Apartment</option>
                                                @foreach($apartments as $apartment)
                                                    <option value="{{$apartment->id}}">{{$apartment->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">Select a Type
                                            Contact </label>

                                        <div class="radio-inline">


                                            <label class="radio radio-rounded radio-success">
                                                <input type="radio" value="estate" name="type">Estate
                                                <span></span></label>


                                            <label class="radio radio-rounded radio-success">
                                                <input value="apartment" name="type"
                                                       type="radio">Apartment
                                                <span></span></label>
                                            @error('type')
                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror


                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">Register
                                            Tenant</label>

                                        <div class="radio-inline">
                                            <label class="radio radio-rounded radio-success">
                                                <input value="registerTenant" id="register_tenant" name="registerTenant"
                                                       type="checkbox">Register New Tenant
                                                <span></span></label>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">Tenant</label>
                                        <div class="col-8">
                                            <select name="tenant_id" class="form-control" id="exampleSelect1">
                                                @foreach($tenants as $tenant)
                                                    <option value="{{$tenant->id}}">{{$tenant->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-3 col-form-label">Start At </label>
                                        <div class="col-8">
                                            <input class="form-control" type="date" name="start_at"
                                            >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-3 col-form-label">End At</label>
                                        <div class="col-8">
                                            <input class="form-control" type="date" name="end_at"
                                            >
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">Image </label>

                                        <div class="col-lg-8 col-xl-6">
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <div class="image-input-wrapper"
                                                     style="background-image: url(assets/media/users/100_1.jpg)"></div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Change avatar">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="document" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="document ">
                                                </label>
                                                <span
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="cancel" data-toggle="tooltip" title=""
                                                    data-original-title="Cancel avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-10">
                                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end::Card-->
                    </div>

                    <div class="col-md-5" id="showRegister">

                        <!--begin::Card-->
                        <div class="card card-custom example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">Register New Tenant</h3>

                            </div>


                            <!--begin::Form-->
                            <form method="post" enctype="multipart/form-data"
                                  action="{{route('manager.tenants.store')}}">
                                @csrf
                                <div class="card-body">


                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">Name
                                        </label>
                                        <div class="col-8">
                                            <input class="form-control" type="text" name="name"
                                            >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">Email
                                        </label>
                                        <div class="col-8">
                                            <input class="form-control" type="email" name="email"
                                            >
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">Phone
                                        </label>
                                        <div class="col-8">
                                            <input class="form-control" type="number" name="phone"
                                            >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">Address
                                        </label>
                                        <div class="col-8">
                                            <input class="form-control" type="text" name="address"
                                            >
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">Identification
                                            Document </label>

                                        <div class="col-lg-8 col-xl-6">
                                            <input class="form-control" name="document" type="file">
                                        </div>
                                    </div>


                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-10">
                                            <button type="submit" class="btn btn-success mr-2">Submit</button>
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
        <script>
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('select[name="estate_id"]').on('change', function () {
                    var estateId = $(this).val();
                    if (estateId) {

                        $.ajax({

                            url: "{{ URL::to('manager/ajax-apartment') }}/" + estateId,
                            type: "GET",
                            dataType: "json",
                            success: function (data) {
                                $('select[name="apartment_id"]').empty();
                                $.each(data, function (key, value) {
                                    $('select[name="apartment_id"]').append('<option value="' +
                                        key + '">' + value + '</option>');
                                });
                            },
                        });
                    } else {
                        console.log('AJAX load did not work');
                    }
                });
            });
        </script>

        <script>
            $('#register_tenant').click(function () {
                if ($(this).prop("checked")) {
                    $("#showRegister").show();
                } else {
                    $("#showRegister").hide();
                }
            });

        </script>

    @endpush
@endsection
