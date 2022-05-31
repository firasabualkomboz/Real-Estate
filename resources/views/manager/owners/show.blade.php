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
                                <a href="" class="text-muted">Owners </a>
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
                    <div class="col-lg-8">
                        <div class="card card-custom">
                            <div class="card-header card-header-tabs-line">
                                <div class="card-toolbar">
                                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
                                                                    <span class="nav-icon">
                                                                        <i class="flaticon2-chat-1"></i>
                                                                    </span>
                                                <span class="nav-text">Estates</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_4">
                                                                    <span class="nav-icon">
                                                                        <i class="flaticon2-chat-1"></i>
                                                                    </span>
                                                <span class="nav-text">Apartments</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                                                                    <span class="nav-icon">
                                                                        <i class="flaticon2-drop"></i>
                                                                    </span>
                                                <span class="nav-text">Earnings</span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="kt_tab_pane_1_4" role="tabpanel"
                                         aria-labelledby="kt_tab_pane_1_4">


                                        <!--begin: Datatable-->
                                        <div
                                            class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                                            id="kt_datatable" style="">
                                            <table class="datatable-table" style="display: block;">
                                                <thead class="datatable-head">

                                                <tr class="datatable-row" style="left: 0px;">


                                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                                        >#</span></th>

                                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;">Estates</span></th>


                                                    <th data-field="Type" data-autohide-disabled="false"
                                                        class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;"> Name </span>
                                                    </th>

                                                    <th data-field="Type" data-autohide-disabled="false"
                                                        class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;">Units  </span>
                                                    </th>
                                                    <th data-field="Type" data-autohide-disabled="false"
                                                        class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;">Status  </span>
                                                    </th>
                                                    <th data-field="Type" data-autohide-disabled="false"
                                                        class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;">View </span>
                                                    </th>
                                                </tr>

                                                </thead>
                                                <tbody class="datatable-body" style="">
                                                @forelse($owner->estate as $item)

                                                    <tr data-row="0" class="datatable-row" style="left: 0px;">


                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                            >2</span></td>

                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;">{{$item->name}}</span></td>

                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;">{{$item->name}}</span></td>
                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;">{{$item->apartment->count()}}</span>
                                                        </td>

                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;">{{$item->status}}</span></td>

                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;">{{$item->address}}</span></td>


                                                        {{--                                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"--}}
                                                        {{--                                                    class="datatable-cell">--}}
                                                        {{--                                                    <span--}}
                                                        {{--                                                    style="overflow: visible; position: relative; width: 125px; display: inline ">--}}
                                                        {{--                                                    --}}
                                                        {{--                                                    <button class="btn btn-sm"> <a style="color: #fff"--}}
                                                        {{--                                                    href="{{route('manager.estates.show' , $item->id)}}">--}}
                                                        {{--                                                    --}}
                                                        {{--                                                    <i class="fa fa-eye"></i>--}}
                                                        {{--                                                    </a> </button>--}}
                                                        {{--                                                    --}}
                                                        {{--                                                    --}}
                                                        {{--                                                    --}}
                                                        {{--                                                    --}}
                                                        {{--                                                    --}}
                                                        {{--                                                    </span>--}}
                                                        {{--                                                    --}}
                                                        {{--                                                    </td>--}}


                                                    </tr>
                                                @empty
                                                    <td class="datatable-cell">There is now Estate For you</td>
                                                @endforelse


                                                </tbody>
                                            </table>

                                        </div>
                                        <!--end: Datatable-->


                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_3_4" role="tabpanel"
                                         aria-labelledby="kt_tab_pane_1_4">


                                        <!--begin: Datatable-->
                                        <div
                                            class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                                            id="kt_datatable" style="">
                                            <table class="datatable-table" style="display: block;">
                                                <thead class="datatable-head">

                                                <tr class="datatable-row" style="left: 0px;">


                                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                                        >#</span></th>

                                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;">Name</span></th>


                                                    {{--                                                    <th data-field="Type" data-autohide-disabled="false"--}}
                                                    {{--                                                        class="datatable-cell datatable-cell-sort"><span--}}
                                                    {{--                                                            style="width: 126px;"> Rent </span>--}}
                                                    {{--                                                    </th>--}}
                                                    {{--                                                    --}}

                                                    {{--                                                    <th data-field="Type" data-autohide-disabled="false"--}}
                                                    {{--                                                        class="datatable-cell datatable-cell-sort"><span--}}
                                                    {{--                                                            style="width: 126px;"> Commission  </span>--}}
                                                    {{--                                                    </th>--}}
                                                    <th data-field="Type" data-autohide-disabled="false"
                                                        class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;">Status  </span>
                                                    </th>
                                                    <th data-field="Type" data-autohide-disabled="false"
                                                        class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;"> Gross profit </span>
                                                    </th>

                                                    <th data-field="Type" data-autohide-disabled="false"
                                                        class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;"> Assign to  </span>
                                                    </th>
                                                </tr>

                                                </thead>
                                                <tbody class="datatable-body" style="">

                                                @forelse($owner->apartment as $item)

                                                    <tr data-row="0" class="datatable-row" style="left: 0px;">


                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                            >2</span></td>

                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;">{{$item->name}}</span></td>


                                                        {{--                                                        <td data-field="Country" aria-label="China"--}}
                                                        {{--                                                            class="datatable-cell"><span--}}
                                                        {{--                                                                style="width: 126px;"> $ {{$item->rent}}</span></td>--}}
                                                        {{--                                                        <td data-field="Country" aria-label="China"--}}
                                                        {{--                                                            class="datatable-cell"><span--}}
                                                        {{--                                                                style="width: 126px;"> % {{$item->commission}}</span>--}}
                                                        {{--                                                        </td>--}}

                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;"
                                                                class="badge badge-primary">{{ strtoupper($item->status)  }}</span>
                                                        </td>

                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;">
                                                                @php
                                                                    $get = $item->commission / 100;
                                                        $finalProfitCompany = $get * $item->rent ;
                                                        echo '$ ' . ( $item->rent -   $finalProfitCompany)  ;
                                                                @endphp

                                                            </span></td>

                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;">



                    <!-- Button trigger modal-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Assign to
                    </button>

                                                            </span></td>

                                                    </tr>


                                                    <!-- Modal-->
                                                    <div class="modal fade" id="exampleModalLong" data-backdrop="static"
                                                         tabindex="-1" role="dialog" aria-labelledby="staticBackdrop"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <form method="post"
                                                                  action="{{route('manager.assignApartmentToOwner')}}">
                                                                @csrf
                                                                @method('PUT')

                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Handing over the apartment to an OWNER</h5>
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                            <i aria-hidden="true"
                                                                               class="ki ki-close"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <P>current Owner : {{$item->owner->name}}</P>

                                                                        <div class="form-group row">
                                                                            <label for="example-time-input"
                                                                                   class="col-3 col-form-label"> Assign
                                                                                To
                                                                            </label>
                                                                            <div class="col-8">

                                                                                <select name="owner_id"
                                                                                        class="form-control"
                                                                                     >
                                                                                    @foreach($owners as $owner)
                                                                                        <option
                                                                                            value="{{$owner->id}}">{{$owner->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                                class="btn btn-light-primary font-weight-bold"
                                                                                data-dismiss="modal">Close
                                                                        </button>
                                                                        <button type="submit"
                                                                                class="btn btn-primary font-weight-bold">
                                                                            Update
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>

                                                @empty
                                                    <td class="datatable-cell">There is now Apartment For you</td>
                                                @endforelse


                                                </tbody>
                                            </table>

                                        </div>
                                        <!--end: Datatable-->


                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel"
                                         aria-labelledby="kt_tab_pane_2_4">

                                        <!--begin: Datatable-->
                                        <div
                                            class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                                            id="kt_datatable" style="">
                                            <table class="datatable-table" style="display: block;">
                                                <thead class="datatable-head">
                                                <tr class="datatable-row" style="left: 0px;">


                                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                                        >#</span></th>

                                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;">Month</span></th>


                                                    <th data-field="Type" data-autohide-disabled="false"
                                                        class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;">Invoices </span>
                                                    </th>

                                                    <th data-field="Type" data-autohide-disabled="false"
                                                        class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;">Total Collected </span>
                                                    </th>
                                                    <th data-field="Type" data-autohide-disabled="false"
                                                        class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;">Company Commission   </span>
                                                    </th>
                                                    <th data-field="Type" data-autohide-disabled="false"
                                                        class="datatable-cell datatable-cell-sort"><span
                                                            style="width: 126px;">Net Income  </span>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="datatable-body" style="">

                                                @foreach($owner->apartment as $item)

                                                    <tr data-row="0" class="datatable-row" style="left: 0px;">


                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                            >2</span></td>

                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;">{{$item->name}}</span></td>


                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;">{{$item->name}}</span></td>
                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;">{{$item->email}}</span></td>

                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;">{{$item->phone}}</span></td>

                                                        <td data-field="Country" aria-label="China"
                                                            class="datatable-cell"><span
                                                                style="width: 126px;">{{$owner->address}}</span></td>

                                                    </tr>

                                                @endforeach

                                                </tbody>
                                            </table>

                                        </div>
                                        <!--end: Datatable-->


                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4">
                        <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
                            <!--begin::Profile Card-->
                            <div class="card card-custom card-stretch">
                                <!--begin::Body-->
                                <div class="card-body pt-4">

                                    <!--begin::User-->
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                            <div class="symbol-label"
                                                 style="background-image:url('{{$owner->imageurl}}')"></div>
                                        </div>
                                        <div>

                                            <a href="#"
                                               class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{$owner->name}}</a>
                                            <div class="mt-2">
                                                <a href="#"
                                                   class="btn btn-sm btn-primary font-weight-bold mr-2 py-2 px-3 px-xxl-5 my-1">Edit</a>
                                                <a href="#"
                                                   class="btn btn-sm btn-danger font-weight-bold py-2 px-3 px-xxl-5 my-1">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Contact-->
                                    <div class="py-9">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="font-weight-bold mr-2">Email:</span>
                                            <a href="#" class="text-muted text-hover-primary">{{$owner->email}}</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="font-weight-bold mr-2">Phone:</span>
                                            <span class="text-muted">{{$owner->phone}}</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="font-weight-bold mr-2">Location:</span>
                                            <span class="text-muted">{{$owner->address}}</span>
                                        </div>
                                    </div>
                                    <!--end::Contact-->

                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Profile Card-->
                        </div>
                    </div>


                </div>


            </div>


            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>

@endsection

