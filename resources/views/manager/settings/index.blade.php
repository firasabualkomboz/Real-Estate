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
                                <a href="" class="text-muted">@lang('dashboard.settings')</a>
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
                    <div class="col-md-12">

                        <!--begin::Card-->
                        <div class="card card-custom example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">@lang('dashboard.settings')</h3>

                            </div>


                            <!--begin::Form-->
                            <form method="post" enctype="multipart/form-data"
                                  action="{{route('manager.settings.update' , $settings->id)}}">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">


                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">@lang('dashboard.about_us') </label>
                                        <div class="col-8">
                                            <input class="form-control" type="text" value="{{$settings->about_us}}" name="about_us"
                                            >
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">@lang('dashboard.features')</label>
                                        <div class="col-8">
                                            <textarea class="form-control" name="features"  id="" cols="30"
                                                      rows="10"> {{$settings->features}} </textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label">@lang('dashboard.url') : </label>
                                        <div class="col-8">
                                            <input class="form-control" type="text" value="{{$settings->url}}" name="url"
                                            >
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-3 col-form-label"> @lang('dashboard.logo')  </label>

                                        <div class="col-lg-8 col-xl-6">
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <div class="image-input-wrapper"
                                                     style="background-image: url({{\app\Helper\getImage($settings->logo)}})"></div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Change avatar">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="logo" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="logo">
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
                                            <button type="submit" class="btn btn-success mr-2">Update</button>
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
