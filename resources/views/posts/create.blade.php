@extends('layouts.app')


@section('content')
<main class="page-content">
    <section class="page-heading bg-image section section-sm bg-dark bg-fixed" style="background-image: url(images/bg-01-1920x690.jpg)">
      <div class="shell text-center">
        <h2 class="page-heading-title">Publish New Article</h2>
        <hr class="divider veil reveal-sm-block">
      </div>
    </section>
    <section>
      <div class="shell">
        <ul class="breadcrumbs">
          <li> <a href="/">Home</a> </li>
          <li> <a href="/posts">Blog</a> </li>
          <li class="active">New Post</li>
        </ul>
      </div>
      <hr class="hr">
    </section>

<br><br><br>
<div class="container">
	
    
    <form method="post" action="/posts">
       
        {{ csrf_field() }}

	    <div class="form-group">
	    	<label for="title">Title</label>
	    	<input type="text" name="title" id="title" class="form-control">
	    </div>

	     <div class="form-group">
	    	<label for="intro">Post Intro</label>
	    	<textarea class="form-control" rows="5" name="intro"></textarea>
	    </div>

	    <div class="form-group">
	    	<label for="body">Body</label>
	    	<textarea class="form-control" rows="5" name="body" id="body"></textarea>
	    </div>

	    <div class="form-group">
	    	<input type="submit" name="submit" class="btn btn-primary" value="Publish Article" >
	    </div>
    </form>
</div> 
<br><br><br>  
</main>
@endsection