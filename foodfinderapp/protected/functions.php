<?php
//get latitude and longitude in a array using postal code
function getLocation($postalCode, $googleKey){
  $json = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=.' . $postalCode . '&key='. $googleKey);
  $json = json_decode($json);
  if (isset($json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'}) && $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'}){
      $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
      $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
  } else {
      $lat = 0;
      $long = 0;
  }


  return array($lat, $long);
}

//get carpark lot live number
function getLots($locateRow, $key){
  $carparkLotsJson = "http://datamall2.mytransport.sg/ltaodataservice/CarParkAvailabilityv2";
  $ch = curl_init( $carparkLotsJson );
  $options = array(
    CURLOPT_HTTPHEADER => array( "AccountKey: ". $key . ", Accept: application/json" ),
  );
  curl_setopt_array( $ch, $options );
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  $carparkJsonResult = curl_exec( $ch );
  $carparkJsonResult = json_decode($carparkJsonResult);
  return ($carparkJsonResult->{'value'}[$locateRow["carparkId"]-1]->{'AvailableLots'});
  //return (rand(0,10));
}

?>
