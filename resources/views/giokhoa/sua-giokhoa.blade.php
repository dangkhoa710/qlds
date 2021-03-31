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
									<li class="breadcrumb-item active" aria-current="page">Sửa giờ khóa</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Sửa giờ khóa cho ngành {{$show->giokhoa_nganh}}</h4>
							<h5 class="text-danger h5">{{$show->giokhoa_ngay}}</h5>
						</div>
					</div>
					<br>
					<form role="form" action="{{URL::to('capnhat-phanconggiokhoa')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Giờ khóa</label>
							<div class="col-sm-12 col-md-10">
								<input required class="form-control" type="text" value="{{$show->giokhoa_content}}" name="content">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Thời gian BẮT ĐẦU</label>
							<div class="col-sm-12 col-md-10">
								<input required class="form-control" value="{{$show->giokhoa_gio}}" type="time" name="time1">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Thời gian KẾT THÚC</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$show->giokhoa_ketthuc}}" type="time" name="time2" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Phân cho trưởng</label>
							<div class="col-sm-12 col-md-10">
								<select required class="custom-select col-12 " name="id">
									

									@foreach($lay_truong as $key => $lt)
									@if(($show->user_id)==($lt->user_id))
									<option selected value="{{$lt->user_id}}">{{$lt->user_fullname}}</option>
									@endif
									<option value="{{$lt->user_id}}">{{$lt->user_fullname}}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Ghi chú</label>
							<div class="col-sm-12 col-md-10">
								<input required class="form-control" type="text" value="{{$show->giokhoa_ghichu}}" name="note">
							</div>
						</div>
						
						<input type="hidden" name="nganh" value="{{$show->giokhoa_nganh}}">
						<input type="hidden" name="idgk" value="{{$show->giokhoa_id}}">
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