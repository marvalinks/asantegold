@if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}"
       class="button -md -dark-1 bg-accent-1 text-white">
        VIEW MORE EVENTS
    </a>
@endif
