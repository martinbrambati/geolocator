<?php
//	print_r($config);
	//activationURL=http://www.google.com.ar;hashID=asda232adsUISDasd;maxCoordsPerPost=100;maxCoordsReadFromGps=123;postURL=http://www.albacea.com.ar/geo/asd.php;returnHeight=true;updatePositionTime=10;updatePostTime=2344 
	echo "activationURL=".$config['activation_url'].$sep."maxCoordsPerPost=".$config['max_coords_per_post'].$sep."maxCoordsReadFromGps=".$config['max_coords_from_gps'].$sep."postURL=".$config['post_url'].$sep."returnHeight=".$config['return_height'].$sep."updatePositionTime=".$config['update_position_time'].$sep."updateConfigTime=".$config['update_config_time'].$sep."enableLogging=".$config['enable_logging'].$sep."updatePostTime=".$config['update_post_time'];
?>
