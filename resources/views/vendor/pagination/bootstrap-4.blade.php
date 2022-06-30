@if ($paginator->hasPages())
<div class="">
    <table>
        <tfoot>
            <tr><td colspan="4">
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item " aria-disabled="true" aria-label="@lang('pagination.previous')">
                <a class="page-link "><i class="fa fa-arrow-circle-left" aria-hidden="true" style="color: white"></i></a>
            </li>
        @else
            <li class="page-item">
                <a class="page-link text-primary" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fa fa-arrow-circle-left" aria-hidden="true"  style="color: white"> Anterior</i></a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><a class="page-link " style="color: white">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" ><a class="page-link" style="color: black">{{ $page }}</a></li>   
                    @else
                        <li class="page-item"><a class="page-link " href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link text-primary" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fa fa-arrow-circle-right" aria-hidden="true"  style="color: white"> Siguiente</i></a>
            </li>
        @else
            <li class="page-item" aria-disabled="true" aria-label="@lang('pagination.next')">
                <a class="page-link "><i class="fa fa-arrow-circle-right" aria-hidden="true"  style="color: white"></i></a>
            </li>
        @endif
    </ul>
</td></tr>
</tfoot>
</table>
</div>
@endif
