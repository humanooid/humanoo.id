@extends('b._layout')
@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-description">
                            <h1>Posts</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Post Lists</h5>
                            </div>
                            <div class="card-body">
                                <div class="example-container">
                                    <div class="example-content">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Hero Image</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Detail</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = ($posts->currentPage() - 1) * 10 + 1; ?>
                                                @foreach ($posts as $post)
                                                    <tr>
                                                        <th scope="row">{{ $no }}</th>
                                                        <td>{{ $post->title }}</td>
                                                        <td><img src="{{ asset($post->image) }}"
                                                                alt="{{ $post->title }}" class="img-fluid"
                                                                width="200px"></td>
                                                        <td>
                                                            <span class="badge rounded-pill badge-primary">C :
                                                                {{ date('d M Y H:i', strtotime($post->created_at)) }}</span><br>
                                                            <span class="badge rounded-pill badge-success">P :
                                                                {{ date('d M Y H:i', strtotime($post->published_at)) }}</span><br>
                                                            <span class="badge rounded-pill badge-warning">U :
                                                                {{ date('d M Y H:i', strtotime($post->updated_at)) }}</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge rounded-pill badge-danger">{{ $post->category->name }}</span><br>
                                                            <small>by : {{ $post->author->name }}</small>
                                                        </td>
                                                        <td>
                                                            <a href="/read/{{ $post->slug }}" target="_blank"
                                                                class="btn btn-sm btn-rounded btn-style-light btn-warning"><i
                                                                    class="material-icons">visibility</i>View</a>
                                                            <button type="button"
                                                                class="btn btn-sm btn-rounded btn-style-light btn-primary"><i
                                                                    class="material-icons">edit</i>Edit</button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-rounded btn-style-light btn-danger"><i
                                                                    class="material-icons">delete</i>Delete</button>
                                                        </td>
                                                    </tr>
                                                    <?php $no++; ?>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                @if ($posts->hasPages())
                                    <div class="float-end">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <?php
                                                $startPage = $posts->currentPage() - 2 < 1 ? 1 : $posts->currentPage() - 2;
                                                $endPage = $posts->currentPage() + 2 > $posts->lastPage() ? $posts->lastPage() : $posts->currentPage() + 2;
                                                if ($startPage == 1 && $endPage < 5) {
                                                    if ($posts->lastPage() > 5) {
                                                        $endPage = 5;
                                                    } else {
                                                        $endPage = $posts->lastPage();
                                                    }
                                                }
                                                if ($endPage - $startPage + 1 < 5) {
                                                    if ($posts->lastPage() > 5) {
                                                        $startPage = $endPage - 4;
                                                    } else {
                                                        $startPage = $endPage - $posts->lastPage() + 1;
                                                    }
                                                }
                                                ?>
                                                {!! $startPage == 1 ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->url(1) . '">First</a></li>' !!}
                                                {!! $posts->onFirstPage() ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->previousPageUrl() . '">Previous</a></li>' !!}
                                                @foreach ($posts->getUrlRange($startPage, $endPage) as $key => $val)
                                                    <li class="page-item {!! $posts->currentPage() == $key ? 'active' : '' !!}"><a class="page-link"
                                                            href="{{ $val }}">{{ $key }}</a></li>
                                                @endforeach
                                                {!! $posts->currentPage() == $posts->lastPage() ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->nextPageUrl() . '">Next</a></li>' !!}
                                                {!! $endPage == $posts->lastPage() ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->url($posts->lastPage()) . '">Last</a></li>' !!}
                                            </ul>
                                        </nav>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
