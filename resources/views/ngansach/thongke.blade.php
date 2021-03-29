@extends('layout')
@section('content')
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<nav aria-h5="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Ngân sách</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thống kê</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<a href="{{URL::TO('thongtin-chi')}}" class="btn btn-success mb-10">< Quay lại</a>
					<div class="clearfix">

						<div class="pull-left">
							<h4 class="text-blue h4">Thống kê tổng quan ngân sách</h4>	
						</div>
					</div>
					<br>
					
						<div class="form-group row">
							<h5 class="col-sm-12 col-md-2">Tổng thu</h5>
							<h5 class="col-sm-12 col-md-10">
								{{$tong_lay_thu}} đ
							</h5>
						</div>

						<div class="form-group row">
							<h5 class="col-sm-12 col-md-2">Tổng chi</h5>
							<h5 class="col-sm-12 col-md-10">
								{{$tong_lay_chi}} đ
							</h5>
						</div>
						<hr>
						<div class="form-group row">
							<h5 class="col-sm-12 col-md-2">Tổng tiền ngân sách</h5>
							<h5 class="col-sm-12 col-md-10">
								{{$thongke}} đ
							</h5>
						</div>
					
				</div>
				<!-- Default Basic Forms End -->
			</div>
		</div>
	</div>
@endsection