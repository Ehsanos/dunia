@extends('layouts.master')

@section('content')

<!-- Start Services -->
<div class="services" id="services">
    <h2 class="main-title">صفحة تحكم المدير</h2>
    <div class="container">
      <div class="box">
        <i style="color:#fff" class="fas fa-user-shield fa-4x"></i>
        <h3>إضافة صورة</h3>
        <div class="info">
          <a href="{{route('gallary-img.create')}}">الذهاب</a>
        </div>
      </div>
      <div class="box">
        <i style="color:#fff" class="fas fa-user-shield fa-4x"></i>
        <h3>إضافة فيديو</h3>
        <div class="info">
          <a href="{{route('promo-vid.create')}}">الذهاب</a>
        </div>
      </div>
      <div class="box">
        <i style="color:#fff" class="fas fa-user-shield fa-4x"></i>
        <h3>إدارة الحملات</h3>
        <div class="info">
          <a href="/tags">الذهاب</a>
        </div>
      </div>
      <div class="box">
        <i style="color:#fff" class="fas fa-user-shield fa-4x"></i>
        <h3>إدارة المنشورات</h3>
        <div class="info">
          <a href="/posts">الذهاب</a>
        </div>
      </div>
      <div class="box">
        <i style="color:#fff" class="fas fa-user-shield fa-4x"></i>
        <h3>تسجيل الخروج</h3>
        <div class="info">
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">الذهاب</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            </form>
        </div>
      </div>
    </div>
</div>

@endsection