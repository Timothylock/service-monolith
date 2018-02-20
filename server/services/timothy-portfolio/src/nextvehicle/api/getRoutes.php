<?php
$agency = $_GET['agency'];

if (isset($agency)){
	$xml = simplexml_load_file('http://webservices.nextbus.com/service/publicXMLFeed?command=routeList&a=' . $agency);
 
	$routesArray = array();

	foreach($xml->route as $route){
		$routesArray[] = array('tag' => $route['tag'], 'title' => $route['title']);
	}

	header('Content-Type: application/json');
	echo(json_encode($routesArray));
}else{
	echo 'no agency specified';
}

?>