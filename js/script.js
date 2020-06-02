$(document).ready(function(){

    $("#searchBtn").click(function() {
        // location.href = "results.php";

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
						$populateCard += "<input type='submit' class='btn btn-primary' value='Save'></input>";
					$populateCard += "</div>";
				$populateCard += "</div>";

				$card.html($populateCard);
			}
		});
    });
});
