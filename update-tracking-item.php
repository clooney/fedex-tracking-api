<?php

include("track.class.php");
$track = new Trackingmore;
$extraInfo['title']          = 'iphone6';
$extraInfo['customer_name']  = 'charse chen';
$extraInfo['customer_email'] = 'chasechen@gmail.com';
$extraInfo['order_id']       = '8988787987';
$track = $track->updateTrackingItem('fedex','9261299991154832961022',$extraInfo);

?>