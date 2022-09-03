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
    اضافة مستند
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">المستندات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    اضافة مستند</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
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
                    <form action="{{ route('documents.store') }}" method="post" enctype="multipart/form-data"
                        autocomplete="off">
                        {{ csrf_field() }}
                        {{-- 1 --}}
                    

                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label"> الاسم</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    title="يرجي ادخال الاسم " required>
                            </div>
							<div class="col">
                                <label for="inputName" class="control-label"> نوع الملف </label>
                                <input type="text" class="form-control" id="docType" name="docType"
                                    title="يرجي ادخال الوصف" required>
                            </div>
                            
                            
                        {{-- 2 --}}
                        <div class="col">
                                <label for="inputName" class="control-label">  الوصف </label>
                                <input type="text" class="form-control" id="inputName" name="description"
                                    title="يرجي ادخال الوصف" required>
                            </div>
                        
                            <div class="col">
                                <label for="inputName" class="control-label">القسم</label>
                                <select name="department_id" class="form-control SlectBox" onclick="console.log($(this).val())"
                                    onchange="console.log('change is firing')">
                                    <!--placeholder-->
                                    <option value="" selected disabled>حدد القسم</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}"> {{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="inputName" class="control-label">صاحب العلاقة</label>
                                <select name="user_id" class="form-control SlectBox" onclick="console.log($(this).val())"
                                    onchange="console.log('change is firing')">
                                    <!--placeholder-->
                                    <option value="" selected disabled>صاحب العلاقة </option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"> {{ $user->email }}</option>
                                    @endforeach
                                </select>
                            </div>
							<div class="col">
                                <label for="inputName" class="control-label">رفع الملف </label>
								<input type="file" name="docFile" class="dropify" accept=".pdf,.jpg, .png, image/jpeg, image/png"
                                data-height="70" />
                                </select>
                            </div>
                        </div>
                        {{-- 5 --}}
                     
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
