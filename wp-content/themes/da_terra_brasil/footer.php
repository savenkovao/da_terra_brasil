		<footer>
			<div class="footer">
				<div class="wrapper">
					<div class="footer-cnt">
						<a href="#">
							<div class="footer-logo"></div>
						</a>
						<div class="footet-txt">
							<span class="footet-txt_apper footer-txt__pol"><a href="#">Privacy Policy</a></span>
							<span class="footet-txt_apper footer-txt__copy">© Copyright daterrabrasil.com</span>
							<span class="footet-txt_apper footer-txt__rights">All Rights Reserved</span>
							<span id="footer-txt__year" class="footet-txt_apper footer-txt__year">2015</span>
						</div>
					</div>
				</div>
			</div>
		</footer>

		

		<script>

			function initMap() {
				var place = {lat: 40.770590, lng: -73.957675};
				var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 16,
					center: place
				});

				var contentString = '<h1>Da Terra Brasil Foundation</h2><p>The Da Terra Brasil Foundation is a nonprofit organization dedicated to supporting and improving the lives of poor and disabled in Brazil. The Foundation focuses on two initiatives: Lar Dos Velhinhos, a facility that provides a safe haven for the elderly, the sick, and the poor in the city of Piranga, and Brasil on Wheels, whose goal is to distribute wheelchairs to the thousands of disabled people across Brazil – many of them homebound – who cannot afford them.</p><p><strong>Adress</strong>: New York, 255 E 74ths St # 12 A / corner of 2nd</p><p><strong>Contact</strong>: info@daterrabrasil.org</p>';

				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});

				var marker = new google.maps.Marker({
					position: place,
					map: map,
					title: 'Da Terra Brasil Foundation'
				});

				marker.addListener('click', function() {
					infowindow.open(map, marker);
				});
			}
		</script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjSGuoRX0kWSZyLiKWA4kgUw0PjDw6Ub8&callback=initMap" async defer></script>

		
	</body>
	<?php	wp_footer(); ?>
	
</html>