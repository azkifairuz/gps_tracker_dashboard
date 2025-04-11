@extends('layouts.vertical', ['subtitle' => 'Depresiasi'])

@section('content')
@include('layouts.partials/page-title', ['title' => 'Tables', 'subtitle' => 'Depresiasi'])


<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title mb-0">Depresiasi</h4>
    </div>

    <div class="card-body pb-1">
        <div class="table-responsive">
            <table class="table table-hover mb-0 table-centered">
                <thead>
                    <th class="py-1">No</th>
                    <th class="py-1">Id Asset</th>
                    <th class="py-1">Asset Name</th>
                    <th class="py-1">Times</th>
                    <th class="py-1">Loads</th>
                    <th class="py-1">Activity</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>3100</td>
                        <td>
                            Total station GM 55
                        </td>
                        <td>
                           
                        </td>
                        <td></td>
                        <td>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection