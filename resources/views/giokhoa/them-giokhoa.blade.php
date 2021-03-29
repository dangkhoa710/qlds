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
									<li class="breadcrumb-item"><a href="index.html">Giờ khóa</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thêm giờ khóa</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Thêm giờ khóa cho ngành {{$kiemtra_nganh->user_area}}</h4>
							<h5 class="text-danger h5">Chúa Nhật, {{$chunhat->ngaysinhhoat}}</h5>
						</div>
					</div>
					<br>
					<form role="form" action="{{URL::to('luu-phanconggiokhoa')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Giờ khóa</label>
							<div class="col-sm-12 col-md-10">
								<input required class="form-control" type="text" placeholder="Nhập nội dung giờ khóa" name="content">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Thời gian BẮT ĐẦU</label>
							<div class="col-sm-12 col-md-10">
								<input required class="form-control" placeholder="Chọn giờ" type="time" name="time1">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Thời gian KẾT THÚC</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Chọn giờ" type="time" name="time2" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Phân cho trưởng</label>
							<div class="col-sm-12 col-md-10">
								<select required class="custom-select col-12 " name="id">
									<option selected="">Chọn...</option>
									@foreach($laytruong_thuocnganh as $key => $lt)
									@if(($lt->user_area)==($kiemtra_nganh->user_area))
									<option value="{{$lt->user_id}}">{{$lt->user_fullname}}</option>
									@endif
									@endforeach

								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Ghi chú</label>
							<div class="col-sm-12 col-md-10">
								<input required class="form-control" type="text" placeholder="Nhập nội dung ghi chú" name="note">
							</div>
						</div>
						<input type="hidden" name="ngay" value="{{$chunhat->ngaysinhhoat}}">
						<input type="hidden" name="nganh" value="{{$kiemtra_nganh->user_area}}">
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