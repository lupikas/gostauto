@if ($paginator->hasPages())
    <nav role="navigation" class="flex items-center justify-center space-x-6">
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center justify-center items-center w-40px h-40px bg-gray-500 cursor-default rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16"><g><g transform="rotate(90 5 8)"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" stroke-width="2" d="M-1.41 4.69v0l6.46 6.46v0l6.46-6.46v0"/></g></g></svg>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center justify-center items-center w-40px h-40px bg-gray-500 hover:bg-blue-850 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16"><g><g transform="rotate(90 5 8)"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" stroke-width="2" d="M-1.41 4.69v0l6.46 6.46v0l6.46-6.46v0"/></g></g></svg>
            </a>
        @endif

        <div class="text-23px font-light"><span class="text-blue-850">{{ $paginator->currentPage() }}</span>/{{ ceil($paginator->total() / $paginator->perPage()) }}</div>

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center justify-center items-center w-40px h-40px bg-gray-500 hover:bg-blue-850 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"><g><g transform="rotate(-90 4.5 8)"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" stroke-width="2" d="M-2.178 4.69v0l6.46 6.46v0l6.461-6.46v0"/></g></g></svg>
            </a>
        @else
            <span class="relative inline-flex items-center justify-center items-center w-40px h-40px bg-gray-500 cursor-default rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"><g><g transform="rotate(-90 4.5 8)"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" stroke-width="2" d="M-2.178 4.69v0l6.46 6.46v0l6.461-6.46v0"/></g></g></svg>
            </span>
        @endif
    </nav>
@endif
