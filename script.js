$(document).ready(function(){
    var url = 'http://www.omdbapi.com/?apikey=e836f52a';
    var userInput, titleSearch;

    $("#searchBtn").click(function() {
        userInput = $("#input").val();
        titleSearch = '&t=' + userInput;

        $.ajax({
            url: url + titleSearch,
            contentType: "application/json",
            dataType: 'jsonp',
            success: function(result){
                $("#title").text(result.Title);
                $("#poster").attr("src",result.Poster);
                $("#year").text(result.Year);
                $("#released").text(result.Released);
                $("#genre").text(result.Genre);
                $("#plot").text(result.Plot);
            }
        })
    });
});