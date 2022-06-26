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
                        <h2 class="subheader-title text-dark font-weight-bold my-2 mr-3">Appointments </h2>
                        <!--end::Page Title-->
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

                    <div class="card-body">

                        <table class="table datatable-table" id="kt_datatable"
                        >
                            <thead class="datatable-head">

                            <tr class="datatable-row" style="left: 0px;">

                                <th data-field="Order ID" class="datatable-cell datatable-cell-sort"><span
                                    >#ID</span></th>

                                <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span
                                    >Tenant Name </span></th>


                                <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span
                                    >Email </span></th>

                                <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span
                                    >phone </span></th>

                                <th data-field="Car Model" class="datatable-cell datatable-cell-sort"><span
                                    >Date</span></th>

                                <th data-field="Color" class="datatable-cell datatable-cell-sort"><span
                                    >Time</span></th>

                                <th data-field="Deposit Paid" class="datatable-cell datatable-cell-sort"><span
                                    >Note</span></th>
                                <th data-field="Deposit Paid" class="datatable-cell datatable-cell-sort"><span
                                    >Status</span></th>
                                <th data-field="Order Date" class="datatable-cell datatable-cell-sort"
                                    style="display: none;"><span>Status</span></th>


                            </tr>
                            </thead>
                            <tbody style="" class="datatable-body">
                            @foreach($appointments as $appointment)
                                <tr data-row="0" class="datatable-row" style="left: 0px;">


                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span
                                        >{{$appointment->id}}</span></td>


                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span
                                        >{{$appointment->name}}</span></td>
                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span
                                        >{{$appointment->email}}</span></td>
                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span
                                        >{{$appointment->phone}}</span></td>

                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell"><span
                                        >{{$appointment->date}}</span></td>


                                    <td data-field="Car Model" aria-label="Range Rover" class="datatable-cell"><span
                                        >{{\Carbon\Carbon::createFromFormat('H:i:s',$appointment->time)->format('h:i')}}
</span></td>
                                    <td class="datatable-cell"><span
                                        >{{$appointment->note}}</span></td>


                                    <td data-field="Status" data-autohide-disabled="false" aria-label="3"
                                        class="datatable-cell"><span><span
                                                class="label font-weight-bold label-lg label-light-primary label-inline">{{$appointment->status}}</span></span>
                                    </td>

                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection
