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
									<li class="breadcrumb-item active" aria-current="page">Cấp mới tài khoản sử dụng</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Cấp mới tài khoản</h4>	
						</div>
					</div>
					<br>
					<form role="form" action="{{URL::to('luu-captaikhoan')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Username</label>
							<div class="col-sm-12 col-md-10">
								<input required class="form-control" type="text" placeholder="Nhập username mới" name="content">
							</div>
						</div>

					
	
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Quyền</label>
							<div class="col-sm-12 col-md-10">
								<select required class="custom-select col-12 " name="quyen">
									<option selected="">Chọn...</option>
									@foreach($show_quyen as $key => $lt)
									
									<option value="{{$lt->id}}">{{$lt->quyen}}</option>
									
									@endforeach

								</select>
							</div>
						</div>

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