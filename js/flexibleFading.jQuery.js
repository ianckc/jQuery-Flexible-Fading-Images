(function($){
	
	$.fn.flexibleFading = function(options) {

		// Set the defaults
		var defaults = {
			timeBetweenSlide	:	2500,
			transitionTime		:	2000
		},
		// Merge the user options
		settings = $.extend({}, defaults, options);

		  this.each(function() {
			  
		  	var $this = $(this);

			// Remove styling from list elements
		  	var listStyling = {'margin':0, 'padding':0, 'list-style-type':'none'};
		  	$this.children('ul').css(listStyling).children('li').css(listStyling);

			// Set the gallery div to position relative
			$this.css({'position':'relative'});

			// Set the li to position absolute and position in the top left
			$this.find('li').css({'position':'absolute', 'top':0, 'left':0, 'width':'100%'});

			// Set the gallery height to be the same as the li
			$this.height($this.find('img:first-child').height());
			
			$this.find('img:first-child').load(function() {
				//console.log('First child image loaded');
				$this.height($this.find('img:first-child').height());
			});
			
			//console.log($this.find('img:first-child').height());

			// When the window resizes update the gallery height to match the li height
			$(window).resize(function() {

				$this.height($this.find('li').height());

			});

			// Set the variables for current image and number of images
			var currentImage	= 1;
			var numberOfImages	= $this.find('img').length;

			// Hide all of the lis
			$this.find('li').hide();

			// Show the first image
			$this.find('li:first-child').show();

			// Function to fade a li out
			function liFadeOut() {

				liFadeIn();

				$this.find('li:nth-child(' + currentImage + ')').fadeOut(settings.transitionTime, function(){
					
					if(currentImage === numberOfImages) {
						currentImage = 1;
					} else {
						currentImage++;
					}
					
				});

			}

			// Function to fade a li in
			function liFadeIn() {
				
				var nextImage;
				
				if((currentImage + 1) > numberOfImages) {
					nextImage = 1;
				} else {
					nextImage = (currentImage + 1);
				}

				$this.find('li:nth-child(' + nextImage + ')').fadeIn(settings.transitionTime, function(){
					
					setTimeout(liFadeOut, settings.timeBetweenSlide);
					
				});

			}
			
			// Start the animations
			fadeInTimeOut = setTimeout(liFadeOut, settings.timeBetweenSlide);
			
		  });
		  // returns the jQuery object to allow for chainability.
		  return this;
	}
})(jQuery);
