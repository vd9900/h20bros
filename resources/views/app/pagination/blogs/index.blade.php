@foreach($blogs as $blog)
<div class="col-12 col-md-6 col-xl-4">
    <article id="post-5055"
        class="post-5055 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-carpet-cleaners tag-carpet-cleaners-dartford tag-carpet -cleaners-eltham tag-carpet-cleaning tag-carpet-cleaning-dartford tag-carpet-cleaning-eltham">
        <header class="entry-header">
            <div class="blog-image blog-thumb abc-41">
                <a href="{{route('blog01', $blog->slug)}}"><img width="360" height="268"
                        class="attachment-blog size-blog wp-post-image lazy rounded-4 lozad"
                        alt="indigo-rug-cleaning-services" title="indigo-dye-rug-cleaning-services"
                         style="object-fit: cover; width: 100%"
                        data-src="{{Storage::disk('public')->url(explode('.', $blog->image)[0].'_thumb.'.explode('.', $blog->image)[1])}}" /></a>
            </div>
        </header>
        <div class="py-4">
            <h5 class="" style="color: #cd7f32">
                <a class="text-ellipsis-2 font-median" href="{{route('blog01', $blog->slug)}}" rel="bookmark"
                    style="color: #4873b7 !important">
                	{{$blog->title}}
                </a>
            </h5>

            <p class="abc-43">
                <span class="text-ellipsis-3 abc-44">{{$blog->summary}}</span>
            </p>
            <a href="{{route('blog01', $blog->slug)}}" style="background-color: #2baf38" class="px-4 py-2 tex-white">Read
                More</a>
        </div>
    </article>
</div>
@endforeach
<div aria-label="Page navigation example  " class="d-flex pb-5 flex-column table-responsive mb-2">
    {{--  --}}

    {!! $blogs->links('app.pagination.blogs.paginator.index') !!}
</div>