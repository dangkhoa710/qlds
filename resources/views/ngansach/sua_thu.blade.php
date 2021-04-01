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
									<li class="breadcrumb-item"><a href="index.html">Ngân sách</a></li>
									<li class="breadcrumb-item active" aria-current="page">Sửa thu</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<a href="{{URL::TO('thongtin-thu')}}" class="btn btn-success mb-10">< Quay lại</a>
					<div class="clearfix">

						<div class="pull-left">
							<h4 class="text-blue h4">Sửa các khoản thu</h4>	
						</div>
					</div>
					<br>
					<form role="form" action="{{URL::to('capnhat-thongtin-thu')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nội dung</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" value="{{$show->ngansach_describe}}" name="content">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Số tiền</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$show->ngansach_amount}}" type="number" name="amount">
							</div>
						</div>
						<input type="hidden" name="id" value="{{$show->ngansach_id}}">
						<div class="form-group row">
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