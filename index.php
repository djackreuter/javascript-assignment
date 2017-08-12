<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!-- Custom CSS Here -->
		<link href="style.css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">

		<!-- HTML shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery v3.0 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"</script>


		<!-- Latest compiled and minified JavaScript -->
		<
		script
		src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity = "sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin = "anonymous" ></script>

		<script type="text/javascript" src="script.js"></script>

		<title>JS Assignment</title>

	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-4">
					<h1>JavaScript</h1>
				</div><!-- /.col-md-6 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
		<div class="container">
			<div class="row">
				<div class="col-md-4" id="box" onmouseenter="mouseEnter();" onmouseout="mouseOut();">Not fuzzy</div>
				<div class="col-md-4" id="box2" onmousemove="writeStuff();">Roll over for lots of fuzzy</div>
				<div class="col-md-4" id="text"></div>
			</div><!-- /.row -->
		</div><!-- /.container -->
		<div class="container">
			<div class="row text">
				<div class="col-md-4">
					<form name="form1" onsubmit="return validateForm()" method="post">
						<label for="form-input">Type Something: </label>
						<input type="text" id="form-input" name="text-area"/>
						<input type="submit" value="Submit">
					</form>
				</div><!-- /.col-md-8 -->
			</div><!-- /.row text -->
		</div><!-- /.container -->
		<br>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<button type="submit" id="bacon">Show Me Da Bacon</button>
					<div id="bacon-here"></div>
				</div><!-- /.col-md-6 -->
				<div class="col-md-6">
					<button type="submit" id="soccer">GOOOOAL</button>
					<p id="soccer-text">Number 10 yellow card World Cup goal brace referee UEFA European Championship hat
						trick striker upper 90 four-four-two red card defender ball. Brace four-four-two midfielder upper
						90 World Cup defender center-half hat trick pitch referee goalie number 10 goal red card
						three-five-two ball chip. Soccer center-half forward hat trick goalie one-two UEFA European
						Championship chip defender yellow card goal ball African Cup of Nations. Halftime upper 90 chip
						one-two three-five-two yellow card World Cup four-four-two center-half pitch soccer UEFA European
						Championship midfielder goalie ball red card. Upper 90 midfielder halftime goal hat trick defender
						goalie yellow card referee striker three-five-two chip number 10 brace World Cup UEFA European
						Championship. Goal one-two UEFA European Championship ball World Cup halftime yellow card referee
						pitch upper 90 striker four-four-two center-half number 10 hat trick. One-two center-half goalie
						number 10 ball referee yellow card brace UEFA European Championship soccer midfielder
						three-five-two red card chip four-four-two forward. World Cup referee defender UEFA European
						Championship brace chip center-half striker halftime midfielder red card goal pitch number 10
						forward hat trick.</p>
				</div><!-- /.col-md-6 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</body>
</html>