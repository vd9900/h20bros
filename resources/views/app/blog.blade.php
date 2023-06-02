@extends('layouts.index')
@section('title') {{$blog->title}} @endsection

@section('meta')
    <meta name="title" content="{{$blog->title}}">
    <meta name="description" content="{{$blog->meta_description}}">
    <meta name="keywords" content="{{$blog->meta_keywords}}">
    <link rel="canonical" href="{{url()->current()}}">
    <meta property="og:site_name" content="PristineGreen Upholstery and Carpet Cleaning">
    <meta property="og:title" content="{{$blog->title}}">
    <meta property="og:description" content="{{$blog->meta_description}}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{Storage::disk('public')->url($blog->image)}}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="{{$blog->title}}">
    <meta name="twitter:description" content="{{$blog->meta_description}}">
    <!--<meta name="twitter:domain" content="pristinegreencleaning.com">-->
    <meta name="twitter:image" content="{{Storage::disk('public')->url($blog->image)}}">
    <meta name="twitter:url" content="{{url()->current()}}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="{{$blog->title}}">
    <meta itemprop="url" content="{{Storage::disk('public')->url($blog->image)}}">
    <meta itemprop="thumbnailUrl" content="{{Storage::disk('public')->url($blog->image)}}">
    <meta itemprop="image" content="{{Storage::disk('public')->url($blog->image)}}">
    <link rel="image_src" href="{{Storage::disk('public')->url($blog->image)}}">

    <link rel="shortcut" type="image/png" href="{{asset('assets/icons/site_icon_128x128.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/icons/site_icon_128x128.png')}}">
    <meta name="abstract" content="PristineGreen Upholstery and Carpet Cleaning in NYC">
    <meta name="author" content="admin">
    <meta name="classification" content="Blog">
    <meta name="copyright" content="PristineGreen Upholstery and Carpet Cleaning - All rights Reserved.">
    <meta name="distribution" content="Global">
    <meta name="language" content="en-GB">
    <meta name="publisher" content="PristineGreen Cleaning">
    <meta name="rating" content="General">
    <meta name="resource-type" content="Document">
    <meta name="revisit-after" content="3">
    <meta name="subject" content="Blog">
@endsection
@section('content')
    <!-- blog  section -->
    <section>
        <div class="container flex flex-column flex-lg-row p-md-5 gap-3 justify-content-center">
            <!-- Blog post -->
            <div class="col-12 col-lg-7 col-xl-9 d-flex flex-column my-5 border-3 py-2 gap-3">
                <h1 class="fs-2 fw-bolder text-blue">
                    {{ $blog->title }}
                </h1>
                <div class="blog-image blog-thumb abc-40">
                    <img width="100%" class="rounded-5 lozad"  alt="indigo-rug-cleaning"
                        title="Indigo-dye-rug-cleaning" style="padding: 0px; float: none"
                        data-src="{{ Storage::disk('public')->url($blog->image) }}" />
                </div>
                <div class="entry-content abc-41">
                    {!! htmlspecialchars_decode(count(explode('/********************************/', $blog->content)) > 1 ? explode('/********************************/', $blog->content)[1] : $blog->content) !!}
                </div>
            </div>
            <!-- Featured Posts  -->
            <div class="col py-md-5 px-md-3">
                <div class="icon-list d-flex flex-column gap-2">
                    <h3 class="fs-4 text-blue">Featured Posts</h3>
                    <div class="py-1">
                        <ul class="featured-post-lists flex flex-column gap-4 p-0">
                            @foreach($blogs as $bl)
                            <li>
                                <div class="lptw-post-small-thumbnail abc-109 text-ellipsis-3">
                                    <a href="{{ route('blog01', $bl->slug) }}" class="lptw-thumbnail-link"><img
                                            width="100" height="100"
                                            class="attachment-100x100 size-100x100 wp-post-image  lozad"
                                             alt="indigo-rug-cleaning" title="Indigo-dye-rug-cleaning"
                                            data-src="{{ Storage::disk('public')->url(explode('.', $bl->image)[0].'_thumb.'.explode('.', $bl->image)[1]) }}" /></a>
                                    <div class="lptw-post-header abc-110">
                                        <span class="text-ellipsis-3">
                                            <a href="{{route('blog', $bl->slug)}}"
                                                class="lptw-header-link w-100">{{$bl->summary}}</a>
                                        </span>
                                        {{$bl->created_at->diffForHumans()}}
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('app.static_components.callus_banner')
@endsection
