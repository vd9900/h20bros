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
                            <li class="breadcrumb-item active">Service Locations</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Locations</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title"> All Locations.</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($locations as $key=>$location)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$location->name}}</td>
                                <td>{{$location->header}}</td>
                                <td>{{$location->slug}}</td>
                                <td>
                                    <a href="{{'https://pristinegreencleaning.com/service-areas-locations/'. $location->slug }}" title="View Page" target="_blank"><i class="far fa-eye text-info mr-1"></i></a>
                                    <a href="{{route('service-areas.update',$location->id)}}" title="Edit Location"><i class="far fa-edit text-info mr-1"></i></a>
                                        <a href="{{ route('service-areas.delete', $location->id) }}" class="btn btn-link p-0"><i class="fas fa-trash-alt text-danger mr-1"></i></a>
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
