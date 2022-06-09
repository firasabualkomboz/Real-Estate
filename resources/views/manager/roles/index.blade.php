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
                        <h2 class="subheader-title text-dark font-weight-bold my-2 mr-3">Real Estate </h2>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">roles</a>
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
                            <h3 class="card-label">Local Datasource
                                <span
                                    class="text-muted pt-2 font-size-sm d-block">Javascript array as data source</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Dropdown-->
                            <div class="dropdown dropdown-inline mr-2">
                                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
													<svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path
                                                                d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                                fill="#000000" opacity="0.3"></path>
															<path
                                                                d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                                fill="#000000"></path>
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>Export
                                </button>
                                <!--begin::Dropdown Menu-->
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi flex-column navi-hover py-2">
                                        <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                            Choose an option:
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-print"></i>
																</span>
                                                <span class="navi-text">Print</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-copy"></i>
																</span>
                                                <span class="navi-text">Copy</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
                                                <span class="navi-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
                                                <span class="navi-text">CSV</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-pdf-o"></i>
																</span>
                                                <span class="navi-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                                <!--end::Dropdown Menu-->
                            </div>
                            <!--end::Dropdown-->
                            <!--begin::Button-->
                            <a href="#" class="btn btn-primary font-weight-bolder">
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
											</span>New Record</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">

                            <table class="table table-bordered" id="ajax-table">
                                <tr>
                                    <th># ID </th>
                                    <th>Role Name </th>
                                    <th>Action</th>
                                </tr>

                                <tbody>


                                </tbody>
                            </table>

                    </div>
                </div>


                {{--                <div class="card card-custom">--}}
                {{--                    <div class="card-header flex-wrap border-0 pt-6 pb-0">--}}
                {{--                        <div class="card-title">--}}
                {{--                            <h3 class="card-label">roles List--}}

                {{--                            </h3>--}}
                {{--                        </div>--}}

                {{--                        <div class="card-toolbar">--}}

                {{--                            <!--begin::Button-->--}}
                {{--                            <a href="{{route('manager.roles.create')}}" class="btn btn-secondary font-weight-bolder">--}}
                {{--											<span class="svg-icon svg-icon-md">--}}
                {{--												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->--}}
                {{--												<svg xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"--}}
                {{--                                                     height="24px" viewBox="0 0 24 24" version="1.1">--}}
                {{--													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                {{--														<rect x="0" y="0" width="24" height="24"></rect>--}}
                {{--														<circle fill="#000000" cx="9" cy="15" r="6"></circle>--}}
                {{--														<path--}}
                {{--                                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"--}}
                {{--                                                            fill="#000000" opacity="0.3"></path>--}}
                {{--													</g>--}}
                {{--												</svg>--}}
                {{--                                                <!--end::Svg Icon-->--}}
                {{--											</span>New Role</a>--}}
                {{--                            <!--end::Button-->--}}
                {{--                        </div>--}}


                {{--                    </div>--}}
                {{--                    <div class="card-body">--}}

                {{--                        <table class="table table-bordered datatable-table ajax-table"--}}
                {{--                        >--}}
                {{--                            <thead class="datatable-head">--}}

                {{--                            <tr class="datatable-row" style="left: 0px;">--}}

                {{--                                <th data-field="Order ID" class="datatable-cell datatable-cell-sort"><span--}}
                {{--                                    >#ID</span></th>--}}

                {{--                                <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span--}}
                {{--                                    > Name </span></th>--}}


                {{--                                <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span--}}
                {{--                                    > Action </span></th>--}}


                {{--                            </tr>--}}
                {{--                            </thead>--}}
                {{--                            <tbody style="" class="datatable-body">--}}

                {{--                            --}}{{--                            @foreach ($roles as $tag )--}}
                {{--                            --}}{{--                                <tr data-row="0" class="datatable-row" style="left: 0px;">--}}


                {{--                            --}}{{--                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span--}}
                {{--                            --}}{{--                                        >{{$tag->id}}</span></td>--}}

                {{--                            --}}{{--                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span--}}
                {{--                            --}}{{--                                        >{{$tag->name}}</span></td>--}}


                {{--                            --}}{{--                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"--}}
                {{--                            --}}{{--                                        class="datatable-cell">--}}
                {{--                            --}}{{--            <span--}}
                {{--                            --}}{{--                style="overflow: visible; position: relative; width: 125px; display: inline ">--}}

                {{--                            --}}{{--                <button class="btn btn-sm"> <a style="color: #fff"--}}
                {{--                            --}}{{--                                               href="{{route('manager.roles.edit' , $tag->id)}}">--}}

                {{--                            --}}{{--                        <i class="fa fa-edit"></i>--}}
                {{--                            --}}{{--                    </a> </button>--}}





                {{--                            --}}{{--                <form method="post" style="display: inline"--}}
                {{--                            --}}{{--                      action="{{route('manager.roles.destroy' , $tag->id)}}">--}}
                {{--                            --}}{{--                @method('DELETE')--}}
                {{--                            --}}{{--                    @csrf--}}
                {{--                            --}}{{--                    <button class="btn btn-sm" type="submit"><i class="fa fa-trash"></i></button>--}}
                {{--                            --}}{{--                </form>--}}

                {{--                            --}}{{--            </span>--}}

                {{--                            --}}{{--                                    </td>--}}


                {{--                            --}}{{--                                </tr>--}}

                {{--                            --}}{{--                            @endforeach--}}


                {{--                            </tbody>--}}
                {{--                        </table>--}}
                {{--                        --}}{{--                        {{$roles->links()}}--}}

                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>

    @push('custom-scripts')

        {{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>--}}
{{--        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>--}}
        {{--        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>--}}
{{--        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>--}}


        <script type="text/javascript">
            $(function () {
                var table = $('#ajax-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('manager.getRoles') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'id', name: 'id'},
                        {data: 'name', name: 'name'},

                        {
                            data: 'action',
                            name: 'action',
                            orderable: true,
                            searchable: true
                        },
                    ]
                });

            });
        </script>
    @endpush
@endsection
