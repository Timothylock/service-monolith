<?php
$agency = $_GET['agency'];
$route = $_GET['route'];
$stop = $_GET['stop'];
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

function str_pad_left(string,pad,length) {
    return (new Array(length+1).join(pad)+string).slice(-length);
}

$(document).ready(function(){
	// When the Agency has been selected/ Changed 
    $(".agency").change(function(){
        $("#routes").empty(); // Empty the routes list

        // Obtain selected agency
        var agency = $(".agency").find(':selected').attr('value');

        var routesJSON = (function () {
		    var json = null;
		    $.ajax({
		        'async': false,
		        'global': false,
		        'url': 'api/getRoutes.php?agency=' + agency,
		        'dataType': "json",
		        'success': function (data) {
		            json = data;
		        }
		    });
		    return json;
		})();

		// Convert JSON to dropdown menu
		$.each(routesJSON, function(i, option) {
        	$('#routes').append($('<option/>').attr("value", option.tag[0]).text(option.title[0]));
    	}); 
    });

    // When the Route has been selected/ Changed 
    $("#routes").change(function(){
        $("#stops").empty(); // Empty the stops list

        // Obtain selected agency
        var route = $("#routes").find(':selected').attr('value');
        var agency = $(".agency").find(':selected').attr('value');

        var stopsJSON = (function () {
		    var json = null;
		    $.ajax({
		        'async': false,
		        'global': false,
		        'url': 'api/getStops.php?agency=' + agency + '&route=' + route,
		        'dataType': "json",
		        'success': function (data) {
		            json = data;
		        }
		    });
		    return json;
		})();

		// Convert JSON to dropdown menu
		$.each(stopsJSON, function(i, option) {
        	$('#stops').append($('<option/>').attr("value", option.tag[0]).text(option.title[0]));
    	}); 
    });


    // When the Route has been selected/ Changed 
    $("#stops").change(function(){

        // Obtain selected agency
        var route = $("#routes").find(':selected').attr('value');
        var agency = $(".agency").find(':selected').attr('value');
        var stop = $("#stops").find(':selected').attr('value');

        var predictionsJSON = (function () {
		    var json = null;
		    $.ajax({
		        'async': false,
		        'global': false,
		        'url': 'api/getPredictions.php?agency=' + agency + '&route=' + route + '&stop=' + stop,
		        'dataType': "json",
		        'success': function (data) {
		            json = data;
		        }
		    });
		    return json;
		})();

		console.log('api/getPredictions.php?agency=' + agency + '&route=' + route + '&stop=' + stop);

		// Find data table and prepare to populate
		var currRow = 1;
		var table = document.getElementById("etaTable");
		while(table.rows.length > 1) {  // Clear table except for header
		  table.deleteRow(1);
		}

		// Convert JSON to dropdown menu
		$.each(predictionsJSON, function(i, option) {

			// Create date object from seconds
			var t = new Date(0, 0, 0); // Epoch
    		t.setSeconds(option.seconds[0]);

			// Insert into table
	        var row = table.insertRow(currRow);
		    var cell1 = row.insertCell(0);
		    var cell2 = row.insertCell(1);
		    cell1.innerHTML = option.dirTag[0];
		    cell2.innerHTML = str_pad_left(Math.floor(option.seconds[0]/60),'0',2)+':'+str_pad_left(option.seconds[0]%60,'0',2);
		    option.seconds[0] = option.seconds[0] - 1;

		    // Update Every Second
		    setInterval(function(){
			    if(option.seconds[0] <= -30){
			    	cell2.innerHTML = "Departed";
			    }else if(option.seconds[0] <= 0){
			    	cell2.innerHTML = "Arriving";
			    }else{
			    	cell2.innerHTML = str_pad_left(Math.floor(option.seconds[0]/60),'0',2)+':'+str_pad_left(option.seconds[0]%60,'0',2);
			    }
			    option.seconds[0] = option.seconds[0] - 1;
			  }, 1000);
		    currRow ++;
    	}); 
    });

	
});
</script>
</head>
<body>

<p>Next Vehicle</p>

Agency:
<select class="agency" name="cars">
<?php include 'api/getAgencies.php';?>
</select>

<br>
<br>

Route:
<select id="routes">
<option>Please select an agency first</option>
</select>

<br>
<br>

Stop:
<select id="stops">
<option>Please select a route first</option>
</select>

<br>
<br>

<table id="etaTable" border=1>
  <tr>
    <th><b>Vehicle Details</b></th>
    <th><b>Arrival (minutes:seconds)</b></th>
  </tr>
</table>
<br>

</body>
</html>
