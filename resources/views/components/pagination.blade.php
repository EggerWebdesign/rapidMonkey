@if ($paginator->hasPages())
<span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
    <nav aria-label="Table navigation">
        <ul class="inline-flex items-center">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <li>
            <button class="px-3 py-1 rounded-md rounded-l-lg cursor-not-allowed focus:outline-none" aria-label="Previous">
                <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                    <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>    
            </button>
        </li>
    @else
        <li>
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                        <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </a>
        </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page === $paginator->currentPage())
                    <li>
                        <button class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                            {{ $page }}
                        </button>
                    </li>
                @elseif (($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2) || $page === $paginator->lastPage())
                    <li>
                        <a href="{{ $url }}">
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                {{ $page }}
                            </button>
                        </a>
                    </li>
                @elseif ($page === $paginator->lastPage()-1)
                    <span class="px-3 py-1">
                        ...
                    </span>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                        <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </a>
        </li>
    @else
        <li>
            <button class="px-3 py-1 rounded-md rounded-r-lg cursor-not-allowed focus:outline-none " aria-label="Next">
                <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                    <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </button>
        </li>
    @endif
</ul>
</nav>
</span>
@endif