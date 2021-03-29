<div class="left-side-bar">
	<div class="brand-logo">
		<a href="index.html">
			<p><h2 style="color: white;">QLDS</h2></p>
			<!-- <img src="{{asset('public/images/deskapp-logo.svg')}}" alt="" class="dark-logo"> -->
			<!-- <img src="{{asset('public/images/deskapp-logo-white.svg')}}" alt="" class="light-logo"> -->
		</a>
		<div class="close-sidebar" data-toggle="left-sidebar-close">
			<i class="ion-close-round"></i>
		</div>
	</div>
	<div class="menu-block customscroll">
		<div class="sidebar-menu">
			<ul id="accordion-menu">
				<li class="dropdown">
					<a href="{{URL::to('/home')}}" class="dropdown-toggle">
						<span class="micon dw dw-house-1"></span><span class="mtext">Trang chủ</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon fa fa-info"></span><span class="mtext">Thông tin</span>
					</a>
					<ul class="submenu">
						<li><a href="{{URL::TO('xem-thongtin-truong')}}">Thông tin huynh trưởng</a></li>
						<li><a href="{{URL::TO('xem-thongtin-ds')}}">Thông tin đoàn sinh</a></li>
						<li><a href="{{URL::TO('themthongtin-ds')}}">Thêm đoàn sinh</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon dw dw-edit2"></span><span class="mtext">Giờ khóa</span>
					</a>
					<ul class="submenu">
						<li><a href="{{URL::TO('show-phanconggiokhoa')}}">Phân công giờ khóa</a></li>
						<li><a href="{{URL::TO('them-phanconggiokhoa')}}">Thêm giờ khóa</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon fa fa-money"></span><span class="mtext">Ngân sách</span>
					</a>
					<ul class="submenu">
						<li><a href="{{URL::TO('show-ngansach')}}">Tổng quan</a></li>
						<li><a href="{{URL::TO('thongtin-thu')}}">Thu</a></li>
						<li><a href="{{URL::TO('thongtin-chi')}}">Chi</a></li>
						<li><a href="{{URL::TO('thongke-ngansach')}}">Thống kê</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon fa fa-superpowers"></span><span class="mtext">Chuyển đổi</span>
					</a>
					<ul class="submenu">
						<li><a href="{{url::to('show-chuyen-truong')}}">Chuyển trưởng</a></li>
						<li><a href="{{url::to('show-chuyen-ds')}}">Chuyển đoàn sinh</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon fa fa-align-right"></span><span class="mtext">Kế hoạch</span>
					</a>
					<ul class="submenu">
						<li><a href="{{url::to('thongtin-kehoach')}}">Danh sách kế hoạch</a></li>
						<li><a href="{{url::to('themthongtin-kehoach')}}">Thêm kế hoạch</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon fa fa-newspaper-o"></span><span class="mtext">Tin tức</span>
					</a>
					<ul class="submenu">
						<li><a href="{{url::to('thongtin-tintuc')}}">Danh sách tin tức</a></li>
						<li><a href="{{url::to('themthongtin-tintuc')}}">Thêm tin tức</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon fa fa-check-square-o"></span><span class="mtext">Điểm danh</span>
					</a>
					<ul class="submenu">
						<li><a href="{{url::to('show-diemdanh-truong')}}">Trưởng</a></li>
						<li><a href="{{url::to('show-diemdanh-ds')}}">Đoàn sinh</a></li>
						<li><a href="#">Thống kê</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon dw dw-house-1"></span><span class="mtext">Quản lí tài khoản</span>
					</a>
					<ul class="submenu">
						<li><a href="{{url::to('show-captaikhoan')}}">Cấp tài khoản</a></li>
						<li><a href="{{url::to('show-taikhoan')}}">Danh sách tài khoản</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>