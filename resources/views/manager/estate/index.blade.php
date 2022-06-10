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
                                <a href="" class="text-muted">estates </a>
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
                            <h3 class="card-label">estates List

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
											</span>New estate</a>
                            <!--end::Button-->
                        </div>


                    </div>
                    <div class="card-body">


                            <table class="table table-bordered" id="ajax-table">

                                <thead>
                                <tr>

                                    <th>Id</th>
                                    <th>Name Estate </th>
                                    <th>Type Property</th>
                                    <th>Rent / per : month</th>
                                    <th>status</th>
                                    <th>Owner Name </th>
                                    <th>Units For Estate</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                            </table>

{{--                            <table class="datatable-table" style="display: block;">--}}
{{--                                <thead class="datatable-head">--}}
{{--                                <tr class="datatable-row" style="left: 0px;">--}}


{{--                                    <th data-field="OrderID" class="datatable-cell datatable-cell-sort"><span--}}
{{--                                        ># ID</span></th>--}}

{{--                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span--}}
{{--                                            style="width: 126px;">Estate Name</span></th>--}}


{{--                                    <th data-field="Type" data-autohide-disabled="false"--}}
{{--                                        class="datatable-cell datatable-cell-sort"><span--}}
{{--                                            style="width: 126px;">property Name</span>--}}
{{--                                    </th>--}}
{{--                                    <th data-field="Type" data-autohide-disabled="false"--}}
{{--                                        class="datatable-cell datatable-cell-sort"><span--}}
{{--                                            style="width: 126px;">Rent </span>--}}
{{--                                    </th>--}}
{{--                                    <th data-field="Type" data-autohide-disabled="false"--}}
{{--                                        class="datatable-cell datatable-cell-sort"><span--}}
{{--                                            style="width: 126px;">Status </span>--}}
{{--                                    </th>--}}

{{--                                    <th data-field="Type" data-autohide-disabled="false"--}}
{{--                                        class="datatable-cell datatable-cell-sort"><span--}}
{{--                                            style="width: 126px;">Owner Name </span>--}}
{{--                                    </th>--}}
{{--                                    <th data-field="Type" data-autohide-disabled="false"--}}
{{--                                        class="datatable-cell datatable-cell-sort"><span--}}
{{--                                            style="width: 126px;">Units  </span>--}}
{{--                                    </th>--}}


{{--                                    <th data-field="Actions" data-autohide-disabled="false"--}}
{{--                                        class="datatable-cell datatable-cell-sort"><span--}}
{{--                                            style="width: 125px;">Actions</span></th>--}}

{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody class="datatable-body" style="">--}}
{{--                                @foreach($estates as $estate)--}}

{{--                                    <tr data-row="0" class="datatable-row" style="left: 0px;">--}}

{{--                                        <td data-field="OrderID" aria-label="0374-5070" class="datatable-cell"><span--}}
{{--                                            > # {{$estate->id}}</span></td>--}}
{{--                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span--}}
{{--                                                style="width: 126px;">{{$estate->name}}</span></td>--}}


{{--                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span--}}
{{--                                                style="width: 126px;">{{$estate->property->name}}</span></td>--}}

{{--                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span--}}
{{--                                                style="width: 126px;">{{$estate->rent}}</span></td>--}}

{{--                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span--}}
{{--                                                style="width: 126px;">--}}


{{--                                                <button type="button" class="btn btn-outline-warning btn-sm"--}}
{{--                                                        data-toggle="modal" data-target="#exampleModalLong">--}}
{{--                        {{$estate->status}}--}}
{{--                    </button>--}}

{{--                                            </span></td>--}}
{{--                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span--}}
{{--                                                style="width: 126px;">{{$estate->owner->name}}</span></td>--}}

{{--                                        <td data-field="Country" aria-label="China" class="datatable-cell"><span--}}
{{--                                                style="width: 126px;">{{$estate->apartment->count()}}</span></td>--}}


{{--                                        <td data-field="Actions" data-autohide-disabled="false" aria-label="null"--}}
{{--                                            class="datatable-cell">--}}
{{--                    <span--}}
{{--                        style="overflow: visible; position: relative; width: 125px; display: inline ">--}}

{{--                        <button class="btn btn-sm"> <a style="color: #fff"--}}
{{--                                                       href="{{route('manager.estates.show' , $estate->id)}}">--}}

{{--                                <i class="fa fa-eye"></i>--}}
{{--                            </a> </button>--}}


{{--                        <button class="btn btn-sm"> <a style="color: #fff"--}}
{{--                                                       href="{{route('manager.estates.edit' , $estate->id)}}">--}}

{{--                                <i class="fa fa-edit"></i>--}}
{{--                            </a> </button>--}}


{{--                        <form method="post" style="display: inline"--}}
{{--                              action="{{route('manager.estates.destroy' , $estate->id)}}">--}}
{{--                        @method('DELETE')--}}
{{--                            @csrf--}}
{{--                            <button class="btn btn-sm" type="submit"><i class="fa fa-trash"></i></button>--}}
{{--                        </form>--}}

{{--                    </span>--}}

{{--                                        </td>--}}

{{--                                    </tr>--}}




{{--                                    <!-- Modal-->--}}
{{--                                    <div class="modal fade" id="exampleModalLong" data-backdrop="static"--}}
{{--                                         tabindex="-1" role="dialog" aria-labelledby="staticBackdrop"--}}
{{--                                         aria-hidden="true">--}}
{{--                                        <div class="modal-dialog" role="document">--}}
{{--                                            <form method="post"--}}
{{--                                                  action="{{route('manager.estates.update' , $estate->id)}}">--}}
{{--                                                @csrf--}}
{{--                                                @method('PATCH')--}}

{{--                                                <div class="modal-content">--}}
{{--                                                    <div class="modal-header">--}}
{{--                                                        <h5 class="modal-title" id="exampleModalLabel">--}}
{{--                                                            Update Status For Estate - {{$estate->name }}</h5>--}}
{{--                                                        <button type="button" class="close"--}}
{{--                                                                data-dismiss="modal" aria-label="Close">--}}
{{--                                                            <i aria-hidden="true"--}}
{{--                                                               class="ki ki-close"></i>--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="modal-body">--}}

{{--                                                        <div class="form-group row">--}}
{{--                                                            <label for="example-time-input"--}}
{{--                                                                   class="col-3 col-form-label"> Update Status--}}
{{--                                                            </label>--}}
{{--                                                            <div class="col-8">--}}

{{--                                                                <select name="status"--}}
{{--                                                                        class="form-control"--}}
{{--                                                                >--}}

{{--                                                                    <option value="available"> Available</option>--}}
{{--                                                                    <option value="unavailable"> Un Available</option>--}}
{{--                                                                    <option value="rent"> Rent</option>--}}

{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                    <div class="modal-footer">--}}
{{--                                                        <button type="button"--}}
{{--                                                                class="btn btn-light-primary font-weight-bold"--}}
{{--                                                                data-dismiss="modal">Close--}}
{{--                                                        </button>--}}
{{--                                                        <button type="submit"--}}
{{--                                                                class="btn btn-primary font-weight-bold">--}}
{{--                                                            Update--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </form>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                @endforeach--}}


{{--                                </tbody>--}}
{{--                            </table>--}}


                        <!--end: Datatable-->
                    </div>
                </div>


            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>

    <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="deleteModel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{('Confirm Delete')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form method="post" action="" id="delete_form">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p>{{('Are You Sure To Delete The Selected Row')}}</p>
                        <p>{{('Deleting The Selected Row Results In Deleting All Records Related To It')}}.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{('Cancel')}}</button>
                        <button type="submit" class="btn btn-warning">{{('Delete')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @push('custom-scripts')

        <script type="text/javascript">
            $(document).on('click', '.deleteRecord', (function () {
                var id = $(this).data("id");
                var url = '{{ route('manager.'.\App\Models\Estate::manager_route.'.destroy', ":id") }}';
                url = url.replace(':id', id);
                $('#delete_form').attr('action', url);
            }));

            $(function () {

                var table = $('#ajax-table').DataTable({
                    processing: true,
                    serverSide: true,

                    ajax: "{{ route('manager.getEstates') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'name', name: 'name'},
                        {data: 'property', name: 'property'},
                        {data: 'rent', name: 'rent'},
                        {data: 'status', name: 'status'},
                        {data: 'owner', name: 'owner'},
                        {data: 'units', name: 'units'},
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
