<style>
    .paginationActive{
        background: #FFE6D6;
    color: #FF6C0B;
    }
</style>
@if ($paginator->hasPages())
    <div class="pagination mt-4">
        <div class="hide-sm">
            <a class="prev @if ($paginator->onFirstPage()) disabled @endif" href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')">
                <img class="arrow" src="{{ url('newAssets') }}/assets/images/images/arrow-left.svg" alt="">
                Previous
            </a>
        </div>
        <ul class="pg-ul">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="pg-list">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li class="pg-list @if ($page == $paginator->currentPage()) paginationActive @endif">
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach
                @endif
            @endforeach
        </ul>
        <div class="hide-sm">
            <a class="next @if (!$paginator->hasMorePages()) disabled @endif" href="{{ $paginator->nextPageUrl() }}" aria-label="@lang('pagination.next')">
                Next
                <img class="arrow" src="{{ url('newAssets') }}/assets/images/images/arrow-right.svg" alt="">
            </a>
        </div>
    </div>
@endif
