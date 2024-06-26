@extends('front.index')
@section('content')
<div class="container py-5">

  <section>
    <h1>اهم المشروعات الخضراء في جمهورية مصر العربية</h1>
    <div class="container text-center">
      <div class="row">

        @foreach($areys as $arey)
        <div class="col">
          <div class="col-6">
            <div class="p-3">
              <div class="card">
                <div class="img-pos">
                  <img
                    src="{{ asset($arey->img) }}"
                    class="card-img-top" alt="...">
                </div>
                {{-- <h5 class="card-title">{{ $arey->name }}</h5> --}}
                <div class="card-footer">
                  <small class="text-body-secondary">
                    <h6>اسم المصنع</h6>
                    <p>{{ $arey->name }}</p>
                    <h6> تفصيل</h6>
                    <p>{{ $arey->description }}</p>
                    {{-- <p>
                      Cairo
                      <i class="fa-solid fa-location-dot"></i>
                    </p> --}}
                    {{-- <h6>رقم الهاتف</h6>
                    <p>20115785390+</p> --}}
                  </small>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

    <nav-1 aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">5</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">6</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav-1>
  </section>
</div>
@endsection