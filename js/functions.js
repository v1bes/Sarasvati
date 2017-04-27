// Flackern

(function(){

	var toggle = function(element) {
		$("img.off").css({
			"opacity": element ? "1" : "0"
		});
	};

	function el() {
		toggle(Math.random() > .9), setTimeout(el, 400 * Math.random() * .6);
	}

	el();

})();
