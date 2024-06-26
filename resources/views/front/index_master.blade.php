
@extends('front.index')
@section('content')
<header>
  <div class="scroll">
    <h1>المنصه الالكترونيه الموحده للمشروعات الخضراء
      <br>
      في جمهورية مصر العربيه
    </h1>

  
  </div>
</header>
<div class="container py-5">

  @if (session('success'))
  <script>
    alert('{{ session('success') }}');
  </script>
@endif
  <div class="section-1">
    <div class="text">
      
      <h2>
        اهم الاخبار والمعلومات عن المشروعات الخضراء<br>في جمهورية مصر العربيه
      </h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-50">
          <img src="  {{ asset('frontend/assets/images/5.png') }}" class="card-img-top" alt="..." />
          <div class="card-body">
            <p class="card-text">
              كيف نجحت الدوله المصريه في <br />
              تحقيق طفرة في المشروعات الخضراء
            </p>
          </div>
          <div class="link">
            <a href=""
              >استكشف الصفحه <i class="fa-solid fa-arrow-left"></i
            ></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-50">
          <img src="  {{ asset('frontend/assets/images/4.jpg') }}" class="card-img-top" alt="..." />
          <div class="card-body">
            <p class="card-text">ماهي <br />ابرز المشروعات الخضراء</p>
          </div>
          <div class="link">
            <a href=""
              >استكشف الصفحه <i class="fa-solid fa-arrow-left"></i
            ></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-50">
          <img src="  {{ asset('frontend/assets/images/3.jpg') }}" class="card-img-top" alt="..." />
          <div class="card-body">
            <p class="card-text">
              ما هي المبارده الوطنيه<br />للمشروعات الخضراء الذكيه
            </p>
          </div>
          <div class="link">
            <a href=""
              >استكشف الصفحه <i class="fa-solid fa-arrow-left"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-2">
  <div class="container px-4 text-end">
    <div class="row gx-5">
      <div class="col">
        <div class="p-3">
          <h1>دعم وتعزيز الاستثمار في  <br />جمهورية مصر العربيه</h1>
          <ul>
            <li>
              <i class="fa-solid fa-circle-check"></i> تسويق الفرص
              الاستثماريه المتاحه
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i> جذب المزيد من
              المستثمرين المحليين والاجانب
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i> تحفيذ نمو القطاع
              الصناعي في مصر
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i> خلق فرص عمل جديده
              للشباب
            </li>
          </ul>
          <button>المزيد</button>
        </div>
      </div>
      <div class="col">
        <div class="p-3 bg-1">
          <div class="container">
            <div class="chart">
              <div>
                <canvas id="barchart" width="100px" height="70px"></canvas>
              </div>
            </div>
            
            </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
          <script src="  {{ asset('frontend/assets/js/chart1.js') }}"></script>
          
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section-3">
  <div class="container px-4 text-end">
    <div class="row gx-5">
      <div class="col">
        <div class="p-3 bg-2">
          <div class="container">
            <div class="chart">
              <div>
                <canvas id="doughnut"></canvas>
              </div>
            </div>
            
            </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
          <script src="  {{ asset('frontend/assets/js/chart2.js') }}"></script>
          
          
      </div>
      <div class="col">
        <div class="p-3">
          <h1>
            ندعوكم لاستكشاف الموقع والاطلاع على محتواه<br />المتنوع,ونرحب
            بكم في الانضمام الى مجتمعنا المتنامي<br />معا يمكننا احداث فرق
            في المشاريع الخضراء في مصر
          </h1>
          <button>
            <i class="fa-solid fa-leaf"></i>استكشاف موقع للاستثمار
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section-4">
  <div class="container py-5 text-center">
    <div class="im"><img src="  {{ asset('frontend/assets/images/8.jpg') }}" alt="" /></div>
  </div>
  <div class="drops">
    <div class="container px-4 text-end">
      <div class="row gx-5">
        <div class="col">
          <div class="p-3">
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-secondary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                حجم الاستثمارات
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <button class="dropdown-item" type="button">
                    Action
                  </button>
                </li>
                <li>
                  <button class="dropdown-item" type="button">
                    Another action
                  </button>
                </li>
                <li>
                  <button class="dropdown-item" type="button">
                    Something else here
                  </button>
                </li>
              </ul>
            </div>
            <br />
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-secondary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                قطاعات الاستثمار
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <button class="dropdown-item" type="button">
                    Action
                  </button>
                </li>
                <li>
                  <button class="dropdown-item" type="button">
                    Another action
                  </button>
                </li>
                <li>
                  <button class="dropdown-item" type="button">
                    Something else here
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="p-3">
            <h1>
               تشهد مصر تحولا اقتصاديا هاما خلال السنوات الاخيره,<br>مع التركيز على جذب الاستثمارات المحليه والاجنبيه لتنمية<br>مختلف القطاعات بما في ذلك القطاع الصناعي.
            </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section-5">
  <div class="container py-5">
  <div class="text">
  
    <h2>
    القطاعات الاكثر جذبا للاستثمارات  
    </h2>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-50">
        <img src="  {{ asset('frontend/assets/images/12.jpg') }}" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            <h3>قطاع الصناعه </h3>
            <h6>يمثل القطاع 22.4% من اجمالي الاستثمارات</h6>
          </p>
        </div>
        <div class="link">
          <a href=""
            ><button>المزيد</button></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-50">
        <img src="  {{ asset('frontend/assets/images/11.jpg') }}" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            <h3>قطاع العقارات</h3>
            <h6>يعد القطاع من اهم القطاعات في مصر, ويشهد نموا مستمرا</h6>
          </p>
        </div>
        <div class="link">
          <a href=""
            ><button>المزيد</button></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-50">
        <img src="  {{ asset('frontend/assets/images/10.jpg') }}" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            <h3>قطاع الطاقه</h3>
            <h6>شهد قطاع الطاقه نموا كبيرا خلال السنوات الاخيره بسبب اكتشافات الغاز الطبيعي</h6>
          </p>
        </div>
        <div class="link">
          <a href=""
            ><button>المزيد</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="section-6">
<div class="container py-5">
  <h2>تقديم طلب الاستثمار</h2>
  <div class="supm">
    <button>تقديم</button>
    <input type="email" placeholder="البريد الالكتروني">
  </div>
</div>
</div>

@endsection