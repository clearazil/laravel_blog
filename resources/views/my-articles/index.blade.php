@extends('layouts.app')

@section('title', 'Index - My Articles')

@section('body-class', 'contact-page')

@section('content')

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>My Articles</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">My Articles</a></li>
            <li class="current">Index</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

   <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <div class="info-item d-flex">
                <i class="bi bi-plus-circle flex-shrink-0"></i>
                <div>
                  <h4>New Article</h4>
                  <a href="{{ route('articles.create') }}" class="btn btn-success btn-sm mt-2">Create Article</a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-journal-text flex-shrink-0"></i>
                <div>
                  <h4>Your Statistics</h4>
                  <p>Total: {{ $articles->count() }} articles</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">


            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Created at</th>
                <th scope="col">Premium</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($articles as $article)
                <tr>
                <td scope="row">{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ Str::limit($article->content, 50) }}</td>
                <td>{{ $article->created_at->format('d-m-Y') }}</td>
                <td>
                    @if($article->is_premium)
                        <span class="badge bg-warning text-dark">Premium</span>
                    @endif
                </td>
                <td class="text-nowrap">
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-outline-secondary border-0 shadow-none">
                        <i class="bi bi-pencil" style="color: #198754;"></i> Edit
                    </a>

                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-secondary border-0 shadow-none" onclick="return confirm('Are you sure you want to delete this article?')">
                            <i class="bi bi-trash3 text-danger"></i> Delete
                        </button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>


          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->


@endsection
