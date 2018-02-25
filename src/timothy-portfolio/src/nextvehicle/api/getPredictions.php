<?php
$agency = $_GET['agency'];
$route = $_GET['route'];
$stop = $_GET['stop'];

if (isset($agency)){
	$xml = simplexml_load_file('http://webservices.nextbus.com/service/publicXMLFeed?command=predictions&a=' . $agency . '&r=' . $route . '&s=' . $stop);
	$predictionArray = array();

	foreach($xml->predictions->direction as $direction){

		foreach($direction->prediction as $prediction){
			$predictionArray[] = array('epochTime' => $prediction['epochTime'], 'seconds' => $prediction['seconds'], 'dirTag' => $prediction['dirTag']);

		}
	}

	header('Content-Type: application/json');
	echo(json_encode($predictionArray));
}else{
	echo 'no agency specified';
}

?>