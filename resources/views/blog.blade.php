
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
                            <div class="col-md-5 col-sm-12 col-xs-12 no-padding">
                                <div class="entry-cover">
                                    <a href="blog-post.html"><img src="images/blog-1-column1.jpg" alt="blog-1-column1"/></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12 blog-content no-padding">
                                <div class="post-date">
                                    <p>{{ $post->created_at->format('M') }}<span>{{ $post->created_at->format('d') }}</span></p>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-post.html" title="{{ $post->title }}">{{ $post->title }}</a></h3>
                                </div>
                                <div class="entry-content">
                                    <p>{{ $post->excerpt }}</p>
                                </div>
                                <a href="/blog-post/{{ $post->slug }}" class="entry-footer">Read More<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
                <nav class="blog-pagination no-padding">
                    <ul class="pagination">
                        <li>{{ $posts->links() }}</li>
                    </ul>
                </nav>
            </div>
            @else
                <p class="text-center fs-4">No post found.</p>
            @endif	
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
                        <h3>Categories</h3>
                    </div>
                    <ul>
                        @foreach ($categories as $cat)
                        <li><span>{{ $cat->posts_count }}</span><a href="#" title="{{ $cat->name }}">{{ $cat->name }}</a></li>
                        @endforeach
                    </ul>
                </aside>
                <aside class="widget widget-posts">
                    <div class="widget-title">
                        <h3>Recent Posts</h3>
                    </div>
                    @foreach ($posts->take(3) as $post)
                    <div class="recent-content">
                        <a href="blog-post.html"><img src="images/recentpost1.jpg" alt="recentpost1"></a>
                        <h3><a href="blog-post.html">{{ $post->title }}</a></h3>
                        <span><a href="#">{{ $post->created_at->format('d M Y') }}</a></span>
                    </div>
                    @endforeach
                </aside>
                <aside class="widget widget-catagories">
                    <div class="widget-title">
                        <h3>Archives</h3>
                    </div>
                    <ul>
                        <li><span>10</span><a href="#" title="June  2015">June  2015</a></li>
                        <li><span>11</span><a href="#" title="May  2015">May  2015</a></li>
                        <li><span>08</span><a href="#" title="April  2015">April  2015</a></li>
                        <li><span>10</span><a href="#" title="March  2015">March  2015</a></li>
                        <li><span>14</span><a href="#" title="February">February</a></li>
                        <li><span>08</span><a href="#" title="january">january</a></li>
                    </ul>
                </aside>
                <aside class="widget widget-tag">
                    <div class="widget-title">
                        <h3>Populer tags</h3>
                    </div>
                    <div class="tags">
                        <a href="#" title="Legal">Legal</a>
                        <a href="#" title="Attroney">Attroney</a>
                        <a href="#" title="Court">Court</a>
                        <a href="#" title="Law">Law</a>
                        <a href="#" title="Bar Council">Bar Council</a>
                        <a href="#" title="Justice">Justice</a>
                        <a href="#" title="Counseling">Counseling</a>
                        <a href="#" title="Advocates">Advocates</a>
                    </div>
                </aside>
            </div><!-- Widget-area /- -->
        </div>
        
    </div><!-- Container /- -->
    <div class="section-padding"></div>
</div>	<!-- Page Content /- -->

@endsection