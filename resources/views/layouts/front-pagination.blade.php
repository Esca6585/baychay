@if ($paginator->hasPages())
<div class="pagination p1">
    <ul class="ul">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <a class="main-page-link is-passive">
            <li>
                <i class="flaticon2-left-arrow"></i>
            </li>
        </a>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" class="main-page-link">
            <li>
                <i class="flaticon2-left-arrow"></i>
            </li>
        </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <a href="#" class="is-active main-page-link">
            <li class="li">{{ $element }}</li>
        </a>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <a class="is-active main-page-link">
            <li class="li">{{ $page }}</li>
        </a>
        @else
        <a href="{{ $url }}" class="main-page-link">
            <li>{{ $page }}</li>
        </a>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="main-page-link">
            <li>
                <i class="flaticon2-right-arrow"></i>
            </li>
        </a>
        @else
        <a class="main-page-link is-passive">
            <li>
                <i class="flaticon2-right-arrow"></i>
            </li>
        </a>
        @endif
    </ul>
</div>
@endif
