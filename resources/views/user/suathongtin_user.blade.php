@extends('layout')
@section('content')
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Tài khoản</a></li>
									<li class="breadcrumb-item active" aria-current="page">Sửa thông tin tài khoản</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<a type="submit" class="btn btn-success mb-20" href="{{URL::TO('xem-thongtin-truong')}}">Quay lại</a>
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Sửa tài khoản {{$show->user_name}}</h4>	
						</div>
					</div>
					<br>
					<form role="form" action="{{URL::to('capnhat-thongtin-truong')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Họ tên</label>
							<div class="col-sm-12 col-md-10">
								<input required class="form-control" type="text" value="{{$show->user_fullname}}" name="fullname">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Số điện thoại</label>
							<div class="col-sm-12 col-md-10">
								<input required class="form-control" type="number" value="{{$show->user_phone}}" name="phone">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Ngày sinh</label>
							<div class="col-sm-12 col-md-10">
								<h6>{{$show->user_dob}}</h6>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Cấp bậc</label>
							<div class="col-sm-12 col-md-10">
								<h6>Huynh trưởng</h6>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Đang phụ trách ngành</label>
							<div class="col-sm-12 col-md-10">
								<h6>{{$show->user_area}}</h6>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Chức vụ</label>
							<div class="col-sm-12 col-md-10">
								<h6>{{$show->quyen}}</h6>
							</div>
						</div>
						<input type="hidden" name="id" value="{{$show->user_id}}">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label"></label>
							<div class="col-sm-12 col-md-10">
								<input type="submit" class="btn btn-danger" value="Xác nhận">
							</div>
						</div>
						<h5>{{Session::get('message')}}</h5>
							<?php Session::put('message',null)?>
					</form>
				</div>
				<!-- Default Basic Forms End -->
			</div>
		</div>
	</div>
@endsection