
@extends('layouts.main')

@section('container')

<!-- Page Banner -->
<div class="page-banner blog-banner container-fluid no-padding">
    <!-- Container -->
    <div class="container">
        <div class="col-md-5 no-padding">
            <h3>Blog Updates</h3>
            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question.</p>
        </div>
        <div class="col-md-3 breadcrumb-shape pull-right no-padding">			
            <ol class="breadcrumb">
                <li><a href="/">home</a></li>				
                <li class="active">Blog</li>
            </ol>
        </div>
    </div><!-- Container /- -->
</div><!-- Page Banner /- -->

<!-- Page Content -->
<div class="container-fluid no-padding page-content blog-page-content">
    <div class="section-padding"></div>
    <!-- Container -->
    <div class="container">		
        <!-- Blog Area -->
        <div class="row">
            @if ($posts->count())
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="blog-block">
                    @foreach ($posts as $post)
                    <article class="type-post blog-onecolumn format-image no-padding">
                        <div class="gridinner container-fluid no-padding">
                            <div class="col-md-10 col-sm-12 col-xs-12 blog-content no-padding">
                                <div class="post-date">
                                    <p>{{ $post->created_at->format('M') }}<span>{{ $post->created_at->format('d') }}</span></p>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="/post/{{ $post->slug }}" title="{{ $post->title }}">{{ $post->title }}</a></h3>
                                </div>
                                <div class="entry-content">
                                    <p>Category : <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                                </div>
                                <div class="entry-content">
                                    <p>{{ $post->excerpt }}</p>
                                </div>
                                <a href="/post/{{ $post->slug }}" class="entry-footer">Read More<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
                
                {{ $posts->links('pagination') }}
                    
            </div>
            @else
                <p class="text-center fs-4">No post found.</p>
            @endif	
            <!-- Widget Area -->
            <div class="widget-area col-md-4 col-sm-4 col-xs-12">
                <aside class="widget widget-search">
                    <form action="/blog">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </aside>
                <aside class="widget widget-catagories">
                    <div class="widget-title">
                        <h3>Categories</h3>
                    </div>
                    <ul>
                        @foreach ($categories as $cat)
                        <li><span>{{ $cat->posts_count }}</span><a href="/blog?category={{ $cat->slug }}" title="{{ $cat->name }}">{{ $cat->name }}</a></li>
                        @endforeach
                    </ul>
                </aside>
                <aside class="widget widget-posts">
                    <div class="widget-title">
                        <h3>Recent Posts</h3>
                    </div>
                    @foreach ($recent_post as $post)
                    <div class="recent-content">
                        <a href="blog-post.html"><img src="images/recentpost1.jpg" alt="recentpost1"></a>
                        <h3><a href="blog-post.html">{{ $post->title }}</a></h3>
                        <span><a href="#">{{ $post->created_at->format('d M Y') }}</a></span>
                    </div>
                    @endforeach
                </aside>
            </div><!-- Widget-area /- -->
        </div>
        
    </div><!-- Container /- -->
    <div class="section-padding"></div>
</div>	<!-- Page Content /- -->

@endsection