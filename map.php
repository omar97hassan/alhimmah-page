<?php
include ("php/veryfirst.php");
/**
 * Created by PhpStorm.
 * User: Hasak
 * Date: 27.02.2017.
 * Time: 22:12
 */
echo'<!DOCTYPE html>

<html lang="en">
<head>
  <title>'.$karta[$l].' - '.$ata[$l].'</title>

  ';
include ("php/head.php");
echo"

</head>

<body>

";
include("php/first.php");
echo'


<div id="map" class="col-xs-12 onogore" style="height: 600px; margin-top: -20px;"></div>

<div class="dugmad">
	<ul>
		<li><button class="btn btn-primary pois mapBtnSectionHead">POIs</button></li>
		<li><div class="panel panel-primary poisList mapBtnSection">
			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="" class="poisHide"> Hide all POIs</li>
				</ul>
			</div>
		</div></li>
		<li><button class="btn btn-danger accomodation hidden mapBtnSectionHead">Accomodation</button></li>
		<li><div class="panel panel-danger accomodationList hidden mapBtnSection">
			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="" class="accomodationHide"> Hide all accomodations<br></li>
				</ul>
			</div>
		</div></li>
		<li><button class="btn btn-success trips mapBtnSectionHead">Trips</button></li>
		<li><div class="panel panel-success tripsList mapBtnSection">
			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="" class="tripsHide"> Hide all trips</li>
				</ul>
			</div>
		</div></li>
	</ul>
</div>

<script src="/js/map.js"></script>

';
include("php/last.php");
echo'

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkR4wkN5O_MEM6_gGwuXDsefof6C8HGhs&callback=initMap"></script>
</body>

</html>

';


?>