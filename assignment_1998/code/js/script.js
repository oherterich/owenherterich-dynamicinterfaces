window.onload = function() {
	var me = document.getElementsByClassName("me");

	for (var i = 0; i < me.length; i++) {
		var picture = me.item(i);

		picture.addEventListener('click', function( evt ) {
			var link = this.src;
			var text = this.alt;

			window.open(link, "", "width=400, height=300");
		});
	}
}


