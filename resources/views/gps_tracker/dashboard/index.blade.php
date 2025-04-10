@extends('layouts.vertical', ['subtitle' => 'Dashboard'])
@section('css')
@vite(['node_modules/gridjs/dist/theme/mermaid.min.css'])
@endsection
@section('content')

@include('layouts.partials/page-title', ['title' => 'Darkone', 'subtitle' => 'Dashboard'])

<div class="row mb-4">
        <div class="col-xl-7">
            <div class="card  h-100">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="input-group has-search rounded">
                                <span class="input-group-text">
                                    <iconify-icon icon="solar:magnifer-outline" class="search-widget-icon"></iconify-icon>
                                </span>
                                <input type="search" class="form-control" placeholder="admin,widgets..."
                                    autocomplete="off" value="">
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="card-body">
                    <div>
                        <div class="mb-3">
                            <div id="gmaps-basic" class="gmaps"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <div class="card h-100 ">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Activity</h4>
                </div>
                <!-- end card-header-->
    
                <div class="card-body pb-1">
                    <div class="d-flex">
                            <img src="/images/users/avatar-2.jpg" alt="avatar-2"
                            class="img-fluid avatar-lg rounded-circle me-2 " style="width:25px;height:25px" />
                           <div class="col">
                                <div class="d-flex align-items-center mb-0 text-nowrap">
                                    <h4 class="me-1  mb-0 ">ID : #0012</h4>
                                    <p class="fs-6  mb-0  ">Today 09:30</p>
                                </div>
                                <p class="mt-0 mb-0">Type Alat</p>
                           </div>
                           <div class="align-self-end text-end">
                                <p class="w-fit d-inline-block mb-0  bg-yellow font-weight-bold text-end text-black">In Use</p>
                                <p class="text-muted text-capitalize">10 hours active</p>
                           </div>
                    </div>
                    <div class="d-flex">
                        <img src="/images/users/avatar-2.jpg" alt="avatar-2"
                        class="img-fluid avatar-lg rounded-circle me-2 " style="width:25px;height:25px" />
                       <div class="col">
                            <div class="d-flex align-items-center mb-0 text-nowrap">
                                <h4 class="me-1  mb-0 ">ID : #0012</h4>
                                <p class="fs-6  mb-0  ">Today 09:30</p>
                            </div>
                            <p class="mt-0 mb-0">Type Alat</p>
                       </div>
                       <div class="align-self-end text-end">
                            <p class="w-fit d-inline-block mb-0  bg-yellow font-weight-bold text-end text-black">In Use</p>
                            <p class="text-muted text-capitalize">10 hours active</p>
                       </div>
                    </div>
                    <div class="d-flex">
                        <img src="/images/users/avatar-2.jpg" alt="avatar-2"
                        class="img-fluid avatar-lg rounded-circle me-2 " style="width:25px;height:25px" />
                        <div class="col">
                                <div class="d-flex align-items-center mb-0 text-nowrap">
                                    <h4 class="me-1  mb-0 ">ID : #0012</h4>
                                    <p class="fs-6  mb-0  ">Today 09:30</p>
                                </div>
                                <p class="mt-0 mb-0">Type Alat</p>
                        </div>
                        <div class="align-self-end text-end">
                                <p class="w-fit d-inline-block mb-0  bg-yellow font-weight-bold text-end text-black">In Use</p>
                                <p class="text-muted text-capitalize">10 hours active</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <img src="/images/users/avatar-2.jpg" alt="avatar-2"
                        class="img-fluid avatar-lg rounded-circle me-2 " style="width:25px;height:25px" />
                        <div class="col">
                                <div class="d-flex align-items-center mb-0 text-nowrap">
                                    <h4 class="me-1  mb-0 ">ID : #0012</h4>
                                    <p class="fs-6  mb-0  ">Today 09:30</p>
                                </div>
                                <p class="mt-0 mb-0">Type Alat</p>
                        </div>
                        <div class="align-self-end text-end">
                                <p class="w-fit d-inline-block mb-0  bg-yellow font-weight-bold text-end text-black">In Use</p>
                                <p class="text-muted text-capitalize">10 hours active</p>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card-->
        </div>
</div>

<div class="row">
    <div class="col-xl-7">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Reminder</h4>
            </div>

            <div class="card-body pb-1">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 table-centered">
                        <thead>
                            <th class="py-1">No</th>
                            <th class="py-1">Id Asset</th>
                            <th class="py-1">Asset Name</th>
                            <th class="py-1">Usage</th>
                            <th class="py-1">Tool life</th>
                            <th class="py-1">Depresiasi</th>

                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>3100</td>
                                <td>
                                    Total station GM 55
                                </td>
                                <td>
                                    10 kali pemakaian
                                </td>
                                <td>6 tahun</td>
                                <td>6 tahun</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card body -->
        </div>
        
        
        <!-- end card-->
    </div>
    <!-- end col -->

    <div class="col-xl-5">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Statistic</h4>
            </div>
            <div class="card-body pt-2 pb-0">
                <!-- Card 1 -->
                <div class="card mb-3">
                    <div class="card-body ">
                        <div>
                            <h4 class="mb-1">10</h4>
                            <h4 class="mb-0">Asset</h4>
                        </div>
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="mb-0">10</h4>
                        <h4 class="mb-1">Significant decrease</h4>
                    </div>
                </div>
    
                <!-- Card 3 -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0">10</h4>
                        <h4 class="mb-1 ">Approaching the limit of use</h4>
                    </div>
                </div>
            </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('scripts')
@vite(['resources/js/pages/dashboard.js'])
<!-- Google Maps API -->
<script src="http://maps.google.com/maps/api/js"></script>
@vite(['resources/js/pages/maps-google.js'])
@endsection