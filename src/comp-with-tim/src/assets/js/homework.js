function populatePage(){
	$.ajax({
      url: 'http://computerswithtim.ml:8080/getNotes',
      type: 'GET',
      success: function(response) {
      	response = jQuery.parseJSON(response);

      	// Put out message if no classes
      	if (response.length == 0){
            $('#class-data').removeClass('container');
            $('#class-data').html("<center><div class='mt-1'><h1>Thank You!</h1><img src='http://timothylock.ca/assets/images/thankyou.jpg' alt='thankyou' style='display: block; max-width: 80%; padding-top: 0px; margin-left: auto; margin-right: auto;z-index: 0;'><br><p>Thank you so much for being part of my class! Are you up for a challenge? If so, check out some <a href='http://www.logicfusion.ca/courses/'>other courses</a>. Hope to see you again soon! :)<br><br><h2>But I still have homework! Where did the homework uploader go?</h2><p>Homework upload has been disabled. It is too late to submit homework. Do not email it to me either as it will not be marked.</p><br></div></center>");
      	}else{
      		// Calculate how many rows we need
	      	rows = Math.ceil(response.length / 3);
	      	remain = (response.length % 3);

	      	// Put them out
	        $('#class-data').html('<div class="row" style="padding-bottom: 50px;">');
	        let count = 0;
	        for (let r=1; r <= rows; r++){
	        	$('#class-data').append('<div class="row" style="padding-bottom: 50px;">');

	        	// If the row is supposed to be all filled, fill them all
	        	if (r <= rows){
	        		for (let c=1; c <= 3; c++){
		        		$('#class-data').append('<div class="col-sm-4"><h4>' + response[count] + '</h4><p id="' + response[count] + '"><p></div>');
		        		populateClass(response[count]);
		        		count ++;
		        	}
	        	}else{  // else, fill only to remainder
	        		for (let c=1; c <= remain; c++){
		        		$('#class-data').append('<div class="col-sm-4"><h4>' + response[count] + '</h4><p id="' + response[count] + '"><p></div>');
		        		populateClass(response[count]);
		        		count ++;
		        	}
	        	}
	        	$('#class-data').append('</div>');
	        }
	        $('#class-data').append('</div>');
      	}
      },
      error: function() {
        alert("Failed to retrieve data from the server. Email me!");
      }
  });
}

function populateClass(course){
	$.ajax({
      url: 'http://computerswithtim.ml:8080/getNotes?directory=' + course,
      type: 'GET',
      success: function(response) {
      	response = jQuery.parseJSON(response);
        
        // Either custom message for no files or list files
        if(response.length == 0){
        	toreturn = "No files for this class (yet)!";
        }else{
        	toreturn = "<ul>";
        	for (item in response){
            if (response[item] != ".htaccess"){
              toreturn += "<li><a href='/notes/" + course + "/" + response[item] + "'>" + response[item] + "</a></li>";
            }
	        }
	        toreturn += "</ul>";
        }

        $("#" + course).html(toreturn);
      },
      error: function() {
        alert("Failed to retrieve data from the server. Email me!");
      }
  });
}