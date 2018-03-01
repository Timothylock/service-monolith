function populateForm(){
	$.ajax({
      url: 'http://computerswithtim.ml:8080/getNotes',
      type: 'GET',
      success: function(response) {
      	response = jQuery.parseJSON(response);
        
        // Either custom message for no files or list files
        if(response.length == 0){
        	$('#content').removeClass('container');
        	$('#content').html("<center><div class='mt-1'><h1>Thank You!</h1><img src='http://timothylock.ca/assets/images/thankyou.jpg' alt='thankyou' style='display: block; max-width: 80%; padding-top: 0px; margin-left: auto; margin-right: auto;z-index: 0;'><br><p>Thank you so much for being part of my class! Are you up for a challenge? If so, check out some <a href='http://www.logicfusion.ca/courses/'>other courses</a>. Hope to see you again soon! :)<br><br><h2>But I still have homework! Where did the homework uploader go?</h2><p>Homework upload has been disabled. It is too late to submit homework. Do not email it to me either as it will not be marked.</p><br></div></center>");
        }else{
        	toreturn ='<form enctype="multipart/form-data" action="http://homework2tim.tk:8080/upload" method="post"><p><b>Name:</b></p><input type="text" name="name"><br><br><p><b>Class:</b></p><select name="classes">';
        	for (item in response){
	        	toreturn += "<option value=\"" + response[item] + "\">" + response[item] + "</option>";
	        }
	        toreturn += '</select><br><br><p><b>Homework:</b></p><select name="homework"><option value="homework1">Homework 1</option><option value="homework2">Homework 2</option><option value="homework3">Homework 3</option><option value="homework4">Homework 4</option><option value="homework5">Homework 5</option><option value="homework6">Homework 6</option><option value="test">Test</option></select><br><br><p><b>File:</b></p><input type="file" name="uploadfile" /><input type="hidden" name="token" value="{{.}}"/><input type="submit" value="upload" /></form>';
        }

        $("#form").html(toreturn);
      },
      error: function() {
        alert("Failed to retrieve data from the server. Email me!");
      }
  });
}