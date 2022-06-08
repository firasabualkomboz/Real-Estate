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
                                <a href="" class="text-muted">Properties </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">Properties List</a>
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
                            <h3 class="card-label">Properties List

                            </h3>
                        </div>

                        <div class="card-toolbar">

                            <!--begin::Button-->
                            <a href="{{route('manager.properties.create')}}" class="btn btn-primary font-weight-bolder">
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
											</span>New Property</a>
                            <!--end::Button-->
                        </div>


                    </div>
                    <div class="card-body">

                        <!--begin: Datatable-->
                        <div
                            class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                            id="kt_datatable" style="">
                            <table class="datatable-table" style="display: block;">
                                <thead class="datatable-head">
                                <tr class="datatable-row" style="left: 0px;">
                                    <th data-field="RecordID"
                                        class="datatable-cell-center datatable-cell datatable-cell-check"><span
                                            style="width: 20px;"><label
                                                class="checkbox checkbox-single checkbox-all"><input type="checkbox">&nbsp;<span></span></label></span>
                                    </th>
                                    <th data-field="OrderID" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 126px;"># ID</span></th>
                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 126px;">Name</span></th>


                                    <th data-field="Type" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span
                                            style="width: 126px;">Apartments Count </span></th>
                                    <th data-field="Actions" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span
                                            style="width: 125px;">Actions</span></th>
                                </tr>
                                </thead>
                                <tbody class="datatable-body" style="">
                                @foreach($properties as $property)

                                    <tr data-row="0" class="datatable-row" style="left: 0px;">


                                        <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                            data-field="RecordID" aria-label="1"><span style="width: 20px;"><label
                                                    class="checkbox checkbox-single"><input type="checkbox" value="1">&nbsp;<span></span></label></span>
                                        </td>
                                        <td data-field="OrderID" aria-label="0374-5070" class="datatable-cell"><span
                                                style="width: 126px;">{{$property->id}}</span></td>
                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                style="width: 126px;">{{$property->name}}</span></td>


                                        <td data-field="Type" data-autohide-disabled="false" aria-label="2"
                                            class="datatable-cell"><span style="width: 126px;"><span
                                                    class="label label-primary label-dot mr-2"></span><span
                                                    class="font-weight-bold text-primary"></span></span>
                                        </td>
                                        <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                            class="datatable-cell">
                    <span
                        style="overflow: visible; position: relative; width: 125px; display: inline ">

                        <button class="btn btn-warning btn-sm"> <a style="color: #fff"
                                                                   href="{{route('manager.properties.edit' , $property->id)}}">Update</a> </button>

                        <form method="post" style="display: inline"
                              action="{{route('manager.properties.destroy' , $property->id)}}">
                        @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
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
