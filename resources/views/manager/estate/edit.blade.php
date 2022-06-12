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
                                <a href="" class="text-muted">Estates</a>
                            </li>


                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-fh btn-white btn-hover-primary font-weight-bold px-2 px-lg-5 mr-2">
									<span class="svg-icon svg-icon-success svg-icon-lg">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24"></polygon>
												<path
                                                    d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
												<path
                                                    d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                    fill="#000000" fill-rule="nonzero"></path>
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>New Member</a>
                    <!--end::Button-->


                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">

                <div class="card card-custom card-transparent">
                    <div class="card-body p-0">
                        <!--begin: Wizard-->
                        <div class="wizard wizard-4" id="kt_wizard_v4" data-wizard-state="first"
                             data-wizard-clickable="true">
                            <!--begin: Wizard Nav-->
                            <div class="wizard-nav">
                                <div class="wizard-steps">
                                    <!--begin::Wizard Step 1 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-number">1</div>
                                            <div class="wizard-label">
                                                <div class="wizard-title">Basic Details</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 1 Nav-->


                                </div>
                            </div>
                            <!--end: Wizard Nav-->
                            <!--begin: Wizard Body-->
                            <div class="card card-custom card-shadowless rounded-top-0">
                                <div class="card-body p-0">
                                    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                        <div class="col-xl-12 col-xxl-7">
                                            <!--begin: Wizard Form-->
                                            @if ($errors->any())
                                                <div class="alert alert-custom alert-default" role="alert">

                                                    <div class="alert-icon">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>

                                                </div>
                                            @endif

                                            <form class="form mt-0 mt-lg-10 fv-plugins-bootstrap fv-plugins-framework"
                                                  method="post" id="kt_form"
                                                  enctype="multipart/form-data"
                                                  action="{{route('manager.estates.update' , $estate->id)}}"
                                            >
                                                @csrf
                                                @method('PATCH')

                                                <!--begin: Wizard Step 1-->
                                                <div class="pb-5" data-wizard-type="step-content"
                                                     data-wizard-state="current">


                                                    <div class="row">


                                                        <div class="col-xl-6">
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Update Status For Estate : {{$estate->status}} <span
                                                                        style="color: red"> * </span></label>
                                                                <select name="status"
                                                                        class="form-control form-control-solid form-control-lg">

                                                                    <option value="available">available</option>
                                                                    <option value="rent">Rent</option>
                                                                    <option value="unavailable">unavailable</option>


                                                                </select>

                                                                <div class="fv-plugins-message-container"></div>
                                                            </div>

                                                        </div>


                                                    </div>

                                                    <!--end::Input-->
                                                    <div class="row">
                                                        {{--                                                        <div class="col-xl-6">--}}
                                                        {{--                                                            <div class="form-group fv-plugins-icon-container">--}}
                                                        {{--                                                                <label>Select Owner <span style="color: red"> * </span></label>--}}
                                                        {{--                                                                <select name="owner_id"--}}
                                                        {{--                                                                        class="form-control form-control-solid form-control-lg">--}}
                                                        {{--                                                                    @foreach ($owners as $owner)--}}

                                                        {{--                                                                        <option value="{{ $owner->id }}"--}}
                                                        {{--                                                                                @if ($owner->id == old('owner_id' , $estate->owner_id ) ) selected @endif >--}}
                                                        {{--                                                                            {{ $owner->name }}--}}
                                                        {{--                                                                        </option>--}}

                                                        {{--                                                                    @endforeach--}}

                                                        {{--                                                                </select>--}}


                                                        {{--                                                                <div class="fv-plugins-message-container"></div>--}}
                                                        {{--                                                            </div>--}}

                                                        {{--                                                        </div>--}}

                                                    </div>


                                                </div>
                                                <!--end: Wizard Step 1-->


                                                <!--begin: Wizard Actions-->
                                                <div class="d-flex justify-content-between border-top mt-5 pt-10">

                                                    <div>
                                                        <button
                                                            class="btn btn-success font-weight-bold text-uppercase px-9 py-4"
                                                            type="submit">Update
                                                        </button>
                                                        <button
                                                            class="btn btn-primary font-weight-bold text-uppercase px-9 py-4"
                                                            data-wizard-type="action-next">Next Step
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--end: Wizard Actions-->
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </form>
                                            <!--end: Wizard Form-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Wizard Bpdy-->
                        </div>
                        <!--end: Wizard-->
                    </div>
                </div>


            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    @push('custom-scripts')

        <script src="{{asset('assets_dashboard')}}/assets/js/pages/custom/wizard/wizard-4.js"></script>

        <script src="{{asset('assets_dashboard')}}/assets/js/pages/crud/file-upload/image-input.js"></script>
    @endpush
@endsection
