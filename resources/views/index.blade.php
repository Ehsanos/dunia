<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/images/logo2.png')}}">

    <title>DÜNYA VİCDAN DERNEĞİ</title>
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 <!-- favicon -->

    <link rel="icon" href="{{ asset('images/favicon.png') }}" sizes="32x32">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('fa/all.min.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&#038;display=swap" rel="stylesheet" />
  </head>
  <body>
    <!-- Start Header -->
    <div class="header" id="header">
      <div class="container">
        <a href="/" class="logo"><img src="images/logo.png" width="150" alt=""></a>
        <ul class="main-nav">
          <li><a href="/">الرئيسية</a></li>
          <li><a href="/about">عن الجمعية</a></li>
          <li><a href="#articles">الحملات</a></li>
          <li><a href="#">تبرع</a></li>
          <li><a href="/contact">تواصل معنا</a></li>
        </ul>
      </div>
    </div>
    <!-- End Header -->
    <!-- Start Landing -->
    <div class="landing">
      <div class="container">
        <div class="text">
          <h1>نبذة عن الجمعية</h1>
          <p>
            

تأسست جمعية دنيا وجدان الإنسانية عام 2022 كجمعية غير حكومية إنسانية مرخصة في تركيا بتاريخ 6/1/2022
بموجب رقم الترخيص  
E_87385697_450_16876034_272_080 <br>
<p style="background-color: #30c7b5;padding: 5px;border-radius: 5px;color:#fff;">تهدف الى مساعدة السوريين في داخل سوريا وتركيا</p>

          </p>
        </div>
        <div class="image">
          <img decoding="async" src="images/logo.png" alt="" />
        </div>
      </div>
      <a href="#articles" class="go-down">
        <i class="fas fa-angle-double-down fa-2x"></i>
      </a>
    </div>
    <!-- End Landing -->
      <!-- Start Gallery -->
      <div class="gallery" id="gallery">
        <h2 class="main-title">صور الحملات</h2>
        @foreach ($images as $image)
          <div class="container">
            <div class="box">
              <div class="image">
                <img decoding="async" src="{{ URL::asset($image->photo)}}" alt="" />
              </div>
            </div>
          </div>
        @endforeach
        
      </div>
      <!-- End Gallery -->


    <!-- Start Articles -->
    <div class="articles" id="articles">
      <h2 class="main-title">الحملات</h2>
      <div class="container">
          @foreach ($posts as $post)
          <div class="box">
            <img decoding="async" src="/{{$post->photo}}" alt="Post image" />
            <div class="content">
              <h3>{{$post->title}}</h3>
              <h5 style="margin: 10px 0; background-color: #30c7b5;padding: 5px;border-radius: 3px ; display : inline-block;">{{$post->tag->tag}}</h5>
              <p>{{ \Illuminate\Support\Str::limit($post->content, 20, $end='...') }}</p>
            </div>
            <div class="info">
              <a href="">تبرع الآن</a>
              <i class="fas fa-long-arrow-alt-left"></i>
            </div>
          </div>
          @endforeach
          
      </div>
    </div>
    <div class="spikes"></div>
    <!-- End Articles -->
  

    <!-- Start Services -->
    <div class="services" id="services">
      <h2 class="main-title">أهم الحملات</h2>
      <div class="container">
        @foreach ($tags as $tag)
          <div class="box">
            <i style="color:#fff" class="fas fa-user-shield fa-4x"></i>
            <h3>{{$tag->tag}}</h3>
            <div class="info">
              <a href="#">تبرع الآن</a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <!-- End Services -->
    
<!-- Start Team -->
<div class="team" id="team">
  <h2 class="main-title">برومو اعمال الحملات</h2>
  <div class="container">
    @foreach ($videos as $video)
    <div class="box">
      <div class="data video" data-video-url="{{$video->link}}">

          <img decoding="async" class="" src="" alt="Promo Video">
          <div class="play-button"><i class="fa-regular fa-circle-play fa-3x" style="color: #ccd3e0;"></i></div>
          <div id="video-popup" class="video-popup">
            <div class="video-popup-content">
                <span class="close">&times;</span>
                <iframe id="youtube-video" width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
            </div>
          </div> 

        <div class="social">
          <a href="https://www.facebook.com/DuniaWijdan" class="facebook">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://api.whatsapp.com/send/?phone=905353244850&text&type=phone_number&app_absent=0" class="whatsapp">
            <i class="fab fa-whatsapp"></i>
          </a>
          <a href="#">
            <i class="fa-solid fa-handshake-angle"></i>
          </a>
        </div>
      </div>
    </div>
    @endforeach
    
  </div>
</div>

<!-- End Team -->
 

    <!-- Start Stats -->
    <div class="stats" id="stats">
      <h2>الإحصائيات</h2>
      <div class="container">
        <div class="box">
        <img src="images/sheep.png" width="50" height="50" alt="">
          <span class="number">560</span>
          <span class="text">أضاحي</span>
        </div>
        <div class="box">
            <img src="images/sofa.png" width="50" height="50" alt="">
          <span class="number">1000</span>
          <span class="text">أثاث منزلي</span>
        </div>
        <div class="box">
            <img src="images/take-away.png" width="50" height="50" alt="">
          <span class="number">910</span>
          <span class="text">وجبات طعام</span>
        </div>
        <div class="box">
            <img src="images/tshirt.png" width="50" height="50" alt="">
          <span class="number">450</span>
          <span class="text">ألبسة</span>
        </div>
        <div class="box">
            <img src="images/camping.png" width="50" height="50" alt="">
            <span class="number">80</span>
            <span class="text">خيمة</span>
          </div>
      </div>
    </div>
    <!-- End Stats -->
    <!-- Start Discount -->
    <h2 class="main-title">تواصل معنا</h2>
    <div class="discount" id="discount">
      <div class="image">
        <div class="content">
         
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25798.2999559156!2d36.64073700000001!3d36.074287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15257532a7b238b5%3A0x9e142206d4122477!2z2K3YsdmG2KjZiNi02Iwg2LPZiNix2YrYpw!5e0!3m2!1sar!2sus!4v1710988123685!5m2!1sar!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 

        </div>
      </div>
      <div class="form">
        <div class="content">
          <h2>تواصل عبر البريد :</h2>
          <form action="">
            <input class="input" type="text" placeholder="ادخل اسمك" name="name" />
            <input class="input" type="email" placeholder="ادخل ايميلك" name="email" />
            <textarea class="input" placeholder="اخبرنا عن محتوى رسالتك" name="message"></textarea>
            <input type="submit" value="ارسال" />
          </form>
        </div>
      </div>
    </div>
    <!-- End Discount -->

       <!-- Start Email -->
     <div class="events" id="events">

        <h2 class="main-title" style="margin-bottom: 0;">اشترك بالنشرة</h2>
        <div class="container">
          <div class="subscribe">
            <form action="">
              <input type="email" placeholder="Enter Your Email" />
              <input type="submit" value="Subscribe" />
            </form>
          </div>
        </div>
      </div>
      <!-- End Email -->
 
    <!-- Start Footer -->
    <div class="footer">
      <div class="container">
        <div class="box">
          <h3>جمعية دنيا وجدان الإنسانية</h3>
          <ul class="social">
            <li>
              <a href="https://www.facebook.com/DuniaWijdan" class="facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="https://api.whatsapp.com/send/?phone=905353244850&text&type=phone_number&app_absent=0" class="whatsapp">
                <i class="fab fa-whatsapp"></i>
              </a>
            </li>
            <li>
              <a href="#" class="telegram">
                <i class="fab fa-telegram"></i>
              </a>
            </li>
          </ul>
        
        </div>
        <div class="box">
          <ul class="links">
            <li><a href="#">التبرع الآن</a></li>
            <li><a href="{{route('privacy_policy')}}">سياسة الخصوصية</a></li>
           
          </ul>
        </div>
        <div class="box">
          
          <div class="line">
            <i class="fas fa-phone-volume fa-fw"></i>
            <div class="info">
              <span>009056001134</span>
              <span>00905347406354</span>
            </div>
          </div>
        </div>
        <div class="box">
         <img src="images/logo.png" width="250" height="250" alt="">
        </div>
      </div>
      <p class="copyright">Powered by DÜNYA VİCDAN DERNEĞİ</p>
    </div>
    <!-- End Footer -->
    <script src="fontawesome-free-5.10.2-web/js/all.js "></script>
    <script src="js/popup_video.js"></script>
  </body>
</html>