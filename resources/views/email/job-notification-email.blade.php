<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Notification Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: hsla(172, 80%, 15%, 0.897);
        }
        p {
            margin-bottom: 10px;
        }

        @font-face {
  font-family: Aller;
  src: url("../fonts/aller/aller_bd.eot");
  /* IE9 Compat Modes */
  src: url("../fonts/aller/aller_bd.eot?#iefix") format("embedded-opentype"), url("../fonts/aller/aller_bd.woff") format("woff"), url("../fonts/aller/aller_bd.ttf") format("truetype"), url("../fonts/aller/aller_bd.svg#svgFontName") format("svg");
  /* Legacy iOS */
  font-weight: bold;
  font-style: normal; }

.header-gradient, .header {
  background: hsla(172, 80%, 15%, 0.897);
  /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(left, hsla(172, 80%, 15%, 0.897), #36c95b);
  /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(right, hsla(172, 80%, 15%, 0.897), #36c95b);
  /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(right, hsla(172, 80%, 15%, 0.897), #36c95b);
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(to right, hsla(172, 80%, 15%, 0.897), #36c95b);
  /* Standard syntax */ }

.header {
  padding: 40px 0;
  margin-bottom: 40px; }
  .header .logo {
    margin: 40px 0; }
  .header .title {
    margin-top: 0;
    font-family: Lato;
    font-weight: lighter;
    font-style: italic;
    color: white; }
  .header .subtitle {
    font-family: Lato;
    font-size: 20px;
    color: white;
    margin-bottom: 30px; }
  .header .store-button {
    max-width: 45%;
    height: auto; }

@media (min-width: 768px) and (max-width: 991px) {
  .header .logo {
    margin-top: 80px; } }

.footer-gradient, .footer {
  background: hsla(172, 80%, 15%, 0.897);
  /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(hsla(172, 80%, 15%, 0.897), hsla(172, 24%, 53%, 0.897));
  /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(hsla(172, 80%, 15%, 0.897), hsla(172, 24%, 53%, 0.897));
  /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(hsla(172, 80%, 15%, 0.897), hsla(172, 24%, 53%, 0.897));
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(hsla(172, 80%, 15%, 0.897), hsla(172, 24%, 53%, 0.897));
  /* Standard syntax */ }

.footer {
  padding: 40px 10px; }
  .footer .footer-logo-container img {
    margin-bottom: 30px; }
  .footer .title {
    color: white;
    font-family: Lato;
    font-style: italic;
    font-weight: lighter; }
  .footer .link-container .links {
    color: white;
    font-family: Lato;
    font-size: 20px; }
    .footer .link-container .links.transparent {
      opacity: 0.6; }
  .footer .copyright {
    margin-top: 20px;
    color: white;
    font-family: Lato;
    font-size: 15px;
    opacity: 0.6; }
    .footer .copyright:last-child {
      margin-top: 0; }

@media (max-width: 767px) {
  .footer {
    border-radius: 0; } }

#terms-and-conditions .terms-and-conditions-section {
  margin: 10px 0; }
  #terms-and-conditions .terms-and-conditions-section.grey {
    background-color: #f8f8fb; }
  #terms-and-conditions .terms-and-conditions-section .section-title {
    color: #979797; }

#about .about-section {
  margin: 10px 0; }
  #about .about-section.grey {
    background-color: #f8f8fb; }

#about .text-section {
  margin-top: 30px;
  margin-bottom: 100px; }

.how-to-section {
  margin: 10px 0;
  padding: 20px 0; }
  .how-to-section.grey {
    background-color: #f8f8fb; }

.text-wrapper {
  height: 400px;
  position: relative; }
  .text-wrapper .section-text {
    position: absolute;
    top: 40%;
    height: 100px;
    margin-top: -50px; }

.title {
  font-family: Lato;
  font-weight: 100;
  font-style: italic;
  color: #979797;
  margin-bottom: 30px; }

.section-header {
  font-family: Aller;
  font-weight: bold;
  color: #6e7fd8; }

.subtext {
  font-family: Lato;
  font-size: 18px;
  color: #919191; }

.how-to-image {
  height: 400px;
  max-width: 100%; }

@media (max-width: 767px) {
  .text-wrapper {
    height: auto;
    position: static; }
    .text-wrapper .section-text {
      position: static;
      height: auto;
      margin-top: 0; }
  .how-to-image {
    height: 200px; } }


:root {
    --primary: hsla(172, 80%, 15%, 0.897);
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
<body>
    <div class="container">
        <h1>Hello {{ $mailData['employer']->name }},</h1>

        <p>We are pleased to inform you about a new job opportunity:</p>

        <p>Job Title: {{ $mailData['job']->title }}</p>

        <p>Employee Details:</p>

        <p>Name: {{ $mailData['user']->name }}</p>
        <p>Email: {{ $mailData['user']->email }}</p>
        <p>Mobile No: {{ $mailData['user']->mobile }}</p>

        <p>We hope this notification finds you well.</p>

        <p>Best Regards,</p>
        <p>Your Company</p>
    </div>
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
				<a class="btn btn-link" href="{{ route('aboutus') }}">About Us</a>
				<a class="btn btn-link" href="{{ route('contactus') }}">Contact Us</a>
				<a class="btn btn-link" href="{{ route('privacypolicy') }}">Privacy Policy</a>
				<a class="btn btn-link" href="{{ route('TermsandConditions') }}">Terms & Condition</a>
				<a class="btn btn-link" href="">Career</a>
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
						<a href="{{ route('home')}}">Home</a>
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
  </body>
</html>

    
</body>
</html>
