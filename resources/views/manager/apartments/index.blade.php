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
                        <h2 class="subheader-title text-dark font-weight-bold my-2 mr-3">Apartments</h2>

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
                            <h3 class="card-label">Apartments List

                            </h3>
                        </div>
                        <div class="card-toolbar">

                            <!--begin::Button-->
                            <a href="{{route('manager.apartments.create')}}"
                               class="btn btn-secondary font-weight-bolder">
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
											</span>New Apartment</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">


                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="data-table-search" class="form-control" autofocus
                                           placeholder="Search">
                                </div>
                            </div>

{{--                            <div class="col-md-6">--}}


{{--                                <form method="post" action="#" style="display: inline-block;">--}}
{{--                                    @csrf--}}
{{--                                    @method('delete')--}}
{{--                                    <input type="hidden" name="record_ids" id="record-ids">--}}
{{--                                    <button type="submit" class="btn btn-danger" id="bulk-delete" disabled="true"><i--}}
{{--                                            class="fa fa-trash"></i> Bulk Delete--}}
{{--                                    </button>--}}
{{--                                </form><!-- end of form -->--}}

{{--                            </div>--}}

                        </div><!-- end of row -->

                        <div class="row">

                            <div class="col-md-12">

                                <div class="table-responsive">

                                    <table class="table datatable table-secondary" id="apartments-table"
                                           style="width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div class="animated-checkbox">
                                                    <label class="m-0">
                                                        <input type="checkbox" id="record__select-all">
                                                        <span class="label-text"></span>
                                                    </label>
                                                </div>
                                            </th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Rent</th>
                                            <th> Status</th>
                                            <th> Parent Estate</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                    </table>

                                </div><!-- end of table responsive -->

                            </div><!-- end of col -->

                        </div><!-- end of row -->

                    </div>


                    {{--                    <div class="card-body">--}}


                    {{--                        <!--begin: Datatable-->--}}
                    {{--                        <div class="datatable datatable-default datatable-primary datatable-loaded">--}}
                    {{--                            <table class="table datatable-table"--}}
                    {{--                                   id="kt_datatable"--}}
                    {{--                                   style="display: block;">--}}
                    {{--                                <thead class="datatable-head">--}}

                    {{--                                <tr class="datatable-row" style="left: 0px;">--}}
                    {{--                                    <th class="datatable-cell datatable-toggle-detail"><span></span></th>--}}

                    {{--                                    <th data-field="Order ID" class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                        >#ID</span></th>--}}


                    {{--                                    <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                            style="width: 110px;">Name</span></th>--}}

                    {{--                                    <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                            style="width: 110px;">Details</span></th>--}}

                    {{--                                    <th data-field="Color" class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                            style="width: 110px;">Rent</span></th>--}}


                    {{--                                    <th data-field="Status" data-autohide-disabled="false"--}}
                    {{--                                        class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                            style="width: 110px;">Status </span>--}}

                    {{--                                    <th data-field="Status" data-autohide-disabled="false"--}}
                    {{--                                        class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                            style="width: 110px;">Parent Estate </span></th>--}}

                    {{--                                    <th data-field="Status" data-autohide-disabled="false"--}}
                    {{--                                        class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                            style="width: 110px;">Action </span></th>--}}


                    {{--                                </tr>--}}
                    {{--                                </thead>--}}
                    {{--                                <tbody style="" class="datatable-body">--}}
                    {{--                                @foreach($apartments as $apartment)--}}
                    {{--                                    <tr data-row="0" class="datatable-row" style="left: 0px;">--}}
                    {{--                                        <td class="datatable-cell datatable-toggle-detail"><a--}}
                    {{--                                                class="datatable-toggle-detail" href=""><i--}}
                    {{--                                                    class="fa fa-caret-right"></i></a></td>--}}


                    {{--                                        <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span--}}
                    {{--                                            >{{$apartment->id}}</span></td>--}}

                    {{--                                        <td data-field="Car Model" aria-label="Range Rover" class="datatable-cell"><span--}}
                    {{--                                                style="width: 110px;">{{$apartment->name}}--}}
                    {{--</span></td>--}}
                    {{--                                        <td data-field="Color" aria-label="Orange" class="datatable-cell"><span--}}
                    {{--                                                style="width: 110px;">{{$apartment->description}}</span></td>--}}

                    {{--                                        <td data-field="Color" aria-label="Orange" class="datatable-cell"><span--}}
                    {{--                                                style="width: 110px;"> $ {{$apartment->rent}} </span>--}}
                    {{--                                        </td>--}}

                    {{--                                        <td data-field="Color" aria-label="Orange" class="datatable-cell"><span--}}
                    {{--                                                style="width: 110px;">   <span--}}
                    {{--                                                    class="label font-weight-bold label-lg  label-light-info label-inline">  {{$apartment->status}}</span> </span>--}}
                    {{--                                        </td>--}}


                    {{--                                        <td data-field="Deposit Paid" aria-label="$22672.60"--}}
                    {{--                                            class="datatable-cell"><span--}}
                    {{--                                                style="width: 110px;">--}}
                    {{--                                          {{$apartment->estate->name}}--}}
                    {{--                                            </span></td>--}}
                    {{--                                        <td data-field="Actions" data-autohide-disabled="false" aria-label="null"--}}
                    {{--                                            class="datatable-cell">--}}
                    {{--                    <span--}}
                    {{--                        style="overflow: visible; position: relative; width: 125px; display: inline ">--}}

                    {{--                        <button class="btn btn-sm"> <a style="color: #fff"--}}
                    {{--                                                       href="{{route('manager.apartments.show' , $apartment->id)}}">--}}

                    {{--                                <i class="fa fa-eye"></i>--}}
                    {{--                            </a> </button>--}}


                    {{--                        <button class="btn btn-sm"> <a style="color: #fff"--}}
                    {{--                                                       href="{{route('manager.apartments.edit' , $apartment->id)}}">--}}

                    {{--                                <i class="fa fa-edit"></i>--}}
                    {{--                            </a> </button>--}}


                    {{--                        <form method="post" style="display: inline"--}}
                    {{--                              action="{{route('manager.apartments.destroy' , $apartment->id)}}">--}}
                    {{--                        @method('DELETE')--}}
                    {{--                            @csrf--}}
                    {{--                            <button class="btn btn-sm" type="submit"><i class="fa fa-trash"></i></button>--}}
                    {{--                        </form>--}}

                    {{--                    </span>--}}

                    {{--                                        </td>--}}


                    {{--                                    </tr>--}}
                    {{--                                @endforeach--}}


                    {{--                                </tbody>--}}
                    {{--                            </table>--}}

                    {{--                        </div>--}}
                    {{--                        <!--end: Datatable-->--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>


    @push('custom-scripts')

        <script type="text/javascript">
            $(document).on('click', '.deleteRecord', (function () {
                var id = $(this).data("id");
                var url = '{{ route('manager.'.\App\Models\User::manager_route.'.destroy', ":id") }}';
                url = url.replace(':id', id);
                $('#delete_form').attr('action', url);
            }));

            $(function () {

                var table = $('#apartments-table').DataTable({
                    dom: "tiplr",
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('manager.getApartments') }}",
                    columns: [
                        {data: 'record_select', name: 'record_select', searchable: false, sortable: false, width: '1%'},
                        {data: 'name', name: 'name'},
                        {data: 'description', name: 'description'},
                        {data: 'rent', name: 'rent'},
                        {data: 'status', name: 'status'},
                        {data: 'estate', name: 'estate'},
                        {data: 'actions', name: 'actions', searchable: false, sortable: false, width: '20%'},


                    ],
                    order: [[5, 'desc']],
                    drawCallback: function (settings) {
                        $('.record__select').prop('checked', false);
                        $('#record__select-all').prop('checked', false);
                        $('#record-ids').val();
                        $('#bulk-delete').attr('disabled', true);
                    }
                });
                $('#data-table-search').keyup(function () {
                    table.search(this.value).draw();
                })

            });
        </script>

    @endpush

@endsection
