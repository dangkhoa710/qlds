<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Đăng nhập quản lí DS</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png')}}" sizes="32x32" href="{{asset('public/images/favicon-32x32.png')}}">
	<link rel="icon" type="image/png')}}" sizes="16x16" href="{{asset('public/images/favicon-16x16.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
	<script >
    function checkPasswordMatch() {
    var password = $("#pw").val();
    var confirmPassword = $("#rpw").val();

    if (password != confirmPassword)
        $("#CPM").html("Mật khẩu không khớp");
    else
        $("#CPM").html("Mật khẩu khớp<div class='row'><div class='col-sm-12'><div class='input-group mb-0'><button type='submit' class='btn btn-outline-primary btn-lg btn-block'>Xác nhận</button></div></div></div>");
	}
	</script>
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="{{asset('public/images/deskapp-logo.svg')}}" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{asset('public/images/login-page-img.png')}}" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Thông tin lần đầu đăng nhập</h2>
						</div>
						<form role="form" action="{{URL::to('luu-doimatkhaulandau')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h5 class="h5">Xin chào <b style="color: red">{{$user}}</b>, đây là lần đăng nhập đầu tiên của bạn, mời bạn đổi mật khẩu và thông tin. Xin cám ơn !</h5>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Tên đầy đủ" name="fullname" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="number" class="form-control form-control-lg" placeholder="Số điện thoại" name="phone" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-smartphone"></i></span>
								</div>
							</div>
							
							<div class="input-group custom">
								<h5 class="h5 ml-1 mr-3">Ngày sinh</h5>
								<input type="date" class="form-control form-control-lg" placeholder="Ngày sinh" name="dob" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-id-card2"></i></span>
								</div>
							</div>
							
							<div class="input-group custom b-3">
								<h5 class="h5 ml-1 mr-3">Phụ trách ngành</h5>
								<select class="custom-select col-12 mb-3" name="area">
									<option selected="0">Không có</option>
									<option value="au">Ấu</option>
									<option value="thieu">Thiếu</option>
									<option value="nghia">Nghĩa</option>
									<option value="hiep">Hiệp</option>
								</select>
							</div>
							<input type="hidden" name="username" value="{{$user}}">
							<input type="hidden" name="id" value="{{$id}}">
							<input type="hidden" name="permision" value="{{$permision}}">

											
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg mt-3" placeholder="Nhập mật khẩu cũ" name="password0" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" placeholder="Nhập mật khẩu mới" name="password1" required id="pw" onchange="checkPasswordMatch()">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" placeholder="Nhập lại mật khẩu mới" name="password2" required onchange="checkPasswordMatch()" id="rpw">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="registrationFormAlert" id="CPM"></div>
						</form>
						<?php
            $message = Session::get('message');
            if($message){
            echo $message;
            Session::put('message',null);
            }
        ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('public/scripts/core.js')}}"></script>
	<script src="{{asset('public/scripts/script.min.js')}}"></script>
	<script src="{{asset('public/scripts/process.js')}}"></script>
	<script src="{{asset('public/scripts/layout-settings.js')}}"></script>
</body>
</html>