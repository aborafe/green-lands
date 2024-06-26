
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>المنصه الخضراء</title>
    <link rel="stylesheet" href="  {{ asset('frontend/assets/css/home.css') }}" />
    <link rel="stylesheet" href="  {{ asset('frontend/assets/css/cards.css') }}" />
    <link rel="stylesheet" href="  {{ asset('frontend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="  {{ asset('frontend/assets/css/form.css') }}" />
    
    <link rel="stylesheet" href="  {{ asset('frontend/assets/css/map.css') }}" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Preahvihear&family=Readex+Pro:wght@160..700&family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&family=Vazirmatn:wght@100..900&family=Ysabeau+Infant:ital,wght@0,1..1000;1,1..1000&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>


  <body dir="rtl">
    <nav dir="ltr">
      <ul>
        
        @if (Auth::check())
          <li> <a href="logout"><button class="button">تسجيل خروج</button></a> </li>
        @else
          <li> <a href="login"><button class="button">تسجيل</button></a> </li>
        @endif
        <li><a href="about">تواصل معنا</a></li>
      
        <li><a href="map">المناطق الاستثماريه </a></li>
        <li><a href="{{ route('card.home') }}">اهم المناطق الاستثماريه</a></li>
        <li><a href="form">تقديم طلب استثمار</a></li>
        <li><a href="home" class="active">الصفحه الرئيسيه</a></li>
        <li><img src="  {{ asset('frontend/assets/images/logo2 (2).png') }}" alt="" /></li>
      </ul>
    </nav>
@yield('content')

  <footer>
      <div class="row">
        <div class="col">
          <div class="part-1">
            <h2>بعض المواقع الهامه</h2>
            <ul>
              <li><a href="https://www.investinegypt.gov.eg/Arabic/Pages/default.aspx">الهيئة العامه للاسنثمار والمناطق الحره</a></li>
          
            <li> <a href="https://www.idsc.gov.eg/">مركز دعم القرار</a></li>
            <li></li><a href="https://mped.gov.eg/">وزارة التخطيط والتنميه الاقتصاديه</a></li>
            <li><a href="https://www.presidency.eg/ar/%D9%85%D8%B5%D8%B1/%D8%B1%D8%A4%D9%8A%D8%A9-%D9%85%D8%B5%D8%B1-2030/">رؤية مصر 2030 </a></li>
          </ul>
          
          </div>
        </div>
        <div class="col">
          <div class="part-2">
            <h2>تواصل معنا</h2>
            <div class="icons">
              <i class="fa-brands fa-youtube"></i>
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-google"></i>
              <i class="fa-brands fa-twitter"></i>
              <br>
              15337<i class="fa-solid fa-mobile-screen-button"></i>
              +984783562791 <i class="fa-brands fa-whatsapp"></i>
            </div>
            </div>
            
            
          </div>
        </div>
    
  </footer>

  </body>
</html>
