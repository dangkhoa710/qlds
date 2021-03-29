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
									<li class="breadcrumb-item"><a href="index.html">Điểm danh</a></li>
									<li class="breadcrumb-item active" aria-current="page">Điểm danh Trưởng</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Responsive tables Start -->
				


				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							@if($lay_thu=="Sunday")
							<h4 class="h4">Chủ nhật</h4>
							@elseif($lay_thu=="Thursday")
							<h4 class="h4">Thứ Năm</h4>
							@endif
							<h4 class="text-blue h4">{{$st}}</h4>
						</div>
					</div>
					<form role="form" action="{{URL::to('diemdanh-truong')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col"></th>
									<th scope="col">Tên</th>
								</tr>
							</thead>
							<tbody>
								@foreach($show_truong as $key => $s2)										
								<tr class="table-success">
									<td><input type="checkbox" value="{{$s2->user_id}}" name="diemdanh[]"></td>
									<td>{{$s2->user_fullname}}</td>
								</tr>								
								@endforeach
							</tbody>
						</table>
					</div>

					<div class="form-group row">
						<h4 class="col-sm-12 col-md-2">Ghi chú</h4>
						<div class="col-sm-12 col-md-10">
							<input required class="form-control" type="textarea" placeholder="Nhập ghi chú" name="describe">
						</div>
					</div>
					<input type="hidden" name="day" value="{{$st}}">
					<div class="form-group row">
						<h4 class="col-sm-12 col-md-2"></h4>
						<div class="col-sm-12 col-md-10">
							<input class="btn btn-info" type="submit" value="xác nhận">
						</div>
					</div>
					</form>
					
				</div>

				
				<!-- Contextual classes End -->
			</div>
		</div>
	</div>				
@endsection