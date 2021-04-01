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
									<li class="breadcrumb-item"><a href="index.html">Thông tin</a></li>
									<li class="breadcrumb-item active" aria-current="page">Sửa đoàn sinh</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<a type="submit" class="btn btn-success mb-20" href="{{URL::TO('xem-thongtin-ds')}}">Quay lại</a>
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Sửa thông tin đoàn sinh</h4>
						</div>
					</div>
					<br>
					<form role="form" action="{{URL::to('capnhat-thongtin-ds')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Họ tên</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" value="{{$show->doansinh_fullname}}" name="fullname" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Ngày sinh</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$show->doansinh_dob}}" type="date" name="dob" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Số điện thoại liên lạc</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$show->doansinh_phone}}" type="number" name="phone" required>
							</div>
						</div>
						<input type="hidden" name="id" value="{{$show->doansinh_id}}">
						<div class="form-group row">
							{{Session::get('message')}}
							<?php Session::put('message',null)?>
							<label class="col-sm-12 col-md-2 col-form-label"></label>
							<div class="col-sm-12 col-md-10">
								<input type="submit" class="btn btn-danger" value="Xác nhận">
							</div>
						</div>
					</form>
				</div>
				<!-- Default Basic Forms End -->
			</div>
		</div>
	</div>
@endsection