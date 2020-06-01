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

			<div class="card mt-5 mb-5">
				<img class="card-img-top" src="">
				<div class="card-body">
					<h5 class="card-title"></h5>
					<p class="card-text" id="title"></p>
					<p class="card-text" id="year"></p>
					<p class="card-text" id="rated"></p>
					<p class="card-text" id="released"></p>
					<p class="card-text" id="runtime"></p>
					<p class="card-text" id="genre"></p>
					<p class="card-text" id="director"></p>
					<p class="card-text" id="writer"></p>
					<p class="card-text" id="actors"></p>
					<p class="card-text" id="plot"></p>
					<p class="card-text" id="language"></p>
					<p class="card-text" id="country"></p>
					<p class="card-text" id="awards"></p>
					<!-- Ratings -->
					<p class="card-text" id="metascore"></p>
					<p class="card-text" id="imdb-rating"></p>
					<p class="card-text" id="imdb-votes"></p>
					<p class="card-text" id="imdb-id"></p>
					<p class="card-text" id="type"></p>
					<p class="card-text" id="dvd"></p>
					<p class="card-text" id="box-office"></p>
					<p class="card-text" id="production"></p>
					<p class="card-text" id="website"></p>
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
