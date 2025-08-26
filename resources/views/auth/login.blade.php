@extends('layouts.app')

@section('title', 'Index - Login')

@section('body-class', 'contact-page')

@section('content')

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>Login</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Login</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade">
        <div class="row justify-content-center">

                <h1>Login</h1>

            <div class="row gy-5 gx-lg-5">
            <div class="col-lg-8">
                <form action="{{ route("login.auth") }}" method="POST" role="form" class="php-email-form">
                @csrf
                <div class="form-group mt-3">
                    <input type="text" class="form-control" value="{{ old('email') }}" name="email" id="email" placeholder="Email" required="">
                </div>
                <div class="form-group mt-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    @if ($errors->any())
                        <div class="error-message">
                            <ul>

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>
                        </div>
                    @endif
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Login</button></div>
                </form>
            </div><!-- End Contact Form -->

            </div>
        </div>


      </div>

    </section><!-- /Contact Section -->


@endsection
