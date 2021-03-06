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
                                <a href="" class="text-muted">employers</a>
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
                            <h3 class="card-label">employers List

                            </h3>
                        </div>

                        <div class="card-toolbar">

                            <!--begin::Button-->
                            <a href="{{route('manager.employers.create')}}"
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
											</span>New employer</a>
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

                            <div class="col-md-6">


                                <form method="post" action="#" style="display: inline-block;">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="record_ids" id="record-ids">
                                    <button type="submit" class="btn btn-danger" id="bulk-delete" disabled="true"><i
                                            class="fa fa-trash"></i> Bulk Delete
                                    </button>
                                </form><!-- end of form -->

                            </div>

                        </div><!-- end of row -->

                        <div class="row">

                            <div class="col-md-12">

                                <div class="table-responsive">

                                    <table class="table datatable table-secondary" id="employers-table"
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
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                    </table>

                                </div><!-- end of table responsive -->

                            </div><!-- end of col -->

                        </div><!-- end of row -->

                    </div>


                    {{--                    <div class="card-body">--}}

{{--                        <table class="table table-bordered datatable-table" id=""--}}
{{--                        >--}}
{{--                            <thead class="datatable-head">--}}

{{--                            <tr class="datatable-row" style="left: 0px;">--}}

{{--                                <th data-field="Order ID" class="datatable-cell datatable-cell-sort"><span--}}
{{--                                    >#ID</span></th>--}}

{{--                                <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span--}}
{{--                                    > Name </span></th>--}}


{{--                                <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span--}}
{{--                                    > Email </span></th>--}}

{{--                                <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span--}}
{{--                                    > Roles </span></th>--}}


{{--                                <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span--}}
{{--                                    > Action </span></th>--}}


{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody style="" class="datatable-body">--}}

{{--                            @foreach ($employers as $employer )--}}
{{--                                <tr data-row="0" class="datatable-row" style="left: 0px;">--}}


{{--                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span--}}
{{--                                        >{{$employer->id}}</span></td>--}}

{{--                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span--}}
{{--                                        >{{$employer->name}}</span></td>--}}

{{--                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span--}}
{{--                                        >{{$employer->email}}</span></td>--}}


{{--                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span--}}
{{--                                        >--}}
{{--                                        @if(!empty($employer->getRoleNames()))--}}
{{--                                                @foreach($employer->getRoleNames() as $v)--}}
{{--                                                    <label class="badge badge-success">{{ $v }}</label>--}}
{{--                                                @endforeach--}}
{{--                                            @endif--}}
{{--                                        </span></td>--}}


{{--                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"--}}
{{--                                        class="datatable-cell">--}}
{{--            <span--}}
{{--                style="overflow: visible; position: relative; width: 125px; display: inline ">--}}

{{--                               <button class="btn btn-sm"> <a style="color: #fff"--}}
{{--                                                              href="{{route('manager.employers.show' , $employer->id)}}">--}}

{{--                        <i class="fa fa-eye"></i>--}}
{{--                    </a> </button>--}}


{{--                <button class="btn btn-sm"> <a style="color: #fff"--}}
{{--                                               href="{{route('manager.employers.edit' , $employer->id)}}">--}}

{{--                        <i class="fa fa-edit"></i>--}}
{{--                    </a> </button>--}}





{{--                <form method="post" style="display: inline"--}}
{{--                      action="{{route('manager.employers.destroy' , $employer->id)}}">--}}
{{--                @method('DELETE')--}}
{{--                    @csrf--}}
{{--                    <button class="btn btn-sm" type="submit"><i class="fa fa-trash"></i></button>--}}
{{--                </form>--}}

{{--            </span>--}}

{{--                                    </td>--}}


{{--                                </tr>--}}

{{--                            @endforeach--}}


{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                        {{$employers->links()}}--}}

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

                var table = $('#employers-table').DataTable({
                    dom: "tiplr",
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('manager.getEmployers') }}",
                    columns: [
                        {data: 'record_select', name: 'record_select', searchable: false, sortable: false, width: '1%'},
                        {data: 'name', name: 'name'},
                        {data: 'email', name: 'email'},
                        {data: 'roles', name: 'roles'},
                        {data: 'actions', name: 'actions', searchable: false, sortable: false, width: '20%'},

                    ],
                    order: [[4, 'desc']],
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
