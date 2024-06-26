@extends('back.admin_master')
@section('content')
@if (session('success'))
<script>
  alert('{{ session('success') }}');
</script>
@endif
@if (session('error'))
<script>
  alert('{{ session('error') }}');
</script>
@endif

<div class="row">
  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
      <img src="{{ asset($arey->img) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <form action="{{ route('cards.update', $arey->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="title">اسم القطاع</label>
            <input type="text" class="form-control" id="title" name="name" value="{{ $arey->name }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">موقع القطاع</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ $arey->description }}</textarea>
          </div>
          <div class="form-group">
            <label for="image">تحديث الصورة</label>
            <input type="file" class="form-control-file"  value="{{ $arey->img }}" id="img" name="img">
          </div>
          <button type="submit" class="btn btn-success">Update</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection