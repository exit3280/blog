@extends ('layout')

@section ('content')

  <div class="col-sm-8">

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>

    <hr>
    <div class="comments">
      <ul class="list-group">
        @foreach ($post->comments as $comment)
  
          <li class="list-group-item">
            <strong>{{ $comment->created_at->diffForHumans() }}: &nbsp;</strong>
            {{ $comment->body }}
          </li>
  
        @endforeach
      </ul>
    </div>

    <hr>

    {{-- Add a coment --}}
    <div class="card">
      <div class="card-block">
        <form action="/posts/{{ $post->id }}/comments" method="POST">
          {{ csrf_field() }}

          <div class="form-group">
            <textarea name="body" placeholder="your comment here" class="form-control" required></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add comment</button>
          </div>
        </form>

        @include ('layouts.errors')

      </div>
    </div>
  </div>

@endsection