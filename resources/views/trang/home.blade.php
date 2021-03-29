@extends('layout')
@section('content')
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row clearfix">
					@if($nam1=="0")
					<div class="col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Thứ Năm tới có không ?</h4>
							<div class="btn-list">
								<a href="{{URL::to('xuli-giosinhhoat/t1'.$nam_id)}}" type="button" class="btn btn-outline-success">Có</a>
								<a href="{{URL::to('xuli-giosinhhoat/t3'.$nam_id)}}" type="button" class="btn btn-outline-danger">Không</a>
							</div>
						</div>
					</div>
					@endif
					@if($chunhat1=="0")
					<div class="col-md-12 col-sm-12 mb-20">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Chủ nhật tới có  không ?</h4>
							<div class="btn-list">
								<a href="{{URL::to('xuli-giosinhhoat/s1'.$chunhat_id)}}" type="button" class="btn btn-outline-success">Có</a>
								<a href="{{URL::to('xuli-giosinhhoat/s3'.$chunhat_id)}}" type="button" class="btn btn-outline-danger">Không</a>
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>

@endsection