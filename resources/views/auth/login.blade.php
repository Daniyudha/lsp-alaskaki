@extends('layouts.v_main_auth')

@section('title')
	{{ $title }}
@endsection

@section('contents')
<div class="account-pages my-5 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center mb-5">
					<a href="{{ url('/') }}" class="logo"><img src="{{ asset('home_assets/img/logo-lsp.png') }}" height="70" alt="logo {{ getenv('APP_NAME') }}"></a>
				</div>
			</div>
		</div>
		<!-- end row -->

		<div class="row justify-content-center">
			<div class="col-lg-5">
				<div class="card">
					<div class="card-body p-4">
						<div class="p-2">
							<h5 class="mb-5 text-center">Login untuk lanjut ke {{ getenv('APP_NAME') }}.</h5>
							<form class="form-horizontal" action="{{ route('login.post') }}" method="post">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<div class="form-group mb-4">
											<label>Email</label>
											<input type="email" name="email" class="form-control" placeholder="Masukkan email">
										</div>
										<div class="form-group mb-4">
											<label>Password</label>
											<input type="password" class="form-control" name="password" placeholder="Masukkan password">
										</div>
										<div class="mt-4">
											<button class="btn btn-success btn-block waves-effect waves-light" type="submit">Masuk</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end row -->
	</div>
</div>
<!-- end Account pages -->
@endsection