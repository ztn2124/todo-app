<!doctype html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Learning laravel website</title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- user defined css styles begins -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- user defined css styles ends -->

</head>

<body>
<header>
<nav class="navbar navbar-default" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="/">Learning Laravel</a>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
<li><a href="/">Home</a></li>
<li><a href="{{ action('TasksController@create') }}">Create Task</a></li>
</ul>
</div><!-- /.navbar-collapse -->
</nav>
</header>


@yield('content')


<div class="bottom-menu">
<div class="container">
<div class="row">
<div class="col-md-2 navbar-brand">
<a href="/">Learning Laravel</a>
</div>

<div class="col-md-10">
<ul class="bottom-links">
<li><a href="/">Home</a></li>
</ul>
</div>	
</div>
</div>
</div>

</body>

</html>
