$(document).ready(function(){
	
	var base_url = window.location.origin;
	var post_url_localhost = base_url+"/Library_management/index.php/Landing_page/return_details";
	var post_url_openshift = base_url+"/index.php/Landing_page/return_details";
	
	$("#signupform").submit(function(){
		var book_number=$("#Book_number").val();
		var current_url = String(window.location.href);
		var index = current_url.indexOf("return1/");
		var uuid = current_url.substr(index+8)
		console.log(uuid);
		{
			// Storing SignUp details in signup credentials.
			var return_credentials = {"book_number":book_number,"uuid":uuid};
			console.log("making ajax call...",return_credentials);

		// Sending SignUp credentials to the server through ajax call.

				$.ajax({
    		    url: post_url_localhost, 
        		type: 'POST',
        		data: return_credentials,
        		dataType: 'json',			    

			    //Receiving SignUp result from the server. 
			    success : function(return_result){
			    	console.log(return_result);
			    	if(return_result.success == 1 ){
				    	console.log("successfully returned!!!!!!!!!!!!!!");
				    	alert("successfully returned!!");
						window.open("http://localhost/Library_management/index.php/Landing_page/selected_student/"+uuid,"_self");

				    	// window.open("issue_return_status/"+uuid,"_self");
				    }
				    else {
				    	alert("Book doesn't exist!!!");
				    }
			    	
			    },
			    error : function(){
			        console.log("return Call failed !!!")
			    }
			});
			// document.getElementById("error_msg").style.display='none';
		}
		// if create password and confirm password doesn't match, error message displayed
		
		event.preventDefault();
	});
});