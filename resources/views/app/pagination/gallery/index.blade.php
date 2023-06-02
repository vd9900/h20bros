@foreach($images as $index => $image)
<div data-src="{{Storage::disk('public')->url('gallery/'.$image->image)}}"
    title="{{$image->image_title}}" data-lightbox="gallery-set"
    class="col-6 col-md-4 col-lg-3 gallery-set">
    <img index="{{$image->gallery_index}}" fetchpriority="high" class="lazy img-fluid moeed lozad" 
        data-src="{{Storage::disk('public')->url('gallery/'.$image->thumb_image)}}"
        alt="{{$image->image_alt}}" title="{{$image->image_title}}" />
</div>
@endforeach