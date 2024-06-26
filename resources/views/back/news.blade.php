@extends('back.admin_master')
@section('content')
<div class="row">
  @if (session('success'))
  <script>
    alert('{{ session('success') }}');
  </script>
@endif
  @foreach($news as $news)
  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
      <img src="{{ asset($news->img) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $news->title }}</h5>
        <h5 class="card-title">{{ $news->date }}</h5>
        <div class="form-group">
          <label for="exampleFormControlTextarea1"> المحتوى </label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $news->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success"><a href="{{ route('news.edit', $news->id) }}">update</a></button>
        <form action="{{ route('news.delete', $news->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection