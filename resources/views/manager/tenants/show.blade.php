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


              <div class="row">
                  <div class="col-lg-8">
                      <div class="card card-custom">
                          <div class="card-header card-header-tabs-line">
                              <div class="card-toolbar">
                                  <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                      <li class="nav-item">
                                          <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
																<span class="nav-icon">
																	<i class="flaticon2-chat-1"></i>
																</span>
                                              <span class="nav-text">Rentals</span>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
																<span class="nav-icon">
																	<i class="flaticon2-drop"></i>
																</span>
                                              <span class="nav-text">Invoices</span>
                                          </a>
                                      </li>

                                  </ul>
                              </div>

                          </div>
                          <div class="card-body">
                              <div class="tab-content">
                                  <div class="tab-pane fade active show" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">


                                      <!--begin: Datatable-->
                                      <div
                                          class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                                          id="kt_datatable" style="">
                                          <table class="datatable-table" style="display: block;">
                                              <thead class="datatable-head">
                                              <tr class="datatable-row" style="left: 0px;">


                                                  <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                                      >#</span></th>

                                                  <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                                          style="width: 126px;">Rentals</span></th>


                                                  <th data-field="Type" data-autohide-disabled="false"
                                                      class="datatable-cell datatable-cell-sort"><span
                                                          style="width: 126px;">Type </span>
                                                  </th>

                                                  <th data-field="Type" data-autohide-disabled="false"
                                                      class="datatable-cell datatable-cell-sort"><span
                                                          style="width: 126px;">Start Date </span>
                                                  </th>
                                                  <th data-field="Type" data-autohide-disabled="false"
                                                      class="datatable-cell datatable-cell-sort"><span
                                                          style="width: 126px;">Expires Date  </span>
                                                  </th>
                                                  <th data-field="Type" data-autohide-disabled="false"
                                                      class="datatable-cell datatable-cell-sort"><span
                                                          style="width: 126px;">View </span>
                                                  </th>
                                              </tr>
                                              </thead>
                                              <tbody class="datatable-body" style="">


                                              @foreach($tenant->contract as $item)

                                              <tr data-row="0" class="datatable-row" style="left: 0px;">


                                                  <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                      >  {{$item->id}}</span></td>

                                                  <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                          style="width: 126px;">{{$item->estate_id ? : $item->apartment->name}}</span></td>
                                                  <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                          style="width: 126px;">{{$tenant->name}}</span></td>
                                                  <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                          style="width: 126px;">{{$item->start_at}}</span></td>

                                                  <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                          style="width: 126px;">{{$item->end_at}}</span></td>

                                                  <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                          style="width: 126px;">
                                                        <button class="btn"><i class="fa fa-eye"></i></button>
                                                      </span></td>

                                              </tr>
                                              @endforeach

                                              </tbody>
                                          </table>

                                      </div>
                                      <!--end: Datatable-->


                                  </div>
                                  <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">

                                      <!--begin: Datatable-->
                                      <div
                                          class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                                          id="kt_datatable" style="">
                                          <table class="datatable-table" style="display: block;">
                                              <thead class="datatable-head">
                                              <tr class="datatable-row" style="left: 0px;">


                                                  <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                                      >#</span></th>

                                                  <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                                          style="width: 126px;">Billing For</span></th>


                                                  <th data-field="Type" data-autohide-disabled="false"
                                                      class="datatable-cell datatable-cell-sort"><span
                                                          style="width: 126px;">Amount Due </span>
                                                  </th>

                                                  <th data-field="Type" data-autohide-disabled="false"
                                                      class="datatable-cell datatable-cell-sort"><span
                                                          style="width: 126px;">Due Date </span>
                                                  </th>
                                                  <th data-field="Type" data-autohide-disabled="false"
                                                      class="datatable-cell datatable-cell-sort"><span
                                                          style="width: 126px;">Status   </span>
                                                  </th>
                                                  <th data-field="Type" data-autohide-disabled="false"
                                                      class="datatable-cell datatable-cell-sort"><span
                                                          style="width: 126px;">Action </span>
                                                  </th>
                                              </tr>
                                              </thead>
                                              <tbody class="datatable-body" style="">

                                                @foreach ($tenant->invoices as $item )

                                              <tr data-row="0" class="datatable-row" style="left: 0px;">


                                                  <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                      >{{$item->id}}</span></td>

                                                  <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                          style="width: 126px;">{{$item->tenant->name}}</span></td>


                                                  <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                          style="width: 126px;"> $ {{$item->contract->apartment->rent ?? $invoice->contract->estate->rent}}</span></td>
                                                  <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                          style="width: 126px;">{!! date('d/M/y', strtotime($item->created_at)) !!}</span></td>

                                                  <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                          style="width: 126px;" class="badge badge-primary">{{$item->status}}</span></td>

                                                  <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                                          style="width: 126px;">{{$item->address}}</span></td>

                                              </tr>

                                              @endforeach


                                              </tbody>
                                          </table>

                                      </div>
                                      <!--end: Datatable-->




                                  </div>

                              </div>
                          </div>
                      </div>


                  </div>
                  <div class="col-lg-4">
                      <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
                          <!--begin::Profile Card-->
                          <div class="card card-custom card-stretch">
                              <!--begin::Body-->
                              <div class="card-body pt-4">

                                  <!--begin::User-->
                                  <div class="d-flex align-items-center">
                                      <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                          <div class="symbol-label" style="background-image:url('{{$tenant->imageurl}}')"></div>
                                      </div>
                                      <div>

                                          <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{$tenant->name}}</a>
                                          <div class="mt-2">
                                              <a href="#" class="btn btn-sm btn-primary font-weight-bold mr-2 py-2 px-3 px-xxl-5 my-1">Edit</a>
                                              <a href="#" class="btn btn-sm btn-danger font-weight-bold py-2 px-3 px-xxl-5 my-1">Delete</a>
                                          </div>
                                      </div>
                                  </div>
                                  <!--end::User-->
                                  <!--begin::Contact-->
                                  <div class="py-9">
                                      <div class="d-flex align-items-center justify-content-between mb-2">
                                          <span class="font-weight-bold mr-2">Email:</span>
                                          <a href="#" class="text-muted text-hover-primary">{{$tenant->email}}</a>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between mb-2">
                                          <span class="font-weight-bold mr-2">Phone:</span>
                                          <span class="text-muted">{{$tenant->phone}}</span>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <span class="font-weight-bold mr-2">Location:</span>
                                          <span class="text-muted">{{$tenant->address}}</span>
                                      </div>
                                  </div>
                                  <!--end::Contact-->

                              </div>
                              <!--end::Body-->
                          </div>
                          <!--end::Profile Card-->
                      </div>
                  </div>
              </div>


            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection
