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
                      <li class="d-flex align-items-center"><a href="{{ route('articles.show', $article->id) }}">{{ $article->categories !== null ? $article->categories->first()->name : '' }}</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-dot"></i> <a href="{{ route('articles.show', $article->id) }}"><time datetime="2022-01-01">{{ $article->created_at->format('j M, Y') }}</time></a></li>
                    </ul>
                  </div>

                  <h2 class="title">
                    <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                  </h2>

                </article>
              </div><!-- End post list item -->

            @endforeach

          </div><!-- End blog posts list -->

        </div>

      </section><!-- /Blog Posts 2 Section -->

      <!-- Blog Pagination Section -->
      {{ $articles->links() }}


@endsection
