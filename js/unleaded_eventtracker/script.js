(function($) {
	function success() {
		console.log('Event logged');
	}
	window.EventTracker = {
		log: function(message) {
			$.ajax({
				url: '/utracker/log',
				data: {message: message},
				success: success
			});
		}
	};
}(jQuery));