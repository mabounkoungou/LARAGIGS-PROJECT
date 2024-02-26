<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>LARA-GIGS</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css" integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />	
	<!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
<style>

/********** Template CSS **********/
:root {
    --primary: hsla(172, 80%, 15%, 0.897);;
    --secondary: #114d5c;
    --light: #F0F6FF;
    --dark: #074549;
}

/*** Footer ***/
.footer {
    margin-top: 6rem;
    padding-top: 9rem;
    background:
	url({{ asset('assets/img/bg-circle.png') }}),
	url({{ asset('assets/img/bg-triangle.png') }}),
	url({{ asset('assets/img/bg-top.png') }}),linear-gradient(to bottom right, var(--primary), var(--secondary));
    background-position:
        left 0px bottom 0px,
        right 0px top 50%,
        center top;
    background-repeat: no-repeat;
}

.footer .btn.btn-social {
    margin-right: 5px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--light);
    border: 1px solid rgba(256, 256, 256, .1);
    border-radius: 40px;
    transition: .3s;
}

.footer .btn.btn-social:hover {
    color: var(--primary);
}

.footer .btn.btn-link {
    display: block;
    margin-bottom: 10px;
    padding: 0;
    text-align: left;
    color: var(--light);
    font-weight: normal;
    transition: .3s;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
}

.footer .btn.btn-link:hover {
    letter-spacing: 1px;
    box-shadow: none;
}

.footer .copyright {
    padding: 25px 0;
    font-size: 14px;
    border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright a {
    color: var(--light);
}

.footer .footer-menu a {
    margin-right: 15px;
    padding-right: 15px;
    border-right: 1px solid rgba(255, 255, 255, .1);
}

.footer .footer-menu a:last-child {
    margin-right: 0;
    padding-right: 0;
    border-right: none;
}


	</style>	
</head>
<body data-instant-intensity="mousedown">
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3" style="position: fixed; top: 0; width: 100%; z-index: 1000; padding-bottom: 70px;">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}" style="color: hsla(172, 80%, 15%, 0.897);">
				LARA-GIGS
			</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4">
					<li class="nav-item">
						<a class="btn btn-primary" aria-current="page" href="{{ route('home') }}"  style="margin-right: 5px;">
							<i class="fas fa-home"></i> Home
						</a>
											</li>   
					<li class="nav-item">
						<a class="btn btn-primary" aria-current="page" href="{{ route('jobs') }}"  style="margin-right: 5px;">
							<i class="fas fa-search"></i> Find Jobs
						</a>
											</li>   
											<li class="nav-item">
												<a class="btn btn-primary" href="{{ route('account.createJob') }}" type="submit">
													<i class="fas fa-plus-circle"></i> Post a Job
												</a></li>                                    
				</ul>               
				
				@if (!Auth::check())
				<a class="btn btn-outline-primary me-2" href="{{ route('account.login') }}" type="submit">
					<i class="fas fa-sign-in-alt"></i> Login
				</a>
				<a class="btn btn-outline-primary me-2" href="{{ route('account.registration') }}">
					<i class="fas fa-sign-in-alt"></i> Register
				</a>
							  
								@else
					@if (Auth::user()->role == 'admin')
					<a class="btn btn-outline-primary me-2" href="{{ route('admin.dashboard') }}" type="submit">Admin</a>                
					@endif                
					<a class="btn btn-outline-primary me-2" href="{{ route('account.profile') }}" type="submit">Account</a>            
				@endif
	
				
							</div>
		</div>
	</nav>
	<br><br>
	
</header>

@yield('main')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pb-0" id="exampleModalLabel">Change Profile Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="profilePicForm" name="profilePicForm" action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image" name="image">
				<p class="text-danger" id="image-error"></p>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mx-3">Update</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>            
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Footer Start -->
<div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
	<div class="container py-5 px-lg-5">
		<div class="row g-5">
			<div class="col-md-6 col-lg-3">
				<h4 class="text-white mb-4">Address</h4>
				<p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
				<p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
				<p><i class="fa fa-envelope me-3"></i>info@example.com</p>
				<div class="d-flex pt-2">
					<a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
					<a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
					<a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<h4 class="text-white mb-4">Quick Link</h4>
				<a class="btn btn-link" href="">About Us</a>
				<a class="btn btn-link" href="">Contact Us</a>
				<a class="btn btn-link" href="">Privacy Policy</a>
				<a class="btn btn-link" href="">Terms & Condition</a>
				<a class="btn btn-link" href="">Career</a>
			</div>
			<div class="col-md-6 col-lg-3">
				<h4 class="text-white mb-4">Popular Link</h4>
				<a class="btn btn-link" href="">About Us</a>
				<a class="btn btn-link" href="">Contact Us</a>
				<a class="btn btn-link" href="">Privacy Policy</a>
				<a class="btn btn-link" href="">Terms & Condition</a>
				<a class="btn btn-link" href="">Career</a>
			</div>
			<div class="col-md-6 col-lg-3">
				<h4 class="text-white mb-4">Newsletter</h4>
				<p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
					vulpu
				</p>
				
			</div>
		</div>
	</div>
	<div class="container px-lg-5">
		<div class="copyright">
			<div class="row">
				<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
					&copy;  {{ date('Y') }}
					<a class="border-bottom" href="{{ route('home') }}">LARA-GIGS</a>, All Right Reserved.

					Designed By <a class="border-bottom" href="">UPSA LARA GROUP</a>
				</div>
				<div class="col-md-6 text-center text-md-end">
					<div class="footer-menu">
						<a href="">Home</a>
						<a href="">Cookies</a>
						<a href="">Help</a>
						<a href="">FQAs</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer End -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.5.1.3.min.js') }}"></script>
<script src="{{ asset('assets/js/instantpages.5.1.0.min.js') }}"></script>
<script src="{{ asset('assets/js/lazyload.17.6.0.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js" integrity="sha512-YJgZG+6o3xSc0k5wv774GS+W1gx0vuSI/kr0E0UylL/Qg/noNspPtYwHPN9q6n59CTR/uhgXfjDXLTRI+uIryg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script>
	$('.textarea').trumbowyg();

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$("#profilePicForm").submit(function(e){
		e.preventDefault();

		var formData = new FormData(this);

		$.ajax({
			url: '{{ route("account.updateProfilePic") }}',
			type: 'post',
			data: formData,
			dataType: 'json',
			contentType: false,
			processData: false,
			success: function(response) {
				if(response.status == false) {
					var errors = response.errors;
					if (errors.image) {
						$("#image-error").html(errors.image)
					}
				} else {
					window.location.href = '{{ url()->current() }}';
				}
			}
		});
	});
</script>

@yield('customJs')
</body>
</html>