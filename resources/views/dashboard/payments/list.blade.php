@extends('dashboard.master')
@section('Title')
    Locations
@endsection
@section('content')
    <div class="container-fluid">
{{--<p>{{ location_lists }}</p>--}}
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Location</a></li>
                            <li class="breadcrumb-item active">Stripe Payments</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Payments</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title"> All Payments.</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Amount</th>
                                <th>Details</th>
								
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($payments as $key => $payment)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>${{(number_format($payment->total_money / 100, 2))}}</td>
                                <td>
                                    <a href="{{route('dashboard.payment', $payment->uniqId)}}" title="View Page" target="_blank"><i class="far fa-eye text-info mr-1"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->
@endsection
@section('page_level_script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('message'))
        <script>
            swal("", "{{ session('message') }}", "{{ session('type') }}");
        </script>
    @endif
@endsection
