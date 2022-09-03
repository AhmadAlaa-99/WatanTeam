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
فريق وطن -  الملف الاعلامي
@stop
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">فريق وطن</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/الملف لاعلامي </span>
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
                <div class="d-flex justify-content-between">
                        <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                             href="{{url('dashboard/contact/edit')}}">
							تعديل المعلومات</a>
                </div>
				<div class="d-flex justify-content-between">
                        <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                             href="{{url('dashboard/media')}}">
							 
							 صور اعلامية </a>
                </div>

            </div>
							
							<div class="card-body">
								<div class="table-responsive">
									<table id="example1" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>

    
											    <th class="border-bottom-0">#</th>
												<th class="border-bottom-0">email</th>
												<th class="border-bottom-0">phone</th>
												<th class="border-bottom-0">facebook</th>
												<th class="border-bottom-0">insta</th>
												<th class="border-bottom-0">twitter</th>
												<th class="border-bottom-0">youtube</th>
												<th class="border-bottom-0">telegram</th>
												<th class="border-bottom-0">skype</th>
												<th class="border-bottom-0">linkedin</th>
												
	
												
											</tr>
										</thead>
										<tbody>
                                @php
                                $i = 0;
                                @endphp
                                
                                    @php
                                    $i++
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $contact->email }} </td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->facebook }}</td>
                                        <td>{{ $contact->insta }}</td>
                                        <td>{{ $contact->twitter }}</td>
                                        <td>{{ $contact->youtube }}</td>
										<td>{{ $contact->telegram }}</td>
										<td>{{ $contact->skype }}</td>
										<td>{{ $contact->linkedin }}</td>
				
                                    </tr>
									
                              

                            </tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
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