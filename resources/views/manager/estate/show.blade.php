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
                        <!--begin::Page Title-->
                        <h2 class="subheader-title text-dark font-weight-bold my-2 mr-3">Real Estate</h2>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">Estates</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">Estates Details</a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">{{$estate->name}}</a>
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
                    <div class="col-xl-6">
                        <!--begin::List Widget 1-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">{{$estate->name}}  - Overview</span>
                                </h3>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-8">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Name </a>
                                        <span class="text-muted">{{$estate->name}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Description </a>
                                        <span class="text-muted">{{$estate->description}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Features </a>
                                        <span class="text-muted">{{$estate->features}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Year Built </a>
                                        <span class="text-muted">{{$estate->year_built}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">	Space </a>
                                        <span class="text-muted">{{$estate->space}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg"> Count Rooms </a>
                                        <span class="text-muted">{{$estate->rooms}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg"> Count Bathroom </a>
                                        <span class="text-muted">{{$estate->bathroom}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg"> On The Floor </a>
                                        <span class="text-muted">{{$estate->on_floor}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg"> Type Property </a>
                                        <span class="text-muted">3</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg"> Estate  </a>
                                        <span class="text-muted">#</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 1-->
                    </div>




                    <div class="col-xl-6">
                        <!--begin::List Widget 1-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">{{$estate->name}}  - Overview</span>
                                </h3>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-8">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a class="text-dark text-hover-primary mb-1 font-size-lg"> Image Estate </a>
                                        <span class="text-muted"><img width="100%" class="border" src="{{$estate->imageurl}}" alt=""></span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->

     <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a class="text-dark text-hover-primary mb-1 font-size-lg"> images Estate </a>
                                        <span class="text-muted">
                                              <?php foreach (json_decode($estate->images)as $picture) { ?>
                                            <img src="{{ asset('/uploads/'.$picture) }}" width="100%" class="border"/>
                                            <?php } ?>


                                        </span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->






                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 1-->
                    </div>



                </div>

            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection
