<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DÜNYA VİCDAN DERNEĞİ</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
 <!-- favicon -->
    <link rel="icon" href="images/favicon.png" sizes="32x32">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/images/logo2.png')}}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&#038;display=swap" rel="stylesheet" />
  </head>
  <body>
    <!-- Start Header -->
    <div class="header" id="header">
      <div class="container">
        <a href="#" class="logo"><img src="images/logo.png" width="150" alt=""></a>
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
<br><br><br>
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
  </body>
</html>