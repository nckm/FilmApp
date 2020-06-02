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
		<?php
		// get imdb-id and display all details
            $imdbID = isset($_GET['imdb_id']) ? $_GET['imdb_id'] : die('ERROR: GET variable not found.');
        ?>


		<div class="container mt-5">
			<div class="jumbotron">
				<h1><i class="fas fa-film"></i> View Film</h1>
			</div>
			<div class="col-12 mt-3">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<div class="card">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <img src="" id="poster" name="poster">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title" name="title"></h4>
                                <p class="card-text">
                                    <div id="year"></div>
                                    <div id="rated"></div>
                                    <div id="released"></div>
                                    <div id="runtime"></div>
                                    <div id="genre"></div>
                                    <div id="director"></div>
                                    <div id="writer"></div>
                                    <div id="actors"></div>
                                    <div id="plot"></div>
                                    <div id="awards"></div>
                                    <div id="metascore"></div>
                                    <div id="imdb-rating"></div>
                                    <div id="imdb-votes"></div>
                                </p>
                                <a href="index.php" class="btn btn-primary">Back to search</a>
                            </div>
                        </div>
					</div> <!-- end of card -->
				</form>
			</div> <!-- end of col-12 -->
		</div> <!-- end of container -->

        <script>
            var $api = 'd9f6a907';
            var $url = 'http://www.omdbapi.com/?apikey=' + $api;

            var $imdbID = "<?php echo $imdbID; ?>";

            console.log("imdbID: " + $imdbID);

            var $searchQuery = $url + "&i=" + $imdbID + "&plot=full";

            var $poster = $("#poster")
            var $year = $("#year");
            var $rated = $("#rated");
            var $released = $("#released");
            var $runtime = $("#runtime");
            var $genre = $("#genre");
            var $director = $("#director");
            var $writer = $("#writer");
            var $actors = $("#actors");
            var $plot = $("#plot");
            var $awards = $("#awards");
            var $metascore = $("#metascore");
            var $imdbRating = $("#imdb-rating");
            var $imdbVotes = $("#imdb-votes");

            $.ajax({
                type:'GET',
                url: $searchQuery,
                dataType: "json",
                success: function (result) {
                    $poster.attr("src", result.Poster);
                    $year.html(result.Year);
                    $rated.html(result.Rated);
                    $released.html(result.Released);
                    $runtime.html(result.Runtime);
                    $genre.html(result.Genre);
                    $director.html(result.Director);
                    $writer.html(result.Writer);
                    $actors.html(result.Actors);
                    $plot.html(result.Plot);
                    $awards.html(result.Awards);
                    $metascore.html(result.Metascore);
                    $imdbRating.html(result.imdbRating);
                    $imdbVotes.html(result.imdbVotes);
                }
            });
        </script>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	</body>
</html>
