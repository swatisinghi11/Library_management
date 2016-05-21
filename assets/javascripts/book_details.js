$(document).ready(function(){
	
	var base_url = window.location.origin;
	var post_url_localhost = base_url+"/Library_management/index.php/Landing_page/book_details_submit";
	var post_url_openshift = base_url+"/index.php/Landing_page/user_data_submit";
	
	$("#signupform").submit(function(){
		var book_number=$("#Book_number").val();
		var book_name=$('#Book_name').val();
		var book_author = $('#Books_author').val();
		var publication=$("#Publication").val();
		{
			// Storing SignUp details in signup credentials.
			var book_credentials = {"book_number":book_number,"book_name":book_name,"book_author":book_author,"publication":publication};
			console.log("making ajax call...",book_credentials);

		// Sending SignUp credentials to the server through ajax call.

				$.ajax({
    		    url: post_url_localhost, 
        		type: 'POST',
        		data: book_credentials,
        		// dataType: 'json',			    

			    //Receiving SignUp result from the server. 
			    success : function(signup_result){
			    	console.log(signup_result);
			    	// window.open("","_self");
			  //       if(signup_result.success==1 && signup_result.lawyer == '1')
					// {
					// 	window.open("/success_lawyer?id="+signup_result.uuid,"_self");
					// }
					// else if(signup_result.success==1 && signup_result.lawyer == '0')
					// {
					// 	window.open("/success_user","_self");
					// }
			    },
			    error : function(){
			        console.log("Signup Call failed !!!")
			    }
			});
			// document.getElementById("error_msg").style.display='none';
		}
		// if create password and confirm password doesn't match, error message displayed
		
		event.preventDefault();
	});
});