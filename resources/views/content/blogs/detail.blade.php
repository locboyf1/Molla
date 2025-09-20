@extends("content.app")
@section("title", $blog->title)
@section("content")
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Home">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ $blog->category_blog->title }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <figure class="entry-media">
                <img src="{{ asset($blog->image) }}" alt="image desc">
            </figure><!-- End .entry-media -->
            <div class="container">
                <article class="entry single-entry entry-fullwidth">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="entry-body">
                                <div class="entry-meta">
                                    <span class="entry-author">
                                        Viết bởi <a href="#">{{ $blog->account->name }}</a>
                                    </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">{{ $blog->created_at->format('H:i - d/m/Y ') }}</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">2 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title entry-title-big">
                                    {{$blog->title}}
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    Trong <a href="#">{{$blog->category_blog->title}}</a>
                                </div><!-- End .entry-cats -->

                                <div class="entry-content editor-content">
                                    <p>{{$blog->description}}</p>
                                    <p>{!! $blog->content !!}</p>
                                </div><!-- End .entry-content -->

                                <div class="entry-footer row no-gutters">
                                    <div class="col">
                                        <div class="entry-tags">
                                            <span>Tags:</span> <a href="#">photography</a> <a href="#">style</a>
                                        </div><!-- End .entry-tags -->
                                    </div><!-- End .col -->
                                </div><!-- End .entry-footer row no-gutters -->
                            </div><!-- End .entry-body -->
                        </div><!-- End .col-lg-11 -->

                        <div class="col-lg-1 order-lg-first mb-2 mb-lg-0">
                            <div class="sticky-content">
                                <div class="social-icons social-icons-colored social-icons-vertical">
                                    <span class="social-label">SHARE:</span>
                                    <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                                            class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                                            class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i
                                            class="icon-pinterest"></i></a>
                                    <a href="#" class="social-icon social-linkedin" title="Linkedin" target="_blank"><i
                                            class="icon-linkedin"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .sticky-content -->
                        </div><!-- End .col-lg-1 -->
                    </div><!-- End .row -->

                    <div class="entry-author-details">
                        <figure class="author-media">
                            <a href="#">
                                <img src="{{ asset($blog->account->avatar) }}" alt="User name">
                            </a>
                        </figure><!-- End .author-media -->

                        <div class="author-body">
                            <div class="author-header row no-gutters flex-column flex-md-row">
                                <div class="col">
                                    <h4><a href="#">{{$blog->account->name}}</a></h4>
                                </div><!-- End .col -->
                                <div class="col-auto mt-1 mt-md-0">
                                    <a href="#" class="author-link">Xem thêm bài viết của {{ $blog->account->name }} <i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .col -->
                            </div><!-- End .row -->

                            <div class="author-content">
                                <p>{{$blog->account->messenger}} </p>
                            </div><!-- End .author-content -->
                        </div><!-- End .author-body -->
                    </div><!-- End .entry-author-details-->
                </article><!-- End .entry -->

                <nav class="pager-nav" aria-label="Page navigation">
                    <a class="pager-link pager-link-prev" href="#" aria-label="Previous" tabindex="-1">
                        Previous Post
                        <span class="pager-link-title">Cras iaculis ultricies nulla</span>
                    </a>

                    <a class="pager-link pager-link-next" href="#" aria-label="Next" tabindex="-1">
                        Next Post
                        <span class="pager-link-title">Praesent placerat risus</span>
                    </a>
                </nav><!-- End .pager-nav -->

                <div class="related-posts">
                    <h3 class="title">Bài viết liên quan</h3><!-- End .title -->

                    <div class="owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
                                                    "nav": false, 
                                                    "dots": true,
                                                    "margin": 20,
                                                    "loop": false,
                                                    "responsive": {
                                                        "0": {
                                                            "items":1
                                                        },
                                                        "480": {
                                                            "items":2
                                                        },
                                                        "768": {
                                                            "items":3
                                                        },
                                                        "992": {
                                                            "items":4
                                                        }
                                                    }
                                                }'>

                        @foreach ($related_blogs as $blog)
                            <article class="entry entry-grid">
                                <figure class="entry-media">
                                    <a href="{{ route("blogs.detail", ["id" => $blog->id, "alias" => $blog->alias]) }}">
                                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="#">{{ $blog->created_at->format('d/m/Y') }}</a>
                                        <span class="meta-separator">|</span>
                                        <a href="#">0 Comments</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="{{ route('blogs.detail', ["id" => $blog->id, "alias" => $blog->alias]) }}">{{$blog->title}}</a>
                                    </h2><!-- End .entry-title -->

                                    <div class="entry-cats">
                                        Trong <a href="#">{{ $blog->category_blog->title }}</a>
                                    </div><!-- End .entry-cats -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        @endforeach

                    </div><!-- End .owl-carousel -->
                </div><!-- End .related-posts -->

                <div class="comments">
                    <h3 class="title">0 Comment</h3><!-- End .title -->
                </div><!-- End .comments -->
                <div class="reply">
                    <div class="heading">
                        <h3 class="title">Leave A Reply</h3><!-- End .title -->
                        <p class="title-desc">Your email address will not be published. Required fields are marked *</p>
                    </div><!-- End .heading -->

                    <form action="#">
                        <label for="reply-message" class="sr-only">Comment</label>
                        <textarea name="reply-message" id="reply-message" cols="30" rows="4" class="form-control" required
                            placeholder="Comment *"></textarea>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="reply-name" class="sr-only">Name</label>
                                <input type="text" class="form-control" id="reply-name" name="reply-name" required
                                    placeholder="Name *">
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <label for="reply-email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="reply-email" name="reply-email" required
                                    placeholder="Email *">
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->

                        <button type="submit" class="btn btn-outline-primary-2">
                            <span>POST COMMENT</span>
                            <i class="icon-long-arrow-right"></i>
                        </button>
                    </form>
                </div><!-- End .reply -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection