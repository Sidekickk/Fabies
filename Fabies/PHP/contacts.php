<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrV2-1mURdcYUByFEiV5yjVP9s1lPnWfI&callback=initialize"></script>

<script>
	function initialize() {
		var mapCanvas = document.getElementById('map_canvas');
		var latLng =  new google.maps.LatLng(42.284427, 22.684776);
		var mapOptions = {
			center: latLng,
			zoom: 16,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(mapCanvas, mapOptions)

		var marker = new google.maps.Marker({
			position: latLng,
			map: map,
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);

	$.ajaxPrefilter(function( options, originalOptions, jqXHR ) {
		options.async = true;
	});
</script>

<div id="contactsInfo">
	<div class="textContacts">
		<div class="gsm">Телефон: ...</div>
		<hr class="hrLine">
		<div class="adress">Адрес: ...</div>
		<hr class="hrLine">
		<div class="workingTime">Работно време:
			<ul>
				<li>Понеделник - Петък: 7:00-18:00</li>
				<li>Събота: 9:00-16:00</li>
				<li>Неделя: 9:00-16:00</li>
			</ul>
		</div>
	</div>

	<div id="map_canvas"></div>
</div>



