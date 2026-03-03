@extends('layouts.app')

@section('title', 'New Article - My Articles')

@section('body-class', 'contact-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>My Articles</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('my-articles.index') }}">My Articles</a></li>
            <li class="current">Create</li>
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
              <h3>New Article</h3>
              <p>Use this form to add a new article to your blog.</p>

            </div>

          </div>

          <div class="col-lg-8">
            <form action="{{ route('articles.store') }}" method="post" role="form" class="php-email-form">
                @csrf
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" required="">
              </div>
              <div class="form-group mt-3">
             <select name="is_premium" class="form-control">
                <option value="0">Free article</option>
                <option value="1">Premium article</option>
             </select>
          </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="content" placeholder="Write your article here..." required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach( $errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Save Article</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

@endsection
