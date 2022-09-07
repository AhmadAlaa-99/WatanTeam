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
     فريق وطن - تعديل معلومات الفريق
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">فريق وطن</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    تعديل معلومات الفريق</span>
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
                    
                    <form action="{{ route('aboutus.update') }}" method="post" enctype="multipart/form-data"
                        autocomplete="off">
                        {{ method_field('patch') }}
                        {{ csrf_field() }}
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label"> name </label>
                                <input type="text" class="form-control" id="name" name="name"
                                    title="يرجي ادخال الاسم " value="{{$aboutus->name}}"required>
                            </div>
                            <div class="col">
                                <label for="inputName" class="control-label">about  </label>
                                <input type="text" class="form-control" id="about" name="about"
                                    title="يرجي ادخال الاسم " value="{{$aboutus->name}}"required>
                            </div>
                          
                            <div class="col">
                                <label for="inputName" class="control-label">  mession </label>
                                <input type="text" class="form-control" id="mession" name="mession"
                                    title="يرجي ادخال الفئة المستهدفة "value="{{$aboutus->topics}}" required>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="row">
                        <div class="col">
                                <label for="inputName" class="control-label">  vision </label>
                                <input type="text" class="form-control" id="vision" name="vision"
                                    title="يرجي ادخال الفئة المستهدفة "value="{{$aboutus->vision}}" required>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">  values </label>
                                <input type="text" class="form-control" id="values" name="values"
                                    title="يرجي ادخال الفئة المستهدفة "value="{{$aboutus->values}}" required>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">  teamLeader </label>
                                <input type="text" class="form-control" id="teamLeader" name="teamLeader"
                                    title="يرجي ادخال الفئة المستهدفة "value="{{$aboutus->teamLeader}}" required>
                            </div>

							<div class="col">
                                <label for="inputName" class="control-label">المرفقات</label>
								<input type="file" name="logoUrl" class="dropify" accept=".pdf,.jpg, .png, image/jpeg, image/png"
                                data-height="70" />
                                </select>
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
