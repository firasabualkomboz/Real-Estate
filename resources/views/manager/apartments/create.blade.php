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
                                <a href="" class="text-muted">Forms</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">Form Controls</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">Base Inputs</a>
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
                <div class="row">
                    <div class="col-md-12">

                        <!--begin::Card-->
                        <div class="card card-custom example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">Add Real Estate</h3>

                            </div>


                            <!--begin::Form-->
                            <form method="post" enctype="multipart/form-data"
                                  action="{{route('manager.apartments.store')}}">
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
                                            <label for="example-date-input" class="col-form-label">Name</label>

                                            <input class="form-control" type="text" name="name"
                                            >
                                        </div>

                                            <div class="col-6">
                                                <label for="example-date-input" class="col-form-label">Space</label>

                                                <input class="form-control" type="number" name="space">
                                            </div>


                                    </div>

                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label for="example-date-input" class="col-form-label">Description</label>
                                            <textarea class="form-control" name="description"
                                                      rows="3"></textarea>
                                        </div>

                                        <div class="col-6">
                                            <label for="example-date-input" class="col-form-label">Features</label>

                                            <textarea class="form-control" name="features"
                                                      rows="3"></textarea>
                                        </div>



                                    </div>


                                    <div class="form-group row">


                                        <div class="col-4">
                                            <label for="example-date-input" class="col-form-label">Rent </label>

                                            <input class="form-control" type="number" name="rent"
                                            >
                                        </div>

                                        <div class="col-4">
                                            <label for="example-date-input" class="col-form-label">commission </label>

                                            <input class="form-control" type="number" name="commission"
                                            >
                                        </div>



                                            <div class="col-4">
                                                <label for="example-time-input" class="col-form-label">Select
                                                    Status</label>
                                                <select name="status" class="form-control" id="exampleSelect1">
                                                    <option value="rent">Rent</option>
                                                    <option value="available">available</option>
                                                    <option value="unavailable">unavailable</option>

                                                </select>
                                            </div>

                                    </div>




                                    <div class="form-group row">

                                        <div class="col-4">
                                            <label for="example-date-input" class="col-form-label">Count
                                                Rooms </label>
                                            <select name="rooms" class="form-control" id="exampleSelect1">
                                                @for($i = 1 ; $i<= 10; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>

                                        </div>


                                        <div class="col-4">
                                            <label for="example-date-input" class="col-form-label">Count
                                                Bathroom </label>
                                            <select name="bathroom" class="form-control" id="exampleSelect1">
                                                @for($i = 1 ; $i<= 5; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>
                                        </div>


                                        <div class="col-4">
                                            <label for="example-date-input" class="col-form-label">On The
                                                Floor </label>
                                            <select name="on_floor" class="form-control" id="exampleSelect1">
                                                @for($i = 1 ; $i<= 20; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>

                                        </div>


                                    </div>



                                    <div class="form-group row">

                                        <div class="col-4">
                                            <label for="example-time-input" class="col-form-label">Select
                                                Owner</label>
                                            <select name="owner_id" class="form-control" id="exampleSelect1">
                                                @foreach ($owners as $owner)
                                                    <option value="{{$owner->id}}">{{$owner->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-4">
                                            <label for="example-time-input" class="col-form-label">Select Estate</label>

                                            <select name="estate_id" class="form-control" id="exampleSelect1">
                                                @foreach($estates as $estate)
                                                    <option value="{{$estate->id}}">{{$estate->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-4">
                                            <label for="example-time-input" class="col-form-label">Select
                                                Type Property</label>
                                            <select name="property_id" class="form-control" id="exampleSelect1">
                                                @foreach($properties as $property)
                                                    <option value="{{$property->id}}">{{$property->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>



                                    </div>





                                    <div class="form-group row">

                                        <div class="col-9">
                                            <label for="example-date-input" class="col-form-label">Photos</label>

                                            <input class="form-control" type="file" name="photos[]" multiple
                                            >
                                        </div>


                                        <div class="col-lg-3 col-xl-3">

                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <label for="example-time-input" class="col-form-label">Image </label>

                                                <div class="image-input-wrapper"
                                                     style="background-image: url(assets/media/users/100_1.jpg)"></div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Change avatar">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="image">
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

                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>

    @push('custom-scripts')
  

    @endpush

@endsection
