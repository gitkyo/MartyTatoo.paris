jQuery( document ).ready(function($) {

	var expandCurrentMenuItem = function(){

		var currentItem = $('nav li.current-menu-item');
		var parentsCurrentItem = currentItem.parents('.sub-menu');

		// Si 1er niveau existe, expand menu with trigger click event
		if(parentsCurrentItem[0] !== undefined) {

			setTimeout(function(){

				$(parentsCurrentItem[0]).prev().trigger('click');

				// Si 2eme niveau existe, expand menu with trigger click event
				if(parentsCurrentItem[1] !== undefined) $(parentsCurrentItem[1]).prev().trigger('click');

			}, 2000);


		}


	};

	window.init = function() {
		expandCurrentMenuItem();
	}

	init(); // true
});