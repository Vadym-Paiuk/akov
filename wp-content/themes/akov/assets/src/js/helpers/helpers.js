export default class Helpers {
	static getUrlParameter(name) {
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(location.search);
		return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}


	static selectReinit() {
		$(".create-training-page .select select").niceSelect("destroy");
		$(".create-training-page .select select").niceSelect();
		$(".create-training-page .nice-select").each((index, element) => {
			var maxWidth = 0;
			$(element)
				.find(".list li")
				.each((index, element) => {
					if ($(element).outerWidth() > maxWidth) {
						maxWidth = $(element).outerWidth();
					}
				});
			$(element).outerWidth(maxWidth + 10);
			$(element)
				.find(".list")
				.outerWidth(maxWidth + 10);
		});
	}
}
