var Contact = function () {
    return {
        //Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat: 23.8900741,
				lng: 90.3689249
			  });
			   var marker = map.addMarker({
                   lat: 23.8900741,
                   lng: 90.3689249,
		            title: 'Loop, Inc.'
		        });
			});
        }

    };
}();