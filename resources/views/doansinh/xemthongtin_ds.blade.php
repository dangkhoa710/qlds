@extends('layout')
@section('content')

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">

			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Thong tin </h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Thong tin</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thong tin doan sinh</li>
								</ol>
							</nav>
						</div>
<!-- 						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<!-- Responsive tables Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Ngành Ấu</h4>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Tên</th>
									<th scope="col">Ngày sinh</th>
									<th scope="col">Số điện thoại liên lạc</th>
									<th scope="col">Cấp bậc</th>
									<th scope="col">Chức vụ</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($thongtin_doansinh as $key => $t)
								@if(($t->doansinh_level)=="au")
								<tr class="table-success">
									<th>{{$t->doansinh_fullname}}</th>
									<td>{{$t->doansinh_dob}}</td>
									<td>{{$t->doansinh_phone}}</td>
									<td>Ấu nhi</td>
									@if($t->doansinh_rank=="1")
									<td>Đội trưởng</td>
									@elseif($t->doansinh_rank=="2")
									<td>Đội phó</td>
									@elseif($t->doansinh_rank=="0")
									<td>Đoàn sinh</td>
									@endif
									<td><a href="{{URL::TO('suathongtin-ds/'.$t->doansinh_id)}}" class="btn btn-info text-light">Sửa</a><a href="{{URL::TO('xoa-thongtin-ds/'.$t->doansinh_id)}}" class="btn btn-danger text-light" onclick="return confirm('Bạn có chắc là muốn xóa mục này này ko ?')">Xóa</a></td>
								</tr>
								@endif
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<!-- Contextual classes End -->
				<!-- Responsive tables Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Ngành Thiếu</h4>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Tên</th>
									<th scope="col">Ngày sinh</th>
									<th scope="col">Số điện thoại liên lạc</th>
									<th scope="col">Cấp bậc</th>
									<th scope="col">Chức vụ</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($thongtin_doansinh as $key => $t)
								@if(($t->doansinh_level)=="thieu")
								<tr class="table-primary">
									<th>{{$t->doansinh_fullname}}</th>
									<td>{{$t->doansinh_dob}}</td>
									<td>{{$t->doansinh_phone}}</td>
									<td>Thiếu nhi</td>
									@if($t->doansinh_rank=="1")
									<td>Đội trưởng</td>
									@elseif($t->doansinh_rank=="2")
									<td>Đội phó</td>
									@elseif($t->doansinh_rank=="0")
									<td>Đoàn sinh</td>
									@endif
									<td><a href="{{URL::TO('suathongtin-ds/'.$t->doansinh_id)}}" class="btn btn-info text-light">Sửa</a><a href="{{URL::TO('xoa-thongtin-ds/'.$t->doansinh_id)}}" class="btn btn-danger text-light" onclick="return confirm('Bạn có chắc là muốn xóa mục này này ko ?')">Xóa</a></td>
								</tr>
								@endif
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<!-- Contextual classes End -->
				<!-- Responsive tables Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Ngành Nghĩa</h4>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Tên</th>
									<th scope="col">Ngày sinh</th>
									<th scope="col">Số điện thoại liên lạc</th>
									<th scope="col">Cấp bậc</th>
									<th scope="col">Chức vụ</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($thongtin_doansinh as $key => $t)
								@if(($t->doansinh_level)=="nghia")
								<tr class="table-warning">
									<th>{{$t->doansinh_fullname}}</th>
									<td>{{$t->doansinh_dob}}</td>
									<td>{{$t->doansinh_phone}}</td>
									<td>Nghĩa sĩ</td>
									@if($t->doansinh_rank=="1")
									<td>Đội trưởng</td>
									@elseif($t->doansinh_rank=="2")
									<td>Đội phó</td>
									@elseif($t->doansinh_rank=="0")
									<td>Đoàn sinh</td>
									@endif
									<td><a href="{{URL::TO('suathongtin-ds/'.$t->doansinh_id)}}" class="btn btn-info text-light">Sửa</a><a href="{{URL::TO('xoa-thongtin-ds/'.$t->doansinh_id)}}" class="btn btn-danger text-light" onclick="return confirm('Bạn có chắc là muốn xóa mục này này ko ?')">Xóa</a></td>
								</tr>
								@endif
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<!-- Contextual classes End -->
				<!-- Responsive tables Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Ngành Hiệp</h4>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Tên</th>
									<th scope="col">Ngày sinh</th>
									<th scope="col">Số điện thoại liên lạc</th>
									<th scope="col">Cấp bậc</th>
									<th scope="col">Chức vụ</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($thongtin_doansinh as $key => $t)
								@if(($t->doansinh_level)=="hiep")
								<tr class="table-active">
									<th>{{$t->doansinh_fullname}}</th>
									<td>{{$t->doansinh_dob}}</td>
									<td>{{$t->doansinh_phone}}</td>
									<td>Hiệp sĩ</td>
									@if($t->doansinh_rank=="1")
									<td>Đội trưởng</td>
									@elseif($t->doansinh_rank=="2")
									<td>Đội phó</td>
									@elseif($t->doansinh_rank=="0")
									<td>Đoàn sinh</td>
									@endif
									<td><a href="{{URL::TO('suathongtin-ds/'.$t->doansinh_id)}}" class="btn btn-info text-light">Sửa</a><a href="{{URL::TO('xoa-thongtin-ds/'.$t->doansinh_id)}}" class="btn btn-danger text-light" onclick="return confirm('Bạn có chắc là muốn xóa mục này này ko ?')">Xóa</a></td>
								</tr>
								@endif
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<!-- Contextual classes End -->
			</div>
		</div>
	</div>				
@endsection