@extends('layouts.app')

@section('content')

<main class="page-content">
    <section class="page-heading bg-image section section-sm bg-dark bg-fixed" style="background-image: url(images/bg-01-1920x690.jpg)">
      <div class="shell text-center">
        <h2 class="page-heading-title">Articles By Neeta Arora</h2>
        <hr class="divider veil reveal-sm-block">
      </div>
    </section>
    <section>
      <div class="shell">
        <ul class="breadcrumbs">
          <li> <a href="/">Home</a> </li>
          <li class="active">Blog</li>
        </ul>
      </div>
      <hr class="hr">
    </section>
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range range-80">
          <div class="cell-md-8 cell-lg-9">

          @foreach($posts as $post)

             @include('posts.article')

           @endforeach

            {{ $posts->links() }}
            
          </div>
           @include('posts.sidebar')
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>



@endsection