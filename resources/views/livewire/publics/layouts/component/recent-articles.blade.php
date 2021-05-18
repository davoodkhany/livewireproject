<div>
    <ul>
        @foreach($articles as $article)
        <li>
            <a class="displays" href="{{ $article->path() }}">
              <div class="blog-thumb">
                <img src="{{ $article->image }}" alt="" width="90px" height="53px" >
              </div>
              <div class="right-content">
                <h6>{{ $article->title }}</h6>
                <span>{{$article->created_at}}</span>
              </div>
            </a>
          </li>
        @endforeach
      </ul>
</div>
