@extends('layouts.default')

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


                        <!--begin: Datatable-->

                        <table class="ajax-table" style="display: block;">
                            <thead >
                            <tr>


                                <th style="width: 20px"><span># ID</span></th>

                                <th style="width: 150px"><span
                                    >Name</span></th>


                                <th style="width: 150px"><span
                                    >Email </span>
                                </th>

                                <th style="width: 150px"><span
                                    >Phone </span>
                                </th>
                                <th style="width: 150px"><span
                                    >Address </span>
                                </th>
                                <th style="width: 150px"><span
                                    >Rentals </span>
                                </th>


                                <th data-field="Actions" data-autohide-disabled="false"
                                    class="datatable-cell datatable-cell-sort"><span
                                        style="width: 150px;">Actions</span></th>

                            </tr>
                            </thead>
                            <tbody class="datatable-body" style="">
                            {{--                                @foreach($tenants as $tenant)--}}

                            {{--                                    <tr data-row="0" class="datatable-row" style="left: 0px;">--}}

                            {{--                                        <td data-field="OrderID" aria-label="0374-5070" class="datatable-cell"><span--}}
                            {{--                                            > # {{$tenant->id}}</span></td>--}}
                            {{--                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span--}}
                            {{--                                              >{{$tenant->name}}</span></td>--}}
                            {{--                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span--}}
                            {{--                                              >{{$tenant->email}}</span></td>--}}

                            {{--                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span--}}
                            {{--                                              >{{$tenant->phone}}</span></td>--}}

                            {{--                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span--}}
                            {{--                                              >{{$tenant->address}}</span></td>--}}

                            {{--                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span--}}
                            {{--                                              >{{$tenant->contract->count()}}</span></td>--}}


                            {{--                                        <td data-field="Actions" data-autohide-disabled="false" aria-label="null"--}}
                            {{--                                            class="datatable-cell">--}}
                            {{--                    <span--}}
                            {{--                        style="overflow: visible; position: relative; width: 125px; display: inline ">--}}

                            {{--                        <button class="btn btn-sm"> <a style="color: #fff"--}}
                            {{--                                                       href="{{route('manager.tenants.show' , $tenant->id)}}">--}}

                            {{--                                <i class="fa fa-eye"></i>--}}
                            {{--                            </a> </button>--}}


                            {{--                        <button class="btn btn-sm"> <a style="color: #fff"--}}
                            {{--                                                       href="{{route('manager.tenants.edit' , $tenant->id)}}">--}}

                            {{--                                <i class="fa fa-edit"></i>--}}
                            {{--                            </a> </button>--}}


                            {{--                        <form method="post" style="display: inline"--}}
                            {{--                              action="{{route('manager.tenants.destroy' , $tenant->id)}}">--}}
                            {{--                        @method('DELETE')--}}
                            {{--                            @csrf--}}
                            {{--                            <button class="btn btn-sm" type="submit"><i class="fa fa-trash"></i></button>--}}
                            {{--                        </form>--}}

                            {{--                    </span>--}}

                            {{--                                        </td>--}}

                            {{--                                    </tr>--}}
                            {{--                                @endforeach--}}


                            </tbody>
                        </table>


                    </div>
                </div>



            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    @push('custom-scripts')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(function () {

                var table = $('.ajax-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('manager.getTenants') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'name', name: 'name'},
                        {data: 'email', name: 'email'},
                        {data: 'phone', name: 'phone'},
                        {data: 'address', name: 'address'},
                        {data: 'rentals', name: 'rentals'},
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
