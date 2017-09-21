<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Interior Motif Inc. - Products</title>
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/master.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('captcha', {
          'sitekey' : '6LdkbTEUAAAAAEmOExFVS-gF87p-r8PPPWmF9Dfa'
        });
      };
    </script>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="/img/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right menu">
        <li><a href="/">Home</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/products">Products</a></li>
        <li class="active"><a href="/contact">Contact Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="contact-form">
<div class="section-title"><h2>Contact Us</h2> </div>
@if (\Session::has('success'))
<div class="alert alert-success alert-dismissible" role="alert">{{ Session::get('success') }}</div>
@elseif (\Session::has('error'))
<div class="alert alert-danger alert-dismissible" role="alert">{{ Session::get('error') }}</div>
@endif
	<form method="POST" action="/send">
		{{ csrf_field() }}
		<input type="text" name="name" class="form-control" placeholder="Name">
		<input type="email" name="email" class="form-control" placeholder="Email">
		<textarea rows="5" name="msg" class="form-control" placeholder="Message"></textarea>
		<div id="captcha"></div>
		<button type="submit" class="btn btn-default pull-right" id="capt">Send</button>
	</form>
</div>

<footer class="container ">
	<div class="row section">
		<div class="col-md-4">
			<div class="title"><h3>Browse Our Site</h3></div>
			<ul class="nav nav-stacked">
				<li><a href="/">Home</a></li>
				<li><a href="/projects">Projects</a></li>
				<li><a href="/products">Products</a></li>
				<li class="active"><a href="/contact">Contact Us</a></li>
			</ul>
		</div>

		<div class="col-md-4">
			<div class="title"><h3>Contact Info</h3></div>
			Email: <b>info@interiormotifinc.com</b> <br>
			Tel: <b><a href="tel:(049)5361300"></a>(049) 536 1300</b> <br>
			Phone: <b><a href="tel:+639069425078"></a>+639069425078</b> <br>
			Phone: <b><a href="tel:+639173245941"></a>+639173245941</b> <br>
			Address: <b>Unit 312 Humana Wellness Center Sta. Rosa, Laguna, Philippines 4026</b>
		</div>
		<div class="col-md-4">
			<div class="title"><h3>Our Location</h3></div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1625.9028609510983!2d121.06241866801307!3d14.249109657004768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd7d47373269d9%3A0x1110e7cc0684289e!2sHumana!5e0!3m2!1sen!2sph!4v1501706321027" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>		
	</div>
</footer>
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>
<script type="text/javascript" src="/js/master.js"></script>
<script type="text/javascript">
	$(function(){
		$('#capt').click(function(e){
			e.preventDefault();
			if(grecaptcha.getResponse())
			{
				$('form').submit();
			}
		});
	});
</script>
<script>
window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token()
]); ?>
</script>
</body>
</html>