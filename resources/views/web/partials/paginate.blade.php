@if ($paginator->hasPages())
    <!-- Pagination -->
    <div class="pagination" style="text-align: left!important;">
        @if ($paginator->onFirstPage())
            <a class="btn btn-prev" ><i class="fal fa-chevron-left icon-paginate"></i></a>
        @else
            <a class="btn btn-prev" href="{{ $paginator->previousPageUrl() }}"><i class="fal fa-chevron-left icon-paginate"></i></a>
        @endif
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="btn btn-paginate active" href="">{{ $page }}</a>
                        @elseif (($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2) || $page == $paginator->lastPage())
                            <a class="btn btn-paginate" href="{{ $url }}">{{ $page }}</a>
                        @elseif ($page == $paginator->lastPage() - 1)
                            <span class="ect-block" style="font-weight: bold">...</span>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <a class="btn btn-next" href="{{ $paginator->nextPageUrl() }}"><i class="fal fa-chevron-right icon-paginate"></i></a>
            @else
                <a class="btn btn-next"><i class="fal fa-chevron-right icon-paginate"></i></a>
            @endif
    </div>
@endif
