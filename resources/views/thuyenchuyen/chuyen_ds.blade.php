@extends('layout')
@section('content')
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">Chuyển đổi ngành đoàn sinh</h5>
							<div class="tab">
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
														
														<tr><th class="text-danger">Ngành ấu</th><td></td><td></td></tr>
														@foreach($show as $key=>$s)
														@if($s->doansinh_level=="au")
														<form role="form" action="{{URL::to('luu-chuyen-ds/'.$s->doansinh_id)}}" method="post" enctype="multipart/form-data">
                           								 {{ csrf_field() }}
														<tr class="table-success">
															<th>{{$s->doansinh_fullname}}</th>
															<td>
																<select name="nganh" class="custom-select col-12">
																	<option selected value="au">Ấu</option>
																	<option value="thieu">Thiếu</option>
																	<option value="nghia">Nghĩa</option>
																	<option value="hiep">Hiệp</option>
																	
																</select>
															</td>
															<td><input type="submit" class="btn btn-primary" value="Chuyển"></td>
														</tr>
														</form>
														@endif
														@endforeach
														<tr><th class="text-danger">Ngành thiếu</th><td></td><td></td></tr>
														@foreach($show as $key=>$s)
														@if($s->doansinh_level=="thieu")
														<form role="form" action="{{URL::to('luu-chuyen-ds/'.$s->doansinh_id)}}" method="post" enctype="multipart/form-data">
                           								 {{ csrf_field() }}
														<tr class="table-primary">
															<th>{{$s->doansinh_fullname}}</th>
															<td>
																<select name="nganh" class="custom-select col-12">
																	<option value="au">Ấu</option>
																	<option selected value="thieu">Thiếu</option>
																	<option value="nghia">Nghĩa</option>
																	<option value="hiep">Hiệp</option>
																	
																</select>
															</td>
															<td><input type="submit" class="btn btn-primary" value="Chuyển"></td>
														</tr>
														</form>
														@endif
														@endforeach
														<tr><th class="text-danger">Ngành nghĩa</th><td></td><td></td></tr>
														@foreach($show as $key=>$s)
														@if($s->doansinh_level=="nghia")
														<form role="form" action="{{URL::to('luu-chuyen-ds/'.$s->doansinh_id)}}" method="post" enctype="multipart/form-data">
                           								 {{ csrf_field() }}
														<tr class="table-warning">
															<th>{{$s->doansinh_fullname}}</th>
															<td>
																<select name="nganh" class="custom-select col-12">
																	<option value="au">Ấu</option>
																	<option value="thieu">Thiếu</option>
																	<option selected value="nghia">Nghĩa</option>
																	<option value="hiep">Hiệp</option>
																	
																</select>
															</td>
															<td><input type="submit" class="btn btn-primary" value="Chuyển"></td>
														</tr>
														</form>
														@endif
														@endforeach
														
														<tr><th class="text-danger">Ngành hiệp</th><td></td><td></td></tr>
														@foreach($show as $key=>$s)
														@if($s->doansinh_level=="hiep")
														<form role="form" action="{{URL::to('luu-chuyen-ds/'.$s->doansinh_id)}}" method="post" enctype="multipart/form-data">
                           								 {{ csrf_field() }}
														<tr class="table-secondary">
															<th>{{$s->doansinh_fullname}}</th>
															<td>
																<select name="nganh" class="custom-select col-12">
																	<option value="au">Ấu</option>
																	<option value="thieu">Thiếu</option>
																	<option value="nghia">Nghĩa</option>
																	<option selected value="hiep">Hiệp</option>
																	
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
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection