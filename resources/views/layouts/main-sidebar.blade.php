<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/TeamLogo.jpg')}}" class="main-logo" alt="logo"></a>
				<a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/TeamLogo.jpg')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/TeamLogo.jpg')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/TeamLogo.jpg')}}"  class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('assets/TeamLogo.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::user()->username }}</h4>
							<span class="mb-0 text-muted">{{ Auth::user()->email }} </span>
						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="side-item side-item-category"></li>
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/' . $page='') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">الصفحة الرئيسية</span><span class="badge badge-success side-badge">1</span></a>
					</li>
					@can('البرامج')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">البرامج</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/ShowActPro') }}">قائمة البرامج الفعالة</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/showDisPro') }}">قائمة البرامج غير الفعالة</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/programs/create') }}">اضافة برنامج</a></li>
						</ul>
							</ul>
					</li>
					@endcan
					@can('الأنشطة')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" opacity=".3"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg><span class="side-menu__label">الأنشطة</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/activities') }}">  قائمة الأنشطة </a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/activities/create') }}">اضافة نشاط</a></li>
						</ul>
					</li>
					@endcan
					@can('المدربين')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">المدربين</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/coaches') }}">قائمة المدربين</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/coachesOrder') }}">طلبات التطوع</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/proposal') }}"> اقتراحات </a></li>

						</ul>
					</li>
					@endcan
					@can('الكورسات')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg><span class="side-menu__label">الكورسات</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/courses') }}"> قائمة الكورسات</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/courses/create') }}">  اضافة كورس</a></li>
						</ul>
					</li>
					@endcan
					@can('الشركاء')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/></svg><span class="side-menu__label">الشركاء</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
						<li><a class="slide-item" href="{{ url('/' . $page='dashboard/partners') }}">شركاؤنا</a></li>
						<li><a class="slide-item" href="{{ url('/' . $page='dashboard/CoursesPartnerOrders') }}">طلبات الكورسات</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/partnersOrder') }}">طلبات الشراكة</a></li>
						</ul>
					</li>
					@endcan					
					@can('الأقسام')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg><span class="side-menu__label">الأقسام</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/departments') }}">قائمة الأقسام</a></li>	
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/departments/create') }}">اضافة قسم</a></li>						</ul>
					</li>
					@endcan
					@can('المستندات')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3"/><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z"/></svg><span class="side-menu__label">المستندات</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/documents') }}">قائمة المستندات</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/documents/create') }}">اضافة مستند</a></li>
						</ul>
					</li>
					@endcan
					@can('ادارة صلاحيات الفريق')
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg><span class="side-menu__label">ادارة صلاحيات الفريق</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/users') }}"> قائمة الفريق</a></li>	
							<li><a class="slide-item" href="{{ url('/' . $page='dashboard/roles') }}"> صلاحيات الفريق</a></li>
						</ul>
					</li>
					@endcan
					
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3"/><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z"/></svg><span class="side-menu__label"> القسم الاعلامي</span><i class="angle fe fe-chevron-down"></i></a>
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
					</li>
				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
