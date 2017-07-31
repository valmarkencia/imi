<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Interior Motif Inc. - Products</title>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
	<form method="POST" action="/send">
		{{ csrf_field() }}
		<input type="text" name="name" class="form-control" placeholder="Name">
		<input type="email" name="name" class="form-control" placeholder="Email">
		<textarea rows="5" name="name" class="form-control" placeholder="Message"></textarea>
		<button type="submit" class="btn btn-default pull-right">Send</button>
	</form>
</div>

<footer class="container ">
	<div class="row section">
		<div class="col-md-4">
			<div class="title"><h3>Browse Our Site</h3></div>
			<ul class="nav nav-stacked">
				<li class="active">Home</li>
				<li>Projects</li>
				<li>Products</li>
				<li>Contact Us</li>
			</ul>
		</div>

		<div class="col-md-8">
			<div class="title"><h3>Our Location</h3></div>
		</div>			
	</div>
</footer>
<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>