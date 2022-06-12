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
                                <a href="{{route('manager.contracts.index')}}" class="text-muted">contracts</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">contracts Details</a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">{{$contract->name}}</a>
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
                                    <span class="card-label font-weight-bolder text-dark">{{$contract->apartment->name ?? 'NAN'}} - Overview</span>
                                </h3>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-8">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Tenant Name </a>
                                        <span class="text-muted">{{$contract->tenant->name}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Property Leased </a>
                                        <span class="text-muted">{{$contract->apartment->name ?? 'NAN'}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Type  </a>
                                        <span class="text-muted">{{$contract->type}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Monthly Rent </a>
                                        <span class="text-muted"> $ {{$contract->apartment->rent}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">	Commission </a>
                                        <span class="text-muted"> % {{$contract->apartment->commission}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">  Lease Start Date  </a>
                                        <span class="text-muted">{{$contract->start_at}}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg"> Lease End Date  </a>
                                        <span class="text-muted">{{$contract->end_at}}</span>
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
                                    <span class="card-label font-weight-bolder text-dark">{{$contract->name}}  - Overview</span>
                                </h3>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-8">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a class="text-dark text-hover-primary mb-1 font-size-lg"> Image contract </a>
                                        <span class="text-muted"><img width="100%" class="border" src="{{$contract->DocumentUrl}}" alt=""></span>
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
