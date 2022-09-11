<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround"
                    
                        src="{{URL::asset('assets/TeamLogo.jpg')}}"><span
                        class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                <h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::user()->username }}</h4>
							<span class="mb-0 text-muted">{{ Auth::user()->email }} </span>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">فريق وطن </li>
            <li class="slide">
                <a class="side-menu__item" href="/"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg><span class="side-menu__label">الرئيسية</span></a>
            </li>

            
               
       
                <li class="side-item side-item-category">البرامج</li>
                @can('البرامج')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                        </svg><span class="side-menu__label">الفواتير</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                           <li><a class="slide-item" href="{{ url('/' . $page='dashboard/ShowActPro') }}">قائمة البرامج الفعالة</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/showDisPro') }}">قائمة البرامج غير الفعالة</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/programs/create') }}">اضافة برنامج</a></li>   
                    </ul>
                </li>
                @endcan
					@can('الأنشطة')
                <li class="side-item side-item-category">الأنشطة</li>

                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                        </svg><span class="side-menu__label">الأنشطة</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ url('/' . $page='dashboard/activities') }}">  قائمة الأنشطة </a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/activities/create') }}">اضافة نشاط</a></li>
                    </ul>
                </li>
                @endcan
					@can('المدربين')
                <li class="side-item side-item-category">المدربين</li>

                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                        </svg><span class="side-menu__label">المدربين</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ url('/' . $page='dashboard/coaches') }}">قائمة المدربين</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/coachesOrder') }}">طلبات التطوع</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/proposal') }}"> اقتراحات </a></li>   
                    </ul>
                </li>
                @endcan
                @can('الكورسات')
					

                    <li class="side-item side-item-category">الكورسات</li>

                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                        </svg><span class="side-menu__label">الكورسات</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ url('/' . $page='dashboard/courses') }}"> قائمة الكورسات</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/courses/create') }}">  اضافة كورس</a></li>
                    </ul>
                </li>
					@endcan

					@can('الشركاء')
				<li class="side-item side-item-category">الشركاء</li>

                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                        </svg><span class="side-menu__label">الشركاء</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ url('/' . $page='dashboard/partners') }}">شركاؤنا</a></li>
						<li><a class="slide-item" href="{{ url('/' . $page='dashboard/CoursesPartnerOrders') }}">طلبات الكورسات</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/partnersOrder') }}">طلبات الشراكة</a></li>   
                    </ul>
                </li>
                @endcan					
					@can('الأقسام')
				<li class="side-item side-item-category">الأقسام</li>

                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                        </svg><span class="side-menu__label">الأقسام</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ url('/' . $page='dashboard/departments') }}">قائمة الأقسام</a></li>	
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/departments/create') }}">اضافة قسم</a></li>
                    </ul>
                </li>
                @endcan
					@can('المستندات')
				<li class="side-item side-item-category">المستندات</li>

                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                        </svg><span class="side-menu__label">المستندات</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ url('/' . $page='dashboard/documents') }}">قائمة المستندات</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/documents/create') }}">اضافة مستند</a></li> 
                    </ul>
                </li>
                @endcan
					@can('ادارة صلاحيات الفريق')
				<li class="side-item side-item-category">صلاحيات الفريق</li>

                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                        </svg><span class="side-menu__label">ادارة صلاحيات الفريق</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ url('/' . $page='dashboard/users') }}"> قائمة الفريق</a></li>	
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/roles') }}"> صلاحيات الفريق</a></li> 
                    </ul>
                </li>
                @endcan
				<li class="side-item side-item-category">القسم الاعلامي</li>

                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                        </svg><span class="side-menu__label">القسم الاعلامي</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                    @can('الأخبار')
						    <li><a class="slide-item" href="{{ url('/' . $page='dashboard/news') }}">الأخبار</a></li>
							@endcan
							@can('عن الفريق')
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/aboutus') }}"> عن الفريق</a></li>
							@endcan
							@can('الفريق التعريفي')
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/identifiers') }}">الفريق التعريفي</a></li>
                             @endcan
							 @can('الملف الاعلامي')
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/contacts') }}">الملف الاعلامي</a></li>
							@endcan
                    </ul>
                </li>
     
        </ul>
    </div>
</aside>
<!-- main-sidebar -->
