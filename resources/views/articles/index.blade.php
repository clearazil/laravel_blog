@extends('layouts.app')

@section('title', 'Index - Blog')

@section('body-class', 'blog-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
          <h1>Blog</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li class="current">Blog</li>
            </ol>
          </nav>
        </div>
      </div><!-- End Page Title -->
  
      <!-- Blog Posts 2 Section -->
      <section id="blog-posts-2" class="blog-posts-2 section">
  
        <div class="container">
  
          <div class="row gy-5">

            @foreach($articles as $article)
  
              <div class="col-lg-4 col-md-6">
                <article>
    
                  <div class="post-img">
                    <img src="{{ $article->image }}" alt="" class="img-fluid">
                  </div>
    
                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><a href="blog-details.html">{{ $article->categories !== null ? $article->categories->first()->name : '' }}</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-dot"></i> <a href="blog-details.html"><time datetime="2022-01-01">{{ $article->created_at->format('j M, Y') }}</time></a></li>
                    </ul>
                  </div>
    
                  <h2 class="title">
                    <a href="blog-details.html">{{ $article->title }}</a>
                  </h2>
    
                </article>
              </div><!-- End post list item -->

            @endforeach
  
            {{-- <div class="col-lg-4 col-md-6">
  
              <article>
  
                <div class="post-img">
                  <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                </div>
  
                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><a href="blog-details.html">Fashion</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-dot"></i> <a href="blog-details.html"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                  </ul>
                </div>
  
                <h2 class="title">
                  <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                </h2>
  
              </article>
  
            </div><!-- End post list item -->
  
            <div class="col-lg-4 col-md-6">
  
              <article>
  
                <div class="post-img">
                  <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                </div>
  
                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><a href="blog-details.html">Laws</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-dot"></i> <a href="blog-details.html"><time datetime="2022-01-01">Jul 5, 2022</time></a></li>
                  </ul>
                </div>
  
                <h2 class="title">
                  <a href="blog-details.html">Possimus soluta ut id suscipit soluta</a>
                </h2>
  
              </article>
  
            </div><!-- End post list item --> --}}
  
          </div><!-- End blog posts list -->
  
        </div>
  
      </section><!-- /Blog Posts 2 Section -->
  
      <!-- Blog Pagination Section -->
      {{ $articles->links() }}

  
@endsection