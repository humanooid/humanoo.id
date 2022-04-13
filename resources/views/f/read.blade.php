@extends('f._layout')
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="{{ $title }} - Human∞.id">
    <meta name="description" content="< let's talk about code! >">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://humanoo.id/">
    <meta property="og:title" content="{{ $title }} - Human∞.id">
    <meta property="og:description" content="< let's talk about code! >">
    <meta property="og:image" content="{{ asset('humanooid-fav-head.svg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://humanoo.id/">
    <meta property="twitter:title" content="{{ $title }} - Human∞.id">
    <meta property="twitter:description" content="< let's talk about code! >">
    <meta property="twitter:image" content="{{ asset('humanooid-fav-head.svg') }}">
@endsection
@section('css')
    <link href="{{ mix('/f/css/freadstyle.css') }}" rel="stylesheet">
@endsection
@section('content')
    <!-- Blog Page -->
    <section id="blog-page-area" class="blog-page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-single blog-standard shadow-dark">
                        <h1 class="my-0">{{ $post->title }}</h1>
                        <ul class="list-inline unstyled meta mb-0 mt-3">
                            <li class="list-inline-item">{{ date('M d, Y', strtotime($post->published_at)) }}</li>
                            <li class="list-inline-item"><a href="#" title="Posts by {{ $post->author->name }}"
                                    rel="author">{{ $post->author->name }}</a></li>
                            <li class="list-inline-item"><a href="#">{{ $post->category->name }}</a></li>
                            <li class="list-inline-item">{{ ceil(str_word_count(strip_tags($post->body))/200) }} min read</li>
                        </ul>
                        <div class="thumb-wrapper mt-4"><img src="{{ asset(Storage::url('posts/' . $post->image)) }}" alt="{{ $post->title }}">
                        </div>
                        <article>
                            <div class="clearfix my-4">
                                <div class="post-body">
                                    {!! $post->body !!}
                                </div>
                            </div>
                        </article>
                        {{-- <div class="comment-area-section clearfix">
                            <h3>3 Comment Found</h3>
                            <div class="comment-inner-box">
                                <div class="comment-author-img float-left">
                                    <img src="{{ asset('f/images/ab.jpg') }}" alt="">
                                </div>
                                <div class="comment-author-text">
                                    <h4><a href="#">John Doe</a></h4>
                                    <span>September 7, 2020 at 7:50 pm</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                        ligula eget dolor. Aenean massa. Cum sociis.</p>
                                    <div class="reply-btn">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-inner-box  reply-comment">
                                <div class="comment-author-img float-left">
                                    <img src="{{ asset('f/images/ab.jpg') }}" alt="">
                                </div>
                                <div class="comment-author-text">
                                    <h4><a href="#">John Doe</a></h4>
                                    <span>September 7, 2020 at 7:50 pm</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                        ligula eget dolor. Aenean massa. Cum sociis.</p>
                                    <div class="reply-btn">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-inner-box">
                                <div class="comment-author-img float-left">
                                    <img src="{{ asset('f/images/ab.jpg') }}" alt="">
                                </div>
                                <div class="comment-author-text">
                                    <h4><a href="#">John Doe</a></h4>
                                    <span>September 7, 2020 at 7:50 pm</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                        ligula eget dolor. Aenean massa. Cum sociis.</p>
                                    <div class="reply-btn">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="respond" class="comment-respond">
                            <h2 id="reply-title" class="comment-reply-title">Leave a Reply</h2>
                            <form action="#" method="post" id="commentform" class="section-inner thin max-percentage"
                                novalidate="">
                                <p class="comment-notes"><span id="email-notes">Your email address will not be
                                        published.</span> Required fields are marked <span class="required">*</span>
                                </p>
                                <p class="comment-form-comment"><label for="comment">Comment</label>
                                    <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                                </p>
                                <p class="comment-form-author"><label for="author">Name <span
                                            class="required">*</span></label> <input id="author" name="author"
                                        type="text" value="" size="30" maxlength="245" required="required"></p>
                                <p class="comment-form-email"><label for="email">Email <span
                                            class="required">*</span></label> <input id="email" name="email"
                                        type="email" value="" size="30" maxlength="100" aria-describedby="email-notes"
                                        required="required"></p>
                                <p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url"
                                        type="url" value="" size="30" maxlength="200"></p>
                                <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent"
                                        name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label
                                        for="wp-comment-cookies-consent">Save my name, email, and website in this
                                        browser for the next time I comment.</label></p>
                                <p class="form-submit"><input name="submit" type="submit" id="submit"
                                        class="submit" value="Post Comment"></p>
                            </form>
                        </div> --}}
                    </div>
                </div>
                <!-- /blog-post-content -->
                <div class="col-md-4">
                    <div class="blog-side-bar">
                        <div class="widget bg-white rounded shadow-dark">
                            <form class="searchform" role="search" method="get" id="search-form" action="#">
                                <label class="screen-reader-text" for="s"></label>
                                <input type="text" value="" name="s" id="s" placeholder="Search ...">
                                <input type="submit" id="searchsubmit" value="Search">
                            </form>
                        </div>
                        <div class="widget bg-white rounded shadow-dark">
                            <h3 class="widget-header">Recent Posts</h3>
                            <ul>
                                @foreach ($recentPost as $post)
                                    <li> <a href="/read/{{ $post->slug }}">{{ $post->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="widget bg-white rounded shadow-dark">
                            <h3 class="widget-header">Archives</h3>
                            <ul>
                                <li><a href="#">February 2020</a></li>
                            </ul>
                        </div> --}}
                        <div class="widget bg-white rounded shadow-dark">
                            <h3 class="widget-header">Categories</h3>
                            <ul>
                                @foreach ($categories as $category)
                                    <li class="cat-item cat-item-4"><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="widget bg-white rounded shadow-dark">
                            <h3 class="widget-header">Meta</h3>
                            <ul>
                                <li><a href="#">Log in</a></li>
                                <li><a href="#">Entries feed</a></li>
                                <li><a href="#">Comments feed</a></li>
                                <li><a href="#">WordPress.org</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ mix('/f/js/freadscript.js') }}"></script>
@endsection
@section('script')
@endsection
