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
                                <a href="" class="text-muted">Invoices</a>
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
                            <h3 class="card-label">invoices List

                            </h3>
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


                        </div><!-- end of row -->

                        <div class="row">

                            <div class="col-md-12">

                                <div class="table-responsive">

                                    <table class="table datatable table-secondary" id="invoices-table"
                                           style="width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>
                                                # Id
                                            </th>
                                            <th>Tenant Name</th>
                                            <th>Billing For</th>
{{--                                            <th>Start Date</th>--}}
{{--                                            <th>End Date</th>--}}
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                    </table>

                                </div><!-- end of table responsive -->

                            </div><!-- end of col -->

                        </div><!-- end of row -->

                    </div>


                    {{--                    <div class="card-body">--}}

                    {{--                        <table class="table table-bordered datatable-table" id="kt_datatable"--}}
                    {{--                        >--}}
                    {{--                            <thead class="datatable-head">--}}

                    {{--                            <tr class="datatable-row" style="left: 0px;">--}}

                    {{--                                <th data-field="Order ID" class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                    >#ID</span></th>--}}

                    {{--                                <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                    >Tenant Name </span></th>--}}

                    {{--                                <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                    >Billing For </span></th>--}}



                    {{--                                <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                    >Start Date</span></th>--}}

                    {{--                                <th data-field="Color" class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                    >End Date </span></th>--}}


                    {{--                                <th data-field="Order Date" class="datatable-cell datatable-cell-sort"--}}
                    {{--                                    style="display: none;"><span >Status</span></th>--}}


                    {{--                                    <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                        > Status </span></th>--}}

                    {{--                                        <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span--}}
                    {{--                                            > Action </span></th>--}}





                    {{--                            </tr>--}}
                    {{--                            </thead>--}}
                    {{--                            <tbody style="" class="datatable-body">--}}

                    {{--                                @foreach ($invoices as $invoice )--}}
                    {{--                                <tr data-row="0" class="datatable-row" style="left: 0px;">--}}


                    {{--                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span--}}
                    {{--                                        >{{$invoice->id}}</span></td>--}}

                    {{--                                        <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span--}}
                    {{--                                            >{{$invoice->tenant->name}}</span></td>--}}

                    {{--                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span--}}
                    {{--                                        >{{$invoice->contract->apartment->name ?? $invoice->contract->estate->name}} <br> {{$invoice->contract->type}} </span></td>--}}




                    {{--                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span--}}
                    {{--                                        >{{$invoice->contract->start_at}}</span></td>--}}

                    {{--                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span--}}
                    {{--                                        >{{$invoice->contract->end_at}}</span></td>--}}

                    {{--                                    <td data-field="Status" data-autohide-disabled="false" aria-label="3"--}}
                    {{--                                        class="datatable-cell"><span ><span--}}
                    {{--                                                class="label font-weight-bold label-lg label-light-primary label-inline">{{$invoice->status}}</span></span>--}}
                    {{--                                    </td>--}}


                    {{--                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"--}}
                    {{--                                    class="datatable-cell">--}}
                    {{--            <span--}}
                    {{--                style="overflow: visible; position: relative; width: 125px; display: inline ">--}}

                    {{--                <button class="btn btn-sm"> <a style="color: #fff"--}}
                    {{--                                               href="{{route('manager.invoices.show' , $invoice->id)}}">--}}

                    {{--                        <i class="fa fa-eye"></i>--}}
                    {{--                    </a> </button>--}}

                    {{--                          <button class="btn btn-sm" data-toggle="modal" data-target="#exampleModalLong"> <a style="color: #fff"--}}
                    {{--                                                         href="#">--}}

                    {{--                                <i class="fa fa-edit"></i>--}}
                    {{--                            </a> </button>--}}




                    {{--                <form method="post" style="display: inline"--}}
                    {{--                      action="{{route('manager.invoices.destroy' , $invoice->id)}}">--}}
                    {{--                @method('DELETE')--}}
                    {{--                    @csrf--}}
                    {{--                    <button class="btn btn-sm" type="submit"><i class="fa fa-trash"></i></button>--}}
                    {{--                </form>--}}

                    {{--            </span>--}}

                    {{--                                </td>--}}


                    {{--                                </tr>--}}


                    {{--                                <!-- Modal-->--}}
                    {{--                                <div class="modal fade" id="exampleModalLong" data-backdrop="static"--}}
                    {{--                                     tabindex="-1" role="dialog" aria-labelledby="staticBackdrop"--}}
                    {{--                                     aria-hidden="true">--}}
                    {{--                                    <div class="modal-dialog" role="document">--}}
                    {{--                                        <form method="post"--}}
                    {{--                                              action="{{route('manager.invoices.update' , $invoice->id)}}">--}}
                    {{--                                            @csrf--}}
                    {{--                                            @method('PUT')--}}

                    {{--                                            <div class="modal-content">--}}
                    {{--                                                <div class="modal-header">--}}
                    {{--                                                    <h5 class="modal-title" id="exampleModalLabel">--}}
                    {{--                                                       Update Invoice # {{$invoice->id}} </h5>--}}
                    {{--                                                    <button type="button" class="close"--}}
                    {{--                                                            data-dismiss="modal" aria-label="Close">--}}
                    {{--                                                        <i aria-hidden="true"--}}
                    {{--                                                           class="ki ki-close"></i>--}}
                    {{--                                                    </button>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="modal-body">--}}
                    {{--                                                    <P>current Status : {{$invoice->status}}</P>--}}

                    {{--                                                    <div class="form-group row">--}}
                    {{--                                                        <label for="example-time-input"--}}
                    {{--                                                               class="col-3 col-form-label">Change To--}}
                    {{--                                                        </label>--}}
                    {{--                                                        <div class="col-8">--}}

                    {{--                                                            <select name="status"--}}
                    {{--                                                                    class="form-control"--}}
                    {{--                                                            >--}}
                    {{--                                                                        <option value="paid">Paid </option>--}}
                    {{--                                                                        <option value="pending">pending </option>--}}
                    {{--                                                            </select>--}}
                    {{--                                                        </div>--}}
                    {{--                                                    </div>--}}

                    {{--                                                </div>--}}
                    {{--                                                <div class="modal-footer">--}}
                    {{--                                                    <button type="button"--}}
                    {{--                                                            class="btn btn-light-primary font-weight-bold"--}}
                    {{--                                                            data-dismiss="modal">Close--}}
                    {{--                                                    </button>--}}
                    {{--                                                    <button type="submit"--}}
                    {{--                                                            class="btn btn-primary font-weight-bold">--}}
                    {{--                                                        Update--}}
                    {{--                                                    </button>--}}
                    {{--                                                </div>--}}

                    {{--                                            </div>--}}
                    {{--                                        </form>--}}

                    {{--                                    </div>--}}
                    {{--                                </div>--}}

                    {{--                            @endforeach--}}


                    {{--                            </tbody>--}}
                    {{--                        </table>--}}

                    {{--                    </div>--}}
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>


    @push('custom-scripts')

        <script type="text/javascript">

            $(function () {

                var table = $('#invoices-table').DataTable({
                    dom: "tiplr",
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('manager.getInvoices') }}",
                    columns: [
                        // {data: 'record_select', name: 'record_select', searchable: false, sortable: false, width: '1%'},
                        {data: 'id', name: 'id'},
                        {data: 'tenant', name: 'tenant'},
                        {data: 'apartment', name: 'apartment'},
                        // {data: 'tenant', name: 'tenant'},
                        // {data: 'tenant', name: 'tenant'},
                        {data: 'status', name: 'status'},

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
