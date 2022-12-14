   <!-- ======= Footer ======= -->
   <footer id="footer" style="direction:rtl;">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>فريق وطن التطوعي للتدريب</h4>
                        <p>
                            جمعية البر بالأحساء<br>
                            <br>
                            المملكة العربية السعةدية <br><br>
                            <strong>جوال:</strong>{{$contacts->phone}}<br>
                            <strong>بريد إلكتروني:</strong> {{$contacts->email}}<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>روابط صديقة</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">جمعية البر بالمنطقة الشرقية</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">المؤوسسة العامة للتدريب الفني والمهني</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">وزارة التعليم</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>خدماتنا</h4>
                        <ul>
                            @guest
                            <li><i class="bx bx-chevron-right"></i> <a href="#join_partner">طلب شراكة</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#scrollmodal">طلب انضمام</a></li>
                            @endguest
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('programs')}}">البرامج التدريبية</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('courses')}}"> الدورات التدريبية</a></li>
                            
                        </ul>
                    </div>

                    <div id ="contact" class="col-lg-3 col-md-6 footer-links">
                        <h4>تابعونا</h4>
                        <p>كونوا على تواصل مستمر معنا عبر حساباتنا في الشبكات الاجتماعية</p>
                        <div class="social-links mt-3">
                            <a href="{{$contacts->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="{{$contacts->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="{{$contacts->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="{{$contacts->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            <a href="{{$contacts->youtube}}" class="linkedin"><i class="bx bxl-youtube"></i></a>
                            <a href="{{$contacts->telegram}}" class="linkedin"><i class="bx bxl-telegram"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>{{$aboutUs->name}} </span></strong>. جميع الحقوق محفوظة
            </div>
            <div class="credits">
                Designed by |Mohammed Ahmed|</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div class="modal" id="scrollmodal">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">يسعدنا طلب انضمامك للفريق</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
                    
                    <form action="{{route('requestCoache')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">الاسم الكامل</label>
                            <input type="text" class="form-control" id="username" name="username"required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> العنوان </label>
                            <input type="text" class="form-control" id="address" name="address"required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> العمل </label>
                            <input type="text" class="form-control" id="job" name="job"required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">البريد الالكتروني</label>
                            <textarea class="form-control" id="email" name="email" rows="1"required></textarea>
                        </div>
                      
                        <div class="row row-sm mg-b-20">
                        <div class="col-lg-6">
                            <label class="form-label">الجنس </label>
                            <select name="gender" id="select-beast" class="form-control  nice-select  custom-select"required>
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">المؤهلات </label>
                            <textarea class="form-control" id="qualification" name="qualification" rows="1"required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">ملاحظات </label>
                            <textarea class="form-control" id="note" name="note" rows="1"required></textarea>
                        </div>
                       
                            
                        <div class="col">
                                 <label for="inputName" class="control-label">السيرة الذاتية</label>
						                 		<input type="file" name="cvFile"roe="1" class="dropify" accept=".pdf,.jpg, .png, image/jpeg, image/png"
                                data-height="70" required/>
                                </select>
                        </div> 
                        <h>سوف يتم التواصل لاحقا عن طريق البريد الالكتروني المسجل</h>
                       
                    
					</div>
                    <div class="modal-footer">
                            <button type="submit" class="btn btn-success">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                        </form>
				</div>
			</div>
		</div>
		<!--End Scroll with content modal -->

        <div class="modal" id="join_partner" >
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title"> يسعدنا اختيارك لشراكتنا</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('requestPartner')}}" method="post"enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">اسم الشركة </label>
                            <input type="text" class="form-control" id="name" name="name"required>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">مجال عمل الشركة</label>
                            <textarea class="form-control" id="desc" name="desc" rows="3"required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"> البريد الالكتروني </label>
                            <textarea class="form-control" id="email" name="email" rows="1"required></textarea>
                        </div>
       
                        <div class="form-group">
                            <label for="exampleInputEmail1">الهاتف  </label>
                            <input type="text" class="form-control" id="phone" name="phone"required>
                        </div>
                        <div class="col">
                                <label for="inputName" class="control-label">شعار الشركة</label>
						        <input type="file" name="logoUrl" class="dropify" accept=".pdf,.jpg, .png, image/jpeg, image/png"
                                data-height="70" required/>
                                </select>
                            </div>
                        <h>سوف يتم التواصل لاحقا عن طريق البريد الالكتروني المسجل</h>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

       
        

        <!-- start  request proposal -->
        <div class="modal" id="proposal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">قدم اقتراحك</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('proposal')}}" method="post">
                        {{ csrf_field() }}
                      

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"> الاقتراح</label>
                            <textarea class="form-control" id="content" name="content" rows="3"required></textarea>
                        </div>
                       
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
       <!-- end  request proposal -->

       

     <!-- start request Course -->

     <div class="modal" id="request_course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">يحق للشركة طلب 5 دورات تدريبية خلال مدة العقد </h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('requestCourse')}}" method="post" enctype="multipart/form-data"
                        autocomplete="off">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col">
        
                                <label for="inputName" class="control-label">الدورات التدريبية</label>
                                <select name="course_id"id="course_id" class="form-control"required>
                                    <!--placeholder-->
                                    <option value="" selected disabled>حدد الدورة</option>
                                    @foreach (\App\Models\Course::all() as $course)
                                        <option value="{{$course->id }}"> {{ $course->desc}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label>ملاحظات</label>
                                <input class="form-control fc-datepicker" name="note" 
                                    type="text"  required>
                            </div>
                       
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                </div>
                    </form>
                </div>
            </div>
        </div>



    <!-- Vendor JS Files -->
    <script src="aos/aos.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="glightbox/js/glightbox.min.js"></script>
    <script src="isotope-layout/isotope.pkgd.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>



    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.2/umd/popper.min.js'></script>



    

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


        </script>
        <script>
        $("input").intlTelInput({
       utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
});
</script>