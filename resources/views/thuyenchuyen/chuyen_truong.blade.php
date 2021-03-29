@extends('layout')
@section('content')
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">Chuyển đổi trưởng</h5>
							<div class="tab">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab" aria-selected="true">Chuyển ngành</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Chuyển chức vụ</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home" role="tabpanel">
										<div class="pd-20">
											<div class="clearfix mb-20">
												<div class="pull-left">
													<h5 class="text-blue h4">Chuyển ngành</h5>
												</div>
											</div>
											<div class="table-responsive">
												<table class="table table-striped">
													<thead>
														<tr>
															<th scope="col">Tên</th>
															<th scope="col">Ngành</th>
															<th></th>
														</tr>
													</thead>

													<tbody>
														<tr><th class="text-danger">Ban chấp hành</th><td></td><td></td></tr>
														@foreach($show as $key=>$s)
														@if($s->user_area=="0")
														<form role="form" action="{{URL::to('luu-chuyen-truong/'.$s->user_id)}}" method="post" enctype="multipart/form-data">
                           								 {{ csrf_field() }}
														<tr class="table-danger">
															<th>{{$s->user_fullname}}</th>
															<td>
																<select name="nganh" class="custom-select col-12">
																	<option value="au">Ấu</option>
																	<option value="thieu">Thiếu</option>
																	<option value="nghia">Nghĩa</option>
																	<option value="hiep">Hiệp</option>
																	<option selected value="0">Ban chấp hành</option>
																</select>
															</td>
															<td><input type="submit" class="btn btn-primary" value="Chuyển"></td>
														</tr>
														</form>
														@endif
														@endforeach
														<tr><th class="text-danger">Trưởng Ngành ấu</th><td></td><td></td></tr>
														@foreach($show as $key=>$s)
														@if($s->user_area=="au")
														<form role="form" action="{{URL::to('luu-chuyen-truong/'.$s->user_id)}}" method="post" enctype="multipart/form-data">
                           								 {{ csrf_field() }}
														<tr class="table-success">
															<th>{{$s->user_fullname}}</th>
															<td>
																<select name="nganh" class="custom-select col-12">
																	<option selected value="au">Ấu</option>
																	<option value="thieu">Thiếu</option>
																	<option value="nghia">Nghĩa</option>
																	<option value="hiep">Hiệp</option>
																	<option value="0">Ban chấp hành</option>
																</select>
															</td>
															<td><input type="submit" class="btn btn-primary" value="Chuyển"></td>
														</tr>
														</form>
														@endif
														@endforeach
														<tr><th class="text-danger">Trưởng Ngành thiếu</th><td></td><td></td></tr>
														@foreach($show as $key=>$s)
														@if($s->user_area=="thieu")
														<form role="form" action="{{URL::to('luu-chuyen-truong/'.$s->user_id)}}" method="post" enctype="multipart/form-data">
                           								 {{ csrf_field() }}
														<tr class="table-primary">
															<th>{{$s->user_fullname}}</th>
															<td>
																<select name="nganh" class="custom-select col-12">
																	<option value="au">Ấu</option>
																	<option selected value="thieu">Thiếu</option>
																	<option value="nghia">Nghĩa</option>
																	<option value="hiep">Hiệp</option>
																	<option value="0">Ban chấp hành</option>
																</select>
															</td>
															<td><input type="submit" class="btn btn-primary" value="Chuyển"></td>
														</tr>
														</form>
														@endif
														@endforeach
														<tr><th class="text-danger">Trưởng Ngành nghĩa</th><td></td><td></td></tr>
														@foreach($show as $key=>$s)
														@if($s->user_area=="nghia")
														<form role="form" action="{{URL::to('luu-chuyen-truong/'.$s->user_id)}}" method="post" enctype="multipart/form-data">
                           								 {{ csrf_field() }}
														<tr class="table-warning">
															<th>{{$s->user_fullname}}</th>
															<td>
																<select name="nganh" class="custom-select col-12">
																	<option value="au">Ấu</option>
																	<option value="thieu">Thiếu</option>
																	<option selected value="nghia">Nghĩa</option>
																	<option value="hiep">Hiệp</option>
																	<option value="0">Ban chấp hành</option>
																</select>
															</td>
															<td><input type="submit" class="btn btn-primary" value="Chuyển"></td>
														</tr>
														</form>
														@endif
														@endforeach
														
														<tr><th class="text-danger">Trưởng Ngành hiệp</th><td></td><td></td></tr>
														@foreach($show as $key=>$s)
														@if($s->user_area=="hiep")
														<form role="form" action="{{URL::to('luu-chuyen-truong/'.$s->user_id)}}" method="post" enctype="multipart/form-data">
                           								 {{ csrf_field() }}
														<tr class="table-secondary">
															<th>{{$s->user_fullname}}</th>
															<td>
																<select name="nganh" class="custom-select col-12">
																	<option value="au">Ấu</option>
																	<option value="thieu">Thiếu</option>
																	<option value="nghia">Nghĩa</option>
																	<option selected value="hiep">Hiệp</option>
																	<option value="0">Ban chấp hành</option>
																</select>
															</td>
															<td><input type="submit" class="btn btn-primary" value="Chuyển"></td>
														</tr>
														</form>
														@endif
														@endforeach

													</tbody>

												</table>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="profile" role="tabpanel">
										<div class="pd-20">
											<div class="clearfix mb-20">
												<div class="pull-left">
													<h5 class="text-blue h4">Chuyển chức vụ</h5>
												</div>
											</div>
											<div class="table-responsive">
												<table class="table table-striped">
													<thead>
														<tr>
															<th scope="col">Tên</th>
															<th scope="col">Chức vụ</th>
															<th></th>
														</tr>
													</thead>

													<tbody>
														<tr><th class="text-danger">Ban chấp hành</th><td></td><td></td></tr>
														@foreach($show as $key=>$s)
														<form role="form" action="{{URL::to('luu-chuyen-truong2/'.$s->user_id)}}" method="post" enctype="multipart/form-data">
                           								 {{ csrf_field()}}
														<tr class="table-danger">
															<th>{{$s->user_fullname}}</th>
															<td>
																<select name="cv" class="custom-select col-12">
																	@foreach($show_quyen as $key=>$sq)
																	@if($s->quyen==$sq->quyen)
																	<option  selected value="{{$sq->id}}">{{$sq->quyen}}</option>
																	@else
																	<option value="{{$sq->id}}">{{$sq->quyen}}</option>
																	@endif
																	@endforeach
																</select>
															</td>
															<td><input type="submit" class="btn btn-primary" value="Chuyển"></td>
														</tr>
														</form>
														@endforeach
													</tbody>

												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection