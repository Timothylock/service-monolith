<?php
$xml = simplexml_load_file('http://webservices.nextbus.com/service/publicXMLFeed?command=agencyList');
 
foreach($xml->agency as $agency){
	echo '<option value="' . $agency['tag'] . '">' . $agency['title'] . '</option>' . "\n";
}

?>