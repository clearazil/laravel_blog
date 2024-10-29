@if ($paginator->hasPages())
    <section id="blog-pagination" class="blog-pagination section">

    <div class="container">
        <div class="d-flex justify-content-center">
            <ul>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li><a href=""><i class="bi bi-chevron-left"></i></a></li>
                @else
                    <li>
                        <li><a href="{{ $paginator->previousPageUrl() }}"><i class="bi bi-chevron-left"></i></a></li>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li>{{ $element }}</li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li><a href="" class="active">{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}"><i class="bi bi-chevron-right"></i></a></li>
            @else
                <li><a href=""><i class="bi bi-chevron-right"></i></a></li>
            @endif
            </ul>
        </div>
    </div>

    </section>
@endif
