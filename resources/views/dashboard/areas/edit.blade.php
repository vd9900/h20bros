@extends('dashboard.master')
@section('Title')
    Add Location
@endsection
@section('page_level_style')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('backend/css/toastui-editor.min.css')}}" />
    <link href="{{asset('backend/css/image-uploader.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .tabs span {padding: 0 5px;cursor: pointer;font-size: 12px;}
        .tabs span.active{color: #407dfd;font-weight: 500;}
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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Service Areas</a></li>
                            <li class="breadcrumb-item active">Add Service Area</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Service Area</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    @if($errors->any())
                        {{ implode('', $errors->all()) }}
                    @endif
                    <form id="location-form-create" action="{{route('service-areas.update', $location->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="mb-5">
                                        <legend>Banner Content</legend>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" list="cars" value="{{ $location->name }}" >
                                            <datalist id="cars">
                                              
                                            </datalist>
                                            <small id="titleHelp" class="form-text text-muted">This is location name which will show service areas page</small>
                                        </div>
                                        <div class="mb-3">
                                            <label for="url" class="form-label">Url/Slug</label>
                                            <input type="text" name="url" class="form-control" id="url" aria-describedby="urlHelp" value="{{ $location->slug }}" >
                                            <small id="urlHelp" class="form-text text-muted">This is post url last segment or slug url. Also this slug need to be unique</small>
                                        </div>
                                        <div class="mb-3">
                                            <label for="banner_url" class="form-label">Upload Banner Image</label>
                                            <input type="file" name="banner_url" class="form-control" id="banner_url" aria-describedby="bannerUrlHelp">
                                            <small id="bannerUrlHelp" class="form-text text-muted">Upload banner image</small>
                                        </div>
                                    </fieldset>
                                    <fieldset class="mb-5">
                                        <legend>Main Content</legend>

                                        <div class="mb-3">
                                            <label for="heading" class="form-label">Heading</label>
                                            <input name="heading" type="text" class="form-control" id="heading" aria-describedby="headingHelp"  value="{{ $location->header }}" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" name="description">{{ $location->description }}</textarea>
                                            <!-- <input type="hidden" name="description" id="description-input"> -->
                                            <!-- <div id="description"></div> -->
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="d-print-none">
                                        <input  type="submit" class="btn btn-gradient-primary" id="submit-location" name="Submit" value="Submit">
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </form>
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->

    </div><!-- container -->
@endsection

@section('page_level_script')
    <script type="text/javascript" src="{{asset('backend/js/base64.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/js/toastui-editor-all.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
    <script src="{{asset('backend/js/location-global.js') }}"></script>
    <script>
        (function($) {
            $('.gallery-form-group,.review-form-group').repeater({
                initEmpty: false,
                show: function () {
                    $(this).slideDown();
                },
                hide: function (e) {
                    $(this).slideUp(e);
                }
            });
        })(jQuery);


        let areas = ["Gramercy, Manhattan NYC","Upper East Side, Manhattan","Astoria, Queens","Ridgewood, Queens","Alphabet City","Astoria","Bath Beach","Battery Park City","Bay Ridge","Bay Terrace","Bayside","Bedford-Stuyvesant","Bensonhurst","Boerum Hill","Briarwood","Brooklyn Heights","Brownsville","Bushwick","Canarsie","Carroll Gardens","Chelsea","Chinatown","Clinton Hill","Cobble Hill","College Point","Columbus Circle","Coney Island","Corona","Crown Heights","Cypress Hills","Ditmars","Ditmas Park","Downtown Brooklyn","DUMBO","Dyker Heights","East Elmhurst","East Flatbush","East Harlem","East New York","East Village","Elmhurst","Far Rockaway","Farragut","Financial District","Fiske Terrace","Flatbush","Flatiron District","Flatlands","Floral Park","Flushing","Forest Hills","Fort Greene","Fresh Meadows","Fresh Pond","Glen Oaks","Glendale","Gowanus","Gramercy Park","Gravesend","Greenpoint","Greenwich Village","Hamilton Beach","Hamilton Heights","Harlem","Hell's Kitchen","Highland Park","Howard Beach","Howard Park","Hudson Yards","Inwood","Jackson Heights","Jamaica Park","Kensington","Kew Gardens","Kips Bay","Koreatown","Laurelton","Lincoln Square","Little Italy","Little Neck","Long Island City","Lower East Side","Madison","Manhattan Beach","Mapleton","Marine Park","Maspeth","Meatpacking District","Middle Village","Midtown","Midtown East","Midtown West","Midwood","Mill Basin","Morningside Heights","Murray Hill","New Lots","New Utrecht","NoHo","Nolita","NoMad","Ocean Hill","Ozone Park","Park Slope","Plum Beach","Prospect Heights","Prospect Lefferts Gardens","Prospect Park South","Rego Park","Ridgewood","Rockaway Beach","Seagate","Sheepshead Bay","SoHo","Springfield Gardens","Stuyvesant Heights","Stuyvesant Town","Sunnyside","Sunset Park","Times Square","Tribeca","Tudor Village","Union Square","Upper East Side","Upper West Side","Washington Heights","Weeksville","West Village","Whitestone","Williamsburg","Windsor Terrace","Woodhaven","Woodside","Wyckoff Heights"];
            

        for (var i = 0; i < areas.length; i++) {
            $("#cars").append("<option>"+areas[i]+"</option>")
        }
    </script>
    @if(session('message'))
        <script>
            swal("", "{{ session('message') }}", "{{ session('status') }}");
        </script>
    @endif
@endsection
