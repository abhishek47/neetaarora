<article class="post">
  
  <div class="post-heading">
    <h3> <a href="/posts/{{$post->slug}}">{{ $post->title }}</a> </h3>
  </div>
  <div class="post-meta">
    <ul>
      <li> <span class="text-gray-base text-medium">Published :&nbsp;</span>
        <time datetime="2016-01-22">{{ $post->created_at->diffForHumans() }}</time>
      </li>
      <li> <span class="text-gray-base text-medium">Posted by:&nbsp;</span> <a href="#" class="post-meta-admin">{{ $post->user->name }}</a> </li>
      <li> <span class="text-gray-base text-medium">Comments:&nbsp;</span> <a href="#" class="post-meta-comment">2</a> </li>
    </ul>
  </div>
  <div class="post-body">
    <p>{{ $post->intro }}</p>
    <a href="/posts/{{$post->slug}}" class="button button-sm button-primary button-thin">Read More</a> </div>
</article>