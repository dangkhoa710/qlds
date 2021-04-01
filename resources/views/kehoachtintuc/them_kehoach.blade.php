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
									<li class="breadcrumb-item"><a href="index.html">Kế hoạch</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thêm kế hoạch</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Thêm kế hoạch</h4>
						</div>
					</div>
					<br>
					<form role="form" action="{{URL::to('luu-thongtin-kehoach')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Kế hoạch</label>
							<div class="col-sm-12 col-md-10">
								<input required class="form-control" type="text" placeholder="Nhập nội dung kế hoạch" name="describe">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Thời gian BẮT ĐẦU</label>
							<div class="col-sm-12 col-md-10">
								<input required class="form-control" type="date" name="daystart">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Phân cho trưởng</label>
							<div class="col-sm-12 col-md-10">
								<select required class="custom-select col-12 " name="tid">
									<option selected="" value="all">Tất cả</option>
									@foreach($idt as $key => $l)
									<option value="{{$l->user_id}}">{{$l->user_fullname}}</option>
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
					</form>
				</div>
				<!-- Default Basic Forms End -->
			</div>
		</div>
	</div>
@endsection