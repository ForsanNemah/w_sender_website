<!DOCTYPE html>

<html lang="en">
<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="form/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/css/util.css">
	<link rel="stylesheet" type="text/css" href="form/css/main.css">
<!--===============================================================================================-->
</head>

<body>

   
    @include('includes.nav')
	<div class="contact1" dir="rtl" id="contact_form">
		<div class="container-contact1" dir="rtl">
			 
            <div class="contact1-pic js-tilt" data-tilt   >
				<img src="form/images/img-01.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form">
				<span class="contact1-form-title">
					تواصل معنا للحصول على باقتك الآن				</span>

				<div class="wrap-input1 validate-input" data-validate = "الأسم ">
					<input class="input1" type="text" name="name" placeholder="الأسم">
					<span class="shadow-input1"></span>
				</div>

                <div class="wrap-input1 validate-input" data-validate = "رقم الجوال ">
					<input class="input1" type="text" name="name" placeholder="رقم الجوال ">
					<span class="shadow-input1"></span>
				</div>

				 
<!--
				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Subject">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>
            -->

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
						راسلنا الآن
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="form/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="form/vendor/bootstrap/js/popper.js"></script>
	<script src="form/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="form/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="form/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="form/js/main.js"></script>

</body>
</html>
