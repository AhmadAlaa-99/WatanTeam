@extends('layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">


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
    
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi,welcome back!</h2>
						  <p class="mg-b-0"> احصائيات الفريق</p>
						</div>
					</div>
					<div class="main-dashboard-header-right">
						<div>
							<label class="tx-13">تقييم الفريق </label>
							<div class="main-star">
								<i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(14,873)</span>
							</div>
						</div>
						<div>
							<label class="tx-13">عدد زوار الموقع هذا الشهر</label>
							<h5>563,275</h5>
						</div>
						<div>
							<label class="tx-13">اجمالي عدد زيارات الموقع</label>
							<h5>783,675</h5>
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->
@endsection
@section('content')
  	<!-- Numbers section -->

	<section class="fact-section spad set-bg" src="assets/img/Numbers/cover.jpg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-crown"></i>
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


				<!-- row -->
				
					</div>
					</div>
				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- Container closed -->
	
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js --> 
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>	

    <!-- jquery -->
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>


    
@endsection