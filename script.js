$(document).ready(function(){

    $("#searchBtn").click(function() {
        // location.href = "results.php";

		var $api = 'd9f6a907';
		var $url = 'http://www.omdbapi.com/?apikey=' + $api;

		var $userInput = $("#input").val();
        var $titleSearch = '&t=' + $userInput;
		var $searchQuery = $url + $titleSearch;

		var $poster = $(".img-square-wrapper > img");

		var $title = $(".card-title");
		// var $year = $("#year");
		// var $rated = $("#rated");
		// var $released = $("#released");
		// var $runtime = $("#runtime");
		// var $genre = $("#genre");
		// var $director = $("#director");
		// var $writer = $("#writer");
		// var $actors = $("#actors");
		var $plot = $("#plot");
		// var $language = $("#language");
		// var $country = $("#country");
		// var $awards = $("#awards");
		// var $metascore = $("#metascore");
		// var $imdbRating = $("#imdb-rating");
		// var $imdbVotes = $("#imdb-votes");
		// var $imdbId = $("#imdb-id");
		// var $type = $("#type");
		// var $dvd = $("#dvd");
		// var $boxOffice = $("#boxOffice");
		// var $production = $("#production");
		// var $website = $("#website");


        $.ajax({
			type:'GET',
			url: $searchQuery,
			dataType: "json",
			success: function (result) {
				console.log(result);
				$poster.attr("src", result.Poster);
				$title.html(result.Title);
				// $year.html("Year: " + result.Year);
				// $rated.html("Rated: " + result.Rated);
				// $released.html("Release: " + result.Released);
				// $runtime.html("Runtime: " + result.Runtime);
				// $genre.html("Genre" + result.Genre);
				// $director.html("Director: " + result.Director);
				// $writer.html("Writer: " + result.Writer);
				// $actors.html("Actors: " + result.Actors);
				$plot.html(result.Plot);
				// $language.html("Language: " + result.Language);
				// $country.html("Country: " + result.Country);
				// $awards.html("Awards: " + result.Awards);
				// $metascore.html("Metascore: " + result.Metascore);
				// $imdbRating.html("IMDB Rating: " + result.imdbRating);
				// $imdbVotes.html("IMDB Votes: " + result.imdbVotes);
				// $imdbId.html("IMDB ID: " + result.ImdbId);
				// $type.html("Type: " + result.Type);
				// $dvd.html("DVD: " + result.DVD);
				// $boxOffice.html("Box Office: " + result.BoxOffice);
				// $production.html("Production: " + result.Production);
				// $website.html("Website: " + result.Website);
			}
		});
    });
});
