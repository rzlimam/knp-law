@extends('layouts.main')

@section('container')
<div class="page-banner blog-banner container-fluid no-padding">
    <!-- Container -->
    <div class="container">
        <div class="col-md-5 no-padding">
            <h3>Blog Post</h3>
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

<div class="container-fluid no-padding page-content blog-page-content">
    <div class="section-padding"></div>
    <!-- Container -->
    <div class="container">		
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12 singleblog-block">
                <article class="type-post single-blog blog-onecolumn format-image">
                    <div class="gridinner container-fluid no-padding">
                        <div class="entry-cover">
                            <a href="single-blog.html"><img src="/images/blog-feature.jpg" alt="blog-1-column1"/></a>
                        </div>
                        <div class="entry-content">
                            <div class="entry-header">
                                <div class="post-date">
                                    <p>{{ $post->created_at->format('M') }}<span>{{ $post->created_at->format('d') }}</span></p>
                                </div>
                                <div class="entry-title">
                                <h3><a href="#" title="{{ $post->title }}">{{ $post->title }}</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <div class="byline"> 
                                        Oleh :<a href="#"> Admin</a>| Kategori : <a href="#">{{ $post->category->name }}</a>
                                    </div>
                                </div>
                            </div>
                            {!! $post->body !!}
                        </div>
                    </div>
                </article>
                
            </div>
            <!-- Widget Area -->
            <div class="widget-area col-md-4 col-sm-4 col-xs-12">
                <aside class="widget widget-search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </aside>
                <aside class="widget widget-catagories">
                    <div class="widget-title">
                        <h3>Kategori</h3>
                    </div>
                    <ul>
                        @foreach ($categories as $cat)
                        <li><span>{{ $cat->posts_count }}</span><a href="#" title="{{ $cat->name }}">{{ $cat->name }}</a></li>
                        @endforeach
                    </ul>
                </aside>
                <aside class="widget widget-posts">
                    <div class="widget-title">
                        <h3>Post Terbaru</h3>
                    </div>
                    @foreach ($posts->take(3) as $post)
                    <div class="recent-content">
                        <a href="blog-post.html"><img src="/images/recentpost1.jpg" alt="recentpost1"></a>
                        <h3><a href="blog-post.html">{{ $post->title }}</a></h3>
                        <span><a href="#">{{ $post->created_at->format('d M Y') }}</a></span>
                    </div>
                    @endforeach
                </aside>
        </div>
    </div>
</div><!-- Container /- -->

<div class="section-padding"></div>
@endsection