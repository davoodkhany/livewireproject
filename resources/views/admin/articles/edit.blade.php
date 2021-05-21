@extends('layouts.dashboard')
    @section('content')
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title">
                    Edit Article
                </h2>
            </div>
        </div>
    </div>

<form method="post" action="{{ route('articles.update', ['article' => $article->slug] ) }}" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
        <div class="col-12">
            <div class="row">
                <div class="col">
                  <input type="text" name='title'  class="form-control" placeholder="Title" value="{{ $article->title }}" required>
                  @error('title') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col">
                  <input type="text"  name='slug' class="form-control" placeholder="Slug" value="{{ $article->slug }}" required>
                  @error('slug') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mt-3 row">
                <div class="col">
                  <select  class="form-select" name='language' required>
                    <option value="en">English</option>
                    <option value="fa">Persian</option>
                  </select>
                  @error('language') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col">
                  <input type="file"  class="form-control" name='image'  placeholder="Images">
                  @error('image') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mt-3 row">
                <div class="col">
                    <textarea  class="form-control" name='discription' placeholder="Description"  style="width: -webkit-fill-available;" required value="">{{ $article->discription }}</textarea>
                    @error('discription') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mt-3">
                <textarea class="form-control" name='body' id="body" style="width: -webkit-fill-available;" required> {{ $article->body }}</textarea>
                @error('body') <span class="error">{{ $message }}</span> @enderror

            </div>
            <div class="mt-3 row">
                <div class="col">
                    <select  class="form-select" name='status' required>
                        <option value="0">Draft</option>
                        <option value="1">Publish</option>
                      </select>
                    </div>

            </div>
        </div>

        <div class="mt-3 row">
            <div class="col">
              <input type="text" name='seotitle'  class="form-control" placeholder="Seo Title" value="{{ $article->seotitle }}" >
            </div>
            <div class="col">
              <input type="text"  name='opengraphtitle' class="form-control" placeholder="Open Graph Title" value="{{ $article->opengraphtitle }}" >
            </div>
        </div>

        <div class="mt-3 row">
            <div class="col">
                <textarea  class="form-control" name='seodescription' placeholder="Seo Description" >{{ $article->seodescription }}</textarea>

            </div>
        </div>
        <div class="mt-3 row">
            <div class="col">
                <textarea  class="form-control" name='opengraphdescription' placeholder="Open Graph Description">{{ $article->opengraphdescription }}</textarea>
            </div>
        </div>



        <div class="mt-3 col">
            <button type="submit" class="btn btn-success">Edit Article</button>
        </div>
  </form>

@section('script')
<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    CKEDITOR.replace('body', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    // CKEDITOR.replace( 'body' );
    config.fullPage = true;
    extraPlugins: 'imageuploader';
</script>

@endsection

@endsection


