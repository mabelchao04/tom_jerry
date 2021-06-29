@unless ($breadcrumbs->isEmpty())
<ol class="breadcrumb" style="padding:1.5rem;margin-top:6rem;">
    @foreach ($breadcrumbs as $breadcrumb)

        @if (!is_null($breadcrumb->url) && !$loop->last)
            <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
        @else
            <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
        @endif

    @endforeach
</ol>
@endunless