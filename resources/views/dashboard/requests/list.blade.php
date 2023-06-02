@extends('dashboard.master')
@section('Title')
    Invoices
@endsection
@section('page_level_style')
  <style>
    .blog-link{color:#0e1426;}
    .blog-link:hover{
      text-decoration: underline;
    }
  </style>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">{{env('APP_NAME')}}</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Callback requests & Quotes</a></li>
                            <li class="breadcrumb-item active">Email List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Email System</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title"> All Emails.</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Subject</th>
                                <th>Sent at</th>
                                <th width="95">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                             @foreach($emails as $key => $data)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                  <a target="_blank" href="{{ route('request', $data->id) }}" class="blog-link" title="View blog in browser">{{$data->type}}</a>
                                </td>
                                <td>
                                    <p>
                                    {{\Carbon\Carbon::parse($data->created_at)->setTimezone('America/New_York')->format("D F j, Y h:i A")}}
                                    </p>
                                </td>
                                <td>
                                     <a target="_blank" href="{{ route('request', $data->id) }}" title="View blog in browser"><i class="far fa-eye text-info mr-1"></i></a>
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

@endsection
