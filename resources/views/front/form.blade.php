@extends('front.index')
@section('content')
 
<form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="container py-5" dir="rtl">

          <div class="container-fluid p-4">
            <div class="row w-95 " id="form">
                <div class="col-md-4 ">
                    <div class="mb-3 mt-3">
                        <label for="exampleFormControlInput1"
                            class="form-label"><b>أسم المستثمر</b></label>
                        <input type="text" class="form-control"
                            id="exampleFormControlInput1" name="name">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="exampleFormControlInput1"
                            class="form-label"><b>رقم الهاتف</b></label>

                            <input type="text" class="form-control"
                            id="exampleFormControlInput1" name="phone">
                    </div>
                  
                    <div class="mb-3 mt-3 desc">
                        <label for="exampleFormControlInput1"
                            class="form-label"><b>اسنفسارات اخرى</b></label>
                  <br>
                            <input type="text"  class="form-control"
                            id="exampleFormControlInput1" name="description">
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="mb-3 mt-3">
                        <label for="exampleFormControlInput1"
                            class="form-label"><b>الرقم القومي</b></label>
                        <input type="number" class="form-control"
                            id="exampleFormControlInput1" name="National" name="number">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="exampleFormControlInput1"
                            class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control"
                            id="exampleFormControlInput1" name="email">
                    </div>
                  

                  
                </div>

                
                <div class="col-md-4 ">
                  <div class="mb-3 mt-3">
                    <label for="exampleFormControlInput1"
                    class="form-label"><b>تاريخ الاستثمار</b></label>
                    <input type="date" class="form-control"
                    id="exampleFormControlInput1" name="date">
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="exampleFormControlInput1"
                    class="form-label"><b> المنطقه المرغوبه</b></label>
                    <input type="text" class="form-control"
                    id="exampleFormControlInput1" name="location">
                  </div>
                  <div class="mb-3 mt-3">
                      <label for="exampleFormControlInput1"
                          class="form-label"><b>WhatsApp</b></label>
                          <input type="text" class="form-control"
                          id="exampleFormControlInput1" name="whatsaap">
                  </div>
                </div>
              
            </div>
            <div class="row mt-5">
                <div class="col-md-7">

                    <input type="checkbox" id>
                    أنا أتفهم و أوافق على بنود الخدمة الخاصة بفاستركابيتال
                    متضمنة <a href>الأحكام و الشروط </a>و
                    <a href>سياسة الخصوصية</a>
                </div>

                <div class="col-md-3">
                    <button class="button">إرسال</button>
                </div>
            </div>
            </form>
        </div>


      
        </div>
    
@endsection