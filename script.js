$(document).ready(function(){

    $("#searchBtn").click(function() {
        // location.href = "results.php";

		var $url = 'https://imdb-api.com/en/API/Search/k_38m4Ahun';

		var $userInput = $("#input").val();
        var $titleSearch = '/' + $userInput;
		var $searchQuery = $url + $titleSearch;

		var $settings = {
			"url": $searchQuery,
			"method": "GET",
			"timeout": 0
		};

		$.ajax($settings).done(function (response) {
			$.each(response.results, function (index, value) {
				console.log(value.title);
			})
		});

        // $.ajax({
		// 	type:'GET',
		// 	url: $searchQuery,
		// 	dataType: "json",
		// 	success: function (result) {
		// 		$.each(result.results, function(index, value) {
		//
		// 			console.log(value.title);
		// 		});
		// 	}
		// });
    });
});
