@extends('back.admin_master')
@section('content')
<div class="row">
  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
      <img src="{{ asset($news->img) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="title">عنوان المقال</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">المحتوى</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ $news->description }}</textarea>
          </div>
          <div class="form-group">
            <label for="image">تحديث الصورة</label>
            <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-success">Update</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection