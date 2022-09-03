
<!DOCTYPE html>
<html lang="ar-sa">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>فريق وطن</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="aos/aos.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link href="assets/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
   

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="icon" href="img/favicon.png">
    	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/unica/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/unica/font-awesome.min.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/unica/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/unica/themify-icons.css')}}">
    <!-- flaticon CSS -->

    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/unica/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/unica/animate.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/unica/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/themify-icons.css')}}">
    

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />


    <!-- =======================================================
    * Template Name: Ninestars - v4.5.0
    * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
  <!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>


  <header id="header" class="fixed-top d-flex align-items-center">
  @include('layouts.header-welcome')

</header>
    <!-- ---------------------------------- -->
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h3>نبذة عن الفريق</h3>
                   
                    <p>فريق وطن .. فريق تطوعي في مجال التدريب</p>
                </div>
                <div class="row" style="direction:rtl;">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">نبذة عن الفريق</a></h4>
                            <p class="description">{{$aboutUs->about}}</p> 
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">الرؤية</a></h4>
                            <p class="description">{{$aboutUs->vision}}</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">الرسالة </a></h4>
                            <p class="description">{{$aboutUs->mession}}</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">القيم</a></h4>
                            <p class="description">{{$aboutUs->values}}</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End About Section -->
   


    <!-- Courses section section  -->
	<section class="courses-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>فريق وطن التطوعي للتدريب</h3>
				<p>الدورات التدريبية</p>
			</div>
			<div class="row">
				<!-- course item -->
        @forelse($courses as $course)
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="{{asset('storage/Courses/'.$course->imageUrl)}}" width="360" height="360" alt="">
						<div class="course-cat">
							<span>{{$course->types->name}}</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i>    {{$course->created_at}}</div>
						<h4>{{$course->desc}}<br>{{$course->note}}</h4>
						<h4 class="cource-price">{{$course->Coach->username}}</h4>
					</div>
				</div>
		    @empty
        @endforelse
	</section>
	<!-- Courses section end-->



   <!-- Activities section section  -->
 	<section class="courses-section spad">
		<div class="container">
			<div class="section-title text-center">
				<p>الأنشطة التدريبية</p>
			</div>
			<div class="row">
				<!-- course item -->
        @forelse($activities as $activity)
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="{{asset('storage/Activities/'.$activity->imageUrl)}}" width="360" height="360" alt="">
						<div class="course-cat">
							<span>{{$activity->name}}</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i>    {{$activity->pubDate}}</div>
						<h4>{{$activity->note}}</h4>
						<h4 class="cource-price">{{$activity->programs->name}}</h4>
					</div>
				</div>
              

            
  
		    @empty
        @endforelse
       
	</section>
	<!-- Activities section end-->

	

   <!-- Programs section section  -->
 	<section class="courses-section spad">
		<div class="container">
			<div class="section-title text-center">
				
				<p>البرامج التدريبية</p>
			</div>
			<div class="row"> 
				<!-- course item -->
        @forelse($programs as $program)
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="{{asset('storage/Programs/'.$program->imageUrl)}}" width="360" height="360" alt="">
						<div class="course-cat">
							<span>{{$program->name}}</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i>    {{$program->created_at}}</div>
						<h4>أهدافنا :  {{$program->goals}} </h4>
            <h4>الرؤية :  {{$program->audince}}</h4>
						<h4 class="cource-price"> الفئة المستهدفة :  {{$program->topics}}</h4>
            <h4 class="cource-price">  فئة البرنامج :  {{$program->cats->name}}</h4>
					</div>
				</div>
            
		    @empty
        @endforelse
     
	</section>
	<!-- Programs section end-->

	<!-- Numbers section -->

	<section class="fact-section spad set-bg" src="assets/img/Numbers/co.png">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-package"></i> 
					</div>
					<div class="fact-text">
						<h2>{{\App\Models\Program::count()}}</h2>
						<p>Programs</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-briefcase"></i>
					</div>
					<div class="fact-text">
						<h2>{{\App\Models\Course::count()}}</h2>
						<p>Courses</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-user"></i>
					</div>
					<div class="fact-text">
						<h2>{{\App\Models\Partner::count()}}</h2>
						<p>Partners</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-pencil-alt"></i>
					</div>
					<div class="fact-text">
						<h2>{{\App\Models\Coach::count()}}</h2>
						<p>Coaches</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  Numbers end-->
  	


	<!-- News section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>أخبارنا</h3>
				<p>تحديثات نشاطاتنا</p>
			</div>
			<div class="row">
       @forelse($news as $new)
				<div class="col-xl-6">
					<div class="blog-item">
						<div class="blog-content">
							<div class="blog-meta">
								<span><i class="fa fa-calendar-o"></i>   {{$new->created_at}}</span>
							</div>
							<h4>{{$new->content}}</h4>
						</div>
					</div>
				</div>
                @empty
                @endforelse
                <div class="d-flex justify-content-center">
       
       </div>
			</div>
		</div>
	</section>
	<!-- News section -->


  <!-- Gallery section -->
	<div class="gallery-section">
		<div class="gallery">
			<div class="grid-sizer"></div>
     
			<div class="gallery-item gi-big set-bg" data-setbg="{{asset('storage/Media/'.'Media-1661983890.jpg')}}">
				<a class="img-popup"href="{{asset('storage/Media/'.'Media-1661983890.jpg')}}"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="{{asset('storage/Media/'.'Media-1661983890.jpg')}}">
				<a class="img-popup" href="{{asset('storage/Media/'.'Media-1661983890.jpg')}}"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="{{asset('storage/Media/'.'Media-1661983890.jpg')}}">
				<a class="img-popup" href="{{asset('storage/Media/'.'Media-1661983890.jpg')}}"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-long set-bg" data-setbg="{{asset('storage/Media/'.'Media-1661983890.jpg')}}">
				<a class="img-popup" href="{{asset('storage/Media/'.'Media-1661983890.jpg')}}"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-big set-bg" data-setbg="{{asset('storage/Media/'.'Media-1661983890.jpg')}}">
				<a class="img-popup" href="{{asset('storage/Media/'.'Media-1661983890.jpg')}}"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-long set-bg" data-setbg="{{asset('storage/Media/'.'Media-1661983890.jpg')}}">
				<a class="img-popup" href="{{asset('storage/Media/'.'Media-1661983890.jpg')}}"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="{{asset('storage/Media/'.'Media-1661983890.jpg')}}">
				<a class="img-popup" href="{{asset('storage/Media/'.'Media-1661983890.jpg')}}"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="{{asset('storage/Media/'.'Media-1661983890.jpg')}}">
				<a class="img-popup" href="{{asset('storage/Media/'.'Media-1661983890.jpg')}}"><i class="ti-plus"></i></a>
			</div>
    

		</div>
	</div>
</div>


    <!-- ======= Cards Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>فريق وطن</h2>
          <p>تعرف على فريق وطن التطوعي للتدريب</p>
        </div>

        <div class="row">
          @forelse($identifiers as $identifier)
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member">
            <img src="{{asset('storage/Identifiers/'.$identifier->image)}}" width="260" height="260">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{$identifier->name}}</h4>
                  <span>{{$identifier->role}}</span>
                </div>
                <div class="social">
                  <a href="{{$identifier->email}}"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
           @empty
           @endforelse
       

        </div>

      </div>
    </section>
    <!-- End Cards Team Section -->
  <!-- ======= Partners Section ======= -->


  

  <section id="clients" class="clients section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>شركاؤنا في النجاح</h2>
          <p>شراكة مجتمعية فاعلة</p>
        </div>  
           
            <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
           
            <div class="swiper-wrapper align-items-center">
            @forelse($partners as $partner)
            <div class="swiper-slide">
                <img src="{{asset('storage/Partners/'.$partner->logoUrl)}}" class="img-fluid" width="116" height="63.5" alt="" >
            </div>
            @empty
            @endforelse
            </div>
            <div class="d-flex justify-content-center">
        {!! $partners->links()!!}
       </div>
        </div>

      </div>
    </section>
 <!-- =======End  Partners Section ======= -->



</main>
<!-- End #main -->

 
@include('layouts.footer-welcome')


        
    <!-- Vendor JS Files -->
    <script src="aos/aos.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="glightbox/js/glightbox.min.js"></script>
    <script src="isotope-layout/isotope.pkgd.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>



    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.2/umd/popper.min.js'></script>


 <!-- jquery plugins here-->
 "{{ URL::asset('assets/js/form-elements.js') }}"
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        cssMode: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
      });
    </script>
    <script>
        let telInput = $("#phone")

// initialize
telInput.intlTelInput({
    initialCountry: 'auto',
    preferredCountries: ['us','gb','br','ru','cn','es','it'],
    autoPlaceholder: 'aggressive',
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/utils.js",
    geoIpLookup: function(callback) {
        fetch('https://ipinfo.io/json', {
            cache: 'reload'
        }).then(response => {
            if ( response.ok ) {
                 return response.json()
            }
            throw new Error('Failed: ' + response.status)
        }).then(ipjson => {
            callback(ipjson.country)
        }).catch(e => {
            callback('us')
        })
    }
})

let telInput2 = $("#phone2")

// initialize
telInput2.intlTelInput({
    initialCountry: 'br',
    preferredCountries: ['us','gb','br','ru','cn','es','it'],
    autoPlaceholder: 'aggressive',
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/utils.js"
})
        </script>
    

<!-- Internal Data tables -->
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
<!--Internal  Datatable js -->
<script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
<script src="{{ URL::asset('assets/js/modal.js') }}"></script>

    <!-- jquery -->
    <script src="{{URL::asset('assets/js/unica/jquery-3.2.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{URL::asset('assets/js/unica/owl.carousel.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{URL::asset('assets/js/unica/jquery.countdown.js')}}"></script>
    <!-- easing js -->
    <script src="{{URL::asset('assets/js/unica/masonry.pkgd.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{URL::asset('assets/js/unica/magnific-popup.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{URL::asset('assets/js/unica/main.js')}}"></script>

    <script src="{{URL::asset('assets/js/waypoints.min.js')}}"></script>
    <!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Modal js-->
<script src="{{URL::asset('assets/js/modal.js')}}"></script>
  
    <script src="/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    
    <!-- Template Main JS File -->
    <script src="js/main.js"></script>
</body>
</html>