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
                                <a href="" class="text-muted">Tenants </a>
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


                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label">Tenants List

                            </h3>
                        </div>

                        <div class="card-toolbar">

                            <!--begin::Button-->
                            <a href="{{route('manager.tenants.create')}}" class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"></rect>
														<circle fill="#000000" cx="9" cy="15" r="6"></circle>
														<path
                                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                                            fill="#000000" opacity="0.3"></path>
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>New Tenant</a>
                            <!--end::Button-->
                        </div>


                    </div>
                    <div class="card-body">
                        <!--begin: Search Form-->
                        <!--begin::Search Form-->
                        <div class="mb-7">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-xl-8">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="input-icon">
                                                <input type="text" class="form-control" placeholder="Search..."
                                                       id="kt_datatable_search_query">
                                                <span>
                    <i class="flaticon2-search-1 text-muted"></i>
                    </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="d-flex align-items-center">
                                                <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                                <div class="dropdown bootstrap-select form-control"><select
                                                        class="form-control" id="kt_datatable_search_status"
                                                        tabindex="-98">
                                                        <option value="">All</option>
                                                        <option value="1">Pending</option>
                                                        <option value="2">Delivered</option>
                                                        <option value="3">Canceled</option>
                                                        <option value="4">Success</option>
                                                        <option value="5">Info</option>
                                                        <option value="6">Danger</option>
                                                    </select>
                                                    <button type="button"
                                                            class="btn dropdown-toggle btn-light bs-placeholder"
                                                            data-toggle="dropdown" role="combobox"
                                                            aria-owns="bs-select-1" aria-haspopup="listbox"
                                                            aria-expanded="false" data-id="kt_datatable_search_status"
                                                            title="All">
                                                        <div class="filter-option">
                                                            <div class="filter-option-inner">
                                                                <div class="filter-option-inner-inner">All</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                    <div class="dropdown-menu ">
                                                        <div class="inner show" role="listbox" id="bs-select-1"
                                                             tabindex="-1">
                                                            <ul class="dropdown-menu inner show"
                                                                role="presentation"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="d-flex align-items-center">
                                                <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                                <div class="dropdown bootstrap-select form-control"><select
                                                        class="form-control" id="kt_datatable_search_type"
                                                        tabindex="-98">
                                                        <option value="">All</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Retail</option>
                                                        <option value="3">Direct</option>
                                                    </select>
                                                    <button type="button"
                                                            class="btn dropdown-toggle btn-light bs-placeholder"
                                                            data-toggle="dropdown" role="combobox"
                                                            aria-owns="bs-select-2" aria-haspopup="listbox"
                                                            aria-expanded="false" data-id="kt_datatable_search_type"
                                                            title="All">
                                                        <div class="filter-option">
                                                            <div class="filter-option-inner">
                                                                <div class="filter-option-inner-inner">All</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                    <div class="dropdown-menu ">
                                                        <div class="inner show" role="listbox" id="bs-select-2"
                                                             tabindex="-1">
                                                            <ul class="dropdown-menu inner show"
                                                                role="presentation"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                    <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                                </div>
                            </div>
                        </div>
                        <!--end::Search Form-->
                        <!--end: Search Form-->
                        <!--begin: Datatable-->
                        <div
                            class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                            id="kt_datatable" style="">
                            <table class="datatable-table" style="display: block;">
                                <thead class="datatable-head">
                                <tr class="datatable-row" style="left: 0px;">


                                    <th data-field="OrderID" class="datatable-cell datatable-cell-sort"><span
                                          ># ID</span></th>

                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 126px;">Name</span></th>


                                    <th data-field="Type" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span
                                            style="width: 126px;">Email </span>
                                    </th>

                                    <th data-field="Type" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span
                                            style="width: 126px;">Phone </span>
                                    </th>
                                    <th data-field="Type" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span
                                            style="width: 126px;">Address </span>
                                    </th>
                                    <th data-field="Type" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span
                                            style="width: 126px;">Rentals </span>
                                    </th>



                                    <th data-field="Actions" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span
                                            style="width: 125px;">Actions</span></th>

                                </tr>
                                </thead>
                                <tbody class="datatable-body" style="">
                                @foreach($tenants as $tenant)

                                    <tr data-row="0" class="datatable-row" style="left: 0px;">

                                        <td data-field="OrderID" aria-label="0374-5070" class="datatable-cell"><span
                                                > # {{$tenant->id}}</span></td>
                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                style="width: 126px;">{{$tenant->name}}</span></td>
                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                style="width: 126px;">{{$tenant->email}}</span></td>

                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                style="width: 126px;">{{$tenant->phone}}</span></td>

                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                style="width: 126px;">{{$tenant->address}}</span></td>

                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                style="width: 126px;">{{$tenant->contract->count()}}</span></td>



                                        <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                            class="datatable-cell">
                    <span
                        style="overflow: visible; position: relative; width: 125px; display: inline ">

                        <button class="btn btn-sm"> <a style="color: #fff"
                                                       href="{{route('manager.tenants.show' , $tenant->id)}}">

                                <i class="fa fa-eye"></i>
                            </a> </button>


                        <button class="btn btn-sm"> <a style="color: #fff"
                                                       href="{{route('manager.tenants.edit' , $tenant->id)}}">

                                <i class="fa fa-edit"></i>
                            </a> </button>


                        <form method="post" style="display: inline"
                              action="{{route('manager.tenants.destroy' , $tenant->id)}}">
                        @method('DELETE')
                            @csrf
                            <button class="btn btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                        </form>

                    </span>

                                        </td>

                                    </tr>
                                @endforeach


                                </tbody>
                            </table>

                        </div>
                        <!--end: Datatable-->
                    </div>
                </div>


            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection
