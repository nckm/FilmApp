<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>IMDB API - FilmApp</title>

		<!-- Bootstrap CSS CDN -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

		<link rel="stylesheet" href="css/style.css">

		<!-- Place your kit's code here -->
		<script src="https://kit.fontawesome.com/edf397c00e.js" crossorigin="anonymous"></script>
		
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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
			<div class="col-12 mt-3 mb-3">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<div class="card">
						<script>
							$("#searchBtn").click(function() {
								var $api = 'd9f6a907';
								var $url = 'http://www.omdbapi.com/?apikey=' + $api;

								var $userInput = $("#input").val();
								var $titleSearch = '&t=' + $userInput;
								var $searchQuery = $url + $titleSearch;

								var $card = $(".card");
								var $populateCard = "";

								$.ajax({
									type:'GET',
									url: $searchQuery,
									dataType: "json",
									success: function (result) {
										console.log(result);

										$populateCard += "<div class='card-horizontal'>";
											$populateCard += "<div class='img-square-wrapper'>";
												$populateCard += "<img src=" + result.Poster + ">";
											$populateCard += "</div>";
											$populateCard += "<div class='card-body'>";
												$populateCard += "<h4 class='card-title'>" + result.Title + "</h4>";
												$populateCard += "<p class='card-text'>" + result.Plot + "</p>";
												$populateCard += "<a href='create.php?imdb_id=" + result.imdbID + "' class='btn btn-primary'>View</input>";
											$populateCard += "</div>";
										$populateCard += "</div>";

										$card.html($populateCard);
									}
								});
							});
						</script>
					</div> <!-- end of card -->
				</form>
			</div> <!-- end of col-12 -->
		</div> <!-- end of container -->



		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

		<!-- API goes through this script -->
		<!-- <script src="js/script.js"></script> -->
	</body>
</html>
