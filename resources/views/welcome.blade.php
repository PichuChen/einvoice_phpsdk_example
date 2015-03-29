<!DOCTYPE html>
<html ng-app>
	<head>
		<title>Laravel</title>
                <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="/js/bootstrap.min.js"></script>	
                <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>	
  		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
                                <h1>電子發票PHP SDK 示範站</h1>
				<div class="title">Laravel 5<?php var_dump(env('APP_DEBUG'))?></div>
				<div class="quote">{{ Inspiring::quote() }}</div>
                                
			</div>
		</div>
	</body>
</html>
