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
									<li class="breadcrumb-item active" aria-current="page">Thêm đoàn sinh</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Thêm thông tin đoàn sinh</h4>
						</div>
					</div>
					<br>
					<form role="form" action="{{URL::to('luu-thongtin-ds')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Họ tên</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Nhập họ tên" name="fullname" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Ngày sinh</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Chọn ngày" type="date" name="dob" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Số điện thoại liên lạc</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="nhập số điện thoại" type="number" name="phone" required>
							</div>
						</div>
						<div class="form-group row">
							<h4 class="col-sm-12 col-md-2 col-form-label h4">Đoàn sinh thuộc ngành {{$kiemtra_nganh->user_area}}</h4>
						</div>
						<input type="hidden" name="area" value="{{$kiemtra_nganh->user_area}}">
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