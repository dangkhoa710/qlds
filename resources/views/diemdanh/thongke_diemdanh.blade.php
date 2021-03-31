@extends('layout')
@section('content')
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">Thống kê tần suất đi sinh hoạt</h5>

							<div class="input-group custom b-3">
								<h5 class="h5 ml-1 mr-3">Tháng</h5>
								<select class="custom-select col-12 mb-3" name="thang">
									<?php $d=1;while($d<=12){echo
									"<option value=".$d.">$d</option>";$d++;}
									?>
								</select>
							</div>
							<div class="input-group custom b-3">
								<h5 class="h5 ml-1 mr-3">Năm</h5>
								<select class="custom-select col-12 mb-3" name="nam">
									<?php $i=2021;
										while ($i<=2025){
										echo "<option value=".$i.">".$i."</option>";
										 $i++;
									} ?>
								</select>
							</div>
							<input class="btn btn-info mb-20" type="submit" name="loc" value="lọc">
							<div class="tab">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab" aria-selected="true">Huynh Trưởng</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Đoàn sinh</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home" role="tabpanel">
										<div class="pd-20">
											<div class="clearfix mb-20">
												<div class="pull-left">
													<h5 class="text-blue h4">Tần suất đi sinh hoạt của Trưởng</h5>
												</div>
												<br>
											</div>
											<div class="clearfix mb-20">
												<div class="pull-left">
													<h5 class="text-blue h4">Tháng {{$thang}} - {{$nam}} có {{$dem_t}} buổi sinh hoạt vào @if($thu==5)Thứ Năm @else Chủ nhật @endif</h5>
												</div>
											</div>
											<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
												<div class="pd-20 card-box">
													<h5 class="h5 mb-20">Tổng quan</h5>
													<div class="progress mb-20">
														<div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
													</div>
												</div>
											</div>
											@foreach($a as $key => $t)

											<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
												<a href="{{URL::TO('thongke-diemdanh-chitiet-truong/'.$t->user_id)}}">
												<div class="pd-20 card-box bg-danger">
													<h5 class="h5 mb-20 text-light">{{$t->user_fullname}}</h5>
													<div class="progress mb-20">
														<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
													</div>
													<h6 class="text-center text-light">
													<?php $dd=0; foreach($b2 as $key => $b3){
													if($b3==$t->user_id)
													{$dd++;}}?>
													{{$dd}}/{{$dem_t}} buổi</h6>
												</div>
												</a>
											</div>
											
											@endforeach
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="profile" role="tabpanel">
										<div class="pd-20">
											<div class="clearfix mb-20">
												<div class="pull-left">
													<h5 class="text-blue h4">Tần suất đi sinh hoạt của Đoàn sinh</h5>
												</div>
											</div>
											<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
												<div class="pd-20 card-box">
													<h5 class="h5 mb-20">Tổng quan</h5>
													<div class="progress mb-20">
														<div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
													</div>
												</div>
											</div>
											
											<hr>

											@foreach($ds as $key => $t2)
											@if($t2->doansinh_level=="au")
											<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
												<a href="{{URL::TO('thongke-diemdanh-chitiet-doansinh/'.$t2->doansinh_id)}}">
												<div class="pd-20 card-box bg-success">
													<h5 class="h5 mb-20 text-light">{{$t2->doansinh_fullname}}</h5>
													<div class="progress mb-20">
														<div class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
													</div>
													<h6 class="text-center text-light">2/{{$dem_t}} buổi</h6>
												</div>
												</a>
											</div>
											@endif
											@endforeach
											<hr>
											@foreach($ds as $key => $t2)
											@if($t2->doansinh_level=="thieu")
											<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
												<a href="{{URL::TO('thongke-diemdanh-chitiet-doansinh/'.$t2->doansinh_id)}}">
												<div class="pd-20 card-box bg-primary">
													<h5 class="h5 mb-20 text-light">{{$t2->doansinh_fullname}}</h5>
													<div class="progress mb-20">
														<div class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
													</div>
													<h6 class="text-center text-light">2/{{$dem_t}} buổi</h6>
												</div>
												</a>
											</div>
											@endif
											@endforeach
											<hr>
											@foreach($ds as $key => $t2)
											@if($t2->doansinh_level=="nghia")
											<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
												<a href="{{URL::TO('thongke-diemdanh-chitiet-doansinh/'.$t2->doansinh_id)}}">
												<div class="pd-20 card-box bg-warning">
													<h5 class="h5 mb-20 text-light">{{$t2->doansinh_fullname}}</h5>
													<div class="progress mb-20">
														<div class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
													</div>
													<h6 class="text-center text-light">2/{{$dem_t}} buổi</h6>
												</div>
											</a>
											</div>
											@endif
											@endforeach
											<hr>
											@foreach($ds as $key => $t2)
											@if($t2->doansinh_level=="hiep")
											<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
												<a href="{{URL::TO('thongke-diemdanh-chitiet-doansinh/'.$t2->doansinh_id)}}">
												<div class="pd-20 card-box " style="background-color: #865318;">
													<h5 class="h5 mb-20 text-light">{{$t2->doansinh_fullname}}</h5>
													<div class="progress mb-20">
														<div class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
													</div>
													<h6 class="text-center text-light">2/{{$dem_t}} buổi</h6>
												</div>
												</a>
											</div>
											@endif
											@endforeach
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