
<div class="col-lg-12">
    <div class="blog-widget categories row2">
        <div class="blog-heading " >
        <h4 class="">دسته بندی</h4>
        </div>
        <ul>

        @foreach($categorys as $category)
            @if ($category->articles()->count() ==0)

            @else

            <li><a href="{{ $category->path() }}">{{ $category->name }}<span>{{ $category->articles()->count() }}</span></a></li>

            @endif
        @endforeach

        </ul>
    </div>
    </div>

