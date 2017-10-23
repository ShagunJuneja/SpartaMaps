<?php
	session_start();
	if(isset($_SESSION['userid'])) {
		$userid = $_SESSION['userid'];
	} elseif (isset($_COOKIE['userid'])) {
		$userid = $_COOKIE['userid'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>EON Maps</title>
	<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
	<style>
		body {
			margin: 0;
			padding: 0;
		}
		#map {
			position:absolute;
			top:0;
			bottom:0;
			width:100%;
		}
	</style>

	<script type="text/javascript" src="https://pubnub.github.io/eon/v/eon/0.0.9/eon.js"></script>
	<link type="text/css" rel="stylesheet" href="https://pubnub.github.io/eon/v/eon/0.0.9/eon.css"/>

</head>
<body>
	<input type="button" value="test" onclick="sendMessage()">
	<div id='map'></div>

	<script type="text/javascript">

		L.RotatedMarker = L.Marker.extend({
		    options: { angle: 0 },
		    _setPos: function(pos) {
		      L.Marker.prototype._setPos.call(this, pos);
		      if (L.DomUtil.TRANSFORM) {
		        // use the CSS transform rule if available
		        this._icon.style[L.DomUtil.TRANSFORM] += ' rotate(' + this.options.angle + 'deg)';
		      } else if (L.Browser.ie) {
		        // fallback for IE6, IE7, IE8
		        var rad = this.options.angle * L.LatLng.DEG_TO_RAD,
		        costheta = Math.cos(rad),
		        sintheta = Math.sin(rad);
		        this._icon.style.filter += ' progid:DXImageTransform.Microsoft.Matrix(sizingMethod=\'auto expand\', M11=' +
		          costheta + ', M12=' + (-sintheta) + ', M21=' + sintheta + ', M22=' + costheta + ')';
		      }

		    }
		});

		var pn = PUBNUB.init({
			publish_key: 'pub-c-aa1b5efc-df3c-4e26-8333-a57d47cad088',
			subscribe_key: 'sub-c-987233e4-0c5c-11e6-a6dc-02ee2ddab7fe',
	    	ssl: (('https:' == document.location.protocol) ? true : false)
		});

		function getNonZeroRandomNumber(){
			var random = Math.floor(Math.random()*199) - 99;
			if(random==0) return getNonZeroRandomNumber();
			return random;
		}

		var channel = 'pubnub-mapbox-spartamaps';
		console.log(channel);

		var map = eon.map({
			pubnub: pn,
			id: 'map',
			mb_id: 'sanjeedha91.ppfgbmno',
			mb_token: 'pk.eyJ1Ijoic2FuamVlZGhhOTEiLCJhIjoiY2luZGx4aGp1MHgydHVva3FnNTJjZWE0aSJ9.r1Ko3FaTUse9WZartLO7kQ',
			channel: channel,
			connect: connect,
			message: function (data) {
				//map.setView(data[0].latlng, 15);
			},
			marker: function (latlng, data) {
				var marker = new L.RotatedMarker(latlng, {
					icon: L.icon({
						iconUrl: 'https://cdn4.iconfinder.com/data/icons/standard-free-icons/139/Profile01-512.png',
						iconSize: [50, 50]
					})
				});

				marker.bindPopup('Name ' + data["name"].toUpperCase());

				return marker;

			}
		});

		function connect() {

			setInterval(function(){
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(function(position) {

						var latitude = position.coords.latitude;
						var longitude = position.coords.longitude;
						var userid = "<?php echo $userid; ?>";
						console.log(userid);

						if (latitude.toString().length > 0 & longitude.toString().length > 0) {
							pn.publish({
								channel:  channel,
								message:
								[
									{"latlng":[latitude , longitude], "data": {"name": "<a href='username.html'>" + userid + "</a>"}},
								]
							});

						}
					});
				}

			}, 1000);

		};

	</script>


</body>
</html>