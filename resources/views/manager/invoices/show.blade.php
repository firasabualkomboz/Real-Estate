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

                <div class="card card-custom overflow-hidden">
                    <div class="card-body p-0">
                        <!-- begin: Invoice-->
                        <!-- begin: Invoice header-->
                        <div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">
                            <div class="col-md-9">
                                <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                    <h1 class="display-4 font-weight-boldest mb-10">INVOICE</h1>
                                    <div class="d-flex flex-column align-items-md-end px-0">
                                        <!--begin::Logo-->
                                        <a href="#" class="mb-5">
                                            <img src="assets/media/logos/logo-dark.png" alt="">
                                        </a>
                                        <!--end::Logo-->
                                        <span class="d-flex flex-column align-items-md-end opacity-70">
                                            <span>Cecilia Chapman, 711-2880 Nulla St, Mankato</span>
                                            <span>Mississippi 96522</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="border-bottom w-100"></div>
                                <div class="d-flex justify-content-between pt-6">
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">DATA</span>
                                        <span class="opacity-70">{!! date('d/M/y', strtotime($invoice->created_at)) !!}
                                        </span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">INVOICE NO.</span>
                                        <span class="opacity-70"> #  {{$invoice->id}}</span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">INVOICE TO.</span>
                                        <span class="opacity-70">{{$invoice->tenant->name}}, {{$invoice->tenant->phone}}.
                                        <br>{{$invoice->tenant->address}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: Invoice header-->
                        <!-- begin: Invoice body-->
                        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                            <div class="col-md-9">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="pl-0 font-weight-bold text-muted text-uppercase">Description</th>
                                                <th class="text-right font-weight-bold text-muted text-uppercase">Rent / Prr Month </th>
                                                <th class="text-right font-weight-bold text-muted text-uppercase">Commisson / Per Month</th>
                                                {{-- <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Amount</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="font-weight-boldest border-bottom-0">
                                                <td class="border-top-0 pl-0 py-4">{{$invoice->contract->apartment->name ?? $invoice->contract->estate->name}}
                                                </td>
                                                <td class="border-top-0 text-right py-4"> $ {{$invoice->contract->apartment->rent ?? $invoice->contract->estate->rent}}
                                                </td>
                                                <td class="border-top-0 text-right py-4">% {{$invoice->contract->apartment->commission ?? $invoice->contract->estate->commission}}</td>
                                                {{-- <td class="text-danger border-top-0 pr-0 py-4 text-right">$4800.00</td> --}}
                                            </tr>

                                            @for ($i = 1; $i < $countMonth; $i++)

                                            <tr class="font-weight-boldest border-bottom-0">
                                        <td class="border-top-0 pl-0 py-4"> Month {{$i}}
                                        </td>
                                        <td class="border-top-0 text-right py-4"> $ {{1 *$invoice->contract->apartment->rent}}
                                        </td>
                                        <td class="border-top-0 text-right py-4">% {{ 1 *$invoice->contract->apartment->commission}}</td>
                                        {{-- <td class="text-danger border-top-0 pr-0 py-4 text-right">$4800.00</td> --}}
                                        </tr>

                                            @endfor

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                        <!-- end: Invoice body-->
                        <!-- begin: Invoice footer-->
                       <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                            <div class="col-md-9">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="font-weight-bold text-muted text-uppercase">Total Rent</th>
                                                <th class="font-weight-bold text-muted text-uppercase">Total Commission</th>
                                                <th class="font-weight-bold text-muted text-uppercase">DUE DATE</th>
                                                <th class="font-weight-bold text-muted text-uppercase">TOTAL AMOUNT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="font-weight-bolder">
                                                <td> $ {{$countMonth*$invoice->contract->apartment->rent}}</td>
                                                <td>% {{ 1 *$invoice->contract->apartment->commission}}</td>
                                                <td>Jan 07, 2018</td>
                                                <td class="text-danger font-size-h3 font-weight-boldest">20,600.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end: Invoice footer-->
                        <!-- begin: Invoice action-->
                        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                            <div class="col-md-9">
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-light-primary font-weight-bold" onclick="window.print();">Download Invoice</button>
                                    <button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">Print Invoice</button>
                                </div>
                            </div>
                        </div>
                        <!-- end: Invoice action-->
                        <!-- end: Invoice-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection
