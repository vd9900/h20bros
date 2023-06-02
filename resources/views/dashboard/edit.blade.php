@extends('dashboard.master')
@section('Title')
    Edit Blog
@endsection
@section('content')
    <style>
        .document-editor {
          --ck-doc-container-bg: rgba(var(--black-rgb), .05);
          --ck-doc-content-bg: var(--white);
          --ck-doc-content-box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.075),var(--box-shadow);
          border: 1px solid var(--border-color);
          border-radius: var(--border-radius);
          max-height: 700px;
          display: -ms-flexbox;
          display: flex;
          -ms-flex-flow: column nowrap;
          flex-flow: column nowrap;
        }
        .document-editor-toolbar {
          z-index: 1;
          border-bottom: 1px solid var(--border-color);
        }
        .document-editor-container {
          padding: 1.25rem;
          background-color: var(--ck-doc-container-bg);
          overflow-y: auto;
          -webkit-overflow-scrolling: touch;
          border-bottom-right-radius: calc(var(--border-radius) - 1px);
          border-bottom-left-radius: calc(var(--border-radius) - 1px);
        }
    </style>
    


    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">{{env("APP_NAME")}}</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                            <li class="breadcrumb-item active"><!-- Button trigger modal -->
                                    {{$post->title}}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Blog</h4>
                    <button type="button" class="btn btn-primary" data-mdb-target="#exampleModal" onmouseover="triggerModal('desktop')">
                                      Show the current blog desktop
                                    </button>
                                    <button type="button" class="btn btn-primary" data-mdb-target="#exampleModal" onmouseover="triggerModal('mobile')">
                                      Show the current blog mobile
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal top fade desktop"
                                         id="exampleModal"
                                         tabindex="-1"
                                         aria-labelledby="exampleModalLabel"
                                         aria-hidden="true"
                                         data-mdb-backdrop="true"
                                         data-mdb-keyboard="true" >
                                      <div class="modal-dialog  ">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{$post->title}}</h5>
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body" style="width: 100%; height: 100%" >
                                              <iframe src="{{route('blog01', $post->slug)}}">
                                                  
                                              </iframe>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                              Close
                                            </button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal top fade"
                                         id="exampleModal2"
                                         tabindex="-1"
                                         aria-labelledby="exampleModalLabel"
                                         aria-hidden="true"
                                         data-mdb-backdrop="true"
                                         data-mdb-keyboard="true" >
                                      <div class="modal-dialog  ">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{$post->title}}</h5>
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body" style="width: 100%; height: 100%" >
                                              <iframe src="{{route('blog01', $post->slug)}}">
                                                  
                                              </iframe>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                              Close
                                            </button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    @if($errors->any())
                        {{ implode('', $errors->all('message')) }}
                    @endif
                    <form id="myform" action="{{route('blog.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!--div class="card-body invoice-head">
                            <div class="row">
                                <div class="col-md-4 align-self-center">
                                    <img id="blah" src="{{asset('corvex/backend/images/logo.png')}}" alt="logo-large" class="logo-lg" height="50">
                                </div>
                                <div class="col-md-8">

                                    <ul class="list-inline mb-0 contact-detail float-right">
                                        <li class="list-inline-item">
                                            <div class="pl-3 d-flex">
                                                <i class="mdi mdi-web"></i>
                                                <p class="text-muted mt-2">https://pristinegreencleaning.com/</p>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="pl-3 d-flex">
                                                <i class="mdi mdi-phone"></i>
                                                <p class="text-muted mt-2">347-871-6530</p>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="pl-3 d-flex">
                                                <i class="mdi mdi-map-marker"></i>
                                                <p class="text-muted mt-2">
                                                    PristineGreen Upholstery and Carpet Cleaning
                                                    6705 Myrtle Ave #1015
                                                    Queens, NY 11385
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div--><!--end card-body-->
                        <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h6>Gallery Image (required)</h6>
                                <div class="upload-btn-img">
                                    <?php if($post->image){ ?>
                                    <img src="{{Storage::disk('public')->url($post->image)}}"
                                            class="img-thumbnail main_height p-0 m-0">
                                    <?php }else{ ?>
                                        <img src="{{asset('corvex/backend/images/image-upload.gif')}}"
                                            class="img-thumbnail main_height p-0 m-0">
                                    <?php } ?>
                                    <input type="file" name="image" onchange="showThumbnail(this)" accept="image/*"/>
                                </div>
                            </div>  <!--end col-->
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Title:</b> <input type="text" class="form-control" name="title" value="{{$post->title}}" required></h6>
                            </div>
                        </div>
                        <br>
						<div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-0"><b>Image title:</b> <input type="text" class="form-control" value="{{$post->image_title}}" name="image_title" required></h6>
                            </div>
							<div class="col-md-6">
                                <h6 class="mb-0"><b>Image Alt:</b> <input type="text" class="form-control" value="{{$post->image_alt}}" name="image_alt" required></h6>
                            </div>
							<div class="col-md-6">
                                <h6 class="mb-0"><b>Image Thumb title:</b> <input type="text" class="form-control" value="{{$post->image_thumb_title}}" name="image_thumb_title" required></h6>
                            </div>
							<div class="col-md-6">
                                <h6 class="mb-0"><b>Image thumb ALT:</b> <input type="text" class="form-control" value="{{$post->image_thumb_alt}}" name="image_thumb_alt" required></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Post Slug:</b> <input type="text" class="form-control" name="slug" value="{{$post->slug}}" required></h6>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h5 class="mt-4">Content : 
                                    
                                </h5>
                                <ul class="pl-2 appendCondition">
                                    <li class="d-flex">
                                        <div class="document-editor col-md-12" id="document_editor_empty">
                                                <div class="document-editor-toolbar"></div>
                                                <div class="document-editor-container">
                                                    <div class="document-editor-editable" name="content">
                                                        {!! htmlspecialchars_decode(count(explode('/********************************/', $post->content)) > 1 ? explode('/********************************/', $post->content)[1] : $post->content) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </li>
                                    <input id="content" name="content" hidden>
                                </ul>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h5 class="mt-4">Summary :</h5>
                                <ul class="pl-2 appendCondition">
                                    <li class="d-flex"><textarea name="summary" class="form-control" rows="5" cols="100" placeholder="summary" required>{{$post->summary}}</textarea></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h5 class="mt-4">Meta Description :</h5>
                                <ul class="pl-2 appendCondition">
                                    <li class="d-flex"><textarea name="meta_description" class="form-control" rows="5" cols="100" placeholder="Meta Description" required>{{$post->meta_description}}</textarea></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Meta Keywords:</b> <input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords" value="{{$post->meta_keywords}}"  required></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0">
                                    <b>Schema:</b> 

                                </h6>
                                <textarea name="schema" class="form-control">{{$post->meta_structure}}</textarea>
                                
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="float-right d-print-none">
                                    <input type="submit" class="btn btn-gradient-primary" name="Submit" value="Submit">
                                    <a href="#" class="btn btn-gradient-danger">Cancel</a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                    </form>
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->

    </div><!-- container -->
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
      rel="stylesheet"
    />
    <style type="text/css">
        .desktop {
            --mdb-modal-width: 1500px;
        }

        iframe {
            height: 100%;
            width: 100%;
        }
        .modal-content {
            height: 1000px;
        }
    </style>
@endsection
@section('page_level_script')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="{{asset('corvex/backend/js/ckeditor_document.js')}}"></script>
 
    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
    ></script>

    <script>
        
        // Initialize module
        // ------------------------------
        document.addEventListener('DOMContentLoaded', function() {
            CKEditorDocument.init();
            
            $(".document-editor-editable").on("DOMSubtreeModified", function(){
                // console.log(this.innerHTML);
                $("#content").val(this.innerHTML)
            })
        });
        // Setup module
        // ------------------------------
        const CKEditorDocument = function() {


            //
            // Setup module components
            //

            // Document editor
            const _componentCKEditorDocument = function() {
                if (typeof DecoupledEditor == 'undefined') {
                    console.warn('Warning - ckeditor_document.js is not loaded.');
                    return;
                }

                // Empty with placeholder
                DecoupledEditor.create(document.querySelector('#document_editor_empty .document-editor-editable'), {
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                            { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                            { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                            { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                            { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                        ]
                    }
                }).then(editor => {
                    const toolbarContainer = document.querySelector('#document_editor_empty .document-editor-toolbar');
                    toolbarContainer.appendChild(editor.ui.view.toolbar.element);
                    window.editor = editor;
                })
                .catch(error => {
                    console.error(error);
                });

            };


            //
            // Return objects assigned to module
            //

            return {
                init: function() {
                    _componentCKEditorDocument();
                }
            }
        }();
        function triggerModal(rel){

            if (rel == 'desktop') {
                const myModalEl = document.getElementById('exampleModal');
                const modal = new mdb.Modal(myModalEl);
                modal.toggle();
            }else{
                const myModalEl = document.getElementById('exampleModal2');
                const modal = new mdb.Modal(myModalEl);
                modal.toggle();
            }
          
        }
    </script>
    @if(session('message'))
        <script>
            swal("", "{{ session('message') }}", "{{ session('type') }}");
        </script>
    @endif
    @if($errors->any())
        <script>
            swal("", "{!! implode(' ', $errors->all()) !!}", "error");
        </script>
    @endif
@endsection
