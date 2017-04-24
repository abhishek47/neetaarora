@extends('layouts.app')

@section('content')

<main class="page-content">
    <section class="page-heading bg-image section section-sm bg-dark bg-fixed" style="background-image: url(images/bg-01-1920x690.jpg)">
      <div class="shell text-center">
        <h2 class="page-heading-title">Blog</h2>
        <hr class="divider veil reveal-sm-block">
      </div>
    </section>
    <section>
      <div class="shell">
        <ul class="breadcrumbs">
          <li> <a href="/">Home</a> </li>
          <li> <a href="/posts">Blog</a> </li>
          <li class="active">Blog post</li>
        </ul>
      </div>
      <hr class="hr">
    </section>
    <section class="section bg-white section-md">
      <div class="shell">
        <div class="range range-80">
          <div class="cell-md-8 cell-lg-9">
            <section class="section">
              <article class="post post-single">
                
                <div class="post-heading">
                  <h3>{{ $post->title }}</h3>
                </div>
                <div class="post-meta">
                  <ul>
                    <li> <span class="text-gray-base text-medium">Published:&nbsp;</span>
                      <time datetime="2016-01-22">{{ $post->created_at->diffForHumans() }}</time>
                    </li>
                    <li> <span class="text-gray-base text-medium">Posted by:&nbsp;</span> <a href="#" class="post-meta-admin">Neeta Arora</a> </li>
                    <li> <span class="text-gray-base text-medium">Comments:&nbsp;</span> <a href="#" class="post-meta-comment">2</a> </li> </li>
                  </ul>
                </div>
                <div class="post-body">
                  {!! $post->body !!}
                </div>
                <div class="post-footer">
                  <h5 class="text-medium">Share this post:</h5>
                  <ul class="inline-list inline-list-sm pull-right">
                    <li> <a href="#" class="icon icon-xxs-variant-1 icon-ship-gray fa-facebook"></a> </li>
                    <li> <a href="#" class="icon icon-xxs-variant-1 icon-ship-gray fa-twitter"></a> </li>
                    <li> <a href="#" class="icon icon-xxs-variant-1 icon-ship-gray fa-google-plus"></a> </li>
                    <li> <a href="#" class="icon icon-xxs-variant-1 icon-ship-gray fa-pinterest-p"></a> </li>
                  </ul>
                </div>
              </article>
            </section>
            
            <hr class="hr">
            <div class="range">
              <div class="cell-xs-12">
                <h3 class="text-bold">3 Comments</h3>
                <div class="comment-list">
                  
                  <div class="box-comment">
                    <div class="unit unit-horizontal unit-spacing-md">
                      
                      <div class="unit-body">
                        <div class="box-comment-body">
                          <header class="box-comment-header">
                            <div class="box-comment-header unit unit-inverse unit-spacing-md unit-md unit-md-horizontal unit-md-inverse unit-md-middle unit-md-align-right">
                              <div class="unit-body unit-grow-1">
                                <ul class="box-comment-meta inline-list">
                                  <li class="box-comment-time">
                                    <time datetime="2016-01-01">Feb 16, 7:42 PM</time>
                                </ul>
                              </div>
                              <div class="unit-right">
                                <h6 class="box-comment-title">Mila MOa</h6>
                              </div>
                            </div>
                          </header>
                          <p class="box-comment-message">Very useful post! Thanks for sharing!</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="range">
              <div class="cell-xs-12">
                <h3>Leave a comment</h3>
                <div class="inset-sm-right-70 inset-lg-right-100 offset-top-10">
                  <form class="rd-mailform rd-mailform-label-outside form-white-1 text-left">
                    <div class="form-group">
                      <label for="comment-message" class="form-label-outside">Message:</label>
                      <textarea id="comment-message" name="message" data-constraints="@Required" class="form-input"></textarea>
                    </div>
                    <button type="submit" class="button button-sm button-primary-filled">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @include('posts.sidebar')
            </section>
          </div>
        </div>
      </div>
    </section>
  </main>



@endsection