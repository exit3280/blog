@extends ('layout')

@section ('content')

  <div class="col-md-8">
    <h1>Sign in</h1>

    <form action="/login" method="POST">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>
    </form>

    @include ('layouts.errors')

  </div>

@endsection