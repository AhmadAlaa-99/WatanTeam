@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@section('title')
    فريق وطن - الفريق التعريفي
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">فريق وطن</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                ادارة الفريق التعريفي</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('Add'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('Add') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session()->has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('delete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

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
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                        <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                            data-toggle="modal" href="#modaldemo8">اضافة</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table mg-b-0 text-md-nowrap">
                        <thead>
                            <tr>
                                               <th class="border-bottom-0">#</th>
												<th class="border-bottom-0">name</th>
												<th class="border-bottom-0">email</th>
												<th class="border-bottom-0">role</th>
												<th class="border-bottom-0">image</th>
                                                <th class="border-bottom-0">operations</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php $i = 0; ?>
                            @forelse ($identifiers as $identifier)
                                <?php $i++; ?>
                                <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $identifier->name }} </td>
                                        <td>{{ $identifier->email }}</td>
                                        <td>{{ $identifier->role }}</td>
                                        <td>
                                        <img class="img-responsive" src="{{asset('storage/Identifiers/'.$identifier->image)}}"width="100"height="100">
                                        
										</td>
                                        
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                    type="button">العمليات<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item" data-effect="effect-scale"
                                                            data-toggle="modal" href="#exampleModal7">تعديل</a>

															<a class="dropdown-item"  href="#" data-identifier_id="{{ $identifier->id }}"
                                                            data-toggle="modal" data-target="#exampleModal9"><i
                                                                class="text-danger fas fa-trash-alt"></i>حذف
                                                            </a>
                                                </div>
                                            </div>
                                        </td>      
                                </tr>
                                @empty
                            @endforelse
                            <div class="d-flex justify-content-center">
        {!! $identifiers->links()!!}
       </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  <!-- delete -->

  <div class="modal" id="modaldemo8">
        <div class="modal-dialog" role="identifier">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">اضافة </h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('identifiers.store') }}" method="post"enctype="multipart/form-data"
                        autocomplete="off">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"> Name </label>
                            <textarea class="form-control" id="name" name="name" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Email</label>
                            <textarea class="form-control" id="email" name="email" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"> Role</label>
                            <textarea class="form-control" id="role" name="role" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="inputName" class="control-label">Image</label>
								<input type="file" name="image" class="dropify" accept=".pdf,.jpg, .png, image/jpeg, image/png"
                                data-height="70" />
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Basic modal -->


    </div>

 

   
    <!-- edit -->
    @if($identifiers->count()>0)
    
    <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="identifier">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="{{ route('identifiers.update',$identifier->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                        {{ method_field('patch')}}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"> Name </label>
                            <textarea class="form-control" id="name" name="name" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Email</label>
                            <textarea class="form-control" id="email" name="email" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"> Role</label>
                            <textarea class="form-control" id="role" name="role" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="inputName" class="control-label">Image</label>
								<input type="file" name="image" class="dropify" accept=".pdf,.jpg, .png, image/jpeg, image/png"
                                data-height="70" />
                        </div>
                       
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal img" id="exampleModal9">
        <div class="modal-dialog modal-dialog-centered" role="identifier">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ route('identifiers.destroy',$identifier->id) }}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p>هل انت متاكد من عملية الحذف ؟</p><br>
                        <input type="hidden" name="id" id="id" value="">
                        <input class="form-control" name="main" id="main" type="text" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-danger">تاكيد</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endif

@endsection
@section('js')
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

<script>
    $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var section_name = button.data('section_name')
        var description = button.data('description')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #section_name').val(section_name);
        modal.find('.modal-body #description').val(description);
    })

</script>

<script>
    $('#modaldemo9').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var section_name = button.data('section_name')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #section_name').val(section_name);
    })

</script>

@endsection
