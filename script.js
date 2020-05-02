$(document).ready(function(){
    var url = 'https://imdb-api.com/en/API/Search/k_38m4Ahun';
    var userInput, titleSearch;

    $("#searchBtn").click(function() {
        location.href = "results.html";

        userInput = $("#input").val();
        titleSearch = '/' + userInput;

        $.ajax({
            url: url + titleSearch,
            contentType: "application/json",
            dataType: 'jsonp',
            success: function(){
                
            }
        })
    });
});