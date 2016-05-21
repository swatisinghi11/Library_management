$(document).ready(function(){
	
	var base_url = window.location.origin;
	var post_url_localhost = base_url+"/legistifyphp_github/index.php/Landing_page/user_data_submit";
	var post_url_openshift = base_url+"/index.php/Landing_page/user_data_submit";
	
	$("#signupform").submit(function(){
		var first=$("#first").val();
		var last=$('#second').val();
		var clg_id = $('#clg_id').val();
		var branch=$("#branch").val();
		var year=$("#year").val();
		{
			// Storing SignUp details in signup credentials.
			var student_credentials = {"clg_id":clg_id,"firstname":first,"lastname":last,"branch":branch,"year":year};
			console.log("making ajax call...",student_credentials);

		// Sending SignUp credentials to the server through ajax call.

				$.ajax({
    		    url: post_url_openshift, //////////////////////////////
        		type: 'POST',
        		data: signup_credentials,
        		// dataType: 'json',			    

			    //Receiving SignUp result from the server. 
			    success : function(signup_result){
			    	console.log(signup_result);
			    	window.open("success","_self");
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
			document.getElementById("error_msg").style.display='none';
		}
		// if create password and confirm password doesn't match, error message displayed
		else
		{
			document.getElementById("error_msg").style.display='block';
		}
		event.preventDefault();
	});
});