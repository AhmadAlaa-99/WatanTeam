
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
  <!-- Courses Details Pagination --->
     
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
						<img src="{{asset('storage/Courses/'.$course->imageUrl)}}" alt="">
						<div class="course-cat">
							<span>{{$course->types->name}}</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i>    {{$course->created_at->format('Y-m-d')}}</div>
						<h4>{{$course->desc}}<br>{{$course->note}}</h4>
						<h4 class="cource-price">{{$course->Coach->username}}</h4>
					</div>
				</div>
		    @empty
        @endforelse
        <div class="d-flex justify-content-center">
        {!! $courses->links()!!}
       </div>
	</section>
	<!-- Courses section end-->

</main>
<!-- End #main -->
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
