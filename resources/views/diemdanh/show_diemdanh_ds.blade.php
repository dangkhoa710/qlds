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
									<li class="breadcrumb-item active" aria-current="page">Điểm danh Đoàn sinh</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Responsive tables Start -->
				


				<div class="pd-20 card-box mb-30">
					@if(($lay_thu=="Sunday")OR($lay_thu=="Thurday"))
					@if(($a->$laynganh)=="")
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
					<form role="form" action="{{URL::to('diemdanh-ds')}}" method="post" enctype="multipart/form-data">
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
								@foreach($show_ds as $key => $s2)										
								<tr class="table-success">
									<td><input type="checkbox" value="{{$s2->doansinh_id}}" name="diemdanh[]"></td>
									<td>{{$s2->doansinh_fullname}}</td>
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
					
					<div class="form-group row">
						<h4 class="col-sm-12 col-md-2"></h4>
						<div class="col-sm-12 col-md-10">
							<input class="btn btn-info" type="submit" value="xác nhận">
						</div>
					</div>
					</form>
					@else
					<div class="clearfix md-20">
						<h4>Hôm nay bạn đã điểm danh rồi</h4>
					</div>
					@endif
					@else
					<h4 class="h4"> Hôm nay không điểm danh</h4>
					@endif
				</div>

				
				<!-- Contextual classes End -->
			</div>
		</div>
	</div>				
@endsection