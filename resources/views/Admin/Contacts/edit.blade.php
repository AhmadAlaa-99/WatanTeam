@extends('layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
@endsection
@section('title')
     فريق وطن - تعديل الملف الاعلامي
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">فريق وطن</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    تعديل  الملف الاعلامي</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    @if (session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    
                    <form action="{{ route('contacts.update') }}" method="post" enctype="multipart/form-data"
                        autocomplete="off">
                        {{ method_field('patch') }}
                        {{ csrf_field() }}
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label"> email </label>
                                <input type="text" class="form-control" id="email" name="email"
                                    title="يرجي ادخال الرابط   " value="{{$contact->email}}"required>
                            </div>
                            <div class="col">
                                <label for="inputName" class="control-label">phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    title="يرجي ادخال الرقم  " value="{{$contact->phone}}"required>
                            </div>
                            <div class="col">
                                <label for="inputName" class="control-label">facebook  </label>
                                <input type="text" class="form-control" id="facebook" name="facebook"
                                    title="يرجي ادخال الرابط  " value="{{$contact->facebook}}"required>
                            </div>
                          
                            <div class="col">
                                <label for="inputName" class="control-label">insta </label>
                                <input type="text" class="form-control" id="insta" name="insta"
                                    title="يرجي ادخال الرابط   "value="{{$contact->insta}}" required>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="row">
                        <div class="col">
                                <label for="inputName" class="control-label">  twitter </label>
                                <input type="text" class="form-control" id="twitter" name="twitter"
                                    title="يرجي ادخال الرابط  "value="{{$contact->twitter}}" required>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">  youtube </label>
                                <input type="text" class="form-control" id="youtube" name="youtube"
                                    title="يرجي ادخال الرابط   "value="{{$contact->youtube}}" required>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">  telegram </label>
                                <input type="text" class="form-control" id="telegram" name="telegram"
                                    title="يرجي ادخال الرابط   "value="{{$contact->telegram}}" required>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label"> linkedin </label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin"
                                    title="يرجي ادخال الرابط   "value="{{$contact->telegram}}" required>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label"> skype </label>
                                <input type="text" class="form-control" id="skype" name="skype"
                                    title="يرجي ادخال الرابط   "value="{{$contact->skype}}" required>
                            </div>
                         
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">حفظ البيانات</button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>

    <script>
        var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();

    </script>


@endsection
