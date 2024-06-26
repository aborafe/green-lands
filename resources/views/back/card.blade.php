@extends('back.admin_master')
@section('content')
@if (session('success'))
<script>
  alert('{{ session('success') }}');
</script>
@endif
@foreach($areys as $arey)
<div class="row">
  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
      <img src="{{ asset($arey->img) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $arey->name }}</h5>
        <div class="form-group">
          <label for="exampleFormControlTextarea1"> معلومات عن القطاع </label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $arey->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success"><a href="{{ route('cards.edit', $arey->id) }}">update</a></button>
        <form action="{{ route('cards.delete', $arey->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection