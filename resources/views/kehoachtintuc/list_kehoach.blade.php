@extends('layout')
@section('content')

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Thông tin </h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Thông tin</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thông tin kế hoạch</li>
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
							<h4 class="text-blue h4">Kế hoạch</h4>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Kế hoạch</th>
									<th scope="col">Ngày bắt đầu</th>
									<th scope="col">Thành viên</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($show as $key => $t)
								
								<tr class="table-danger">
									<th>{{$t->kehoach_describe}}</th>
									<td>{{$t->kehoach_time}}</td>
									@if($t->id=="all")
									<td>tất cả</td>
									@else								
									<td>{{$t->user_fullname}}</td>
									@endif
									<?php $layquyen = Session::get('user_permision');?>
									@if($layquyen=="1"||$layquyen=="2"||$layquyen=="3"||$layquyen=="4")
									<td><a href="{{URL::TO('suathongtin-truong/'.$t->user_id)}}" class="btn btn-info text-light">Sửa</a><a href="{{URL::TO('xoa-thongtin-truong/'.$t->user_id)}}" class="btn btn-danger text-light" onclick="return confirm('Bạn có chắc là muốn xóa mục này này ko ?')">Xóa</a></td>
									@endif
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