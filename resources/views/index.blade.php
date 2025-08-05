@extends('layouts.app')

@section('title', 'Index - Blog')

@section('body-class', 'index-page')

@section('content')
    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
              <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "breakpoints": {
                      "320": {
                        "slidesPerView": 1,
                        "spaceBetween": 40
                      },
                      "1200": {
                        "slidesPerView": 1,
                        "spaceBetween": 1
                      }
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="assets/img/img_h_6.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="swiper-slide">
                    <img src="assets/img/img_h_7.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="swiper-slide">
                    <img src="assets/img/img_h_8.jpg" alt="Image" class="img-fluid">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="col-lg-4 order-lg-1">
              <span class="section-subtitle" data-aos="fade-up">Welcome</span>
              <h1 class="mb-4" data-aos="fade-up">
                Excepteur sint occaecat cupidatat non proident
              </h1>
              <p data-aos="fade-up">
                Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia, there live the blind texts. Separated they
                live in Bookmarksgrove right at the coast of the Semantics, a large
                language ocean.
              </p>
              <p class="mt-5" data-aos="fade-up">
                <a href="#" class="btn btn-get-started">Get Started</a>
              </p>
            </div>
          </div>
        </div>
      </section><!-- /About Section -->

      <!-- Blog Posts Section -->
      <section id="blog-posts" class="blog-posts section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <p>Recent Posts</p>
          <h2>Blog Posts</h2>
        </div><!-- End Section Title -->
        <div class="container">


          <div class="row gy-4">
            @foreach($articles as $article)
                <div class="col-md-6 col-lg-4">
                <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('articles.show', $article->id) }}" class="thumb d-block"><img src="{{ $article->image }}" alt="Image" class="img-fluid rounded"></a>

                    <div class="post-content">
                    <div class="meta">
                        <a href="#" class="cat">{{ $article->categories !== null ? $article->categories->first()->name : '' }}</a> •
                        <span class="date">{{ $article->created_at->format('j M, Y') }}</span>
                    </div>
                    <h3><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></h3>
                    <p>
                        Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.
                    </p>

                    <div class="d-flex author align-items-center">
                        <div class="pic">
                        <img src="" class="img-fluid rounded-circle">
                        </div>
                        <div class="author-name">
                        <strong class="d-block">{{ $article->user->name }}</strong>
                        <span class="">Lead Product Designer</span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach

          </div>
        </div>
      </section><!-- /Blog Posts Section -->

      <!-- Pricing Section -->
      <section id="pricing" class="pricing section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <p>Plans</p>
          <h2>Pricing Table</h2>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing-item">
                <h3>Free</h3>
                <h4><sup>$</sup>0<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li class="na">Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="pricing-item recommended">
                <span class="recommended-badge">Recommended</span>
                <h3>Business</h3>
                <h4><sup>$</sup>19<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing-item">
                <h3>Developer</h3>
                <h4><sup>$</sup>29<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div><!-- End Pricing Item -->

          </div>

        </div>

      </section><!-- /Pricing Section -->

@endsection
