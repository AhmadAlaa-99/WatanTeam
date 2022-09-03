<div class="container d-flex align-items-center justify-content-between">


<h4 class="text-light"><a href="index.html"><span>فريق وطن التطوعي للتدريب</span></a></h4>

                    
<!-- Uncomment below if you prefer to use an image logo -->
</div>
<div class="logo">
<a href="index.html"><img src="assets/img/WatanLogo-2.png" alt="" class="img-fluid" style="width:170px; height:150px;"></a>
</div>
<nav id="navbar" class="navbar" style="direction:rtl;">
<ul> 
    <li><a class="nav-link scrollto active" href="{{route('welcome')}}">الرئيسية</a></li>
    <li><a class="nav-link scrollto" href="#about">نبذة عن الفريق</a></li>
    
    
    @guest()
   

    <li><a class="nav-link scrollto" data-toggle="modal" href="#scrollmodal">طلب انضمام</a></li> 

    <li><a class="nav-link scrollto" data-toggle="modal" href="#join_partner">طلب شراكة</a></li> 




    @endguest

    <li class="dropdown">
        <a href="#"><span>المركز الإعلامي</span> <i class="bi bi-chevron-down"></i></a>
        <ul>

            <li><a href="#images">صور أعلامية</a></li>
            <li><a href="#footer">قناة الفريق</a></li>
            <li><a href="#media">الملف الإعلامي</a></li>
        </ul>
    </li>
    <li><a class="nav-link scrollto" href="#contact">اتصل بنا</a></li>
    @auth
    
    @if(Auth::user()->hasRole('Partner'))
    <li><a class="nav-link scrollto" href="{{ url('/' . $page='PartnerDetails') }}"> معلومات الشراكة</a></li>
    <li><a class="nav-link scrollto" data-toggle="modal" href="#request_course">طلب دورة تدريبة</a></li>
    @endif
    @if(Auth::user()->hasRole('Coache'))
    <li><a class="nav-link scrollto" href="{{ url('/' . $page='CoacheDetails') }}">معلومات التدريب</a></li>
    <li><a class="nav-link scrollto" data-toggle="modal" href="#proposal">تقديم اقتراح</a></li> 
    @endif
    @endauth
    @can('لوحة التحكم')
    <li><a class="nav-link scrollto" href="{{route('dashboard')}}">لوحة التحكم </a></li>
    @endcan
    <li><a class="nav-link scrollto" href="{{route('courses')}}">الدورات التدريبية  </a></li>
    <li><a class="nav-link scrollto" href="{{route('activities')}}">الأنشطة التدريبية  </a></li>
    <li><a class="nav-link scrollto" href="{{route('programs')}}"> برامجنا</a></li>
    @guest
    <li><a href="{{ url('/' . $page='login') }}"><span>تسجيل الدخول</span></a></li> 
        @endguest
        @auth
    <li><a href="{{ url('/' . $page='logout') }}"><span>تسجيل الخروج </span></a></li>
@endauth
</ul>
<i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->