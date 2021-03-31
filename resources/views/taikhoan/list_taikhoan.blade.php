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
									<li class="breadcrumb-item"><a href="index.html">Thông tin</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thông tin user</li>
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
							<h4 class="text-blue h4">Huynh trưởng</h4>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Tên</th>
									<th scope="col">Username</th>
									<th scope="col">Password</th>
									<th scope="col">Ngày sinh</th>
									<th scope="col">Số điện thoại liên lạc</th>
									<th scope="col">Cấp bậc</th>
									<th scope="col">Chức vụ</th>
									<th scope="col">Phụ trách ngành</th>
									<th scope="col">Quyền</th>
									<th scope="col">Ngày tạo</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($show as $key => $t)
								
								<tr class="table-danger">
									<th>{{$t->user_id}}</th>
									<th>{{$t->user_fullname}}</th>
									<th>{{$t->user_name}}</th>
									<th>{{$t->user_password}}</th>
									<td>{{$t->user_dob}}</td>
									<td>{{$t->user_phone}}</td>
									<td>{{$t->user_level}}</td>
									<td>{{$t->user_rank}}</td>
									<td>{{$t->user_area}}</td>
									<td>{{$t->quyen}}</td>
									<td><span class="badge badge-primary">Primary</span></td>
								</tr>
								
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