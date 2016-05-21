$(document).ready(function(){
	console.log("sign in page loaded");
	var base_url = window.location.origin;
	var post_url_localhost = base_url+"/Library_management/index.php/Landing_page/authentication";
	// var post_url_openshift = base_url+"/index.php/Landing_page/authentication";
	
	$("#signinform").submit(function(){
		var username=$("#username").val();
		var password=$("#password").val();
		var checkbox = document.getElementById('remember').checked;
	// Storing signIn data in signIn credentials.
		var signin_credentials = {username:username,password:password,remember:checkbox};

		$.ajax({
			    type: 'POST',
			    url: post_url_localhost,
			    data: signin_credentials,
			    dataType: "json",


			    success : function(signin_result){
			    	console.log(signin_result);
			    	console.log(signin_result.success);

			    	// var uuid=signin_result.uuid;
			    	if(signin_result.success == 1){
				    	console.log("successfully signed in!!!!!!!!!!!!!!");
				    	window.open("librarian","_self");
				    }
				    else if(signin_result.success == 0){
				    	alert("Incorrect password!!!");
				    }
				    else{
				    	alert("Incorrect username !!!")
				    }
			    },
			    error : function(){
			        console.log("Signin Call failed !!!")
			    }
			});
		event.preventDefault();









		// if(username==="jecrc@lib")
		// {
		// 	console.log("hey");
		// 	if(password==="123")
		// 	{
		// 		console.log("i am");
		// 		$("#button").bind("click", function(){
		// 			window.open("Landing_page/librarian","_self");					
		// 		});
		// 	}
		// 	else
		// 	{
		// 		alert("Incorrect Password !!!");
		// 	}
		// }
		// else
		// {
		// 	alert("Incorrect Username !!!");
		// }
	});

});