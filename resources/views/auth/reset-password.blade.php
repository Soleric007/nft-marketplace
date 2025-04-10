<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Reset Password</title>
	<link rel="icon" href="/template/assets/logo/fav-icon.png" sizes="32x32">
	<link rel="icon" href="/template/assets/logo/fav-icon.png" sizes="192x192">
	<link rel="apple-touch-icon" href="/template/assets/logo/fav-icon.png">

	<link rel="stylesheet" type="text/css" href="/template/assets/css/main.min.rtl.css">
	<link rel="stylesheet" type="text/css" href="/template/assets/library/aos/aos.css">
	<link rel="stylesheet" type="text/css" href="/template/assets/css/style2.css">
<script src="/template/assets/library/aos/aos.js"></script>
	<script src="/template/assets/js/scripts.js"></script>

</head>
<body>

	<div class="loader-wrapper">
	    <span class="loader"><span class="loader-inner"></span></span>
	</div>

	<div class="container py-2">
		<div class="mx-0 my-4 overflow-hidden row justify-content-center justify-content-lg-between align-content-center" style="min-height: calc(100vh - 4rem);">
			<div class="my-auto col-12 col-sm-10 col-md-8 col-lg-5 col-xxl-4" data-aos="zoom-in" data-aos-duration="1000">
				<div class="">
					<div>
						<a href="index.html">
							<img src="/template/assets/logo/circle.png" height="40" alt="logo">
						</a>
					</div>

					<h1 class="mt-5 mb-4">
						Reset password
					</h1>

					<div>
						<div class="mb-4">
							<label for="email" class="cursor-pointer form-label">Email </label>
							<input type="email" class="form-control" id="email">
						</div>

						<div class="mb-4">
							<button class="text-white btn btn-main w-100">
								Reset password
							</button>
						</div>
					</div>

					<div class="mt-5">
						<a href="{{ route('login') }}" class="text-primary">
							<span class="fw-bold">
								Back to Sign In
							</span>

							<span>
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
								  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
								</svg>
							</span>
						</a>
					</div>

				</div>
			</div>

			<div class="d-none d-lg-block col-lg-7 min-vh-80" data-aos="fade-right" data-aos-duration="3000">
				<div class="h-100 position-relative">
					<div
						class="rounded h-100 w-100 bg-size-cover position-absolute z-index-n3"
						style="background: url(/template/assets/img/team/t4.jpg) center top;"
						>
					</div>

					<div
						class="rounded h-100 w-100 bg-dark position-absolute"
						style="--bs-bg-opacity: 0.9;"
						>
						<div class="row h-100 justify-content-center align-items-center">
							<div class="text-white col-11 col-xl-8">
								<h2 class="mb-2">
									The Wealth Inc.
								</h2>

								<div class="mb-2 text-main">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
									  <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
									</svg>
								</div>

								<div class="mb-3">
									Tigma has transformed our business. Efficient solutions, seamless integration, professional team. Highly recommend.
								</div>

								<div>
									<img
										src="/template/assets/img/small-team/st4.jpg"
										height="40" width="40"
										class="img-fluid rounded-circle"
										alt="small team"
										>
									<span>
										<span class="fw-bold ps-2">
											Margaret Parson
										</span>

										<span class="ps-1 fw-bold text-gray">
											COO, The Wealth Inc.
										</span>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



</body>
</html>
