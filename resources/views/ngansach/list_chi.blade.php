@extends('layout')
@section('content')

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">

			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Ngân sách</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Ngân sách</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thông tin ngân sách chi</li>
								</ol>
							</nav>
						</div>
						{{$layquyen = Session::get('user_permision')}}
						@if(($layquyen=="5")Or($layquyen=="6"))
						<div class="col-md-6 col-sm-12 text-right">
							<a class="btn btn-primary" href="{{URL::TO('themthongtin-chi')}}" role="button">
								Thêm khoản chi
							</a>
						</div>
						@endif
					</div>
				</div>
				<!-- Responsive tables Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Các khoản chi</h4>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Mô tả</th>
									<th scope="col">Số tiền</th>
									<th scope="col">Tình trạng</th>
									<th scope="col">Ngày tạo</th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody>
								@foreach($show as $key => $s)
								<tr class="table-secondary">									
									<th>{{$s->ngansach_describe}}</th>
									<td>{{$s->ngansach_amount}}</td>
									@if($s->ngansach_status=="1")
									<td>Thu</td>
									@else
									<td>Chi</td>
									@endif
									<td>{{$s->created_at}}</td>	
									@if(($layquyen=="5")Or($layquyen=="6"))
									<td><a href="{{URL::TO('suathongtin-chi/'.$s->ngansach_id)}}" class="btn btn-info text-light">Sửa</a><a href="{{URL::TO('xoa-thongtin-chi/'.$s->ngansach_id)}}" class="btn btn-danger text-light" onclick="return confirm('Bạn có chắc là muốn xóa mục này này ko ?')">Xóa</a></td>	
									@endif		
								</tr>
								@endforeach	
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>				
@endsection