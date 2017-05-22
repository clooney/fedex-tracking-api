<?php

include("track.class.php");
$track = new Trackingmore;
$page = 1;
$limit = 50;
$createdAtMin = time() - 7*24*60*60;
$createdAtMax = time();
$track = $track->getTrackingsList($page,$limit,$createdAtMin,$createdAtMax);
?>