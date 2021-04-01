@extends('layout')
@section('content')
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<?php $laynganh = Session::get('user_area');?>
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Giờ khóa</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thong tin giờ khóa</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Responsive tables Start -->
				@foreach($show_gio as $key => $s)
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							@if($s->thu=="Sunday")
							<h4 class="h4">Chủ nhật</h4>
							@elseif($s->thu=="Thursday")
							<h4 class="h4">Thứ Năm</h4>
							@endif
							<h4 class="text-blue h4">{{$s->ngaysinhhoat}}</h4>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Giờ bắt đầu</th>
									<th scope="col">Giờ kết thúc</th>
									<th scope="col">Tên giờ khóa</th>
									<th scope="col">Phân công</th>
									<th scope="col">Ngành</th>
									<th scope="col">Tác vụ</th>
								</tr>
							</thead>
							<tbody>

								@foreach($show as $key => $s2)
								@if(($s->ngaysinhhoat)==($s2->giokhoa_ngay)&($s2->giokhoa_nganh=="au")&(($laynganh=="au")||($laynganh=="0")))		
								<tr class="table-success">
									<td>{{$s2->giokhoa_gio}}</td>
									<td>{{$s2->giokhoa_ketthuc}}</td>
									<td>{{$s2->giokhoa_content}}</td>
									<td>{{$s2->user_fullname}}</td>
									<td>{{$s2->giokhoa_nganh}}</td>
									<td><a href="{{URL::TO('sua-phanconggiokhoa/'.$s2->giokhoa_id)}}" class="btn btn-info text-light">Sửa</a></td>
								</tr>
								@endif
								@endforeach
							
								<tr><td></td><td></td><td></td><td></td><td></td></tr>

								@foreach($show as $key => $s2)
								@if(($s->ngaysinhhoat)==($s2->giokhoa_ngay)&($s2->giokhoa_nganh=="thieu")&(($laynganh=="thieu")||($laynganh=="0")))		
								<tr class="table-primary">
									<td>{{$s2->giokhoa_gio}}</td>
									<td>{{$s2->giokhoa_ketthuc}}</td>
									<td>{{$s2->giokhoa_content}}</td>
									<td>{{$s2->user_fullname}}</td>
									<td>{{$s2->giokhoa_nganh}}</td>
									<td><a href="{{URL::TO('sua-phanconggiokhoa/'.$s2->giokhoa_id)}}" class="btn btn-info text-light">Sửa</a></td>
								</tr>
								@endif
								@endforeach
				
								<tr><td></td><td></td><td></td><td></td><td></td></tr><tr></tr>
						
								@foreach($show as $key => $s2)
								@if(($s->ngaysinhhoat)==($s2->giokhoa_ngay)&($s2->giokhoa_nganh=="nghia")&(($laynganh=="nghia")||($laynganh=="0")))	
								<tr class="table-warning">
									<td>{{$s2->giokhoa_gio}}</td>
									<td>{{$s2->giokhoa_ketthuc}}</td>
									<td>{{$s2->giokhoa_content}}</td>
									<td>{{$s2->user_fullname}}</td>
									<td>{{$s2->giokhoa_nganh}}</td>
									<td><a href="{{URL::TO('sua-phanconggiokhoa/'.$s2->giokhoa_id)}}" class="btn btn-info text-light">Sửa</a></td>
								</tr>
								@endif
								@endforeach
						
								<tr><td></td><td></td><td></td><td></td><td></td></tr>
							
								@foreach($show as $key => $s2)
								@if(($s->ngaysinhhoat)==($s2->giokhoa_ngay)&($s2->giokhoa_nganh=="hiep")&(($laynganh=="hiep")||($laynganh=="0")))	
								<tr class="table-active">
									<td>{{$s2->giokhoa_gio}}</td>
									<td>{{$s2->giokhoa_ketthuc}}</td>
									<td>{{$s2->giokhoa_content}}</td>
									<td>{{$s2->user_fullname}}</td>
									<td>{{$s2->giokhoa_nganh}}</td>
									<td><a href="{{URL::TO('sua-phanconggiokhoa/'.$s2->giokhoa_id)}}" class="btn btn-info text-light">Sửa</a></td>
								</tr>
								@endif
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				@endforeach
				<!-- Contextual classes End -->
			</div>
		</div>
	</div>				
@endsection