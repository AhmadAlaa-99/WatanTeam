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
                            <li><i class="bx bx-chevron-right"></i> <a href="#modaldemo1">طلب شراكة</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="##modaldemo2">طلب انضمام</a></li>
                            @endguest
                            <li><i class="bx bx-chevron-right"></i> <a href="#programs">البرامج التدريبية</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#courses"> الدورات التدريبية</a></li>
                            
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
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">مجال عمل الشركة</label>
                            <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"> البريد الالكتروني </label>
                            <textarea class="form-control" id="email" name="email" rows="1"></textarea>
                        </div>
       
                        <div class="input-group">
                           <input type="tel" class="form-control">
                           <span class="input-group-addon">Tel</span>
                        </div>
                        <div class="col">
                                <label for="inputName" class="control-label">logo</label>
						                		<input type="file" name="logoUrl" class="dropify" accept=".pdf,.jpg, .png, image/jpeg, image/png"
                                data-height="70" />
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

<div class="modal" id="scrollmodal">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">يسعدنا طلب انضمامك للفريق</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
                    <form action="{{route('requestCoache')}}" method="post" enctype="multipart/form-data"
                        autocomplete="off">
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
                       
                    </form>
					</div>
                    <div class="modal-footer">
                            <button type="submit" class="btn btn-success">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
				</div>
			</div>
		</div>
		<!--End Scroll with content modal -->

       
        

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


      <!-- end request Course -->
<script>
    $("input").intlTelInput({
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
});
</script>