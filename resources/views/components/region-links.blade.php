<div class="search_terms">
    @foreach ($regions as $region)
        <a href="{{$region->path()}}">{{$region->title}}</a>
    @endforeach
</div><!-- .search_terms -->