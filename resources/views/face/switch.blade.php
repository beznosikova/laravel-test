@foreach($switchSite->items as $item)
    @if(!$item->active)
        <a href="{{ $item->url() }}">{{ $item->title }}</a>
    @endif
@endforeach