$(document).ready(function(){

    $("#searchBtn").click(function() {
    	var $url = 'https://imdb-api.com/en/API/Search/k_38m4Ahun';

		console.log("stored url: " + $url);

		var $userInput = $("#input").val();
        var $titleSearch = '/' + $userInput;
		var $searchQuery = $url + $titleSearch;

		console.log("search query: " + $searchQuery);

		// window.location.href = 'results.php';

		console.log("variables made it to results page: " + $searchQuery);

		// var $settings = {
		// 	"url": $searchQuery,
		// 	"method": "GET",
		// 	"timeout": 0
		// };

		$.ajax({
			type:'GET',
			url: $searchQuery,
			dataType: "json",
			success: function (result) {
				$.each(result.results, function(index, value) {
					console.log(index + value.title);

					$(".card-container").html("hello" + index);

					// card[index];
					// card[index] += "<div class='card'>";
					// card[index] += "<img class='card-img-top' src='" + value.image + "'>";
					// card[index] += "<div class='card-body'>";
					// card[index] += "<h5 class='card-title'>" + value.title + "</h5>";
					// card[index] += "<p class='card-text'>" + value.description + "</p>";
					// card[index] += "<a href='#' class='btn btn-primary mr-1'>Save to watchlist</a>";
					// card[index] += "<a href='#' class='btn btn-primary'>Save to seen list</a>";
					// card[index] += "</div>";
					// card[index] += "</div>";
					//
					// $(".card-container").html(card[index]);
				});
			}
		});

		// $.ajax($settings).done(function (response) {
		// 	$.each(response.results, function (index, value) {
		// 		console.log(value.title);
		// 		var $card;
		//
		// 		$card += "<div class='card'>";
		// 		$card += "<img class='card-img-top' src='" + value.image + "'>";
		// 		$card += "<div class='card-body'>";
		// 		$card += "<h5 class='card-title'>" + value.title + "</h5>";
		// 		$card += "<p class='card-text'>" + value.desciption + "</p>";
		// 		$card += "<a href='#' class='btn btn-primary'>Save to watchlist</a>";
		// 		$card += "<a href='#' class='btn btn-primary'>Save to seen list</a>";
		// 		$card += "</div>";
		// 		$card += "</div>";
		//
		// 		$(".card-container").html($card);
		// 	})
		// });
    });
});
