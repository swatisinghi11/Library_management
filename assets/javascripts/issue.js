$(document).ready(function(){
	
	var base_url = window.location.origin;
	var post_url_localhost = base_url+"/Library_management/index.php/Landing_page/issue_details";
	var post_url_openshift = base_url+"/index.php/Landing_page/issue_details";
	
	$("#signupform").submit(function(){
		var book_number=$("#Book_number").val();
		var current_url = String(window.location.href);
		var index = current_url.indexOf("issue/");
		var uuid = current_url.substr(index+6)
		console.log(uuid);
		{
			// Storing SignUp details in signup credentials.
			var issue_credentials = {"book_number":book_number,"uuid":uuid};
			console.log("making ajax call...",issue_credentials);

		// Sending SignUp credentials to the server through ajax call.

				$.ajax({
    		    url: post_url_localhost, 
        		type: 'POST',
        		data: issue_credentials,
        		dataType: 'json',			    

			    //Receiving SignUp result from the server. 
			    success : function(issue_result){
			    	console.log(issue_result);
			    	if(issue_result.book_details.success == 1 && issue_result.clg_id_and_uuid.success1==1){
				    	console.log("successfully issued!!!!!!!!!!!!!!");
				    	alert("successfully issued!!");
						window.open("http://localhost/Library_management/index.php/Landing_page/selected_student/"+uuid,"_self");

				    	// window.open("issue_return_status/"+uuid,"_self");
				    }
				    else {
				    	alert("Book doesn't exist!!!");
				    }
			    	
			    },
			    error : function(){
			        console.log("issue Call failed !!!")
			    }
			});
			// document.getElementById("error_msg").style.display='none';
		}
		// if create password and confirm password doesn't match, error message displayed
		
		event.preventDefault();
	});
});