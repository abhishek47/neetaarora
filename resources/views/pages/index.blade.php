@extends('layouts.app')


@section('content')

<section data-min-height="500px" data-height="29.84%" class="swiper-container swiper-slider">
    <div class="swiper-wrapper">
     <div class="swiper-slide bg-dark" data-slide-bg="/images/home-slide-1.jpg" >
        <div class="swiper-slide-caption">
          <section class="section-70">
            <div class="shell text-center text-md-left">
              <h1 class="swiper-slide-title">Best of Motivational &amp; Parenting <br>
                Courses/Videos </h1>
              <h4 class="swiper-slide-subtitle veil reveal-sm-block"> We look forward to getting to know you and to <br class="veil reveal-sm-block">
                helping you take your life to new heights! </h4>
              <div class="group group-md"> <a class="button button-sm button-primary-filled veil reveal-sm-inline-block" href="/courses">Our Courses</a> <a class="button button-sm button-default" href="/videos">Watch Videos</a> </div>
            </div>
          </section>
        </div>
      </div>

      <div class="swiper-slide" data-slide-bg="/images/home-slide-3.jpg">
        <div class="swiper-slide-caption">
          <section class="section-70">
            <div class="shell text-center text-md-left">
              <h1 class="swiper-slide-title">Mrs. Neeta Arora | Motivational Speaker</h1>
              <div class="group group-md"> <a class="button button-sm button-primary-filled veil reveal-sm-inline-block" href="/about">Learn More</a> <a class="button button-sm button-default" style="color: #fff" href="/courses">Our Courses</a> </div>
            </div>
          </section>
        </div>
      </div>
     
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-nav">
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </section>
  
   <section class="bg-white section section-md">
    <div class="shell text-center">
      <h2>About Me</h2>
      <hr class="divider bg-primary">
      <div class="range range-xs-center range-50">
        <div class="cell-md-7 cell-lg-6">
          <div class="thumbnail-video"> <img src="images/video-back.jpg" alt="" width="436" height="288"> <a data-lightbox="iframe" href="https://www.youtube.com/watch?v=M-MILDUCkhw" class="play-icon"></a> </div>
        </div>
        <div class="cell-md-5 cell-lg-6 text-sm-left">
          <div class="inset-lg-left-70 inset-lg-right-70">
            <h4>Doing the right thing, at the right time.</h4>
            <p><b>Neeta Arora</b> is a Motivational Speaker, Life coach, Facilitator for Parenting, Mind power, Leadership skills, Positive attitude, Communication skills, Stress management, Time management, Goal setting, Build everlasting relationship, Team building, Winning habits, Habit of going extra mile, Dynamic memory, powerful public speaking, Smart study, Marketing, Dynamic yoga, Coaching and conunselling, Group dynamics, Selling skills, Personality development.</p>
            
            <a href="/about" class="button button-sm button-primary button-thin">Know More</a> </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-md bg-image bg-primary bg-fixed" style="background-image: url(images/bg-02-1920x1200.jpg)">
    <div class="shell text-center text-lg-left">
      <h2 class="reveal-inline-block text-middle">What I Do</h2>
      <hr class="divider divider-vertical bg-white text-middle veil reveal-lg-inline-block">
      <h4 class="text-light reveal-lg-inline-block text-middle inset-lg-right-60">I provide consultation for families, parenting and individuals!</h4>
      <a href="/courses" class="button button-sm button-primary-filled text-middle">See All Courses</a> </div>
  </section>

  <section class="section bg-white section-md">
    <div class="shell text-center">
      <h2>Articles To Read</h2>
      <hr class="divider bg-primary">
      <div class="owl-wrap inset-sm-left-70 inset-sm-right-70">
        <div data-items="1" data-sm-items="2" data-md-items="3" data-margin="29" data-dots-custom=".owl-custom-pagination" data-nav="true" data-dots="false" data-loop="false" data-dots-each="1" class="owl-carousel">

        @foreach($posts as $post)
         
	          <div>
	            <div class="quote-variant-1">
	              <div class="quote-body">
	                <h4><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h4>
	                <p>{{ substr($post->intro, 0, 90) }}...</p>
	              </div>
	              <div class="quote-meta"> <cite>{{ $post->user->name }} </cite>
	                <p class="text-gray-light">{{ $post->created_at->diffForHumans() }}</p>
	              </div>
	            </div>
	          </div>

          @endforeach
          
        </div>
      </div>
      <div class="owl-controls-custom veil-sm">
        <ul class="owl-custom-pagination owl-dots">
          <li class="owl-dot" data-owl-item="0"></li>
          <li class="owl-dot" data-owl-item="1"></li>
          <li class="owl-dot" data-owl-item="2"></li>
          <li class="owl-dot" data-owl-item="3"></li>
        </ul>
      </div>
    </div>
  </section>
 
  
  
  
  @include('pages.certificates')

@endsection