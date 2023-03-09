$(document).ready(function() {
	$.ajax({
		url: "http://localhost/ajax_php/api.php",
		type: "GET",
		dataType: "json",
		success: function(news) {
			for (var i = 0; i < news.length; i++) {
				var newsItem = $("<div>").addClass("news-item");
				var newsTitle = $("<h2>").text(news[i].title);
				var newsContent = $("<p>").text(news[i].content);
				newsItem.append(newsTitle, newsContent);
				$("#news-container").append(newsItem);
			}
		}

	});
});
