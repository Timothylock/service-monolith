<?php
$agency = $_GET['agency'];
$route = $_GET['route'];

if (isset($agency)){
	$xml = simplexml_load_file('http://webservices.nextbus.com/service/publicXMLFeed?command=routeConfig&a=' . $agency . '&r=' . $route);
	$stopsArray = array();

	foreach($xml->route->stop as $stop){
		$stopsArray[] = array('tag' => $stop['tag'], 'title' => $stop['title']);
	}

	header('Content-Type: application/json');
	echo(json_encode($stopsArray));
}else{
	echo 'Missing either agency and/or route';
}

?>