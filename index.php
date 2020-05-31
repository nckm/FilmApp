<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>IMDB API - FilmApp</title>

		<!-- Bootstrap CSS CDN -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


		<!-- Place your kit's code here -->
    	<script src="https://kit.fontawesome.com/edf397c00e.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container mt-5">
			<div class="jumbotron">
				<h1><i class="fas fa-film"></i> Search IMDB Database</h1>
			</div>
			<div class="input-group mt-3">
				<input class="form-control" type="text" name="search" id="input" >
				<div class="input-group-append">
					<button type="button" class="btn btn-outline-secondary" id="searchBtn">Search</button>
				</div>
			</div>
		</div> <!-- end of container -->



		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

		<!-- API goes through this script -->
		<script src="script.js"></script>
	</body>
</html>
