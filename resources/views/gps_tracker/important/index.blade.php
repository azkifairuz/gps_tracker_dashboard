@extends('layouts.vertical', ['subtitle' => 'Important'])

@section('content')
@include('layouts.partials/page-title', ['title' => 'Tables', 'subtitle' => 'Important'])


<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title mb-0">Important</h4>
    </div>

    <div class="card-body pb-1">
        <div class="table-responsive">
            <table class="table table-hover mb-0 table-centered">
                <thead>
                    <th class="py-1">No</th>
                    <th class="py-1">Id Asset</th>
                    <th class="py-1">Asset Name</th>
                    <th class="py-1">Usage</th>
                    <th class="py-1">Hour  meter</th>
                    <th class="py-1">Action</th>

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
                        <td>
                            <a href="#" class="text-primary me-2">
                                <iconify-icon icon="solar:pen-bold" width="20"></iconify-icon>
                            </a>
                            <a href="#" class="text-danger">
                                <iconify-icon icon="solar:trash-bin-trash-bold" width="20"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Rekomendasi BY AI
            </h5>
            {{-- <p class="card-subtitle">
                Alerts can also contain additional HTML elements like headings, paragraphs and dividers.
            </p> --}}
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-xl-12">
                    <div class="alert alert-primary mb-3 p-3 mb-xl-0" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p class="mb-0">Aww yeah, you successfully read this important alert message. This
                            example text is going to run a bit longer so that you can see how spacing within an
                            alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice
                            and tidy.</p>
                    </div>
                </div>
                
            </div>

        </div> <!-- end card body -->
    </div> <!-- end card -->
</div> <!-- end col -->
@endsection