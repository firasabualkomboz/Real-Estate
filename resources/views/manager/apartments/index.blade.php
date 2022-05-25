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
                                <a href="" class="text-muted">Apartments</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">Apartments List</a>
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
                            <h3 class="card-label">Estates List
                                <span
                                    class="d-block text-muted pt-2 font-size-sm">Datatable initialized from HTML table</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">

                            <!--begin::Button-->
                            <a href="{{route('manager.estates.create')}}" class="btn btn-primary font-weight-bolder">
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
											</span>New Estate</a>
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
                        <div class="datatable datatable-default datatable-primary datatable-loaded">
                            <table class="table table-striped datatable-bordered datatable-head-custom datatable-table"
                                   id="kt_datatable"
                                   style="display: block;">
                                <thead class="datatable-head">

                                <tr class="datatable-row" style="left: 0px;">
                                    <th class="datatable-cell datatable-toggle-detail"><span></span></th>

                                    <th data-field="Order ID" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 110px;">#ID</span></th>


                                    <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 110px;">Name</span></th>

                                    <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 110px;">Year Built</span></th>

                                    <th data-field="Color" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 110px;">Space</span></th>

                                    <th data-field="Status" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span
                                            style="width: 110px;">Type Property </span>

                                    <th data-field="Status" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span
                                            style="width: 110px;">Estate </span></th>

                                    <th data-field="Status" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span
                                            style="width: 110px;">Action </span></th>


                                </tr>
                                </thead>
                                <tbody style="" class="datatable-body">
                                @foreach($apartments as $apartment)
                                    <tr data-row="0" class="datatable-row" style="left: 0px;">
                                        <td class="datatable-cell datatable-toggle-detail"><a
                                                class="datatable-toggle-detail" href=""><i
                                                    class="fa fa-caret-right"></i></a></td>


                                        <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span
                                                style="width: 110px;">{{$apartment->id}}</span></td>

                                        <td data-field="Car Model" aria-label="Range Rover" class="datatable-cell"><span
                                                style="width: 110px;">{{$apartment->name}}
</span></td>
                                        <td data-field="Color" aria-label="Orange" class="datatable-cell"><span
                                                style="width: 110px;">{{$apartment->year_built}}</span></td>


                                        <td data-field="Color" aria-label="Orange" class="datatable-cell"><span
                                                style="width: 110px;"> <strong> {{$apartment->space}} </strong> - m2</span>
                                        </td>


                                        <td data-field="Deposit Paid" aria-label="$22672.60"
                                            class="datatable-cell"><span
                                                style="width: 110px;">                                            <span
                                                    class="label font-weight-bold label-lg  label-light-info label-inline">{{$apartment->property->name}}</span>
</span>
                                        </td>


                                        <td data-field="Deposit Paid" aria-label="$22672.60"
                                            class="datatable-cell"><span
                                                style="width: 110px;">
                                            <span
                                                class="label font-weight-bold label-lg  label-light-success label-inline">{{$apartment->estate->name}}</span>
                                            </span></td>

                                        <td data-field="Deposit Paid" aria-label="$22672.60"
                                            class="datatable-cell">

                                            <span
                                                style="width: 110px;">
                                                <a href="{{route('manager.apartments.show' , $apartment->id)}}">  <i
                                                        class="fa fa-eye"></i> </a>
                                            </span>
{{--                                            <span>--}}
{{--                                                <form method="post"--}}
{{--                                                      action="{{route('manager.apartments.destroy' , $apartment->id)}}">--}}
{{--                                                @method('DELETE')--}}
{{--                                                    @csrf--}}
{{--                                              <button class="btn btn-sm" type="submit">   <i class="fa fa-trash"></i></button>--}}
{{--                                            </form>--}}


{{--                                            </span>--}}


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
