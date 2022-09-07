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
فريق وطن -طلبات الشراكة
@stop
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الشركاء </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/طلبات الشراكة  </span>
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
                                <table class="table mg-b-0 text-md-nowrap">
										<thead>
											<tr>

											    <th class="border-bottom-0">#</th>
												<th class="border-bottom-0">name</th>
												<th class="border-bottom-0">desc</th>
												<th class="border-bottom-0">email</th>
												<th class="border-bottom-0">phone</th>
												<th class="border-bottom-0">request_date</th>	
												<th class="border-bottom-0">logoUrl</th>					
											</tr>
										</thead>
										<tbody>
                                @php
                                $i = 0;
                                @endphp 
                                @forelse($partners as $partner)
                                    @php
                                    $i++
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $partner->name }} </td>
                                        <td>{{ $partner->desc }}</td>
                                        <td>{{ $partner->email }}</td>
                                        <td>{{ $partner->phone }}</td>
                                        <td>{{ $partner->request_date->format('Y-m-d') }}</td>
                                        
										<td>
                                        <img class="img-responsive" src="{{asset('storage/Partners/'.$partner->logoUrl)}}"width="100"height="100">

                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                    type="button">العمليات<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                        
                                                <a class="dropdown-item"
                                                            href="{{route('partners.accept',$partner->id)}}">قبول طلب الشراكة
                                                            </a>

															<a class="dropdown-item"  href="#" data-partner_id="{{ $partner->id }}"
                                                            data-toggle="modal" data-target="#delete_partner"><i
                                                                class="text-danger fas fa-trash-alt"></i>رفض طلب الشراكة</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                @endforelse
                                <div class="d-flex justify-content-center">
        {!! $partners->links()!!}
       </div>

                            </tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
@if($partners->count()>0)
<div class="modal fade" id="delete_partner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> رفض طلب الشراكة </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form action="{{ route('partners.destroy',$partner->id) }}" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                </div>
                <div class="modal-body">
                    هل انت متاكد من رفض طلب الشراكة ؟
					{{ $partner->id }}
                    <input type="hidden" name="partner_id" id="partner_id" value="">
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