<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #f30;
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
			a {
				font-size: 3em;
				text-decoration: none;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">MicroStore v1.0</div>
				<div>
					<a href="{{ url('/auth/login') }}">Sign In</a>
				</div>
			</div>
		</div>
	</body>
</html>
