@extends('back.admin_master')
@section('content')
<div class="card card-default">
  <div class="card-header card-header-border-bottom">
    <h2>News</h2>
  </div>
  @if (session('success'))
  <script>
    alert('{{ session('success') }}');
  </script>
@endif
  <div class="card-body">
    <form class="new" action="{{ route('cards.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="exampleFormControlInput1">اسم القطاع</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="text">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect12">معلومات عن القطاع</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div id="summernote"></div>
      <div class="form-group">
        <label for="exampleFormControlFile1">ارفاق صورة</label>
        <input type="file" class="form-control-file" name="img" id="exampleFormControlFile1">
      </div>
      <div class="form-footer pt-4 pt-5 mt-4 border-top">
        <button type="submit" class="btn btn-primary btn-default">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection