@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('title')
فريق وطن - المدربين
@stop
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">المدربين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/قائمة المدربين </span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
				
					<!--/div-->

					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								

							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example1" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>


<th class="border-bottom-0">#</th>
												<th class="border-bottom-0">username</th>
												<th class="border-bottom-0">work</th>
                                                <th class="border-bottom-0">qualification</th>
                                                
												<th class="border-bottom-0">address</th>
											
												<th class="border-bottom-0">email</th>
                                                <th class="border-bottom-0">accept_date</th>
												<th class="border-bottom-0">note</th>	
												<th class="border-bottom-0">cvFile</th>			
                                                <th class="border-bottom-0">operations</th>				
											</tr>
										</thead>
										<tbody>
                                @php
                                $i = 0;
                                @endphp
                                @forelse ($coaches as $coache)
                                    @php
                                    $i++
                                    @endphp
                                    <tr>
                                    <td>{{ $i }}</td>
                                   
                                    <td><a  href="{{ route('DetailsCoach',$coache->id) }}">{{ $coache->username }} </td>
                                        <td>{{ $coache->job }}</td>
                                        <td>{{ $coache->qualification }}</td>
                                        <td>{{ $coache->address }}</td>
                                       
                                        <td>{{ $coache->email }}</td>
                                        <td>{{ $coache->accept_date }}</td>
                                        <td>{{ $coache->note }}</td>
										<td>
                                            <a
                                        href="{{route('down.CV',$coache->id)}}">download cv</a> 
										</td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                    type="button">العمليات<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                        
												
															<a class="dropdown-item"  href="#" data-coache_id="{{ $coache->id }}"
                                                            data-toggle="modal" data-target="#delete_coache"><i
                                                                class="text-danger fas fa-trash-alt"></i>حذف</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty

                                    @endforelse

                            </tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
<!-- حذف الفاتورة -->
@if($coaches->count()>0)
<div class="modal fade" id="delete_coache" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف المدرب </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form action="{{ route('coaches.destroy',$coache->id) }}" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                </div>
                <div class="modal-body">
                    هل انت متاكد من عملية الحذف ؟
					{{ $coache->id }}
                    <input type="hidden" name="coache_id" id="coache_id" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-danger">تاكيد</button>
                </div>
                </form>
            </div>
			
        </div>
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
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection