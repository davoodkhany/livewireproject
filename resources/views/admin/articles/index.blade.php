@extends('layouts.dashboard')
    @section('content')
        <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    {{ __('Article List') }}
                </div>
                <h2 class="page-title">
                    Create, Manage, Edit Article
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="d-flex">

                    <a href="{{route('blogs.create')}}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Create Article
                    </a>
                </div>
            </div>
        </div>
        </div>
        <!-- Page title -->
        <div>

            <div class="row row-cards">

            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                    <table class="table table-vcenter table-mobile-md card-table">
                        <thead>
                        <tr>
                            <th>title</th>
                            <th>language</th>
                            <th>Status</th>
                            <th class="w-1"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                            <td data-label="Name">
                                <a href="{{ $article->path()}}" class="text-reset">
                                <div class="py-1 d-flex align-items-center">
                                <span class="avatar me-2" style="background-image: url({{ $article->image }})"></span>
                                <div class="flex-fill">
                                    <div class="font-weight-medium">{{ $article->title }}</div>
                                    <div class="text-muted"><a href="{{ $article->path()}}" class="text-reset">{{ $article->title }}</a></div>
                                </div>
                                </div>
                            </a>
                            </td>
                            <td data-label="Language">
                                <div>{{ $article->language }}</div>
                            </td>
                            <td data-label="status" >
                                @if($article->status==0)
                                    <p>Draft</p>
                                @else
                                    <p >Publish</p>
                                @endif
                            </td>
                            <td>
                                <div class="btn-list flex-nowrap">

                                <a href="{{ route('blogs.edit', $article) }}" class="btn btn-outline-primary">
                                    Edit
                                </a>

                                <form action="{{ route('blogs.destroy',  $article->slug ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" href="{{ route('blogs.destroy', $article->slug ) }}" class="btn btn-outline-danger">
                                        Delete
                                    </button>
                                </form>

                                </div>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>

            <div class="mt-4 d-flex">
                {{ $articles->links() }}
            </div>
        </div>
    @endsection
