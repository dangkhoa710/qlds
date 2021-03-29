	<div class="header">
		<div class="header-left">
			<div class="ml-5">
				<h4 class="h4 text-danger">Trưởng {{Session::get('user_fullname')}} </h4>
			</div>
		</div>
		<div class="header-right">
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="{{asset('public/images/photo1.jpg')}}" alt="">
						</span>
						<span class="user-name">{{Session::get('user_name')}}</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Thông tin tài khoản</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Cài lặt</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Trợ giúp</a>
						<a class="dropdown-item" href="{{URL::TO('logout')}}"><i class="dw dw-logout"></i>Đăng xuất</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="#" target="_blank"><img src="{{asset('public/images/github.svg')}}" alt=""></a>
			</div>
		</div>
	</div>