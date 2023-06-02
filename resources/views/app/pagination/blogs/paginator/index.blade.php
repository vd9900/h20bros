<ul class="pagination mb-0 mx-auto gap-3 custom-pagination">
    
    @if ($paginator->onFirstPage())
        <li class="disabled">
            <a class="page-link" href="{{route('blog')}}" tabindex="-1">
                <i class="fa-sharp fa-solid fa-chevron-left fa-sm"></i>
            </a>
        </li>
    @else
        <li>
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">
                <i class="fa-sharp fa-solid fa-chevron-left fa-sm"></i>
            </a>
        </li>
    @endif

    @foreach ($elements as $element)
           
        @if (is_string($element))
            <li class="page-item disabled">
                <span>{{ $element }}</span>
            </li>
        @endif


       
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item">
                        <a href="{{ route('blog').'?page='.$page }}" class="page-link active">{{ $page }}</a>
                    </li>
                @elseif (($page == $paginator->currentPage() + 1 && $paginator->hasMorePages()) || $page == 1 || $page == $paginator->lastPage())
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <li>
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                <i class="fa-sharp m fa-solid fa-chevron-right fa-sm"></i>
            </a>
        </li>
    @else
        <li class="disabled">
            <a class="page-link" href="{{ route('blog').'?page='.$page }}">
                <i class="fa-sharp m fa-solid fa-chevron-right fa-sm"></i>
            </a>
        </li>
    @endif
    
</ul>