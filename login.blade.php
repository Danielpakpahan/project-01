@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'Login Page')

@section('content')
	<!-- begin login -->
	<div class="login login-with-news-feed">
		<!-- begin news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url(/assets/img/login-bg/login-bg-20.jpg)"></div>
			<div class="news-caption">
				<h4 class="caption-title f-s-30"><b>Business Process Quick Reference System</b></h4>
			</div>
		</div>
		<!-- end news-feed -->
		<!-- begin right-content -->
		<div class="right-content">
			<!-- begin login-header -->
			<div class="login-header">
				<div class="brand">
					<span><img src="../assets/img/logo/logo-sucofindo.png" width="75"></span> <b>BPQRS</b>
					<!-- <small>responsive bootstrap 4 admin template</small> -->
				</div>
				<div class="icon">
					<i class="fa fa-sign-in-alt"></i>
				</div>
			</div>
			<!-- end login-header -->
			<!-- begin login-content -->
			<div class="login-content">
				<form action="/dashboard" method="GET" class="margin-bottom-0">
					<div class="form-group m-b-15">
						<input type="text" class="form-control form-control-lg" placeholder="Email Address" required />
					</div>
					<div class="form-group m-b-15">
						<input type="password" class="form-control form-control-lg" placeholder="Password" required />
					</div>
					<div class="checkbox checkbox-css m-b-30">
						<input type="checkbox" id="remember_me_checkbox" value="" />
						<label for="remember_me_checkbox">
						Remember Me
						</label>
					</div>
					<div class="login-buttons">
						<a href="/dashboard"><button type="submit" class="btn btn-warning btn-block btn-lg">Login</button></a>
					</div>
					<!-- <div class="m-t-20 m-b-40 p-b-40 text-inverse">
						Not a member yet? Click <a href="register_v3.html">here</a> to register.
					</div> -->
					<hr />
					<p class="text-center text-grey-darker mb-0">
						&copy; PT Sucofindo (Persero) All Right Reserved 2020
					</p>
				</form>
			</div>
			<!-- end login-content -->
		</div>
		<!-- end right-container -->
	</div>
	<!-- end login -->
@endsection
