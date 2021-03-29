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
									<th scope="col"></th>
									<th scope="col">Tên</th>
									
								</tr>
							</thead>
							<tbody>
								@foreach($show_truong as $key => $s2)
										
								<tr class="table-success">
									<td><input type="checkbox" name="kiemtra.{{$s2->user_id}}"></td>
									<td>{{$s2->user_fullname}}</td>
								</tr>
								
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